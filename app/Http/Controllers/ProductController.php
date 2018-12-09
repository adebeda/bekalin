<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Product::all();
        // dd($products);
        return view('cart.shop')->with('paket', $paket);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($namaPaket)
    {
        $product = Product::where('nama_paket', $namaPaket)->firstOrFail();
        // dd($product);
        // $interested = Paket::where('nama_paket', '!=', $namaPaket)->get()->random(2);
        // dd($interested);

        return view('cart.product')->with(['product' => $product]);
    }


}
