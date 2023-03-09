<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function register(RegisterRequest $request){
        //Validate register
        $data = $request->validated();

        //Creating user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    public function login(Request $request){
        
    }
    public function logout(Request $request){

    }
}
