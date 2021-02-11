<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Mail;
use Illuminate\Support\Str;
class EmailActivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email_activation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function emailActivation(Request $request){

        if ($user_exist=User::where('username', '=',$request->get('username'))->exists()) {

            $user = User::where('username', '=',$request->input('username'))->first();

            //dd($user->id);

            $this->validate($request, [
                'email' => 'required|string|email|max:255|unique:users|confirmed',
            ]);

            $input = $request->all();

            $user->fill($input)->save();

            $verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => Str::random(32)
            ]);


            Mail::to($user->email)->send(new VerifyMail($user));



            return redirect('/EmailVerification')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');

        }
        else{

            return redirect()->back()->with("error","Your username does not match with the username you provided. Please try again.");

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EmailVerification()
    {
        return view('email_activation.email_confirmation');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
