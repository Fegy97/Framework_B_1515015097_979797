<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

use App\pengguna;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = mahasiswa::all(); 
        foreach($mahasiswa as $mhs){


        echo "Nama: ".$mhs->nama;
        echo "<br>";
        echo "Username: ".$mhs->pengguna->username;
        echo "<br>";


    }}
    public function Pengguna()
    {
    return $this->belongsTo(Pengguna::class);
    }
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Fegy Altama";
    	$mahasiswa->nim = "1515015097";
    	$mahasiswa->alamat = "cendana";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}
