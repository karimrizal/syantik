<?php

namespace App\Http\Controllers;
use App\Imports\rekomendasi_import;
use App\Imports\kompromin_import;
use Illuminate\Http\Request;
use App\Models\rekomendasi;
use App\Models\kompromin;
use App\Models\daftar_rekomendasi;
use Excel;
use Illuminate\Support\Facades\Storage;
use File;
use Auth;

class RekomendasiController extends Controller
{
    public function index()
    {
        $rekomendasis = daftar_rekomendasi::where('organisasi', Auth::user()->idkab )->where('status', 1 )->get();
        $kompromins = kompromin::where('organisasi', Auth::user()->organisasi )->get();
        return view('rekomendasi',compact('rekomendasis','kompromins'))->with('k', (request()->input('page', 1) - 1) * 5)->with('l', (request()->input('page', 1) - 1) * 5);
        
    }

    public function store(Request $request)
    {
     
            $request->validate([
            'file' => 'required',
          
            
            'file_rekomendasi' => 'required',
            
        ]);
       
            $file = $request->file('file');
            $name = time(). '.' . $request->file('file')->getClientOriginalName(); 
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            
            
            if(is_null($request->file('file_pengantar'))){
            }
            else{

            $file_2 = $request->file('file_pengantar');
            $name_2 = time(). '.' . $request->file('file_pengantar')->getClientOriginalName();
            }
            
            
            if(is_null($request->file('file_instrumen'))){
            }
            else{
            $file_3 = $request->file('file_instrumen');
            $name_3 = time(). '.' . $request->file('file_instrumen')->getClientOriginalName(); 
            }
            
            $file_4 = $request->file('file_rekomendasi');
            $name_4 = time(). '.' . $request->file('file_rekomendasi')->getClientOriginalName();
            
            $user = new daftar_rekomendasi;
            $user->nama_kegiatan = $request->nama_kegiatan;
            $user->tahun = $request->tahun;
            $user->dinas = $request->dinas;
            
            if(is_null($request->file('file_pengantar'))){
            }
            else{
            $user->surat_pengantar = $name_2;
            }
           
            
            
            
            $user->formulir = $name;
             if(is_null($request->file('file_instrumen'))){
            }
            else{
            $user->instrumen = $name_3;
            }
            
            $user->rekomendasi = $name_4;
            $user->organisasi = Auth::user()->idkab;
            $simpan = $user->save();
            
            $file->move($path, $name);
            
            if(is_null($request->file('file_pengantar'))){
            }
            else{
            $file_2->move($path, $name_2);
            }
            
            
            if(is_null($request->file('file_instrumen'))){
            }
            else{
           $file_3->move($path, $name_3);
            }
            
            $file_4->move($path, $name_4);
          
            
            // get customer
          
       
           
            return redirect('/rekomendasi')->with(['success' => 'Upload Berhasil']);
        
    }
    
    public function store2(Request $request)
    {
     
            $request->validate([
            'file' => 'required|mimes:xlsx,xls',
            'file_pengantar' => 'required',
            'file_instrumen' => 'required',
            
        ]);
        
            $file = $request->file('file');
            $name = time(). '.' . $request->file('file')->getClientOriginalName(); 
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            
            $file_2 = $request->file('file_pengantar');
            $name_2 = time(). '.' . $request->file('file_pengantar')->getClientOriginalName();
            
            $file_3 = $request->file('file_instrumen');
            $name_3 = time(). '.' . $request->file('file_instrumen')->getClientOriginalName(); 
            
            
            $export = new kompromin_import();
            $export->setYear($name);
            $export->setYear2($name_2);
            $export->setYear3($name_3);
            
            Excel::import($export, $file);
            
            $file->move($path, $name);
            $file_2->move($path, $name_2);
            $file_3->move($path, $name_3);
          
            
            // get customer
          
       
           
            return redirect('/rekomendasi')->with(['success' => 'Upload Berhasil']);
        
    }

    public function destroy4(daftar_rekomendasi $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return back();
    }
    
    public function destroy_kompromin(kompromin $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return back();
    }


    public function edit4(Request $request, $id)
    {
      daftar_rekomendasi::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_kegiatan' => $request->nama_kegiatan,
        'tahun' => $request->tahun,
        'dinas' => $request->dinas,
       
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
     public function edit_kompromin(Request $request, $id)
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
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
       public function upload_suratPengantar(Request $request){
        if($request->hasFile('surat_pengantar')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'surat_pengantar' => 'required',
            ]);

            $file = $request->file('surat_pengantar');
            $name = time(). '.' . $request->file('surat_pengantar')->getClientOriginalName(); 
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = daftar_rekomendasi::find($request->id);
           
            $customer->surat_pengantar = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }
    
    
    public function upload_formulir(Request $request){
        if($request->hasFile('formulir')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'formulir' => 'required',
            ]);

            $file = $request->file('formulir');
            $name = time(). '.' . $request->file('formulir')->getClientOriginalName(); 
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = daftar_rekomendasi::find($request->id);
           
            $customer->formulir = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }
    
    
     public function upload_rekomendasi(Request $request){
        if($request->hasFile('rekomendasi')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'rekomendasi' => 'required',
            ]);

            $file = $request->file('rekomendasi');
            $name = time(). '.' . $request->file('rekomendasi')->getClientOriginalName(); 
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = daftar_rekomendasi::find($request->id);
           
            $customer->rekomendasi = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }
    
    public function upload_suratPengantar2(Request $request){
        if($request->hasFile('surat_pengantar')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
            
            $request->validate([
                'surat_pengantar' => 'required|mimes:pdf,xlx,csv|max:2048',
            ]);

            $file = $request->file('surat_pengantar');
            $name = time(). '.' . $request->file('surat_pengantar')->getClientOriginalName();  
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = kompromin::find($request->id);
           
            $customer->surat_pengantar = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }
    
    public function upload_instrumen(Request $request){
        if($request->hasFile('instrumen')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
       
            $file = $request->file('instrumen');
            $name = time(). '.' . $request->file('instrumen')->getClientOriginalName();
       
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = daftar_rekomendasi::find($request->id);
           
            $customer->instrumen = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }
    
    public function upload_instrumen2(Request $request){
        if($request->hasFile('instrumen')){
            //$path = Storage::putFile('public/customer/uploads', new File(request('surat')));
       
            $file = $request->file('instrumen');
            $name = time(). '.' . $request->file('instrumen')->getClientOriginalName();
       
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name);

      
            // get customer
          
            $customer = kompromin::find($request->id);
           
            $customer->instrumen = $name;
          
        
            $customer->save();
    
            return back();
        }   
    }

    public function update4($id)
    {
    	$category = daftar_rekomendasi::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
     public function update_kompromin($id)
    {
    	$category = kompromin::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

}
