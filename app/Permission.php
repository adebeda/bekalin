<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
	public static function defaultPermissions(){
		return [
		'view_parkir',
		'add_pengguna',
		'edit_pengguna',
		'delete_pengguna',
		'akses_pengguna',
		'view_pengguna',
		];
	}
}
