<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Validator;

use Session;
class UserController extends Controller
{
    //
    public function index()
    {
        $users = user::all();
        return view('user',compact('users'))->with('k', (request()->input('page', 1) - 1) * 5);
        
    }

    public function register(Request $request)
    {
       

      $rules = [
        'name'                  => 'required|min:3|max:135',
        'email'                 => 'required|email|unique:users,email',
        'password'              => 'required|confirmed'
    ];

    $messages = [
        'name.required'         => 'Nama Lengkap wajib diisi',
        'name.min'              => 'Nama lengkap minimal 3 karakter',
        'name.max'              => 'Nama lengkap maksimal 35 karakter',
        'email.required'        => 'Email wajib diisi',
        'email.email'           => 'Email tidak valid',
        'email.unique'          => 'Email sudah terdaftar',
        'password.required'     => 'Password wajib diisi',
        'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->all);
    }
  
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->role = $request->role;
        $user->idkab = $request->idkab;
        $user->organisasi = $request->organisasi;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Tambah User Berhasil');
            return redirect()->back();
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->back();
        }
    }

    public function destroy5(user $post)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
       $post->delete();
        
        return redirect()->back()
                        ->with('success','User Berhasil Dihapus');
    }

    public function update6($id)
    {
    	$category = user::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function edit6(Request $request, $id)
    {

    $password = Hash::make($request->password);
      user::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'name' => $request->name,
        'role' => $request->role,
       

     
       ]
      );

      return response()->json([ 'success' => true ]);

    }
}
