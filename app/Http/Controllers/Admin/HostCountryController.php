<?php

namespace App\Http\Controllers\Admin;

use App\HostCountry;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHostCountryRequest;
use App\Http\Requests\StoreHostCountryRequest;
use App\Http\Requests\UpdateHostCountryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HostCountryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('host_country_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $host_countries = HostCountry::all();

        return view('admin.host_country.index', compact('host_countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('host_country_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.host_country.create');
    }

    public function store(StoreHostCountryRequest $request)
    {
        $sponsor =HostCountry::create($request->all());

        if ($request->input('logo', false)) {
            $sponsor->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        return redirect()->route('admin.host_country.index');
    }

    public function edit(HostCountry $host_country)
    {
        abort_if(Gate::denies('host_country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.host_country.edit', compact('host_country'));
    }

    public function update(UpdateHostCountryRequest $request, HostCountry $host_country)
    {
        $host_country->update($request->all());

        if ($request->input('logo', false)) {
            if (!$host_country->logo || $request->input('logo') !== $host_country->logo->file_name) {
                $host_country->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($host_country->logo) {
            $host_country->logo->delete();
        }

        return redirect()->route('admin.host_country.index');
    }

    public function show(HostCountry $host_country)
    {
        abort_if(Gate::denies('host_country_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.host_country.show', compact('host_country'));
    }

    public function destroy(HostCountry $host_country)
    {
        abort_if(Gate::denies('host_country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $host_country->delete();

        return back();
    }

    public function massDestroy(MassDestroyHostCountryRequest $request)
    {
        HostCountry::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
