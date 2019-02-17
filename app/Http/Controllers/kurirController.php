<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Validation\Rule;

use App\Konsultasi;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use App\Role;
use App\User;
use App\Permission;
use App\Pengiriman;
use App\Pengirimanfix;
use App\Pengirimanselesai;
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


     public function viewPengiriman(){


        $pengiriman = Pengirimanfix::all();
        // dd($pengguna);
        return view('kurir.pengirimanfix', ['pengiriman' => $pengiriman]);
        
    }




    public function tambahPerforma($id){
    	
    	  // dd('halo');
    	
    	$user = User::where('id','=',$id)->first();
        // dd($user->id);
    	// $user = User::where('id',Auth::user()->id)->first();
    	$performa = $user->jumlahantar + 1;
    	// dd($user);
    	// dd($performa);

    	   
        // dd($anak);
        $user->jumlahantar= $performa;
        $user->save();
        // dd('halo');
        $hapus = Pengirimanselesai::where('hapus','=',$id)->first();
        
        $hapus->delete();

        return redirect()->back();
    }



     public function performaKurir(){
        // $performa = User::all();
        // dd($pengguna);
        $user = User::where('jumlahantar','!=',null)->orderBy('jumlahantar', 'DESC')->get();
        // dd($user);
        return view('kurir.performa', ['user' => $user]);
    }


}
