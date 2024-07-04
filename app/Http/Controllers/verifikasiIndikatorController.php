<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_indikator_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_indikator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;

class verifikasiIndikatorController extends Controller
{
    public function index()
    {
        $list_meta_indikator = meta_indikator::where('idkab', Auth::user()->idkab )->get();
        $list_meta_indikator_opd = meta_indikator::where('organisasi', Auth::user()->organisasi )->where('idkab', Auth::user()->idkab )->get();
        return view('verifikasi_indikator', compact('list_meta_indikator','list_meta_indikator_opd'));
    }
    
     public function index2()
    {
        $list_meta_indikator = meta_indikator::all();
        $list_meta_indikator_opd = meta_indikator::where('organisasi', Auth::user()->organisasi )->get();
        return view('verifikasi_indikator_opd', compact('list_meta_indikator','list_meta_indikator_opd'));
    }
    
    
    
     public function update_perbaikan_indikator($id)
    {
    	$category = meta_indikator::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function edit_perbaikan_indikator(Request $request, $id)
    {
        

      meta_indikator::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'perbaikan_opd' => $request->perbaikan_opd,
        'catatan_perbaikan' => $request->catatan_perbaikan,
   
      

     
       ]
      );

      return response()->json([ 'success' => true ]);

    }

    public function verifikasi($id)
    {
        $indikator = DB::table('meta_indikator')->where('id', '=', $id)->get();
        return view('verifikasi_indikator_action', ['data' => $indikator]);
    }

    public function submit(Request $request)
    {
        $indikator = meta_indikator::find($request->id);
        $indikator->user_verifikasi = $request->user_verifikasi;
        $indikator->tanggal_verifikasi = Carbon::now();
    
        $indikator->status_tampil = $request->status_tampil;
        $indikator->alasan_tampil = $request->alasan_tampil;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator');
    }
    
    
 

    public function verifikasi_wali($id)
    {
        $indikator = DB::table('meta_indikator')->where('id', '=', $id)->get();
        return view('verifikasi_indikator_action_wali', ['data' => $indikator]);
    }

    public function submit_wali(Request $request)
    {
        $indikator = meta_indikator::find($request->id);
        $indikator->petugas_wali = $request->petugas_wali;
        $indikator->tanggal_wali = Carbon::now();

        $indikator->status_wali = $request->status_wali;
        $indikator->alasan_tampil_wali = $request->alasan_tampil_wali;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator');
    }
    
    
    public function verifikasi_opd($id)
    {
        $indikator = DB::table('meta_indikator')->where('id', '=', $id)->get();
        return view('verifikasi_indikator_action_opd', ['data' => $indikator]);
    }

    public function submit_opd(Request $request)
    {
        $indikator = meta_indikator::find($request->id);
        $indikator->petugas_opd = $request->petugas_opd;
        $indikator->tanggal_opd = Carbon::now();

        $indikator->status_opd = $request->status_opd;
        $indikator->alasan_tampil_opd = $request->alasan_tampil_opd;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator');
    }
    
    
}
