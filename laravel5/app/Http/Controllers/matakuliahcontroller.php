<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class matakuliahcontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswacontroller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Fegy Altama';
    	$mahasiswa->nim = '1515015097';
    	$mahasiswa->alamat = 'Jl. H.Hasan Basri';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data Nama mahasiswa {$mahasiswa->nama} Telah Disimpan";
    }
}
