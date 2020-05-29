<?php

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

Route::get('/', function (\Illuminate\Http\Request $request) {
    $user = $request->user();
    dump($user->can('add user'));

    // return new \Illuminate\Http\Response('hello', 200);
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::middleware(['web', 'verified'])->group(function () {
    //
    Route::get('/home', 'HomeController@index')->name('home');
});


