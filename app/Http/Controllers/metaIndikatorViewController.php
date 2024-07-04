<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_indikator_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_indikator;
use App\Exports\meta_indikator_export;

class metaIndikatorViewController extends Controller
{
    public function index()
    {
        $list_meta_indikator = DB::table('meta_indikator')->where('status_tampil', '=', 'Tampil')->get();
        return view('view_metadata_indikator', compact('list_meta_indikator'));
    }
    
    public function show($id)
    {
        $data2 = DB::table('metadata')
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->where('meta_indikator.ind_b1k2', '=', $id)
        ->where('meta_variabel.status_tampil', '=', 'Tampil')->get();
        
        $data = DB::table('meta_indikator')

        ->where('meta_indikator.ind_b1k2', '=', $id)
        ->get();
        
        return view('show_metadata_indikator', compact('data','data2'));
    }
    
    public function export(Request $request)
    {
        $indikator = meta_indikator::find($request->id);
        $file = 'Metadata Indikator_'.$indikator->ind_b1k2.'.xlsx';
        return Excel::download(new meta_indikator_export($request->id), $file);
    }
}
