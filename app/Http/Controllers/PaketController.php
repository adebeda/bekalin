<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
// use App\Paket;
use Image;
use Session;
use App\Product;

class PaketController extends Controller
{
    public function index(){
        //fetch all posts //posts = paket , Post=Paket
        $paket = Product::get();
        
        //pass posts data to view and load list view
        return view('utama', ['paket' => $paket]);
    }
    
    // public function details($id){
    //     //fetch post data
    //     $paket = Paket::find($id);
        
    //     //pass posts data to view and load list view
    //     return view('posts.details', ['post' => $post]);
    // }
    
    public function add(){
        //load form view
        return view('form');
    }

    public function getPaket($id){
        //load form view
        $paket = DB::select("select * from product where id = '$id' ");
        // /dd($paket);
        return view('getpaket', ['paket' => $paket]);
    }

    public function setEditPaket(Request $request, $id){

       $paket = Product::where('id','=',$id)->first();
        $paket->nama_paket = $request->input('nama_paket');
        $paket->harga_paket = $request->input('harga_paket');
        $paket->nasi = $request->input('nasi');
        $paket->sayur = $request->input('sayur');
        $paket->lauk = $request->input('lauk');
        $paket->buah = $request->input('buah');
        $paket->minum = $request->input('minum');
        $paket->available = $request->input('available');
        $paket->save();

        if ($request->hasFile('foto_paket')) {
            $foto_paket = $request->file('foto_paket');
            $foto_paket_name = time() . '.' .$foto_paket->getClientOriginalExtension();
            Image::make($foto_paket)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_paket_name ));
            $paket->foto_paket = $foto_paket_name;
            $paket->save();
        }
        if ($request->hasFile('foto_nasi')) {
            $foto_nasi = $request->file('foto_nasi');
            $foto_nasi_name = time() . '.' .$foto_nasi->getClientOriginalExtension();
            Image::make($foto_nasi)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_nasi_name ));
            $paket->foto_nasi = $foto_nasi_name;
            $paket->save();
        }
        if ($request->hasFile('foto_sayur')) {
            $foto_sayur = $request->file('foto_sayur');
            $foto_sayur_name = time() . '.' .$foto_sayur->getClientOriginalExtension();
            Image::make($foto_sayur)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_sayur_name ));
            $paket->foto_sayur = $foto_sayur_name;
            $paket->save();
        }
        if ($request->hasFile('foto_lauk')) {
            $foto_lauk = $request->file('foto_lauk');
            $foto_lauk_name = time() . '.' .$foto_lauk->getClientOriginalExtension();
            Image::make($foto_lauk)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_lauk_name ));
            $paket->foto_lauk = $foto_lauk_name;
            $paket->save();
        }
        if ($request->hasFile('foto_buah')) {
            $foto_buah = $request->file('foto_buah');
            $foto_buah_name = time() . '.' .$foto_buah->getClientOriginalExtension();
            Image::make($foto_buah)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_buah_name ));
            $paket->foto_buah = $foto_buah_name;
            $paket->save();
        }                        
        if ($request->hasFile('foto_minum')) {
            $foto_minum = $request->file('foto_minum');
            $foto_minum_name = time() . '.' .$foto_minum->getClientOriginalExtension();
            Image::make($foto_minum)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_minum_name ));
            $paket->foto_minum = $foto_minum_name;
            $paket->save();
        }                            
   
        return redirect()->back()->withSuccessMessage('EDIT SUCCESS!');
    }

    public function setPaket(Request $request){
        $paket = New Product();
        $paket->nama_paket = $request->input('nama_paket');
        $paket->harga_paket = $request->input('harga_paket');
        $paket->nasi = $request->input('nasi');
        $paket->sayur = $request->input('sayur');
        $paket->lauk = $request->input('lauk');
        $paket->buah = $request->input('buah');
        $paket->minum = $request->input('minum');
        

        if ($request->hasFile('foto_paket')) {
            $foto_paket = $request->file('foto_paket');
            $foto_paket_name = time() . '.' .$foto_paket->getClientOriginalExtension();
            Image::make($foto_paket)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_paket_name ));
            $paket->foto_paket = $foto_paket_name;
            // $paket->save();
        }
        if ($request->hasFile('foto_nasi')) {
            $foto_nasi = $request->file('foto_nasi');
            $foto_nasi_name = time() . '.' .$foto_nasi->getClientOriginalExtension();
            Image::make($foto_nasi)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_nasi_name ));
            $paket->foto_nasi = $foto_nasi_name;
            // $paket->save();
        }
        if ($request->hasFile('foto_sayur')) {
            $foto_sayur = $request->file('foto_sayur');
            $foto_sayur_name = time() . '.' .$foto_sayur->getClientOriginalExtension();
            Image::make($foto_sayur)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_sayur_name ));
            $paket->foto_sayur = $foto_sayur_name;
            // $paket->save();
        }
        if ($request->hasFile('foto_lauk')) {
            $foto_lauk = $request->file('foto_lauk');
            $foto_lauk_name = time() . '.' .$foto_lauk->getClientOriginalExtension();
            Image::make($foto_lauk)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_lauk_name ));
            $paket->foto_lauk = $foto_lauk_name;
            // $paket->save();
        }
        if ($request->hasFile('foto_buah')) {
            $foto_buah = $request->file('foto_buah');
            $foto_buah_name = time() . '.' .$foto_buah->getClientOriginalExtension();
            Image::make($foto_buah)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_buah_name ));
            $paket->foto_buah = $foto_buah_name;
            // $paket->save();
        }                        
        if ($request->hasFile('foto_minum')) {
            $foto_minum = $request->file('foto_minum');
            $foto_minum_name = time() . '.' .$foto_minum->getClientOriginalExtension();
            Image::make($foto_minum)->resize(300, 300)->save( public_path('/fotoupload/' . $foto_minum_name ));
            $paket->foto_minum = $foto_minum_name;
            // $paket->save();
        }                            
        $paket->save();    
        return redirect()->back()->withSuccessMessage('PAKET BERHASIL DITAMBAHKAN!');
    }
    
    public function edit(){
         //load form view
        $paket = Product::get();
        //pass posts data to view and load list view
        return view('edit', ['paket' => $paket]);
    }
    
    // public function update($id, Request $request){
    //     //validate post data
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'content' => 'required'
    //     ]);
        
    //     //get post data
    //     $postData = $request->all();
        
    //     //update post data
    //     Post::find($id)->update($postData);
        
    //     //store status message
    //     Session::flash('success_msg', 'Post updated successfully!');

    //     return redirect()->route('posts.index');
    // }
    
    public function delete($id){
        //update post data
        Product::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Paket menu deleted successfully!');

        // return redirect()->route('index');
        return redirect()->back();
    }   
}
