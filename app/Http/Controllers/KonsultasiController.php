<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konsultasi;
use App\Models\pembinaan;
use App\Models\master_opd;
use Validator;

use Session;
class KonsultasiController extends Controller
{
    public function index() {

    $pembinaans = pembinaan::all();
    $opds = master_opd::orderBy('nama_opd')->get();
    $opd = master_opd::all();

    return view( 'konsultasi', compact('pembinaans','opds','opd') );
    }

    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'email' => 'required|email',
            'pertanyaan' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        konsultasi::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function store2(Request $request)
    {

        $rules = [
            'nama_pembinaan' => 'required',
            'instansi_pembinaan' => 'required',
            'email_pembinaan' => 'required|email',
            'jabatan' => 'required',
            'nomor_hp' => 'required',
           'pembinaan' => 'required|min:2',
        ];
    
        $messages = [
            'nama_pembinaan.required'         => 'Nama Lengkap wajib diisi',
            'instansi_pembinaan.required'         => 'Harus Pilih Instansi',
            'email_pembinaan.required'        => 'Email wajib diisi',
            'email_pembinaan.email'           => 'Email tidak valid',
            'jabatan.required'         => 'Jabatan wajib diisi',
            'nomor_hp.required'         => 'Nomor HP wajib diisi',
            'pembinaan.min'         => 'Harus Pilih Salah Satu Jenis Pembinaan',
        
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
     

        $input = $request->all();
        $input['pembinaan'] = $request->input('pembinaan');
        
        pembinaan::create($input);

        return redirect()->back()->with(['success2' => 'Terima kasih, silahkan menunggu konfirmasi dari BPS Provinsi Sulawesi Tenggara,
        Tim kami akan menghubungi anda'])->withInput($request->all);

    }

}
