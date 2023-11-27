<?php

namespace App\Http\Controllers;
use App\Models\Wisata;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ini untuk direct ke halaman dashboard admin
    public function index(){
        $data = Wisata::all();
        //$data = Wisata::orderBy('id_wisata','asc')->get();
        return view('admin/index')->with('data', $data);
    }

    function detail($id){
        $data = Wisata::where('id_wisata', $id)->first();
        return view('admin/show')->with('data', $data);
    }

    function create(){
        
    }
}
