<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['username','password'];

public function Pengguna()
	{
	return $this->belongsTo(Pengguna::class);
	}
	public function mahasiswa()
	{
	return $this->hasOne(Mahasiswa::class);
	}
	
}
