<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 function register(Request $request){
     $validated_data = $request->validate([
         "name"=>"required",
         "email"=>"required|email",
         "password"=>"required|confirmed",
     ]);

     $validated_data["password"] = bcrypt($request->password);

     $user = User::create($validated_data);
     $accessToken = $user->createToken('authToken')->accessToken;
     return response(['user'=>$user,'access_token'=>$accessToken]);
 }

 function login (Request $request){
    $login_data = $request->validate([
        "email"=>"required|email",
        "password"=>"required",
    ]);

    if(!auth()->attempt($login_data)){
        return response(["message"=>"invalid data"]);
    }

    $accessToken = auth()->user()->createToken('authToken')->accessToken;

    return response(['user'=>auth()->user(),'access_token'=>$accessToken]);


 }

 function anaUser(Request $request){
    return response(['uasasdser'=>$request->user()]);
}



}
