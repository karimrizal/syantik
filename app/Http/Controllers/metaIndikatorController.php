<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_indikator_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_indikator;
use Illuminate\Support\Facades\Redirect;
use Auth;

class metaIndikatorController extends Controller
{

    public function index()
    {
        $list_meta_indikator = meta_indikator::where('organisasi', Auth::user()->organisasi )->get();
        return view('metadata_indikator', compact('list_meta_indikator'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xlsx,xls'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new meta_indikator_import, $file);
            //return redirect()->back()->with(['success' => 'Upload Berhasil']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_indikator')->with(['success' => 'Upload Berhasil']);
        }else {
            //return redirect()->back()->with(['error' => 'Pilih File Terlebih Dahulu']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_indikator')->with(['error' => 'Pilih File Terlebih Dahulu']);
        }
    }

    public function deleteMetaIndikator($id)
    {
        $indikator = meta_indikator::find($id);
        $indikator->delete();
        return response()->json(['success' => 'Berhasil Menghapus']);
    }

    public function getMetaIndikatorById($id)
    {
        $indikator = meta_indikator::find($id);
        return response()->json($indikator);
    }

    public function edit($id)
    {
        $indikator = DB::table('meta_indikator')->where('id', '=', $id)->get();
        return view('edit_indikator', ['data' => $indikator]);
    }

    public function update(Request $request)
    {
        $indikator = meta_indikator::find($request->id);
        $indikator->ind_b1k2 = $request->ind_b1k2;
        $indikator->ind_b1k3 = $request->ind_b1k3;
        $indikator->ind_b1k4 = $request->ind_b1k4;
        $indikator->ind_b1k5 = $request->ind_b1k5;
        $indikator->ind_b1k6 = $request->ind_b1k6;
        $indikator->ind_b1k7 = $request->ind_b1k7;
        $indikator->ind_b1k8 = $request->ind_b1k8;
        $indikator->ind_b1k9 = $request->ind_b1k9;
        $indikator->ind_b1k10 = $request->ind_b1k10;
        $indikator->ind_b1k11 = $request->ind_b1k11;
        $indikator->ind_b1k12 = $request->ind_b1k12;
        $indikator->ind_b1k13 = $request->ind_b1k13;
        $indikator->ind_b1k14 = $request->ind_b1k14;
        $indikator->ind_b1k15 = $request->ind_b1k15;
        $indikator->ind_b1k16 = $request->ind_b1k16;
        $indikator->ind_b1k17 = $request->ind_b1k17;
        $indikator->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_indikator')->with(['success' => 'Berhasil Mengubah']);
    }
}
