<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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


//Routing using this way
Route::get('posts', [PostController::class, 'showUser']);
Route::get('posts/create', [PostController::class, 'createPost']);

//Or using this way
Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'showUser');
    Route::get('posts/create', 'createPost');
});


/**
 * Go to UserController(With Resource)
 * 
 * Expect is used to block a function from the resource in the request
 * In example here we prevent access to create function
 * There are another thing called only
 * ->only([])
 * */
Route::resource('user', UserController::class)->except([
    "create",
]);


/**
 * Route to invocable controller
 */
Route::get('user_profile', UserProfileController::class);
