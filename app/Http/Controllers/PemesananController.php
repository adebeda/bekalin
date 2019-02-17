<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Pengiriman;
use App\Product;
use App\Pesanan;
use App\Pengirimanfix;
use App\Pengirimanselesai;
use Images;
use App\User;
use App\Konsultasi;
use App\Kritiksaran;
use \Cart as Cart;
use Session;

class PemesananController extends Controller
{
    public function showMenuPaketMakanan(){
    	$paket = DB::select("select * from product");
    	
    	// $anak = DB::select("select nama_anak from anak where users_id = '1'");
    	
        // dd($jumlah);

	    return view('order.index', ['paket' => $paket]);
    }

    public function showDetailPaketMakanan($id){
    	$detail_paket = DB::select("select * from product where id = '$id'");
        // dd($detail_paket);
	    return view('order.detail', ['detail_paket' => $detail_paket]);

    }

    public function viewPemesanan(){


        $pesanan = Pesanan::all();
        // dd($pengguna);
        return view('pemesanan', ['pesanan' => $pesanan]);
        
    }

     public function setPesanan(Request $request){

        // $id    = Input::get('id');
        // $rows  = Cart::content();
        // $rowId = $rows->where('id', $id)->first()->rowId;
        // $item = Cart::get();

        // $jumlah = DB::select("select available from product where id ='2' ");
        // dd($request->input('pukul'));
        $pesanan = New Pesanan();
        $pesanan->penerima = $request->input('penerima');
        $pesanan->no_hp = $request->input('noHP');
        $pesanan->alamat = $request->input('alamat');
        $pesanan->nama_rekening = $request->input('cardname');
        $pesanan->no_rekening = $request->input('cardnumber');
        $pesanan->ket_pesanan = $request->input('ket_pesanan');
        $pesanan->tanggal = $request->input('tanggal');
        $pesanan->pukul = $request->input('pukul');
        $pesanan->total = $request->input('total');
        $pesanan->save();
        Cart::destroy();
        return redirect()->back();
    }


    public function viewCheckout(){


        $lempar = 8;
        // dd($pengguna);
        return view('order.checkout',['lempar'=>$lempar]);
        }
    public function kirimPesanan(Request $request){
            $kirim = Pesanan::find($request->id);
            // dd($id);

            $pengiriman = New Pengiriman();
            $pengiriman->penerima = $kirim->penerima;
            $pengiriman->no_hp = $kirim->no_hp;
            $pengiriman->alamat = $kirim->alamat;  
            $pengiriman->ket_pesanan = $kirim->ket_pesanan;
            $pengiriman->tanggal = $kirim->tanggal;
            $pengiriman->pukul = $kirim->pukul;

            $pengiriman->save();
            $kirim->delete();
              return redirect()->back();
            // dd($kirim->no_rekening);

    }

    public function kirimPesananFix(Request $request){
            $kirim = Pengiriman::find($request->id);
            // dd($id);

            $pengirimanfix = New Pengirimanfix();
            $pengirimanfix->penerima = $kirim->penerima;
            $pengirimanfix->no_hp = $kirim->no_hp;
            $pengirimanfix->alamat = $kirim->alamat;  
            $pengirimanfix->ket_pesanan = $kirim->ket_pesanan;
            $pengirimanfix->tanggal = $kirim->tanggal;
            $pengirimanfix->pukul = $kirim->pukul;


            $pengirimanfix->save();
            $kirim->delete();
              return redirect()->back();
            // dd($kirim->no_rekening);

    }


    public function kirimPesananSelesai(Request $request){
            // dd($request->id);
            $selesai = Pengirimanfix::find($request->id);
            // dd($id);
            
            $hapus = Auth::user()->id;
            $kurir = User::where('id','=',$hapus)->first();
            
            
            $pengirimanselesai = New Pengirimanselesai();
            $pengirimanselesai->penerima = $selesai->penerima;
            $pengirimanselesai->no_hp = $selesai->no_hp;
            $pengirimanselesai->alamat = $selesai->alamat;  
            $pengirimanselesai->ket_pesanan = $selesai->ket_pesanan;
            $pengirimanselesai->tanggal = $selesai->tanggal;
            $pengirimanselesai->pukul = $selesai->pukul;
            $pengirimanselesai->hapus = Auth::User()->id;
            $pengirimanselesai->kurir = $kurir->name;
            $pengirimanselesai->save();
            $selesai->delete();
              return redirect()->back();
            // dd($kirim->no_rekening);

    }

    public function setKritiksaran(Request $request){
        // dd($request->Message);
        $kritiksaran = New Kritiksaran();
        $kritiksaran->nama = $request->Name;
        $kritiksaran->email = $request->Email;
        $kritiksaran->pesan = $request->Message;

        $kritiksaran->save();
        return redirect()->back();
    }

    public function getKritiksaran(){

        $kritiksaran = Kritiksaran::all();
        // dd($kritiksaran);
        return view('kritikSaran',['kritiksaran'=> $kritiksaran]);

    }

    public function viewPesananSelesai(){


        $pesanan = Pengirimanselesai::all();
        $kurir = User::all();
        // dd($pengguna);
        return view('pesananselesai', ['pesanan' => $pesanan]);
        
    }

}
