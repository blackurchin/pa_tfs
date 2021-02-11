<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Auth;
class HomeController
{
    public function index()
    {
        $userCountry=Auth::user()->country;


        if(Auth::user()->hasRole(['admin'])) {

            $user = User::count();

        }
        else
        $user = User::where('country',$userCountry)->count();

        //Get Country
        $countries = User::with('countries')->select('country')->orderBy('country')->distinct()->get()->count();
//          dd($countries);

        return view('admin.home',compact('user','countries'));
    }
}
