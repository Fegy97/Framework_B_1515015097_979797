<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('hello-world', function () {
    return ('Hello-world');
});
// Route::get('b2015', function () {
//     echo('B2015');
// });
// Route::get('Fegy Altama', function () {
//     echo('fegyaltama');
// });
Route::get('pengguna/{pengguna?}', function($pengguna="hamba allah"){
 return "Hello world dari pengguna $pengguna";
});