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

// Route::get('/', function (\Illuminate\Http\Request $request) {
//     $user = $request->user();
//     $permission = ['add user'];

//     if ($user->can($permission)) {
//     	$user->withdrawPermissionTo($permission);
//     }
//     $user->givePermissionTo($permission);

//     return new \Illuminate\Http\Response('hello',200);

    // for detach 

    // for check role use  hasRole methode

    // for check permission use  can methode

    // for give permission use  givePermissionTo methode

    // for withdraw permission use  withdrawPermissionTo methode

    // for update permission use  updatePermissions methode

    // return new \Illuminate\Http\Response('hello', 200);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true , 'individualVerify' => true]);

Route::middleware(['web', 'verified'])->group(function () {
    //
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::middleware(['role:admin,add user', 'verified'])->group(function () {
    //
    Route::get('/admin', function(){
    	return 'Admin panel';
    });
});

// Route::group(['middleware' => ['role:admin','verified']], function () {
//     Route::group(['middleware' => 'role:admin,add user'], function () {
//         Route::get('/admin/users', function () {
//             return 'add users in admin panel';
//         });
//     });

//     Route::get('/admin', function () {
//         return 'Admin panel';
//     });
// });


