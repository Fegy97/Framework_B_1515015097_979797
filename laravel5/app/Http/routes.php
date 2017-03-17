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
Route::get('/', function (){
	return view ('welcome');
});
// Route::get('b2015', function () {
//     echo('B2015');
// });
// Route::get('Fegy Altama', function () {
//     echo('fegyaltama');
// });
// Route::get('pengguna/{pengguna?}', function($pengguna="Kamen rider EX-AID"){
//  return "Hello world dari pengguna $pengguna";
// });
Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');
Route::get('dosen','dosenController@awal');
	Route::get('dosen/tambah','dosenController@tambah');

	Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
	Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');


	Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
	Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');


	Route::get('mahasiswa','mahasiswaController@awal');
	Route::get('mahasiswa/tambah','mahasiswaController@tambah');

	Route::get('ruangan','ruanganController@awal');
	Route::get('ruangan/tambah','ruanganController@tambah');

	Route::get('matakuliah','matakuliahController@awal');
	Route::get('matakuliah/tambah','matakuliahController@tambah');