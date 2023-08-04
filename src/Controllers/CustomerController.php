<?php

namespace Controllers;

use Models\Customer;

class CustomerController
{
    public static function register()
    {
        Customer::register();
    }
}
