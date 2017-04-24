<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class penggunarequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
		'username'=>'required'
		];
		if($this->is('pengguna/tambah'))
		{
			$validasi['password'] = 'required';
		}
		return $validasi;
	}
}