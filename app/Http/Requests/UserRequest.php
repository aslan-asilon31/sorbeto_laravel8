<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Alert;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $validator = Validator::make($this->all(), [
            'name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'email', 'max:191', 'unique:users,email'],
        ]);

        // dd($validator);

        if ($validator->fails()) {
            return [
                'name' => ['required', 'string', 'max:191'],
                'email' => ['required', 'email', 'max:191', 'unique:users,email'],
            ];
        } else {
            return [
                'name' => ['required', 'string', 'max:191'],
                'email' => ['required', 'email', 'max:191', 'unique:users,email'],
            ];
        }

        // If you want to return specific validation rules, you can do it like this:
        // return [
        //     'name' => ['required', 'string', 'max:191'],
        //     'email' => ['required', 'email', 'max:191', 'unique:users,email'],
        // ];
    }
}
