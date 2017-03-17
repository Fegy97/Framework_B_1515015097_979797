<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return "Kamen Rider EX-AID";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'Fegy Altama';
    	$pengguna->password = '1515015097';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
}
