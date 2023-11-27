<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
//use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function showData(){
        $data = admin::all();
        return view('frontend/aplikasi', ['data' => $data]);
    }

    public function showDetail($id_wisata){
        $detailData = admin::all();
        return view('frontend/detail', ['detailData' => $detailData]);
    }
}
