<?php

namespace App\Web\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'accepted' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please input your email !',
            'email.unique' => 'The email has been registered ! Please login',
            'password.required' => 'Please input your password !',
            'password.min' => 'Your password length is good to greater than 6',
            'accepted.accepted' => 'You have to read and agree the deal !',
        ];
    }
}