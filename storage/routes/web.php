<?php

use App\Http\Controllers\UploadImage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('store', function () {
    Storage::disk('custom_path')->put('example.txt', 'Contents');
    return "The file stored successfully";
});

Route::get('upload', [UploadImage::class, 'uploadFrom']);
Route::post('store-image', [UploadImage::class, 'store'])->name('store-image');
