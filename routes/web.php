<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageAccess;
use App\Http\Controllers\ContactMessageCntr;

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
    return view('home');
})->name('index');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['message.access']], function () {
        Route::get('/messages', [MessageAccess::class, 'index'])->name('access.dashboard');
    });
});

Route::post('/contact-message', [ContactMessageCntr::class, 'getInTouch'])->name('send.message');
