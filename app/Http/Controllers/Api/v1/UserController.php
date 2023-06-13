<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use App\Services\UserControllerServices;

class UserController extends Controller
{
    private $UserControllerServices;

    public function index()
    {
        $id = 1;
        $user = User::where('id', $id)->first();
        // Select all tasks with the userID

        if ($user->tasks->count() < 1) {
            return response()->json("No task for this user");
        }

        return response()->json("These are all the task by the user");
    }

    public function signUp(SignupRequest $request)
    {
        $this->UserControllerServices = new UserControllerServices;

        $this->UserControllerServices->signupService($request);

        return response()->json("User Account created");
    }

    public function login(LoginRequest $request)
    {

        $this->UserControllerServices = new UserControllerServices;

        $output = $this->UserControllerServices->loginServices($request);

        return $output;
    }
}
