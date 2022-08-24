<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('login');
    }

    public function login(Request $request)
    {
        // return 'hello';
        $credentials = $request->only(['name', 'email']);

        // if (! $token = auth()->attempt($credentials)) {
        //     return response()->json(['status' => 1, 'message' => 'invalid credentials'], 401);
        // }

        // return response()->json(['status' => 0, 'token' => $token]);

        $token=auth()->attempt($credentials);
        return $token;
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['status' => 0]);
    }
}
