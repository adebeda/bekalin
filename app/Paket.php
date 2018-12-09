<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table='paket';
    protected $primarykey='id';
   	public $timestamps= true;
   	public $incrementing= true;
   	protected $fillable = 
   	[
   	'nama_paket',
   	'harga_paket',
   	'foto_paket',
   	'nasi',
   	'sayur',
   	'lauk',
   	'buah',
   	'minum',
   	'foto_nasi',
   	'foto_sayur',
   	'foto_lauk',
   	'foto_buah',
   	'foto_minum',   	
   	];
}
