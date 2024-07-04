<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_variabel_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_variabel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

use Auth;

class verifikasiVariabelController extends Controller
{
    public function index()
    {
        $list_meta_variabel = meta_variabel::where('idkab', Auth::user()->idkab )->get();
        $list_meta_variabel_opd = meta_variabel::where('organisasi', Auth::user()->organisasi )->where('idkab', Auth::user()->idkab )->get();
        return view('verifikasi_variabel', compact('list_meta_variabel','list_meta_variabel_opd'));
    }
    
    public function index2()
    {
        $list_meta_variabel = meta_variabel::all();
        $list_meta_variabel_opd = meta_variabel::where('organisasi', Auth::user()->organisasi )->get();
        return view('verifikasi_variabel_opd', compact('list_meta_variabel','list_meta_variabel_opd'));
    }
    
    
    
    public function update_perbaikan_variabel($id)
    {
    	$category = meta_variabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function edit_perbaikan_variabel(Request $request, $id)
    {
        

      meta_variabel::updateOrCreate(
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
        $variabel = DB::table('meta_variabel')->where('id', '=', $id)->get();
        return view('verifikasi_variabel_action', ['data' => $variabel]);
    }

    public function submit(Request $request)
    {
        $variabel = meta_variabel::find($request->id);
        $variabel->user_verifikasi = $request->user_verifikasi;
        $variabel->tanggal_verifikasi = Carbon::now();
        $variabel->status_verifikasi = $request->status_verifikasi;
        $variabel->status_tampil = $request->status_tampil;
        $variabel->alasan_tampil = $request->alasan_tampil;
        $variabel->save();
        /*return redirect('verifikasi_variabel');*/
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_variabel');
    }
    
    
    public function verifikasi_wali($id)
    {
        $variabel = DB::table('meta_variabel')->where('id', '=', $id)->get();
        return view('verifikasi_variabel_action_wali', ['data' => $variabel]);
    }

    public function submit_wali(Request $request)
    {
        $indikator = meta_variabel::find($request->id);
        $indikator->petugas_wali = $request->petugas_wali;
        $indikator->tanggal_wali = Carbon::now();

        $indikator->status_wali = $request->status_wali;
        $indikator->alasan_tampil_wali = $request->alasan_tampil_wali;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_variabel');
    }
    
    
    public function verifikasi_opd($id)
    {
        $kegiatan = DB::table('meta_variabel')->where('id', '=', $id)->get();
        return view('verifikasi_variabel_action_opd', ['data' => $kegiatan]);
    }

    public function submit_opd(Request $request)
    {
        $indikator = meta_variabel::find($request->id);
        $indikator->petugas_opd = $request->petugas_opd;
        $indikator->tanggal_opd = Carbon::now();

        $indikator->status_opd = $request->status_opd;
        $indikator->alasan_tampil_opd = $request->alasan_tampil_opd;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_variabel');
    }
    
}
