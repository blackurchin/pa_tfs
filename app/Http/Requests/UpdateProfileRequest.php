<?php

namespace App\Http\Requests;

use App\Profile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('profile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'firstname'      => [
                'required',
            ],
            'lastname'      => [
                'required',
            ],
            'gender'      => [
                'required',
            ],
            'birthdate' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],

            'language_1'      => [
                'required',
            ],

            'event'      => [
                'required',
            ],
        ];
    }
}
