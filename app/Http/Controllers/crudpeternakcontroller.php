<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hewan;

class crudpeternakcontroller extends Controller
{
	public function listhewan(){
		return view('peternak.tampilhewan');
	}
	public function tambahkan(){
		return view('peternak.tambahhewan');
	}
	public function createhewan(){
		hewan::create([
		'jenisHewan'=>request('jenisHewan'),
		'harga'=>request('harga'),
		'bobot'=>request('bobot'),
		'umur'=>request('umur'),
		'lokasi'=>request('lokasi'),
		'deskripsi'=>request('deskripsi'),
		'biayaperawatan'=>request('biayaperawatan'),
		'biayapakan'=>request('biayapakan')
            ]);
	}
}
