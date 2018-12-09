<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'users_id',
    'admin_id',
    'tgl_konsul',
    'judul',
    'pertanyaan',
    'jenis_pertanyaan',
    'jawaban',
    ]; 

    public function users(){
    	return $this->belongsTo('App\User','users_id');
    }

     public function admin(){
        return $this->belongsTo('App\User','admin_id');
    }
}
