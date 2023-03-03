<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showUser()
    {
        return "users";
    }

    public function createPost()
    {
        return View("posts_create");
    }
}
