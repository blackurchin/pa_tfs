<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyParticipantRequest;
use App\Http\Requests\StoreParticipantRequest;
use App\Mail\Invitation;
use App\Participant;
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
use Illuminate\Support\Str;
class ParticipantController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $country= Auth::user()->country;
        $countries = Country::orderBy('name', 'asc')->get();
        if(Auth::user()->hasRole(['admin'])) {
            $participants = Participant::all();

        } else
            $participants = Participant::where('country',$country)->get();
        return view('admin.participants.index', compact('participants', 'countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if(Auth::user()->hasRole(['admin'])) {

            $countries = Country::orderBy('name', 'asc')->get();
        } else
            $countries = Country::where('name', Auth::user()->country)->get();


        return view('admin.participants.create', compact('countries'));
    }

    public function store(StoreParticipantRequest $request)
    {
        $user = Participant::create($request->all());
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => Str::random(32)
        ]);


        Mail::to($user->email)->send(new Invitation($user));

        $notification = array(
            'message' => 'Invitation sent..',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.participants.index')->with($notification);
    }
    public function edit(Participant $participants)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.participants.edit', compact( 'participants'));
    }

    public function update(UpdateParticipantRequest $request, Participant $participants)
    {
        $participants->update($request->all());

        return redirect()->route('admin.participants.index');
    }

    public function show(Participant $participants)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.participants.index', compact('participants'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $participants = Participant::find($id);

        $participants->delete();

        return back()->with('delete', 'Deleted successfully!.');

    }

    public function massDestroy(MassDestroyParticipantRequest $request)
    {
        Participant::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
