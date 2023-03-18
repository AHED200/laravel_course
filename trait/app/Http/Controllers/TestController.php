<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\TestTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use TestTrait;

    public function index()
    {
        /**
         * Return data using regular way
         */
        // $user = User::all();
        // return $user;
        // $posts = Post::all();
        // return $posts;

        /**
         * Using Trait
         */
        $users = $this->getData(User::class);
        return $users;
    }

    public function scopeName()
    {
        $name = User::name()->get();
        return $name;
    }
}
