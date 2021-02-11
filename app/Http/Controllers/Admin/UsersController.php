<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use Gate;
use Auth;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Country;
use App\VerifyUser;
use Mail;
use App\Mail\VerifyMail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if($request->user()->hasRole(['admin']))
        {
            $users = User::all();

        }else
            $users = User::where('country', Auth::user()->country)->get();

             $countries = Country::orderBy('name', 'asc')->get();

        return view('admin.users.index', compact('users','countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if(Auth::user()->hasRole(['admin'])) {
         $roles = Role::all()->pluck('title', 'id');

        }else
        $roles = Role::where('title',['participant'])->pluck('title', 'id');

        $country=Auth::user()->country;

        if(Auth::user()->hasRole(['admin'])) {

            $countries = Country::orderBy('name', 'asc')->get();

        }
        else
            $countries = Country::where('name',$country)->get();


        return view('admin.users.create', compact('roles','countries'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => Str::random(32)
        ]);
        $verifyUser->save();

        Mail::to($user->email)->send(new VerifyMail($user));

            $notification = array(
                'message' => 'New participant added..',
                'alert-type' => 'success'
            );

        return redirect()->route('admin.users.index')->with($notification);
    }

        public function edit(User $user)
    {
        $country=Auth::user()->country;

        if(Auth::user()->hasRole(['admin'])) {

            $countries = Country::orderBy('name', 'asc')->get();

        }
        else
            $countries = Country::where('name',$country)->get();


        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if(Auth::user()->hasRole(['admin'])) {
            $roles = Role::all()->pluck('title', 'id');

        }else
            $roles = Role::where('title',['participant'])->pluck('title', 'id');

          $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user','countries'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user=User::find($id);

        $user->delete();

//        dd($user);

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
