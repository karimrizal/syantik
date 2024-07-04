<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_kegiatan_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_kegiatan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;

class verifikasiKegiatanController extends Controller
{
    public function index()
    {
        $list_meta_kegiatan = meta_kegiatan::where('idkab', Auth::user()->idkab )->get();
        $list_meta_kegiatan_opd = meta_kegiatan::where('organisasi', Auth::user()->organisasi )->where('idkab', Auth::user()->idkab )->get();
        return view('verifikasi_kegiatan', compact('list_meta_kegiatan', 'list_meta_kegiatan_opd'));
    }
    
    
    public function index2()
    {
        $list_meta_kegiatan = meta_kegiatan::all();
        $list_meta_kegiatan_opd = meta_kegiatan::where('organisasi', Auth::user()->organisasi )->get();
        return view('verifikasi_kegiatan_opd', compact('list_meta_kegiatan','list_meta_kegiatan_opd'));
    }
    
    
    public function update_perbaikan_kegiatan($id)
    {
    	$category = meta_kegiatan::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function edit_perbaikan_kegiatan(Request $request, $id)
    {
        

      meta_kegiatan::updateOrCreate(
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
        $kegiatan = DB::table('meta_kegiatan')->where('id', '=', $id)->get();
        return view('verifikasi_kegiatan_action', ['data' => $kegiatan]);
    }

    public function submit(Request $request)
    {
        $kegiatan = meta_kegiatan::find($request->id);
        $kegiatan->user_verifikasi = $request->user_verifikasi;
        $kegiatan->tanggal_verifikasi = Carbon::now();
        $kegiatan->status_verifikasi = $request->status_verifikasi;
        $kegiatan->status_tampil = $request->status_tampil;
        $kegiatan->alasan_tampil = $request->alasan_tampil;
        $kegiatan->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_kegiatan');
    }
    
    
     public function verifikasi_wali($id)
    {
        $kegiatan = DB::table('meta_kegiatan')->where('id', '=', $id)->get();
        return view('verifikasi_kegiatan_action_wali', ['data' => $kegiatan]);
    }

    public function submit_wali(Request $request)
    {
        $indikator = meta_kegiatan::find($request->id);
        $indikator->petugas_wali = $request->petugas_wali;
        $indikator->tanggal_wali = Carbon::now();

        $indikator->status_wali = $request->status_wali;
        $indikator->alasan_tampil_wali = $request->alasan_tampil_wali;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_kegiatan');
    }
    
    
    public function verifikasi_opd($id)
    {
        $kegiatan = DB::table('meta_kegiatan')->where('id', '=', $id)->get();
        return view('verifikasi_kegiatan_action_opd', ['data' => $kegiatan]);
    }

    public function submit_opd(Request $request)
    {
        $indikator = meta_kegiatan::find($request->id);
        $indikator->petugas_opd = $request->petugas_opd;
        $indikator->tanggal_opd = Carbon::now();

        $indikator->status_opd = $request->status_opd;
        $indikator->alasan_tampil_opd = $request->alasan_tampil_opd;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_kegiatan');
    }
    
    
}
