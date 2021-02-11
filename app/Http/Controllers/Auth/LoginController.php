<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
    {
        if (!$user->email) {
            auth()->logout();

            return redirect('/EmailVerification')->with('danger', 'You need to activate your email.');

        }

        elseif(!$user->verified) {

            auth()->logout();

            return redirect('/EmailVerification')->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email and click on the link to verify.');

        }


        return redirect()->intended($this->redirectPath());
    }

    public function username()
    {
        return 'username';
    }
}