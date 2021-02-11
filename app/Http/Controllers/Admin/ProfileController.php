<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Passport;
use App\Profile;
use Illuminate\Http\Request;
use Gate;
use Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Country;
use App\State;
use App\City;

use App\User;
use Input;
use Image;
use File;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    use MediaUploadingTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkHasProfile($user_profile){

        $user_profile = Profile::where('user_id',Auth::user()->id)->first();

        return $user_profile;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $checkProfile = $this->checkHasProfile(Auth::user()->id);
        if(isset($checkProfile)){
           //////// if profile exist/////
           //$user_profile = Profile::where('user_id',Auth::user()->id)->first();
            return redirect()->route('admin.profiles.show',$checkProfile->id);

        }else{
            /////IF profile not exist///////////
            //////getting Country Code////
            $userCountry=Auth::user()->country;
            $userCountries = Country::where('name',$userCountry)->get();

            foreach ($userCountries as $country){
                $phoneCode = $country->phone;
                $states = State::where('country_code',$country->code)->get();
                $cities = City::where('country_code',$country->code)->get();
                $nationalities = Country::where('code', $country->code)->whereNotNull('nationality')->orderBy('nationality', 'ASC')->get();

            }
            $countries = Country::all();

            return view('admin.profile.update.index', compact('countries','states','cities','phoneCode','nationalities','checkProfile'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.profile.create', compact('profile'));
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
        $profile->update([
            'user_id' => Auth::user()->id
        ]);

        //dd($request->file('passport'));
        ////////Save to Database//////
        if ($request->file('passport')) {
            $passport_file = $request->file('passport');
            $pass = new Passport();
            $pass->profile_id = $profile->id;
            $pass->filename = $passport_file->getClientOriginalName();
            $pass->file_type = 'passport';
            $pass->file = base64_encode(file_get_contents($passport_file->getRealPath()));
            $pass->mime = $passport_file->getMimeType();
            $pass->size = $passport_file->getSize();
            $pass->save();
        }

        if ($request->file('avatar')) {
            $avatar_file = $request->file('avatar');
            $avatar = new Passport();
            $avatar->profile_id = $profile->id;
            $avatar->filename = $avatar_file->getClientOriginalName();
            $avatar->file_type = 'avatar';
            $avatar->file = base64_encode(file_get_contents($avatar_file->getRealPath()));
            $avatar->mime = $avatar_file->getMimeType();
            $avatar->size = $avatar_file->getSize();
            $avatar->save();
        }

        return redirect()->route('admin.profiles.show',$profile->id)->with('success','Profile Successfully Updated...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $checkProfile = $this->checkHasProfile(Auth::user()->id);

        $passport_file = Passport::where('profile_id', $profile->id)
                        ->where('file_type', 'passport')->first();

        $avatar_file = Passport::where('profile_id', $profile->id)
            ->where('file_type', 'avatar')->first();

            return view('admin.profile.show.show', compact('profile','checkProfile','passport_file','avatar_file'));
//        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        abort_if(Gate::denies('profile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        /////IF profile not exist///////////
        //////getting Country Code////
        $userCountry=Auth::user()->country;
        $userCountries = Country::where('name',$userCountry)->get();

        foreach ($userCountries as $country){
            $phoneCode = $country->phone;
            $states = State::where('country_code',$country->code)->get();
            $cities = City::where('country_code',$country->code)->get();
            $nationalities = Country::where('code', $country->code)->whereNotNull('nationality')->orderBy('nationality', 'ASC')->get();

        }
        $countries = Country::all();

        return view('admin.profile.edit.edit', compact('profile','countries','states','cities','phoneCode','nationalities','checkProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }

    /**
     * Show user avatar.
     *
     * @param $id
     * @param $image
     *
     * @return string
     */
    public function userProfileAvatar($id, $image)
    {
        return Image::make(storage_path().'/users/id/'.$id.'/uploads/images/avatar/'.$image)->response();
    }
    ////addedd code///////
//    public function upload(Request $request){
//
//        // Handle the user upload of avatar
//        if($request->hasFile('avatar')){
//            $avatar = $request->file('avatar');
//            $filename = time() . '.' . $avatar->getClientOriginalExtension();
//            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
//
//            $user = Auth::user();
//            $user->avatar = $filename;
//            $user->save();
//        }
//        return redirect()->route('admin.profiles',$user->id)->with('success','Profile Successfully Updated...');
//
//
//    }


}
