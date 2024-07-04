<?php

namespace App\Http\Controllers;
use App\Imports\rekomendasi_import; 
use Illuminate\Http\Request;
use App\Models\rekomendasi;
use App\Models\kompromin;
use Excel;
use Illuminate\Support\Facades\Storage;
use File;
use Carbon\Carbon;
use Auth;

class VerifikasiRekomendasi extends Controller
{
    public function index()
    {
        $rekomendasis = rekomendasi::all();
        $kompromins = kompromin::all();
        return view('verifikasi_rekomendasi',compact('rekomendasis', 'kompromins'))->with('k', (request()->input('page', 1) - 1) * 5)->with('l', (request()->input('page', 1) - 1) * 5);
        
    }

    public function update5($id)
    {
    	$category = rekomendasi::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    
    public function catatan_bps($id)
    {
    	$category = rekomendasi::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function catatan_walidata($id)
    {
    	$category = rekomendasi::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_kompromin_v($id)
    {
    	$category = kompromin::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
     public function edit_kompromin_v(Request $request, $id)
    {
      kompromin::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'b1r1_k' => $request->b1r1_k,
        'b1r2_k' => $request->b1r2_k,
        'b1r3a_k' => $request->b1r3a_k,
        'b1r3b_k' => $request->b1r3b_k,
        'b1r3c_k' => $request->b1r3c_k,

        'b2r1a_k' => $request->b2r1a_k,
        'b2r1b_k' => $request->b2r1b_k,
        'b2r1c_k' => $request->b2r1c_k,
        'b2r1d_k' => $request->b2r1d_k,
        'b2r1e_k' => $request->b2r1e_k,
        'b2r1f_k' => $request->b2r1f_k,
        'b2r2a_k' => $request->b2r2a_k,
        'b2r2b_k' => $request->b2r2b_k,
        'b2r2c_k' => $request->b2r2c_k,
        'b2r2d_k' => $request->b2r2d_k,
        'b2r2e_k' => $request->b2r2e_k,
        'b2r2f_k' => $request->b2r2f_k,
        'b2r3a_k' => $request->b2r3a_k,
        'b2r3b_k' => $request->b2r3b_k,

        'b3r1_k' => $request->b3r1_k,
        'b3r2a_k' => $request->b3r2a_k,
        'b3r2b_k' => $request->b3r2b_k,
        'b3r2c_k' => $request->b3r2c_k,
        'b3r2d_k' => $request->b3r2d_k,
        'b3r2e_k' => $request->b3r2e_k,

        'b4r1_k' => $request->b4r1_k,
        'b4r2_k' => $request->b4r2_k,
        'b4r3_k' => $request->b4r3_k,

        'b5r1_k' => $request->b5r1_k,
        'b5r2_k' => $request->b5r2_k,
        'b5r3_k' => $request->b5r3_k,
        'b5r4_k' => $request->b5r4_k,
        'b5r5_k' => $request->b5r5_k_k,
        'b5r6_k' => $request->b5r6_k,
        

        'b6r1_k' => $request->b6r1_k,
        'b6r2_k' => $request->b6r2_k,
        'b6r3a_k' => $request->b6r3a_k,
        'b6r3b_k' => $request->b6r3b_k,
        'b6r4_k' => $request->b6r4_k,
      

        'b7r1a_k' => $request->b7r1a_k,
        'b7r1b_k' => $request->b7r1b_k,
        'b7r1c_k' => $request->b7r1c_k,
        'b7r1d_k' => $request->b7r1d_k,
        'b7r2_k' => $request->b7r2_k,
        'b7r3_k' => $request->b7r3_k,
        'b7r4_k' => $request->b7r4_k,
     
        'b7r5a_k' => $request->b7r5a_k,
        'b7r5b_k' => $request->b7r5b_k,
       
        'b7r6_k' => $request->b7r6_k,
        
        'status_k' => $request->status_k,
        'komentar_k' => $request->komentar_k,
        'petugas' => $request->petugas,
        'tanggal_k' => Carbon::now()
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
     public function edit5(Request $request, $id)
    {
      rekomendasi::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'b1r1' => $request->b1r1,
        'b1r2' => $request->b1r2,
        'b1r3a' => $request->b1r3a,
        'b1r3b' => $request->b1r3b,
        'b1r3c' => $request->b1r3c,

        'b2r1a' => $request->b2r1a,
        'b2r1b' => $request->b2r1b,
        'b2r1c' => $request->b2r1c,
        'b2r1d' => $request->b2r1d,
        'b2r1e' => $request->b2r1e,
        'b2r2a' => $request->b2r2a,
        'b2r2b' => $request->b2r2b,
        'b2r2c' => $request->b2r2c,
        'b2r2d' => $request->b2r2d,
        'b2r2e' => $request->b2r2e,
        'b2r2f' => $request->b2r2f,
        'b2r3a' => $request->b2r3a,
        'b2r3b' => $request->b2r3b,

        'b3r1' => $request->b3r1,
        'b3r2' => $request->b3r2,
        'b3r3' => $request->b3r3,

        'b4r1' => $request->b4r1,
        'b4r2' => $request->b4r2,

        'b5r1' => $request->b5r1,
        'b5r2' => $request->b5r2,
        'b5r3' => $request->b5r3,
        'b5r4' => $request->b5r4,
        'b5r5' => $request->b5r5,
        'b5r6a' => $request->b5r6a,
        'b5r6b' => $request->b5r6b,
        'b5r7' => $request->b5r7,
        'b5r8' => $request->b5r8,
        'b5r9' => $request->b5r9,
        'b5r10' => $request->b5r10,
        'b5r11a' => $request->b5r11a,
        'b5r11b' => $request->b5r11b,

        'b6r1' => $request->b6r1,
        'b6r2' => $request->b6r2,
        'b6r3' => $request->b6r3,
        'b6r4' => $request->b6r4,
        'b6r5' => $request->b6r5,
        'b6r6' => $request->b6r6,
        'b6r7' => $request->b6r7,

        'b7r1a' => $request->b7r1a,
        'b7r1b' => $request->b7r1b,
        'b7r1c' => $request->b7r1c,
        'b7r2' => $request->b7r2,
        'b7r3' => $request->b7r3,
        'b7r4a' => $request->b7r4a,
        'b7r4b' => $request->b7r4b,
        'b7r4c' => $request->b7r4c,
        'b7r4d' => $request->b7r4d,
        'b7r4e' => $request->b7r4e,
        'b7r5a' => $request->b7r5a,
        'b7r5b' => $request->b7r5b,
        'b7r5c' => $request->b7r5c,
        'b7r5d' => $request->b7r5d,
        'b7r5e' => $request->b7r5e,
        'b7r6' => $request->b7r6,
        
         'status' => $request->status,
        'komentar' => $request->komentar,
        'petugas' => $request->petugas,
         'tanggal' => Carbon::now()
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    

    public function upload_surat(Request $request){
        if($request->hasFile('surat')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'surat' => 'required|mimes:pdf,xlx,csv|max:2048',
            ]);

            $file = $request->file('surat');
           $name = time(). '.' . $request->file('surat')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

            $user = Auth::user()->name;
            // get customer
          
            $customer = rekomendasi::find($request->id);
           
            $customer->surat_rekomendasi = $name;
          
            $customer->petugas = $user;
            $customer->save();
    
            return back();
        }   
    }
    
     public function upload_surat_kompromin(Request $request){
        if($request->hasFile('surat')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'surat' => 'required|mimes:pdf,xlx,csv|max:2048',
            ]);

            $file = $request->file('surat');
            $name = time().'.pdf';  
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

            $user = Auth::user()->name;
            // get customer
          
            $customer = kompromin::find($request->id);
           
            $customer->surat_rekomendasi = $name;
          
            $customer->petugas = $user;
            $customer->save();
    
            return back();
        }   
    }
}
