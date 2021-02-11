<?php

namespace App\Http\Controllers\Admin;
use App\Bilateral;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBilateralRequest;
use App\Http\Requests\UpdateBilateralRequest;
use Gate;
use Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Country;
use Illuminate\Http\Request;
class BilateralController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bilateral_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $country= Auth::user()->country;
        $countries = Country::orderBy('name', 'asc')->get();
        if(Auth::user()->hasRole(['admin'])) {
            $bilaterals = Bilateral::orderBy('schedule', 'ASC')
                ->orderBy('time', 'ASC')
                ->get();

        } else
            $bilaterals = Bilateral::where('requesting_country',$country)
                                    ->orwhere('requested_country',$country)->orderBy('schedule', 'ASC')
                                     ->orderBy('time', 'ASC')
                                    ->get();
        return view('admin.bilaterals.index', compact('bilaterals', 'countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('bilateral_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if(Auth::user()->hasRole(['admin'])) {

            $countries = Country::orderBy('name', 'asc')->get();
        } else
            $countries = Country::where('name', Auth::user()->country)->get();

             $r_countries = Country::orderBy('name', 'asc')->get();

        return view('admin.bilaterals.create', compact('countries','r_countries'));
    }

    public function store(StoreBilateralRequest $request)
    {
//        if ($record_exist=Bilateral::where('schedule', '=',$request->get('schedule'))
//        ->where('schedule', '=',$request->get('schedule'))->exists()) {
//
//
//        return back()->with('warning', 'Sorry .Reservation is already exists.');
//        }
//        else
            $bilaterals = Bilateral::create($request->all());

//        if(isset($user_id) ){
//            $user_id->updateOrCreate([
//                'user_id'=> Auth::user()->id,
//            ]);
//            dd($user_id);
//
//        }

        return redirect()->route('admin.bilaterals.index')->with('success', 'Bilateral Talk Request saved.');
    }
    public function edit(Bilateral $bilateral)
    {
        $country= Auth::user()->country;
        if(Auth::user()->hasRole(['admin'])) {
            $countries = Country::orderBy('name', 'asc')->get();

         } else
            $countries = Country::where('name',$country)->get();
             $r_countries = Country::orderBy('name', 'asc')->get();


        abort_if(Gate::denies('bilateral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bilaterals.edit', compact( 'bilateral','countries','r_countries'));
    }

    public function accept ($id)
    {
        $status =Bilateral::find($id);
//        dd( $status->id);

        if(isset($status) ){
            $status->update([
                'status' =>'Accepted'
            ]);
        }

        return back()->with('update','Bilateral Talk accepted!');
    }

    public function decline($id)
    {

        abort_if(Gate::denies('bilateral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bilateral =Bilateral::find($id);

        return view('admin.bilaterals.declination', compact( 'bilateral'));
    }


    public function decline_update (Request $request,$id)
    {

        $request->validate([
            'declination' => 'required',
        ]);
        $declination=Bilateral::find($id);
//        dd( $status->id);

        if(isset($declination) ){

            $declination->update([

                'status' =>'Declined',
                'declination' => $request['declination'],

            ]);



        }
        return redirect()->route('admin.bilaterals.index')->with('info','Successfully declined!');
    }


    public function cancel($id)
    {

        abort_if(Gate::denies('bilateral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bilateral =Bilateral::find($id);

        return view('admin.bilaterals.cancellation', compact( 'bilateral'));
    }


    public function cancel_update (Request $request,$id)
    {

//        $request->validate([
//            'declination' => 'required',
//        ]);
        $declination=Bilateral::find($id);
//        dd( $status->id);

        if(isset($declination) ){

            $declination->update([
                'status' =>'Cancelled',
                'reason_requesting' => $request['reason_requesting'],
                'reason_requested' => $request['reason_requested'],

              //  dd(  $declination)
            ]);

        }
        return redirect()->route('admin.bilaterals.index')->with('info','Successfully declined!');
    }

    public function update(UpdateBilateralRequest $request, Bilateral $bilateral)
    {
        $bilateral->update($request->all());

//        $status =Bilateral::find($id);
//        dd( $status->id);
        if (Auth::user()->hasRole(['admin'])) {
            if (isset($bilateral)) {
                $bilateral->update([
                    'status' => 'Reserved'
                ]);

            }
            return redirect()->route('admin.bilaterals.index')->with('update', 'Bilateral Talk reserved.');

        }
        return redirect()->route('admin.bilaterals.index')->with('update', 'Bilateral Talk updated.');

    }
    public function show(Bilateral $bilateral)
    {
        abort_if(Gate::denies('bilateral_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.bilaterals.show', compact('bilateral'));
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('bilateral_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

            $bilaterals = Bilateral::find($id);

            $bilaterals->delete();


        return back()->with('delete','Deleted successfully!');
    }

    public function massDestroy(MassDestroyBilateralRequest $request)
    {
        Bilateral::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
