<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forum;
use App\Models\arc;
use App\Models\master_opd;
use Validator;
use Auth;
use Session;
class ForumController extends Controller
{
    public function index() {

    $forums = forum::all();
    $arcs = arc::all();
    $arc_edit = arc::where('organisasi', Auth::user()->organisasi )->get();
    
    $forum_ke = forum::count('id');
    $opds = master_opd::orderBy('nama_opd')->get();

    return view( 'forum', compact('forums','arcs','forum_ke','arc_edit','opds') )->with('k', (request()->input('page', 1) - 1) * 5);
    }
    
    public function update_arc($id)
    {
    	$category = arc::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_forum($id)
    {
    	$category = forum::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function edit_arc(Request $request, $id)
    {

    
      arc::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_data' => $request->nama_data,
        'tanggal_rilis' => $request->tanggal_rilis,
        'wilayah' => $request->wilayah,
            'tahun' => $request->tahun,
    

     
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
    public function edit_forum(Request $request, $id)
    {

            
      forum::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'topik' => $request->topik,
        'pimpinan_forum' => $request->pimpinan_forum,
        'tempat_forum' => $request->tempat_forum,
        'tanggal_forum' => $request->tanggal_forum,

     
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
    public function edit_undangan(Request $request){
        if($request->hasFile('undangan_forum2')){
        
            $file = $request->file('undangan_forum2');
            $name_undangan = time(). '.' . $request->file('undangan_forum2')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name_undangan);
            
      
            // get customer
          
            $customer = forum::find($request->id);
           
            $customer->undangan_forum = $name_undangan;
          
            $customer->save();
    
            return back()->with('success','Undangan Berhasil Diupdate');
        }   
    }
    
    public function edit_notulen(Request $request){
        if($request->hasFile('notulen_forum2')){
        
            $file = $request->file('notulen_forum2');
            $name_notulen = time(). '.' . $request->file('notulen_forum2')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name_notulen);
            
      
            // get customer
          
            $customer = forum::find($request->id);
           
            $customer->notulen_forum = $name_notulen;
          
            $customer->save();
    
            return back()->with('success','Notulen Berhasil Diupdate');
        }   
    }
    
    public function edit_daftarHadir(Request $request){
        if($request->hasFile('daftar_forum2')){
        
            $file = $request->file('daftar_forum2');
            $name_notulen = time(). '.' . $request->file('daftar_forum2')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name_notulen);
            
      
            // get customer
          
            $customer = forum::find($request->id);
           
            $customer->daftar_hadir = $name_notulen;
          
            $customer->save();
    
            return back()->with('success','Daftar Hadir Berhasil Diupdate');
        }   
    }
    
    public function edit_materi(Request $request){
        if($request->hasFile('materi_forum2')){
        
            $file = $request->file('materi_forum2');
            $name_notulen = time(). '.' . $request->file('materi_forum2')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name_notulen);
            
      
            // get customer
          
            $customer = forum::find($request->id);
           
            $customer->materi_forum = $name_notulen;
          
            $customer->save();
    
            return back()->with('success','Materi Berhasil Diupdate');
        }   
    }
    
    
    public function edit_foto(Request $request){
        if($request->hasFile('foto_forum2')){
        
            $file = $request->file('foto_forum2');
            $name_notulen = time(). '.' . $request->file('foto_forum2')->getClientOriginalName();
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
            $file->move($path, $name_notulen);
            
      
            // get customer
          
            $customer = forum::find($request->id);
           
            $customer->foto_forum = $name_notulen;
          
            $customer->save();
    
            return back()->with('success','Foto Berhasil Diupdate');
        }   
    }
    
    public function destroy_arc(arc $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','ARC Berhasil Dihapus');
    }
    
    public function destroy_forum(forum $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','Forum Berhasil Dihapus');
    }

    public function store_forum(Request $request)
    {
        
         $request->validate([
            'topik' => 'required',
            'pimpinan_forum' => 'required',
            
            'topik' => 'required',
            'tempat_forum' => 'required',
            'tanggal_forum' => 'required',
   
           
          
        ]);    
        $path = public_path('documents'.DIRECTORY_SEPARATOR);
            if(is_null($request->file('undangan_forum'))){
            }
            else{
            $file = $request->file('undangan_forum');
            $name_undangan = time(). '.' . $request->file('undangan_forum')->getClientOriginalName();
            
            $file->move($path, $name_undangan);
            }
            
             if(is_null($request->file('notulen_forum'))){
            }
            else{
            $file_2 = $request->file('notulen_forum');
            $name_notulen = time(). '.' .$request->file('notulen_forum')->getClientOriginalName();
            $file_2->move($path, $name_notulen);
            }
            
            if(is_null($request->file('daftar_hadir'))){
            }
            else{
            $file_3 = $request->file('daftar_hadir');
            $name_daftar = time(). '.' .$request->file('daftar_hadir')->getClientOriginalName();
            $file_3->move($path, $name_daftar);
            }
            
            
            if(is_null($request->file('materi_forum'))){
            }
            else{
            $file_4 = $request->file('materi_forum');
            $name_materi = time(). '.' .$request->file('materi_forum')->getClientOriginalName();
            $file_4->move($path, $name_materi);
            }
            
            if(is_null($request->file('foto_forum'))){
            }
            else{
            $file_5 = $request->file('foto_forum');
            $name_foto = time(). '.' .$request->file('foto_forum')->getClientOriginalName();
            $file_5->move($path, $name_foto);
            }
        
         
         
          $user = new forum;
            $user->topik = $request->topik;
            $user->pimpinan_forum = $request->pimpinan_forum;
            $user->tempat_forum = $request->tempat_forum;
            $user->tanggal_forum = $request->tanggal_forum;
            
            if(is_null($request->file('undangan_forum'))){
            }
            else{
            $user->undangan_forum = $name_undangan;
            }
            
            if(is_null($request->file('notulen_forum'))){
            }
            else{
            $user->notulen_forum = $name_notulen;
            }
            
            if(is_null($request->file('daftar_hadir'))){
            }
            else{
            $user->daftar_hadir = $name_daftar;
            }
            
            if(is_null($request->file('materi_forum'))){
            }
            else{
            $user->materi_forum = $name_materi;
            }
            
            if(is_null($request->file('foto_forum'))){
            }
            else{
            $user->foto_forum = $name_foto;
            }
           
            

            $simpan = $user->save();
            
        
    
          
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()->with(['success' => 'Berhasil Simpan'])->withInput($request->all);
    }
    
     public function store_arc(Request $request)
    {
        $org = Auth::user()->role;
        $request->validate([
            'nama_data' => 'required',
            'wilayah' => 'required',
            'tahun' => 'required',
            'tanggal_rilis' => 'required',
            
           
          
        ]);    
        
        if( ( $org == 'Admin BPS') || ($org == 'Sekretariat Forum') ){
        arc::Create(
     
       [
        'nama_data' => $request->nama_data,
        'wilayah' => $request->wilayah,
            'tahun' => $request->tahun,
        'tanggal_rilis' => $request->tanggal_rilis,
        'organisasi' => $request->organisasi_opd,

       ]
      );
        }
      else{
          arc::Create(
     
       [
        'nama_data' => $request->nama_data,
       'wilayah' => $request->wilayah,
            'tahun' => $request->tahun,
        'tanggal_rilis' => $request->tanggal_rilis,
        'organisasi' => Auth::user()->organisasi,

       ]
      );
      }
      
         
    
          
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()->with(['success' => 'Berhasil Simpan'])->withInput($request->all);
    }
    
 

}
