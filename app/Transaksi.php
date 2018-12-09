<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'users_id',
    'paket_id',
    'total_bayar',
    ]; 

    public function users(){
    	return $this->belongsTo('App\User','users_id');
    }
}
