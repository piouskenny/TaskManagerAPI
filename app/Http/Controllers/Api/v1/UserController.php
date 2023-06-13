<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use App\Services\UserControllerServices;
use Illuminate\Http\Request;

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

        return response()->json("Post created");
    }

    public function login(LoginRequest $request)
    {
    }
}
