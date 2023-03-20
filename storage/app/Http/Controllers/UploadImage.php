<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImage extends Controller
{
    public function uploadFrom()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->store('img', 'custom_path');

        //If you want to store images with the same name instead of a random name.
        // $path = $request->file('photo')->storeAs('img', $image, 'custom_path');

        // return $image;
    }
}
