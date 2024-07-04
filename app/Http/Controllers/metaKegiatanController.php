<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\meta_kegiatan_import;  
use Excel;
use Illuminate\Support\Facades\DB;
use App\Models\meta_kegiatan;
use Illuminate\Support\Facades\Redirect;
use Auth;
class metaKegiatanController extends Controller
{
    public function index()
    {
        $list_meta_kegiatan = meta_kegiatan::where('organisasi', Auth::user()->organisasi )->get();
        return view('metadata_kegiatan', compact('list_meta_kegiatan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xlsx,xls'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new meta_kegiatan_import, $file);
            //return redirect()->back()->with(['success' => 'Upload Berhasil']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_kegiatan')->with(['success' => 'Upload Berhasil']);
        }else {
            //return redirect()->back()->with(['error' => 'Pilih File Terlebih Dahulu']);
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_kegiatan')->with(['error' => 'Pilih File Terlebih Dahulu']);
        }
    }

    public function deleteMetaKegiatan($id)
    {
        $kegiatan = meta_kegiatan::find($id);
        $kegiatan->delete();
        return response()->json(['success' => 'Berhasil Menghapus']);
    }

    public function getMetaKegiatanById($id)
    {
        $kegiatan = meta_kegiatan::find($id);
        return response()->json($kegiatan);
    }

    public function edit($id)
    {
        $kegiatan = DB::table('meta_kegiatan')->where('id', '=', $id)->get();
        return view('edit_kegiatan', ['data' => $kegiatan]);
    }

    public function update(Request $request)
    {
        $kegiatan = meta_kegiatan::find($request->id);
        $kegiatan->b0r1 = $request->b0r1;
        $kegiatan->b0r2 = $request->b0r2;
        $kegiatan->b0r3 = $request->b0r3;
        $kegiatan->b0r4 = $request->b0r4;
        $kegiatan->b0r5 = $request->b0r5;
        $kegiatan->b0r6 = $request->b0r6;
        $kegiatan->b1r1 = $request->b1r1;
        $kegiatan->b1r2 = $request->b1r2;
        $kegiatan->b1r2a = $request->b1r2a;
        $kegiatan->b1r2b = $request->b1r2b;
        $kegiatan->b1r2c = $request->b1r2c;
        $kegiatan->b2r1a = $request->b2r1a;
        $kegiatan->b2r1b = $request->b2r1b;
        $kegiatan->b2r2a = $request->b2r2a;
        $kegiatan->b2r2b = $request->b2r2b;
        $kegiatan->b2r2c = $request->b2r2c;
        $kegiatan->b2r2d = $request->b2r2d;
        $kegiatan->b2r2e = $request->b2r2e;
        $kegiatan->b3r1 = $request->b3r1;
        $kegiatan->b3r2 = $request->b3r2;
        $kegiatan->b3r3a_awal = $request->b3r3a_awal;
        $kegiatan->b3r3a_akhir = $request->b3r3a_akhir;
        $kegiatan->b3r3b_awal = $request->b3r3b_awal;
        $kegiatan->b3r3b_akhir = $request->b3r3b_akhir;
        $kegiatan->b3r3c_awal = $request->b3r3c_awal;
        $kegiatan->b3r3c_akhir = $request->b3r3c_akhir;
        $kegiatan->b3r3d_awal = $request->b3r3d_awal;
        $kegiatan->b3r3d_akhir = $request->b3r3d_akhir;
        $kegiatan->b3r3e_awal = $request->b3r3e_awal;
        $kegiatan->b3r3e_akhir = $request->b3r3e_akhir;
        $kegiatan->b3r3f_awal = $request->b3r3f_awal;
        $kegiatan->b3r3f_akhir = $request->b3r3f_akhir;
        $kegiatan->b3r3g_awal = $request->b3r3g_awal;
        $kegiatan->b3r3g_akhir = $request->b3r3g_akhir;
        $kegiatan->b4r1 = $request->b4r1;
        $kegiatan->b4r2 = $request->b4r2;
        $kegiatan->b4r3 = $request->b4r3;
        $kegiatan->b4r4 = $request->b4r4;
        $kegiatan->b4r5 = $request->b4r5;
        $kegiatan->b4r6 = $request->b4r6;
        $kegiatan->b4r7 = $request->b4r7;
        $kegiatan->b4r8 = $request->b4r8;
        $kegiatan->b5r1 = $request->b5r1;
        $kegiatan->b5r2 = $request->b5r2;
        $kegiatan->b5r3a = $request->b5r3a;
        $kegiatan->b5r3b = $request->b5r3b;
        $kegiatan->b5r4 = $request->b5r4;
        $kegiatan->b5r5 = $request->b5r5;
        $kegiatan->b5r6 = $request->b5r6;
        $kegiatan->b5r7 = $request->b5r7;
        $kegiatan->b5r8 = $request->b5r8;
        $kegiatan->b6r1 = $request->b6r1;
        $kegiatan->b6r2 = $request->b6r2;
        $kegiatan->b6r3 = $request->b6r3;
        $kegiatan->b6r4 = $request->b6r4;
        $kegiatan->b6r5 = $request->b6r5;
        $kegiatan->b6r6a = $request->b6r6a;
        $kegiatan->b6r6b = $request->b6r6b;
        $kegiatan->b6r7 = $request->b6r7;
        $kegiatan->b7r1a = $request->b7r1a;
        $kegiatan->b7r1b = $request->b7r1b;
        $kegiatan->b7r1c = $request->b7r1c;
        $kegiatan->b7r1d = $request->b7r1d;
        $kegiatan->b7r2 = $request->b7r2;
        $kegiatan->b7r3 = $request->b7r3;
        $kegiatan->b7r4 = $request->b7r4;
        $kegiatan->b8r1a = $request->b8r1a;
        $kegiatan->b8r1b = $request->b8r1b;
        $kegiatan->b8r1c = $request->b8r1c;
        $kegiatan->b8r2a = $request->b8r2a;
        $kegiatan->b8r2b = $request->b8r2b;
        $kegiatan->b8r2c = $request->b8r2c;
        $kegiatan->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/metadata_kegiatan')->with(['success' => 'Berhasil Mengubah']);
    }
}
