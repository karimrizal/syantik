<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_rekomendasi;
class LihatRekomendasiController extends Controller
{
    //
    public function index() {
        
         $rekomendasis = daftar_rekomendasi::all();
        return view('lihat_rekomendasi',compact('rekomendasis'))->with('k', (request()->input('page', 1) - 1) * 5);
  
    }
}
