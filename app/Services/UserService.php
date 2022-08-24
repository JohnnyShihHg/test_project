<?php

namespace App\Services;

use App\Model\UserModel;


class UserService
{

    private $user;



    public function __construct(UserModel $UserModel)
    {
        $this->user = $UserModel;
    }

    public function CreateUser($request)
    {

        return  $this->user->CreateUser($request);
    }

    /* null 不能用 */
    public function EditUser($request, $id)
    {
        $user = $this->user;
        $chooseuser = $user->OrderUserIndex($id);
        $result = $chooseuser->$user->EditUser($request);
        return $result;
    }

    public function UserIndex()
    {
        return   $this->user->UserIndex();
    }

    public function OrderUserIndex($id)
    {
        return   $this->user->OrderUserIndex($id);
    }

    // public function login( $request)
    // {
    //     $pass = $request->only(['name', 'email']);
    //     // $token = auth()->attempt($pass);
    //     if (!$token = auth()->attempt($pass)) {
    //         return response()->json(['error' => 'Incorrect name/email'], 401);
    //     }
    //     return response()->json(['token' => $token]);
    // }
    public function getJWTIdentifier()
    {
        return $this->user->getJWTIdentifier();
    }

    public function getJWTCustomClaims()
    {
        return $this->user->getJWTCustomClaims();
    }
}
