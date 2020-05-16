<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        $credentials = [
            'email' => request('email'),
            'password' => request('password'),
        ];

        if (Auth::attempt($credentials)) {
            $success['token'] = Auth::user()->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success]);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
