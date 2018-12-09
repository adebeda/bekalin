<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Konsultasi;
use App\Http\Requests;
use Session;
use App\Role;
use App\Permission;
use App\Pengiriman;
use App\Authorizable;
use Illuminate\Support\Facades\Auth;
use Validator;


class kurirController extends Controller
{
    //
    public function viewKurir(){
    	$pengiriman = Pengiriman::all();
    	// dd($pengguna);
        return view('kurir.kurir', ['pengiriman' => $pengiriman]);
    }
}
