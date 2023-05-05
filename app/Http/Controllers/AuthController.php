<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function createToken(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){ 
            $user = Auth::user($request);
            $success['token'] = $user->createToken('tokenApi')->accessToken;
            $success['username'] = $user->username;
            return $success;
        }
    }
}
