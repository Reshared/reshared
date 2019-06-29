<?php

namespace App\Web\Controllers;

use App\Models\User;
use App\Web\Requests\RegisterRequest;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => User::randName(),
            'email' => $request->post('email'),
            'password' => $request->post('password'),
        ]);

        auth()->login($user);

        return redirect()->route('user.profile');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function logout()
    {
        auth()->logout();

        return back();
    }

    public function profile()
    {
        return auth()->user();
    }
}