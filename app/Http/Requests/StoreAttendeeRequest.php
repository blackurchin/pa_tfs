<?php

namespace App\Http\Requests;

use App\Profile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAttendeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
//            'assignment_duty_position'      => [
//                'required',
//            ],
            'language_1'      => [
                'required',
            ],
            'zip_postal_code'      => [
                'required',
            ],
            'event'      => [
                'required',
            ],
        ];
    }
}
