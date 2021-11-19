<?php

namespace App\Http\Controllers\v1\Auth;

use App\Http\Controllers\Controller;

use App\Services\Auth\AuthServicer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use \JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $token = AuthServicer::authenticate($credentials);
        return AuthServicer::respondWithToken($token);
        //return AuthServicer::authenticate($credentials);
    }

}
