<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use App\Services\UserControllerServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Select all tasks with the userID
        return response()->json("TASK MANAGER API");
    }

    public function signUp(SignupRequest $request)
    {
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json("Post created");
    }


    
}
