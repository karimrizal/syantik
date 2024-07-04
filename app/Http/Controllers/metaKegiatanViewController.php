<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_kegiatan_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_kegiatan;
use App\Exports\meta_kegiatan_export;

class metaKegiatanViewController extends Controller
{
    public function index()
    {
        $list_meta_kegiatan = DB::table('meta_kegiatan')->where('status_tampil', '=', 'Tampil')->get();
        return view('view_metadata_kegiatan', compact('list_meta_kegiatan'));
    }
    
    public function show($id)
    {
        $data2 = DB::table('metadata')
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
        ->where('meta_kegiatan.b0r1', '=', $id)
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('metadata.meta__indikator_id')->get();
        
        $data = DB::table('meta_kegiatan')
  
        ->where('meta_kegiatan.b0r1', '=', $id)
        
       ->get();
        
        
        return view('show_metadata_kegiatan', compact('data','data2'));
    }
    
    public function export(Request $request)
    {
        $kegiatan = meta_kegiatan::find($request->id);
        $file = 'Metadata Kegiatan_'.$kegiatan->b0r1.'.xlsx';
        return Excel::download(new meta_kegiatan_export($request->id), $file);
    }
}
