<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    public function _construct(){
        $this->middleware('admin');
    }
    public function index(){
        
        return view('admin.home');
    }
}
