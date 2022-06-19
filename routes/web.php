<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/doctor', function () {
//     return view('doctor');
// });

// //-- route parameters

// //-- required parameter
// Route::get('/test2/{id}', function ($id) {
//     return 'welcome Mr. ' . $id;
// })->name('a');


// //-- optional parameter
// Route::get('/test3/{id?}', function ($id = 'Magi') {
//     return 'welcome Mr. ' . $id;
// })->name('b');


// //-- group of routes
// Route::namespace('Front')->group(function (){
//    //All routes below route can only access to the Controllers and methods existing
//    // on the 'Front' folder

//     Route::get('users', 'UserController@showUserName');
// });


// //-- group prefix
// Route::group(['prefix' => 'users'], function (){
//    Route::get('/', function (){
//        return 'User 01 ';
//    });
// });
 
Auth::routes(['verify' => true ]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
