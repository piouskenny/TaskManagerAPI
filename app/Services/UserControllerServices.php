<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make($request->password),
        ]);
    }


    public function loginServices($request)
    {
        $user =  User::where('username', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $ouptout = response()->json("Welcome User $user->username");
            } else {
                $ouptout = response()->json('Incorrect Password');
            }
        } else {
            $ouptout = response()->json('No Account found for this username please signup');
        }

        return $ouptout;
    }
}
