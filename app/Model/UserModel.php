<?php

namespace App\Model;

use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Entities\UserEntity;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model implements JWTSubject
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

    public function EditUser($request)
    {

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

    public function GetUserID($name)
    {
        $order = $this->user->where('name', $name)->first()->id;
        return $order;
    }

    /* JWT位置 還要確認 */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
