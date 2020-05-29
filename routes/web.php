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
    $permission = ['add user'];

    if ($user->can($permission)) {
    	return 'role has permissions!';
    }
    $user->givePermissionTo($permission);

    // for check role use  hasRole methode

    // for check permission use  can methode

    // for give permission use  can methode

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


