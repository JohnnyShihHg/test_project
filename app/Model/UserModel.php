<?php

namespace App\Model;

use App\Entities\UserEntity;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $user;

    public function __construct(UserEntity $UserEntity)
    {
        $this->user = $UserEntity;
    }

    public function CreateUser($request)
    {
        return $this->user::create($request);
    }

    public function EditUser($request){

        return $this->user->update($request);
        // return 'hello';

    }

    public function UserIndex()
    {
       return $this->user::all();
    }

    public function OrderUserIndex($id)
    {
       return $this->user::findOrFail($id);
    }
}
