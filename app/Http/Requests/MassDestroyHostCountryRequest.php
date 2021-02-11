<?php

namespace App\Http\Requests;

use App\HostCountry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyHostCountryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('host_country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:host_countries,id',
        ];
    }
}
