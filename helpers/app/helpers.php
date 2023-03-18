<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('username')) {
    function username()
    {
        return Auth::User()->name;
    }
}

if (!function_exists('userId')) {
    function userId()
    {
        return Auth::User()->id;
    }
}
