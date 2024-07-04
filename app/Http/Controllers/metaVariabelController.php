<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_variabel_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_variabel;
use Illuminate\Support\Facades\Redirect;
use Auth;
class metaVariabelController extends Controller
{

    public function index()
    {
        $list_meta_variabel = meta_variabel::where('organisasi', Auth::user()->organisasi )->get();
        return view('metadata_variabel', compact('list_meta_variabel'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xlsx,xls'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new meta_variabel_import, $file);
            //return redirect('metadata_variabel')->with(['success' => 'Upload Berhasil']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_variabel')->with(['success' => 'Upload Berhasil']);
        }else {
            //return redirect('metadata_variabel')->with(['error' => 'Pilih File Terlebih Dahulu']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_variabel')->with(['error' => 'Pilih File Terlebih Dahulu']);
        }
    }

    public function deleteMetaVariabel($id)
    {
        $variabel = meta_variabel::find($id);
        $variabel->delete();
        return response()->json(['success' => 'Berhasil Menghapus']);
    }
    
    public function getMetaVariabelById($id)
    {
        $variabel = meta_variabel::find($id);
        return response()->json($variabel);
    }

    public function edit($id)
    {
        $variabel = DB::table('meta_variabel')->where('id', '=', $id)->get();
        return view('edit_variabel', ['data' => $variabel]);
    }

    public function update(Request $request)
    {
        $variabel = meta_variabel::find($request->id);
        $variabel->var_b1k2 = $request->var_b1k2;
        $variabel->var_b1k3 = $request->var_b1k3;
        $variabel->var_b1k4 = $request->var_b1k4;
        $variabel->var_b1k5 = $request->var_b1k5;
        $variabel->var_b1k6 = $request->var_b1k6;
        $variabel->var_b1k7 = $request->var_b1k7;
        $variabel->var_b1k8 = $request->var_b1k8;
        $variabel->var_b1k9 = $request->var_b1k9;
        $variabel->var_b1k10 = $request->var_b1k10;
        $variabel->var_b1k11 = $request->var_b1k11;
        $variabel->var_b1k12 = $request->var_b1k12;
        $variabel->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_variabel')->with(['success' => 'Berhasil Mengubah']);
    }
}
