<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Paket;
use App\Konsultasi;
use Image;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function showAdmin(){
        //fetch all posts //posts = paket , Post=Paket
        $paket = Paket::get();
        
        //pass posts data to view and load list view
        return view('utama', ['paket' => $paket]);
    }

}
