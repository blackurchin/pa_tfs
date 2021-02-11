<?php

namespace App\Http\Requests;

use App\Bilateral;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateBilateralRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bilateral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'requesting_country' => [
                'required',
            ],
            'requested_country' => [
                'required',

            ],
        ];
    }
}
