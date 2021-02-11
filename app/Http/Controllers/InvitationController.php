<?php

namespace App\Http\Controllers;
use App\Country;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\VerifyUser;
use Auth;
class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function invite($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->par;
                $user->update([
                    'email_verified_at' => Carbon::now()
                ]);
            }

            ////getting Country Code////
//
//             $userCountry = Auth::user()->country;
//             $userCountries = Country::where('name', $userCountry)->get();

//        foreach ($userCountries as $country) {
            //dd($country->code);
            $data =Country::orderby('name')->get();

////           dd($data);
//        }



        return view ('invitation.registration',compact('data'))->with('success', "Your e-mail is already verified. You can now Register.");

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

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
