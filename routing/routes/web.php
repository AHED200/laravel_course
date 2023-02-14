<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post('users', function (Request $request) {
//     return $request;
// });

//This helps for checking from authentication
Route::get('users/{id}', function ($id) {

    if ($id == 1) {
        return 'Admin';
    } else {
        return 'user';
    }

    return "GET parameter, name=" . $id;
});

//Send user name inside with blade system
Route::get('/user', function () {

    $username = 'Ahmed E';
    return view('user', compact('username'));
});
