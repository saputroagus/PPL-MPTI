<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hewan extends Model
{
	protected $table='hewan';
  protected $fillable = [
      'jenisHewan', 'harga', 'bobot','umur','lokasi','deskripsi','biayaperawatan','biayapakan'
    ];
}
