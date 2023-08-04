<?php


namespace Controllers;

use Models\User;


class UsersController
{
    public static function create()
    {
        User::create();
    }
}
