<?php

use App\Mail\TestMail;
use App\Mail\TestMailMarkdown;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('send', function () {
    Mail::to('taylor@example.com')->send(new TestMail());
    return response('The mail sent successfully');
});

Route::get('send-m', function () {
    $user = "Islam";
    Mail::to('taylor@example.com')->send(new TestMailMarkdown($user));
    return response('The mail sent successfully');
});
