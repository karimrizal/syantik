<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_variabel_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_variabel;
use App\Exports\meta_variabel_export;

class metaVariabelViewController extends Controller
{
    public function index()
    {
        $list_meta_variabel = DB::table('meta_variabel')->where('status_tampil', '=', 'Tampil')->get();
        return view('view_metadata_variabel', compact('list_meta_variabel'));
    }
    
    public function show($id)
    {
        $data2 = DB::table('metadata')
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->where('meta_variabel.var_b1k2', '=', $id)
        ->where('meta_indikator.status_tampil', '=', 'Tampil')->get();
        
        $data = DB::table('meta_variabel')

        ->where('meta_variabel.var_b1k2', '=', $id)
        ->get();
        
        
        return view('show_metadata_variabel', compact('data','data2'));
    }
    
    public function export(Request $request)
    {
        $variabel = meta_variabel::find($request->id);
        $file = 'Metadata Variabel_'.$variabel->var_b1k2.'.xlsx';
        return Excel::download(new meta_variabel_export($request->id), $file);
    }
}
