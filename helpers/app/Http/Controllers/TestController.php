<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        /**
         * Examples of available helpers
         */
        // return User::all()->dd();
        // return abort('500');


        /**
         * Use my custom helper
         */
        return User::where('id', userId())->get();
    }
}
