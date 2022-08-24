<?php

namespace App\Http\Controllers;


use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct(UserService $UserService)
    {
        $this->user = $UserService;
        // $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function CreateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        return  $this->user->CreateUser($request->all());
    }

    public function EditUser(Request $request, $id)
    {
        return $this->user->EditUser($request->all(), $id);
    }

    public function UserIndex()
    {
        return $this->user->UserIndex();

    }

    public function OrderUserIndex($id)
    {
        return $this->user->OrderUserIndex($id);
    }

    // public function login(Request $request)
    // {
    //     return $this->user->login($request);
    // }
}
