<?php

namespace App\Service;

use App\Models\User;

class UserService
{
    public function createUsuario()
    {
        $user = new User();

        $user->name = uniqid();
        $user->email = uniqid() . '@a.com';
        $user->password = bcrypt('123456');

        $user->save();
    }

}
