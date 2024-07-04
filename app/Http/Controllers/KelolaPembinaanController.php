<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembinaan;
class KelolaPembinaanController extends Controller
{
    public function index() {

    $pembinaans = pembinaan::latest()->paginate();
  
    return view( 'kelola_pembinaan', compact('pembinaans') );
    }

    public function updatePembinaan($id)
    {
    	$category = pembinaan::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
     public function editPembinaan(Request $request, $id)
    {
      pembinaan::updateOrCreate(
       [
        'id' => $id
       ],
       [
    
         'status' => $request->status,
        'komentar' => $request->komentar,
        
       ]
      );

      return response()->json([ 'success' => true ]);

    }
}
