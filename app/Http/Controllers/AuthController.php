<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = strtolower($request->input('email'));
        $password = $request->input('password');
        $password_confirm = $request->input('password_confirm');
        if ($password === $password_confirm)
        {
            $user = User::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            auth()->login($user);

            return view('dashboard', ['user' => $user]);
        }

        return view('auth.register', ['error' => 'passwords do not match']);
    }
}
