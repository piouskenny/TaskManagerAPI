<?php

namespace App\Services;

class UserControllerServices
{
    public function test($request)
    {
        dd($request->all());
    }
}
