<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'anak';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    'users_id',
    'nama_anak',
    'alamat_sekolah',
    'nama_sekolah',
    'kelas',
    'jenis_kelamin',
    'tgl_lahir',
    'bb',
    'tb',
    'alergi',
    ]; 

    public function users(){
    	return $this->belongsTo('App\User','users_id');
    }
}
