<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function getIndex()
{
    //dd(user::all()); //dump() выводит но не останавливает, print_r,
//return response()->json(User::all()); УДАЛИТЬ
        return UserResource::collection(User::all()); //подключено через ресурс
}
public function getOne(User $user){
return new UserResource($user);
}

}
