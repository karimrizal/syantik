<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Models\video;
use App\Models\pdf;
use App\Models\slide;
use App\Models\juknis;
use DataTables;

class BahanAjarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $posts = product::latest()->paginate();
        $videos = video::latest()->paginate();
        $pdfs = pdf::latest()->paginate();
        $slides = slide::latest()->paginate();
         $juknis = juknis::latest()->paginate();
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('bahan_ajar',compact('posts', 'videos', 'pdfs','slides','juknis'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('j', (request()->input('page', 1) - 1) * 5)
            ->with('k', (request()->input('page', 1) - 1) * 5)
            ->with('l', (request()->input('page', 1) - 1) * 5)
            ->with('m', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('posts.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        product::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()
                        ->with('success','Post created successfully.');
    }

    public function store2(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama_video' => 'required',
            'link_video' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        video::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()
                        ->with('success','Post created successfully.');
    }

    public function store3(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama_pdf' => 'required',
            'link_pdf' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        pdf::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()
                        ->with('success','Post created successfully.');
    }
    
    
     public function store4(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama_slide' => 'required',
            'link_slide' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        slide::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()
                        ->with('success','Post created successfully.');
    }
    
    public function store5(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama_juknis' => 'required',
            'link_juknis' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        juknis::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()
                        ->with('success','Post created successfully.');
    }
  
    public function show(product $post)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('posts.show',compact('post'));
    }
  

    public function edit(Request $request, $id)
    {
      product::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'name' => $request->name,
        'detail' => $request->detail,
       ]
      );

      return response()->json([ 'success' => true ]);

    }

    public function edit2(Request $request, $id)
    {
      video::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_video' => $request->nama_video,
        'link_video' => $request->link_video,
       ]
      );

      return response()->json([ 'success' => true ]);

    }

    public function edit3(Request $request, $id)
    {
      pdf::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_pdf' => $request->nama_pdf,
        'link_pdf' => $request->link_pdf,
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
    public function edit_slide(Request $request, $id)
    {
      slide::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_slide' => $request->nama_slide,
        'link_slide' => $request->link_slide,
       ]
      );

      return response()->json([ 'success' => true ]);

    }
    
    public function edit_juknis(Request $request, $id)
    {
      juknis::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'nama_juknis' => $request->nama_juknis,
        'link_juknis' => $request->link_juknis,
       ]
      );

      return response()->json([ 'success' => true ]);

    }
  
    public function update($id)
    {
    	$category = product::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }


    public function update2($id)
    {
    	$category = video::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function update3($id)
    {
    	$category = pdf::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
     public function update_slide($id)
    {
    	$category = slide::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_juknis($id)
    {
    	$category = juknis::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
  
    public function destroy(product $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }

    public function destroy2(video $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }

    public function destroy3(pdf $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }
    
    public function destroy_slide(slide $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }
    
     public function destroy_juknis(juknis $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }
}