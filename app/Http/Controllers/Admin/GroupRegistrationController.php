<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Http\Request;
use Gate;

use App\Http\Requests\StoreProfileRequest;
use Illuminate\Http\Response;
use Auth;
use App\Country;
use App\City;
use App\State;
class GroupRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userCountry =Auth::user()->country;
        $userCountries = Country::where('name',$userCountry)->get();

        if ($request->user()->hasRole(['admin'])) {
            $attendees = Profile::all();

        }
        else
          //Get Country

        //Get Nationality
        foreach ($userCountries as $country) {

            $nationality = $country->nationality;
            $attendees = Profile::where('nationality', $nationality)->get();
        }
            return view('admin.attendees.index', compact('attendees'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if (Auth::user()->hasRole(['admin'])) {

            //////getting Country Code////
            ///

//            $Countries = Country::orderby('name', 'ASC')->get();

            $states = State::select('name')
                    ->orderBy('name', 'asc')
                    ->groupBy('name')
                    ->get();
            $cities = City::select('name')
                     ->orderBy('name', 'asc')
                     ->distinct('name')->get();

            $nationalities = Country::whereNotNull('nationality')->orderBy('nationality', 'ASC')->get();

            return view('admin.attendees.create', compact('countries', 'states', 'cities', 'phoneCode', 'nationalities', 'checkProfile'));

        } else
            //////getting Country Code////
        $userCountry = Auth::user()->country;
        $userCountries = Country::where('name', $userCountry)->get();

        foreach ($userCountries as $country) {
            $phoneCode = $country->phone;
            $states = State::where('country_code', $country->code)->get();
            $cities = City::where('country_code', $country->code)->get();
            $nationalities = Country::where('code', $country->code)->whereNotNull('nationality')->orderBy('nationality', 'ASC')->get();


        $countries = Country::all();
//            $nationalities = Country::whereNotNull('nationality')->orderBy('nationality','ASC')->get();


        return view('admin.attendees.create', compact('countries', 'states', 'cities', 'phoneCode', 'nationalities', 'checkProfile'));
    }

}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        $profile = Profile::create($request->all());

        foreach ($request->input('photos', []) as $file) {
            $profile->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos');
        }
        return redirect()->route('admin.attendees.index');

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
