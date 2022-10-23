<?php


namespace App\Http\Controllers\RestAPI;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{

    public function createUser (Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json([
            "message" => "student record created"
        ], 201);
    }

    public function getAllUser(){
        $users = User::all()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getUser($id){
        $users = User::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function createUser(){

    }

    public function updateUser($id){

    }

    public function deleteUser($id){

    }
}
