<?php

namespace App\Services;

use App\Models\User;

class UserControllerServices
{
    public function test($request)
    {
        dd($request->all());
    }

    public function signupService($request)
    {
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
