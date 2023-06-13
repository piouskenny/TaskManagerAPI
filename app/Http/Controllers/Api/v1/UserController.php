<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use App\Services\UserControllerServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $UserControllerServices;

    public function index()
    {
        // Select all tasks with the userID
        return response()->json("TASK MANAGER API");
    }

    public function signUp(SignupRequest $request)
    {
        $this->UserControllerServices = new UserControllerServices;

        $this->UserControllerServices->signupService($request);

        return response()->json("User Account created");
    }

    public function login(LoginRequest $request)
    {
        $user =  User::where('username', $request->username)->first();

        if (!$user) {
            return response()->json('No Account found for this username please signup');
        }

        if (Hash::check('request->password', $user->password)) {
            return response()->json('Correct Password');
        } else {
            return response()->json('Incorrect Password');
        }
    }
}
