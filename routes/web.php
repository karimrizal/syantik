<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LihatController;
use App\Http\Controllers\BahanAjarController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\metaKegiatanController;
use App\Http\Controllers\metaIndikatorController;
use App\Http\Controllers\metaVariabelController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\metaKegiatanViewController;
use App\Http\Controllers\metaIndikatorViewController;
use App\Http\Controllers\metaVariabelViewController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\VerifikasiRekomendasi;
use App\Http\Controllers\VerifikasiDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LihatRekomendasiController;
use App\Http\Controllers\verifikasiVariabelController;
use App\Http\Controllers\verifikasiIndikatorController;
use App\Http\Controllers\verifikasiKegiatanController;
use App\Http\Controllers\UserOPDController;
use App\Http\Controllers\KelolaPembinaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\VerifikasiDataOPD;
use App\Http\Controllers\VerifikasiRekomendasiBPS;
use App\Http\Controllers\VerifikasiRekomendasiOPD;
use App\Http\Controllers\DDAController;
use App\Models\master_opd;
use Illuminate\Http\Request;
use App\Models\master_lihat;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MetadataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
     $q = $request->input('nama');
        $tahun = $request->input('tahun');
        $idkab = 7400;   
            
        Session::put('key3', $q);
        Session::put('key', $tahun);
        Session::put('key2', $idkab);
        
        $lihats = master_lihat::groupby('nama')->where('status', 1)->get();
        
        if(!empty($q))
        {
          return redirect::to('https://webapps.bps.go.id/sultra/syantik/pencarian');
        }
        else
        {
            return view('welcome', compact('lihats'));
        }
});

Route::get('search', function (Request $request) {
        $query = $request->get('query');
        $filterResult = master_lihat::select('nama')->where('nama', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
}); 


Route::get('form-metadata', [MetadataController::class, 'index']);
Route::get('daftar-metadata', [MetadataController::class, 'index_daftar']);
Route::get('metadata/{id}', [MetadataController::class, 'lihatMetadata'])->where('id','(.*)');
Route::get('view-metadata/{id}', [MetadataController::class, 'viewMetadata'])->where('id','(.*)');

Route::get('edit-variabel/{id}', [MetadataController::class, 'editVariabel'])->where('id','(.*)');
Route::get('edit-indikator/{id}', [MetadataController::class, 'editIndikator'])->where('id','(.*)');

Route::get('view-indikator/{id}/indikator', [MetadataController::class, 'viewIndikator'])->where('id','(.*)');
Route::get('view-variabel/{id}/variabel', [MetadataController::class, 'viewVariabel'])->where('id','(.*)');

Route::post('metadata.simpan',  [MetadataController::class, 'simpan'])->name('metadata.simpan');

Route::post('indikator.simpan',  [MetadataController::class, 'simpanIndikator'])->name('indikator.simpan');
Route::post('variabel.simpan',  [MetadataController::class, 'simpanVariabel'])->name('variabel.simpan');
Route::post('metadata.update',  [MetadataController::class, 'update'])->name('metadata.update');
Route::post('variabel.update',  [MetadataController::class, 'updateVariabel'])->name('variabel.update');
Route::post('indikator.update',  [MetadataController::class, 'updateIndikator'])->name('indikator.update');

Route::get('data_opd/{id}', [LihatController::class, 'index_dinas_kesehatan']);

Route::get('/data', [DataController::class, 'index']);
Route::get('/lihat_data', [LihatController::class, 'index']);
Route::get('/daftar_arc2', [LihatController::class, 'index']);
Route::get('business/{id}', [LihatController::class, 'displayTabel'])->where('id','(.*)');


Route::get('autocomplete', [ModulController::class, 'search'])->name('autocomplete');

Route::get('pencarian', [ModulController::class, 'pencarian']);
Route::get('tes_home', [ModulController::class, 'tes_home']);
Route::get('/modul', [ModulController::class, 'index']);
Route::get('/beranda', [ModulController::class, 'beranda']);
Route::get('/cari-home', [ModulController::class, 'cariHome']);




Route::get('modul_pdf', [ModulController::class, 'index']);
Route::get('modul_ebook', [ModulController::class, 'index']);
Route::get('modul_slide', [ModulController::class, 'index']);
Route::get('modul_glosarium', [ModulController::class, 'index']);
Route::get('modul_juknis', [ModulController::class, 'index']);

Route::get('/konsultasi', [KonsultasiController::class, 'index']);


Route::get('konsultasi_pembinaan', [KonsultasiController::class, 'index']);
Route::get('konsultasi_faq', [KonsultasiController::class, 'index']);


Route::resource('post', KonsultasiController::class);

Route::get('/lihat_rekomendasi', [LihatRekomendasiController::class, 'index']);

Route::get('indikator/{id}', [LihatController::class, 'displayIndikator']);
Route::get('variabel/{id}', [LihatController::class, 'displayVariabel']);

Route::get('data/cari', [LihatController::class, 'cari']);

Route::get('modul', [ModulController::class, 'cari']);
Route::get('modul_pdf', [ModulController::class, 'caripdf']);
Route::get('modul_slide', [ModulController::class, 'carislide']);
Route::get('modul_juknis', [ModulController::class, 'carijuknis']);

Route::post('/a', [DataController::class, 'storeData']);
Route::post('/b', [DataController::class, 'storeData2']);
Route::post('/c', [DataController::class, 'storeData3']);

Route::post('pembinaans.store2',  [KonsultasiController::class, 'store2'])->name('pembinaans.store2');


Route::get('/view_metadata_kegiatan', [metaKegiatanViewController::class, 'index'])->name('metaKegiatanView.index');
Route::get('kegiatan/{id}', [metaKegiatanViewController::class, 'show'])->where('id','(.*)');
Route::get('/export_kegiatan/{id}', [metaKegiatanViewController::class, 'export'])->where('id','(.*)');
Route::get('/view_metadata_indikator', [metaIndikatorViewController::class, 'index'])->name('metaIndikatorView.index');
Route::get('indikator/{id}', [metaIndikatorViewController::class, 'show'])->where('id','(.*)');
Route::get('/export_indikator/{id}', [metaIndikatorViewController::class, 'export'])->where('id','(.*)');
Route::get('/view_metadata_variabel', [metaVariabelViewController::class, 'index'])->name('metaVariabelView.index');
Route::get('variabel/{id}', [metaVariabelViewController::class, 'show'])->where('id','(.*)');
Route::get('/export_variabel/{id}', [metaVariabelViewController::class, 'export'])->where('id','(.*)');

Route::get('/export', [DataController::class, 'UnduhExcel']);
Route::get('/export_dua', [DataController::class, 'UnduhExcel2']);
Route::get('/export_tiga/{id}', [DataController::class, 'UnduhExcel3'])->where('id','(.*)');
Route::get('/export_empat', [DataController::class, 'UnduhExcel4']);


Route::resource('postss', DataController::class);
Route::resource('postsss', VerifikasiDataController::class);

Route::resource('verif_opd', VerifikasiDataOPD::class);

Route::get('postsss.show',  [VerifikasiDataController::class, 'show'])->name('postsss.show')->where('id','(.*)');
Route::get('postsss.show2',  [VerifikasiDataController::class, 'show2'])->name('postsss.show2')->where('id','(.*)');
Route::get('postsss.show3',  [VerifikasiDataController::class, 'show3'])->name('postsss.show3')->where('id','(.*)');
Route::get('postsss.show4',  [VerifikasiDataController::class, 'show4'])->name('postsss.show4')->where('id','(.*)');
Route::delete('/postss/{post}/{id}',  [DataController::class, 'destroy'])->name('postss.destroy')->where('id','(.*)');


Route::get('data.displayTabel2/{id}',  [LihatController::class, 'displayTabel2'])->name('data.displayTabel2')->where('id','(.*)');

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);


Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [DataController::class, 'index'])->name('home');
    Route::get('update_data', [DataController::class, 'index']);
    Route::get('daftar_tabel', [DataController::class, 'index']);
    Route::get('input_metadata', [DataController::class, 'index']);
    
    Route::get('metadata_data', [DataController::class, 'index2'])->name('metadata_data');
    
    Route::resource('posts', BahanAjarController::class);
    
    Route::delete('/posts/{post}',  [BahanAjarController::class, 'destroy'])->name('posts.destroy');

Route::delete('/posts2/{post}',  [BahanAjarController::class, 'destroy2'])->name('posts.destroy2');

Route::delete('/posts3/{post}',  [BahanAjarController::class, 'destroy3'])->name('posts.destroy3');

Route::delete('/slide/{post}',  [BahanAjarController::class, 'destroy_slide'])->name('slide.destroy_slide');

Route::delete('/juknis/{post}',  [BahanAjarController::class, 'destroy_juknis'])->name('juknis.destroy_juknis');

Route::post('posts.store',  [BahanAjarController::class, 'store'])->name('posts.store');

Route::post('posts.store2',  [BahanAjarController::class, 'store2'])->name('posts.store2');

Route::post('posts.store3',  [BahanAjarController::class, 'store3'])->name('posts.store3');

Route::post('posts.store4',  [BahanAjarController::class, 'store4'])->name('posts.store4');

Route::post('posts.store5',  [BahanAjarController::class, 'store5'])->name('posts.store5');
    
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
   Route::get('bahan', [BahanAjarController::class, 'index']);
   Route::get('bahan_video', [BahanAjarController::class, 'index']);
   Route::get('bahan_pdf', [BahanAjarController::class, 'index']);
   Route::get('bahan_slide', [BahanAjarController::class, 'index']);
   Route::get('bahan_juknis', [BahanAjarController::class, 'index']);
   
   
     Route::get('dashboard', [DashboardController::class, 'index']);
   
     Route::get('/ket_wali/{id}/edit_ketWali',  [VerifikasiDataController::class, 'update_ketWali'])->name('ket_wali.update_ketWali');
   Route::get('/ket_bps/{id}/edit_ketBps',  [VerifikasiDataController::class, 'update_ketBps'])->name('ket_bps.update_ketBps');
   Route::get('/ket_opd/{id}/edit_ketOpd',  [VerifikasiDataController::class, 'update_ketOpd'])->name('ket_opd.update_ketOpd');
   Route::get('/ket_detail/{id}/edit_detail',  [VerifikasiDataController::class, 'update_ketDetail'])->name('ket_detail.update_ketDetail');
   
   Route::get('/catatan_bps/{id}/edit_catatanBPS',  [VerifikasiRekomendasi::class, 'catatan_bps'])->name('catatan_bps.catatan_bps');
   Route::get('/catatan_walidata/{id}/edit_catatanWali',  [VerifikasiRekomendasi::class, 'catatan_walidata'])->name('catatan_walidata.catatan_walidata');
   
    Route::get('/ket_perbaikan/{id}/edit_ketPerbaikan',  [VerifikasiDataController::class, 'update_ketPerbaikan'])->name('ket_perbaikan.update_ketPerbaikan');
   
    Route::get('/color/{id}/edit',  [BahanAjarController::class, 'update'])->name('color.update');
    Route::post('/color/{id}',  [BahanAjarController::class, 'edit'])->name('color.edit');
    
    Route::get('/slide/{id}/edit_slide',  [BahanAjarController::class, 'update_slide'])->name('slide.update_slide');
    Route::post('/slide/{id}',  [BahanAjarController::class, 'edit_slide'])->name('slide.edit_slide');
    
    Route::get('/juknis/{id}/edit_juknis',  [BahanAjarController::class, 'update_juknis'])->name('juknis.update_juknis');
    Route::post('/juknis/{id}',  [BahanAjarController::class, 'edit_juknis'])->name('juknis.edit_juknis');
    
     Route::get('/color2/{id}/edit2',  [BahanAjarController::class, 'update2'])->name('color.update2');
    Route::post('/color2/{id}',  [BahanAjarController::class, 'edit2'])->name('color.edit2');

    Route::get('/color3/{id}/edit3',  [BahanAjarController::class, 'update3'])->name('color.update3');
    Route::post('/color3/{id}',  [BahanAjarController::class, 'edit3'])->name('color.edit3');
    
Route::post('/non_arc', [DataController::class, 'import']);

Route::post('/arc', [DataController::class, 'import_ARC']);

Route::get('/metadata_kegiatan', [metaKegiatanController::class, 'index'])->name('metaKegiatan.index');
Route::post('/metadata_kegiatan', [metaKegiatanController::class, 'store'])->name('metaKegiatan.store');
Route::get('/metadata_kegiatan/{id}', [metaKegiatanController::class, 'getMetaKegiatanById']);
Route::get('edit_metadata_kegiatan/{id}', [metaKegiatanController::class, 'edit']);
Route::post('edit_metadata_kegiatan', [metaKegiatanController::class, 'update']);
Route::delete('/metadata_kegiatan/{id}', [metaKegiatanController::class, 'deleteMetaKegiatan']);

Route::get('/metadata_indikator', [metaIndikatorController::class, 'index'])->name('metaIndikator.index');
Route::post('/metadata_indikator', [metaIndikatorController::class, 'store'])->name('metaIndikator.store');
Route::get('/metadata_indikator/{id}', [metaIndikatorController::class, 'getMetaIndikatorById']);
Route::get('edit_metadata_indikator/{id}', [metaIndikatorController::class, 'edit']);
Route::post('edit_metadata_indikator', [metaIndikatorController::class, 'update']);
Route::delete('/metadata_indikator/{id}', [metaIndikatorController::class, 'deleteMetaIndikator']);

Route::get('/metadata_variabel', [metaVariabelController::class, 'index'])->name('metaVariabel.index');
Route::post('/metadata_variabel', [metaVariabelController::class, 'store'])->name('metaVariabel.store');
Route::get('/metadata_variabel/{id}', [metaVariabelController::class, 'getMetaVariabelById']);
Route::get('edit_metadata_variabel/{id}', [metaVariabelController::class, 'edit']);
Route::post('edit_metadata_variabel', [metaVariabelController::class, 'update']);
Route::delete('/metadata_variabel/{id}', [metaVariabelController::class, 'deleteMetaVariabel']);

Route::get('/verifikasi_variabel', [verifikasiVariabelController::class, 'index'])->name('verifikasi_variabel.index');
Route::get('/verifikasi_variabel/{id}', [verifikasiVariabelController::class, 'verifikasi'])->where('id','(.*)');
Route::post('/verifikasi_variabel', [verifikasiVariabelController::class, 'submit'])->name('verifikasi_variabel.submit');


Route::get('/verifikasi_indikator', [verifikasiIndikatorController::class, 'index'])->name('verifikasi_indikator.index');
Route::get('/verifikasi_indikator_opd', [verifikasiIndikatorController::class, 'index2'])->name('verifikasi_indikator_opd.index2');

Route::get('/verifikasi_indikator/{id}', [verifikasiIndikatorController::class, 'verifikasi'])->where('id','(.*)');
Route::post('/verifikasi_indikator', [verifikasiIndikatorController::class, 'submit'])->name('verifikasi_indikator.submit');

Route::get('/verifikasi_indikator_wali/{id}', [verifikasiIndikatorController::class, 'verifikasi_wali'])->where('id','(.*)');
Route::post('/verifikasi_indikator_wali', [verifikasiIndikatorController::class, 'submit_wali'])->name('verifikasi_indikator_wali.submit');

Route::get('/verifikasi_indikator_opd/{id}', [verifikasiIndikatorController::class, 'verifikasi_opd'])->where('id','(.*)');
Route::post('/verifikasi_indikator_opd', [verifikasiIndikatorController::class, 'submit_opd'])->name('verifikasi_indikator_opd.submit');




Route::post('/verifikasi_data', [VerifikasiDataController::class, 'submit'])->name('verifikasi_data.submit');
Route::post('/verifikasi_data2', [VerifikasiDataController::class, 'submit2'])->name('verifikasi_data2.submit2');
Route::post('/verifikasi_data3', [VerifikasiDataController::class, 'submit3'])->name('verifikasi_data3.submit3');

Route::get('/verifikasi_kegiatan', [verifikasiKegiatanController::class, 'index'])->name('verifikasi_kegiatan.index');
Route::get('/verifikasi_kegiatan_opd', [verifikasiKegiatanController::class, 'index2'])->name('verifikasi_kegiatan_opd.index2');
Route::get('/verifikasi_variabel_opd', [verifikasiVariabelController::class, 'index2'])->name('verifikasi_variabel_opd.index2');

Route::get('/verifikasi_kegiatan/{id}', [verifikasiKegiatanController::class, 'verifikasi'])->where('id','(.*)');
Route::post('/verifikasi_kegiatan', [verifikasiKegiatanController::class, 'submit'])->name('verifikasi_kegiatan.submit');


Route::get('/verifikasi_kegiatan_wali/{id}', [verifikasiKegiatanController::class, 'verifikasi_wali'])->where('id','(.*)');
Route::post('/verifikasi_kegiatan_wali', [verifikasiKegiatanController::class, 'submit_wali'])->name('verifikasi_kegiatan_wali.submit_wali');

Route::get('/verifikasi_kegiatan_opd/{id}', [verifikasiKegiatanController::class, 'verifikasi_opd'])->where('id','(.*)');
Route::post('/verifikasi_kegiatan_opd', [verifikasiKegiatanController::class, 'submit_opd'])->name('verifikasi_kegiatan_opd.submit_opd');


Route::get('/verifikasi_variabel_wali/{id}', [verifikasiVariabelController::class, 'verifikasi_wali'])->where('id','(.*)');
Route::post('/verifikasi_variabel_wali', [verifikasiVariabelController::class, 'submit_wali'])->name('verifikasi_variabel_wali.submit_wali');

Route::get('/verifikasi_variabel_opd/{id}', [verifikasiVariabelController::class, 'verifikasi_opd'])->where('id','(.*)');
Route::post('/verifikasi_variabel_opd', [verifikasiVariabelController::class, 'submit_opd'])->name('verifikasi_variabel_opd.submit_opd');





    Route::get('/verifikasi_rekomendasi', [VerifikasiRekomendasi::class, 'index'])->name('verifikasi_rekomendasi.index');
    Route::get('/verifikasi_kompromin', [VerifikasiRekomendasi::class, 'index'])->name('verifikasi_kompromin.index');
    
    Route::get('/verifikasi_rekomendasi_bps', [VerifikasiRekomendasiBPS::class, 'index'])->name('verifikasi_rekomendasi_bps.index');
    Route::get('/verifikasi_kompromin_bps', [VerifikasiRekomendasiBPS::class, 'index'])->name('verifikasi_kompromin_bps.index');
    
    Route::get('/verifikasi_rekomendasi_opd', [VerifikasiRekomendasiOPD::class, 'index'])->name('verifikasi_rekomendasi_opd.index');
    Route::get('/verifikasi_kompromin_opd', [VerifikasiRekomendasiOPD::class, 'index'])->name('verifikasi_kompromin_opd.index');
    
    Route::post('/customers', [VerifikasiRekomendasi::class, 'upload_surat'])->name('customers.upload_surat');
    
    Route::post('/customers2', [VerifikasiRekomendasi::class, 'upload_surat_kompromin'])->name('customers2.upload_surat_kompromin');
    
    Route::post('/rekomendasis', [RekomendasiController::class, 'upload_suratPengantar'])->name('rekomendasis.upload_suratPengantar');
    
    Route::post('/formulirs', [RekomendasiController::class, 'upload_formulir'])->name('formulirs.upload_formulir');
    
    Route::post('/rekomendasis3', [RekomendasiController::class, 'upload_rekomendasi'])->name('rekomendasis3.upload_rekomendasi');
    
    Route::post('/rekomendasis2', [RekomendasiController::class, 'upload_suratPengantar2'])->name('rekomendasis2.upload_suratPengantar2');
    
    

Route::post('/instrumen', [RekomendasiController::class, 'upload_instrumen']);
Route::post('/instrumen2', [RekomendasiController::class, 'upload_instrumen2']);
    
    Route::get('/color5/{id}/edit5',  [VerifikasiRekomendasi::class, 'update5'])->name('color.update5');
       Route::post('/color5/{id}',  [VerifikasiRekomendasi::class, 'edit5'])->name('color.edit5');
       
        Route::get('/verif_rekomendasi_bps/{id}/edit_bps',  [VerifikasiRekomendasiBPS::class, 'update_rekomendasi_bps'])->name('verif_rekomendasi_bps.update_rekomendasi_bps');
       Route::post('/verif_rekomendasi_bps/{id}',  [VerifikasiRekomendasiBPS::class, 'verif_rekomendasi_bps'])->name('verif_rekomendasi_bps.verif_rekomendasi_bps');
       
       Route::get('/color_kompromin_v/{id}/edit_kompromin_v',  [VerifikasiRekomendasi::class, 'update_kompromin_v'])->name('color_kompromin_v.update_kompromin_v');
       Route::post('/color_kompromin_v/{id}',  [VerifikasiRekomendasi::class, 'edit_kompromin_v'])->name('color_kompromin_v.edit_kompromin_v');
       
       
       Route::get('/color_kompromin_v_k/{id}/edit_kompromin_v_k',  [VerifikasiRekomendasiBPS::class, 'update_kompromin_v'])->name('color_kompromin_v_k.update_kompromin_v');
       Route::post('/color_kompromin_v_k/{id}',  [VerifikasiRekomendasiBPS::class, 'edit_kompromin_v'])->name('color_kompromin_v_k.edit_kompromin_v');
 
    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
    Route::get('/kompromin', [RekomendasiController::class, 'index'])->name('kompromin.index');
    
    
    
    Route::post('/rekomendasi', [RekomendasiController::class, 'store'])->name('rekomendasi.store');

    Route::get('/color4/{id}/edit4',  [RekomendasiController::class, 'update4'])->name('color.update4');
    Route::post('/color4/{id}',  [RekomendasiController::class, 'edit4'])->name('color.edit4');
    Route::delete('/posts4/{post}',  [RekomendasiController::class, 'destroy4'])->name('posts.destroy4');
        
        
         Route::get('/color_kompromin/{id}/edit_kompromin',  [RekomendasiController::class, 'update_kompromin'])->name('color_kompromin.update_kompromin');
    Route::post('/color_kompromin/{id}',  [RekomendasiController::class, 'edit_kompromin'])->name('color_kompromin.edit_kompromin');
        Route::delete('/kompromin/{post}',  [RekomendasiController::class, 'destroy_kompromin'])->name('kompromin.destroy_kompromin');
        
        Route::post('/e', [RekomendasiController::class, 'store']);
        
        Route::post('/f', [RekomendasiController::class, 'store2']);
        
        

Route::get('verifikasi_data', [VerifikasiDataController::class, 'index']);

Route::get('verifikasi_data_opd', [VerifikasiDataOPD::class, 'index']);
Route::get('changeStatus', [VerifikasiDataController::class, 'changeStatus']);
Route::get('changeStatus2', [VerifikasiDataController::class, 'changeStatus2']);
Route::get('lihatTabel', [VerifikasiDataController::class, 'getAjax']);


  Route::get('user', [UserController::class, 'index']);
Route::get('/color6/{id}/edit6',  [UserController::class, 'update6'])->name('color.update6');
Route::post('/color6/{id}',  [UserController::class, 'edit6'])->name('color.edit6');

Route::get('/perbaikan_opd/{id}/edit_perbaikan_opd',  [VerifikasiDataController::class, 'update_perbaikan'])->name('perbaikan_opd.update_perbaikan');
Route::post('/perbaikan_opd/{id}',  [VerifikasiDataController::class, 'edit_perbaikan'])->name('perbaikan_opd.edit_perbaikan');



Route::get('/perbaikan_opd_indikator/{id}/edit_perbaikan_opd_indikator',  [VerifikasiIndikatorController::class, 'update_perbaikan_indikator'])->name('perbaikan_opd_indikator.update_perbaikan_indikator');
Route::post('/perbaikan_opd_indikator/{id}',  [VerifikasiIndikatorController::class, 'edit_perbaikan_indikator'])->name('perbaikan_opd_indikator.edit_perbaikan_indikator');

Route::get('/perbaikan_opd_kegiatan/{id}/edit_perbaikan_opd_kegiatan',  [VerifikasiKegiatanController::class, 'update_perbaikan_kegiatan'])->name('perbaikan_opd_kegiatan.update_perbaikan_kegiatan');
Route::post('/perbaikan_opd_kegiatan/{id}',  [VerifikasiKegiatanController::class, 'edit_perbaikan_kegiatan'])->name('perbaikan_opd_kegiatan.edit_perbaikan_kegiatan');


Route::get('/perbaikan_opd_variabel/{id}/edit_perbaikan_opd_variabel',  [VerifikasiVariabelController::class, 'update_perbaikan_variabel'])->name('perbaikan_opd_variabel.update_perbaikan_variabel');
Route::post('/perbaikan_opd_variabel/{id}',  [VerifikasiVariabelController::class, 'edit_perbaikan_variabel'])->name('perbaikan_opd_variabel.edit_perbaikan_variabel');


Route::get('/perbaikanRekomendasi_opd/{id}/edit_perbaikanRekomendasi_opd',  [VerifikasiRekomendasiOPD::class, 'update_perbaikan_rekomendasi'])->name('perbaikanRekomendasi_opd.update_perbaikan_rekomendasi');
Route::post('/perbaikanRekomendasi_opd/{id}',  [VerifikasiRekomendasiOPD::class, 'edit_perbaikan_rekomendasi'])->name('perbaikanRekomendasi_opd.edit_perbaikan_rekomendasi');


Route::get('/perbaikanRekomendasi_opd_k/{id}/edit_perbaikanRekomendasi_opd_k',  [VerifikasiRekomendasiOPD::class, 'update_perbaikan_rekomendasi_k'])->name('perbaikanRekomendasi_opd_k.update_perbaikan_rekomendasi_k');
Route::post('/perbaikanRekomendasi_opd_k/{id}',  [VerifikasiRekomendasiOPD::class, 'edit_perbaikan_rekomendasi_k'])->name('perbaikanRekomendasi_opd_k.edit_perbaikan_rekomendasi_k');

Route::post('postssss.register',  [UserController::class, 'register'])->name('postssss.register');
Route::delete('/postssss/{post}',  [UserController::class, 'destroy5'])->name('postssss.destroy5');
Route::resource('postssss', UserController::class);


  Route::get('user_opd', [UserOPDController::class, 'index']);
Route::get('/color8/{id}/edit8',  [UserOPDController::class, 'update8'])->name('color.update8');
Route::post('/color8/{id}',  [UserOPDController::class, 'edit8'])->name('color.edit8');
Route::post('userOPD.register2',  [UserOPDController::class, 'register2'])->name('userOPD.register2');
Route::delete('/userOPD/{post}',  [UserOPDController::class, 'destroy8'])->name('userOPD.destroy8');
Route::resource('userOPD', UserController::class);



Route::delete('/postsssss/{post}',  [DataController::class, 'destroy9'])->name('postsssss.destroy9');
Route::post('postsssss.inputMetadata',  [DataController::class, 'inputMetadata'])->name('postsssss.inputMetadata');
Route::resource('postsssss', DataController::class);

Route::get('/colorPembinaan/{id}/editPembinaan',  [KelolaPembinaanController::class, 'updatePembinaan'])->name('colorPembinaan.updatePembinaan');
Route::post('/colorPembinaan/{id}',  [KelolaPembinaanController::class, 'editPembinaan'])->name('colorPembinaan.editPembinaan');
Route::get('kelola_pembinaan', [KelolaPembinaanController::class, 'index']);

Route::get('/forum', [ForumController::class, 'index']);


Route::get('/daftar_forum', [ForumController::class, 'index']);
Route::get('/input_arc', [ForumController::class, 'index']);
Route::get('/daftar_arc', [ForumController::class, 'index']);

Route::post('forum.store_forum',  [ForumController::class, 'store_forum'])->name('forum.store_forum');
Route::post('forum2.store_arc',  [ForumController::class, 'store_arc'])->name('forum2.store_arc');

Route::get('/arc/{id}/edit_arc',  [ForumController::class, 'update_arc'])->name('arc.update_arc');
Route::post('/arc/{id}',  [ForumController::class, 'edit_arc'])->name('arc.edit_arc');

Route::delete('/arc/{post}',  [ForumController::class, 'destroy_arc'])->name('arc.destroy_arc');

Route::get('/forum/{id}/edit_forum',  [ForumController::class, 'update_forum'])->name('forum.update_forum');
Route::post('/forum/{id}',  [ForumController::class, 'edit_forum'])->name('forum.edit_forum');

Route::delete('/forum/{post}',  [ForumController::class, 'destroy_forum'])->name('forum.destroy_forum');

Route::post('/forum', [ForumController::class, 'edit_undangan'])->name('forum.edit_undangan');
Route::post('/forum2', [ForumController::class, 'edit_notulen'])->name('forum.edit_notulen');
Route::post('/forum3', [ForumController::class, 'edit_daftarHadir'])->name('forum.edit_daftarHadir');
Route::post('/forum4', [ForumController::class, 'edit_materi'])->name('forum.edit_materi');
Route::post('/forum5', [ForumController::class, 'edit_foto'])->name('forum.edit_foto');

Route::get('data/{id}', [LihatController::class, 'displayTabel2'])->where('id','(.*)');



//DDA
 Route::get('data_dda', [DDAController::class, 'index']);
  Route::get('tabel_1', [DDAController::class, 'index2']);
  
  Route::get('rekap', [DDAController::class, 'index3']);
  Route::post('dda.store',  [DDAController::class, 'store'])->name('dda.store');
  
  Route::get('tabel_231', [DDAController::class, 'index231']);
  
  Route::post('dda.store231',  [DDAController::class, 'store231'])->name('dda.store231');
  
  
    Route::get('tabel_232', [DDAController::class, 'index232']);
  Route::post('dda.store232',  [DDAController::class, 'store232'])->name('dda.store232');
  
  Route::get('tabel_233', [DDAController::class, 'index233']);
  Route::post('dda.store233',  [DDAController::class, 'store233'])->name('dda.store233');
  
  Route::get('tabel_234', [DDAController::class, 'index234']);
  Route::post('dda.store234',  [DDAController::class, 'store234'])->name('dda.store234');
  
  
  Route::get('tabel_235', [DDAController::class, 'index235']);
  Route::post('dda.store235',  [DDAController::class, 'store235'])->name('dda.store235');
  
    Route::get('tabel_3217', [DDAController::class, 'index3217']);
  Route::post('dda.store3217',  [DDAController::class, 'store3217'])->name('dda.store3217');
  
  Route::get('tabel_3218', [DDAController::class, 'index3218']);
  Route::post('dda.store3218',  [DDAController::class, 'store3218'])->name('dda.store3218');
  
  Route::get('tabel_423', [DDAController::class, 'index423']);
  Route::post('dda.store423',  [DDAController::class, 'store423'])->name('dda.store423');
  
  Route::get('tabel_425', [DDAController::class, 'index425']);
  Route::post('dda.store425',  [DDAController::class, 'store425'])->name('dda.store425');
  
  Route::get('tabel_426', [DDAController::class, 'index426']);
  Route::post('dda.store426',  [DDAController::class, 'store426'])->name('dda.store426');
  
  Route::get('tabel_427', [DDAController::class, 'index427']);
  Route::post('dda.store427',  [DDAController::class, 'store427'])->name('dda.store427');
  
  Route::get('tabel_4211', [DDAController::class, 'index4211']);
  Route::post('dda.store4211',  [DDAController::class, 'store4211'])->name('dda.store4211');
  
  Route::get('tabel_4213', [DDAController::class, 'index4213']);
  Route::post('dda.store4213',  [DDAController::class, 'store4213'])->name('dda.store4213');
  
  
  Route::get('tabel_441', [DDAController::class, 'index441']);
  Route::post('dda.store441',  [DDAController::class, 'store441'])->name('dda.store441');
  
  
  Route::get('tabel_531', [DDAController::class, 'index531']);
  Route::post('dda.store531',  [DDAController::class, 'store531'])->name('dda.store531');
  
  
  Route::get('tabel_532', [DDAController::class, 'index532']);
  Route::post('dda.store532',  [DDAController::class, 'store532'])->name('dda.store532');
  
  
  Route::get('tabel_551', [DDAController::class, 'index551']);
  Route::post('dda.store551',  [DDAController::class, 'store551'])->name('dda.store551');
  
  
  Route::get('tabel_552', [DDAController::class, 'index552']);
  Route::post('dda.store552',  [DDAController::class, 'store552'])->name('dda.store552');

  Route::get('tabel_553', [DDAController::class, 'index553']);
  Route::post('dda.store553',  [DDAController::class, 'store553'])->name('dda.store553');
  
  Route::get('tabel_554', [DDAController::class, 'index554']);
  Route::post('dda.store554',  [DDAController::class, 'store554'])->name('dda.store554');

  Route::get('tabel_555', [DDAController::class, 'index555']);
  Route::post('dda.store555',  [DDAController::class, 'store555'])->name('dda.store555');
  
  Route::get('tabel_121', [DDAController::class, 'index121']);
  Route::post('dda.store121',  [DDAController::class, 'store121'])->name('dda.store121');
  
  Route::get('tabel_122', [DDAController::class, 'index122']);
  Route::post('dda.store122',  [DDAController::class, 'store122'])->name('dda.store122');
  
  Route::get('tabel_123', [DDAController::class, 'index123']);
  Route::post('dda.store123',  [DDAController::class, 'store123'])->name('dda.store123');

  Route::get('tabel_124', [DDAController::class, 'index124']);
  Route::post('dda.store124',  [DDAController::class, 'store124'])->name('dda.store124');
  
  Route::get('tabel_125', [DDAController::class, 'index125']);
  Route::post('dda.store125',  [DDAController::class, 'store125'])->name('dda.store125');
  
  Route::get('tabel_126', [DDAController::class, 'index126']);
  Route::post('dda.store126',  [DDAController::class, 'store126'])->name('dda.store126');
  
  Route::get('tabel_221', [DDAController::class, 'index221']);
  Route::post('dda.store221',  [DDAController::class, 'store221'])->name('dda.store221');
  
  Route::get('tabel_222', [DDAController::class, 'index222']);
  Route::post('dda.store222',  [DDAController::class, 'store222'])->name('dda.store222');
  
  Route::get('tabel_223', [DDAController::class, 'index223']);
  Route::post('dda.store223',  [DDAController::class, 'store223'])->name('dda.store223');
  
  Route::get('tabel_224', [DDAController::class, 'index224']);
  Route::post('dda.store224',  [DDAController::class, 'store224'])->name('dda.store224');
  
  Route::get('tabel_225', [DDAController::class, 'index225']);
  Route::post('dda.store225',  [DDAController::class, 'store225'])->name('dda.store225');
  
  Route::get('tabel_227', [DDAController::class, 'index227']);
  Route::post('dda.store227',  [DDAController::class, 'store227'])->name('dda.store227');
  
  Route::get('tabel_226', [DDAController::class, 'index226']);
  Route::post('dda.store226',  [DDAController::class, 'store226'])->name('dda.store226');
  
  Route::get('tabel_442', [DDAController::class, 'index442']);
  Route::post('dda.store442',  [DDAController::class, 'store442'])->name('dda.store442');
    
  Route::get('tabel_443', [DDAController::class, 'index443']);
  Route::post('dda.store443',  [DDAController::class, 'store443'])->name('dda.store443');  
  
  Route::get('tabel_444', [DDAController::class, 'index444']);
  Route::post('dda.store444',  [DDAController::class, 'store444'])->name('dda.store444'); 
  
  Route::get('tabel_445', [DDAController::class, 'index445']);
  Route::post('dda.store445',  [DDAController::class, 'store445'])->name('dda.store445');
  
  Route::get('tabel_446', [DDAController::class, 'index446']);
  Route::post('dda.store446',  [DDAController::class, 'store446'])->name('dda.store446');
  
  Route::get('tabel_915', [DDAController::class, 'index915']);
  Route::post('dda.store915',  [DDAController::class, 'store915'])->name('dda.store915'); 
  
  Route::get('tabel_916', [DDAController::class, 'index916']);
  Route::post('dda.store916',  [DDAController::class, 'store916'])->name('dda.store916');
  
  Route::get('tabel_4214', [DDAController::class, 'index4214']);
  Route::post('dda.store4214',  [DDAController::class, 'store4214'])->name('dda.store4214');
  
  Route::get('tabel_4215', [DDAController::class, 'index4215']);
  Route::post('dda.store4215',  [DDAController::class, 'store4215'])->name('dda.store4215');
  
  Route::get('tabel_466', [DDAController::class, 'index466']);
  Route::post('dda.store466',  [DDAController::class, 'store466'])->name('dda.store466');  
  
  Route::get('tabel_61', [DDAController::class, 'index61']);
  Route::post('dda.store61',  [DDAController::class, 'store61'])->name('dda.store61');
  
  Route::get('tabel_62', [DDAController::class, 'index62']);
  Route::post('dda.store62',  [DDAController::class, 'store62'])->name('dda.store62');  

  Route::get('tabel_67', [DDAController::class, 'index67']);
  Route::post('dda.store67',  [DDAController::class, 'store67'])->name('dda.store67'); 
  
  Route::get('tabel_63', [DDAController::class, 'index63']);
  Route::post('dda.store63',  [DDAController::class, 'store63'])->name('dda.store63');
  
  Route::get('tabel_64', [DDAController::class, 'index64']);
  Route::post('dda.store64',  [DDAController::class, 'store64'])->name('dda.store64');  
  
  Route::get('tabel_65', [DDAController::class, 'index65']);
  Route::post('dda.store65',  [DDAController::class, 'store65'])->name('dda.store65');   
  
  Route::get('tabel_66', [DDAController::class, 'index66']);
  Route::post('dda.store66',  [DDAController::class, 'store66'])->name('dda.store66');    
  
  Route::get('tabel_721', [DDAController::class, 'index721']);
  Route::post('dda.store721',  [DDAController::class, 'store721'])->name('dda.store721');
  
  Route::get('tabel_722', [DDAController::class, 'index722']);
  Route::post('dda.store722',  [DDAController::class, 'store722'])->name('dda.store722');
  
  Route::get('tabel_731', [DDAController::class, 'index731']);
  Route::post('dda.store731',  [DDAController::class, 'store731'])->name('dda.store731'); 
  
  Route::get('tabel_732', [DDAController::class, 'index732']);
  Route::post('dda.store732',  [DDAController::class, 'store732'])->name('dda.store732');  
  
  Route::get('tabel_733', [DDAController::class, 'index733']);
  Route::post('dda.store733',  [DDAController::class, 'store733'])->name('dda.store733'); 
  
  Route::get('tabel_734', [DDAController::class, 'index734']);
  Route::post('dda.store734',  [DDAController::class, 'store734'])->name('dda.store734');
  
  Route::get('tabel_735', [DDAController::class, 'index735']);
  Route::post('dda.store735',  [DDAController::class, 'store735'])->name('dda.store735'); 
  
  Route::get('tabel_454', [DDAController::class, 'index454']);
  Route::post('dda.store454',  [DDAController::class, 'store454'])->name('dda.store454');
  
  Route::get('tabel_451', [DDAController::class, 'index451']);
  Route::post('dda.store451',  [DDAController::class, 'store451'])->name('dda.store451');  
  
  Route::get('tabel_455', [DDAController::class, 'index455']);
  Route::post('dda.store455',  [DDAController::class, 'store455'])->name('dda.store455');
  
  Route::get('tabel_542', [DDAController::class, 'index542']);
  Route::post('dda.store542',  [DDAController::class, 'store542'])->name('dda.store542'); 
  
  Route::get('tabel_541', [DDAController::class, 'index541']);
  Route::post('dda.store541',  [DDAController::class, 'store541'])->name('dda.store541'); 
  
  Route::get('tabel_543', [DDAController::class, 'index543']);
  Route::post('dda.store543',  [DDAController::class, 'store543'])->name('dda.store543'); 
  
  Route::get('tabel_68', [DDAController::class, 'index68']);
  Route::post('dda.store68',  [DDAController::class, 'store68'])->name('dda.store68'); 
  
  Route::get('tabel_85', [DDAController::class, 'index85']);
  Route::post('dda.store85',  [DDAController::class, 'store85'])->name('dda.store85'); 
  
  Route::get('tabel_911', [DDAController::class, 'index911']);
  Route::post('dda.store911',  [DDAController::class, 'store911'])->name('dda.store911'); 
  
  Route::get('tabel_913', [DDAController::class, 'index913']);
  Route::post('dda.store913',  [DDAController::class, 'store913'])->name('dda.store913'); 
  
  Route::get('tabel_914', [DDAController::class, 'index914']);
  Route::post('dda.store914',  [DDAController::class, 'store914'])->name('dda.store914'); 
  
  Route::get('tabel_104', [DDAController::class, 'index104']);
  Route::post('dda.store104',  [DDAController::class, 'store104'])->name('dda.store104'); 
  
  Route::get('tabel_105', [DDAController::class, 'index105']);
  Route::post('dda.store105',  [DDAController::class, 'store105'])->name('dda.store105'); 
  
  Route::get('tabel_103', [DDAController::class, 'index103']);
  Route::post('dda.store103',  [DDAController::class, 'store103'])->name('dda.store103'); 
  
  
  Route::get('tabel_106', [DDAController::class, 'index106']);
  Route::post('dda.store106',  [DDAController::class, 'store106'])->name('dda.store106'); 
  
  Route::get('tabel_107', [DDAController::class, 'index107']);
  Route::post('dda.store107',  [DDAController::class, 'store107'])->name('dda.store107'); 
  
  Route::get('tabel_921', [DDAController::class, 'index921']);
  Route::post('dda.store921',  [DDAController::class, 'store921'])->name('dda.store921'); 
  
  Route::get('tabel_741', [DDAController::class, 'index741']);
  Route::post('dda.store741',  [DDAController::class, 'store741'])->name('dda.store741');
  
  Route::get('tabel_743', [DDAController::class, 'index743']);
  Route::post('dda.store743',  [DDAController::class, 'store743'])->name('dda.store743');
  
  Route::get('tabel_7412', [DDAController::class, 'index7412']);
  Route::post('dda.store7412',  [DDAController::class, 'store7412'])->name('dda.store7412');
  
  Route::get('tabel_7410', [DDAController::class, 'index7410']);
  Route::post('dda.store7410',  [DDAController::class, 'store7410'])->name('dda.store7410');
  
  Route::get('tabel_742', [DDAController::class, 'index742']);
  Route::post('dda.store742',  [DDAController::class, 'store742'])->name('dda.store742');
  
  Route::get('tabel_7411', [DDAController::class, 'index7411']);
  Route::post('dda.store7411',  [DDAController::class, 'store7411'])->name('dda.store7411');
  
  Route::get('tabel_745', [DDAController::class, 'index745']);
  Route::post('dda.store745',  [DDAController::class, 'store745'])->name('dda.store745');
  
  Route::get('tabel_748', [DDAController::class, 'index748']);
  Route::post('dda.store748',  [DDAController::class, 'store748'])->name('dda.store748');
  
  Route::get('tabel_747', [DDAController::class, 'index747']);
  Route::post('dda.store747',  [DDAController::class, 'store747'])->name('dda.store747');
  
  Route::get('tabel_746', [DDAController::class, 'index746']);
  Route::post('dda.store746',  [DDAController::class, 'store746'])->name('dda.store746');
  
  Route::get('tabel_7413', [DDAController::class, 'index7413']);
  Route::post('dda.store7413',  [DDAController::class, 'store7413'])->name('dda.store7413');
  
  Route::get('tabel_7414', [DDAController::class, 'index7414']);
  Route::post('dda.store7414',  [DDAController::class, 'store7414'])->name('dda.store7414');
  
  Route::get('tabel_7415', [DDAController::class, 'index7415']);
  Route::post('dda.store7415',  [DDAController::class, 'store7415'])->name('dda.store7415');
  
  Route::get('tabel_7416', [DDAController::class, 'index7416']);
  Route::post('dda.store7416',  [DDAController::class, 'store7416'])->name('dda.store7416');
  
  Route::get('tabel_7417', [DDAController::class, 'index7417']);
  Route::post('dda.store7417',  [DDAController::class, 'store7417'])->name('dda.store7417');
  
  Route::get('tabel_7418', [DDAController::class, 'index7418']);
  Route::post('dda.store7418',  [DDAController::class, 'store7418'])->name('dda.store7418');
  
  Route::get('tabel_7419', [DDAController::class, 'index7419']);
  Route::post('dda.store7419',  [DDAController::class, 'store7419'])->name('dda.store7419');
  
  Route::get('tabel_7420', [DDAController::class, 'index7420']);
  Route::post('dda.store7420',  [DDAController::class, 'store7420'])->name('dda.store7420');
  
  Route::get('tabel_7421', [DDAController::class, 'index7421']);
  Route::post('dda.store7421',  [DDAController::class, 'store7421'])->name('dda.store7421');
  
  Route::get('tabel_7422', [DDAController::class, 'index7422']);
  Route::post('dda.store7422',  [DDAController::class, 'store7422'])->name('dda.store7422');
  
  Route::get('tabel_7423', [DDAController::class, 'index7423']);
  Route::post('dda.store7423',  [DDAController::class, 'store7423'])->name('dda.store7423');
  
  Route::get('tabel_7424', [DDAController::class, 'index7424']);
  Route::post('dda.store7424',  [DDAController::class, 'store7424'])->name('dda.store7424');
  
  Route::get('tabel_744', [DDAController::class, 'index744']);
  Route::post('dda.store744',  [DDAController::class, 'store744'])->name('dda.store744');
  
  Route::get('tabel_7425', [DDAController::class, 'index7425']);
  Route::post('dda.store7425',  [DDAController::class, 'store7425'])->name('dda.store7425');
  
  Route::get('tabel_7426', [DDAController::class, 'index7426']);
  Route::post('dda.store7426',  [DDAController::class, 'store7426'])->name('dda.store7426');
  
  Route::get('tabel_7427', [DDAController::class, 'index7427']);
  Route::post('dda.store7427',  [DDAController::class, 'store7427'])->name('dda.store7427');
  
  Route::get('tabel_7428', [DDAController::class, 'index7428']);
  Route::post('dda.store7428',  [DDAController::class, 'store7428'])->name('dda.store7428');
  
  Route::get('tabel_7429', [DDAController::class, 'index7429']);
  Route::post('dda.store7429',  [DDAController::class, 'store7429'])->name('dda.store7429');
  
  Route::get('tabel_7430', [DDAController::class, 'index7430']);
  Route::post('dda.store7430',  [DDAController::class, 'store7430'])->name('dda.store7430');
  
  Route::get('tabel_7431', [DDAController::class, 'index7431']);
  Route::post('dda.store7431',  [DDAController::class, 'store7431'])->name('dda.store7431');
  
  Route::get('tabel_7432', [DDAController::class, 'index7432']);
  Route::post('dda.store7432',  [DDAController::class, 'store7432'])->name('dda.store7432');
  
  Route::get('tabel_7433', [DDAController::class, 'index7433']);
  Route::post('dda.store7433',  [DDAController::class, 'store7433'])->name('dda.store7433');
  
  Route::get('tabel_7434', [DDAController::class, 'index7434']);
  Route::post('dda.store7434',  [DDAController::class, 'store7434'])->name('dda.store7434');
  
  Route::get('tabel_7435', [DDAController::class, 'index7435']);
  Route::post('dda.store7435',  [DDAController::class, 'store7435'])->name('dda.store7435');
  
  Route::get('tabel_7436', [DDAController::class, 'index7436']);
  Route::post('dda.store7436',  [DDAController::class, 'store7436'])->name('dda.store7436');
  
  Route::get('tabel_7437', [DDAController::class, 'index7437']);
  Route::post('dda.store7437',  [DDAController::class, 'store7437'])->name('dda.store7437');
  
  Route::get('tabel_7438', [DDAController::class, 'index7438']);
  Route::post('dda.store7438',  [DDAController::class, 'store7438'])->name('dda.store7438');
  
  Route::get('tabel_7439', [DDAController::class, 'index7439']);
  Route::post('dda.store7439',  [DDAController::class, 'store7439'])->name('dda.store7439');
  
  Route::get('tabel_7440', [DDAController::class, 'index7440']);
  Route::post('dda.store7440',  [DDAController::class, 'store7440'])->name('dda.store7440');
  
  Route::get('tabel_7441', [DDAController::class, 'index7441']);
  Route::post('dda.store7441',  [DDAController::class, 'store7441'])->name('dda.store7441');
  
  Route::get('tabel_7442', [DDAController::class, 'index7442']);
  Route::post('dda.store7442',  [DDAController::class, 'store7442'])->name('dda.store7442');
  
  Route::get('tabel_7443', [DDAController::class, 'index7443']);
  Route::post('dda.store7443',  [DDAController::class, 'store7443'])->name('dda.store7443');
  
  Route::get('tabel_7444', [DDAController::class, 'index7444']);
  Route::post('dda.store7444',  [DDAController::class, 'store7444'])->name('dda.store7444');
  
  Route::get('tabel_7445', [DDAController::class, 'index7445']);
  Route::post('dda.store7445',  [DDAController::class, 'store7445'])->name('dda.store7445');
  
  Route::get('tabel_7446', [DDAController::class, 'index7446']);
  Route::post('dda.store7446',  [DDAController::class, 'store7446'])->name('dda.store7446');
  
  Route::get('tabel_7447', [DDAController::class, 'index7447']);
  Route::post('dda.store7447',  [DDAController::class, 'store7447'])->name('dda.store7447');
  
  Route::get('tabel_7448', [DDAController::class, 'index7448']);
  Route::post('dda.store7448',  [DDAController::class, 'store7448'])->name('dda.store7448');
  
  Route::get('tabel_7449', [DDAController::class, 'index7449']);
  Route::post('dda.store7449',  [DDAController::class, 'store7449'])->name('dda.store7449');
  
  Route::get('tabel_7450', [DDAController::class, 'index7450']);
  Route::post('dda.store7450',  [DDAController::class, 'store7450'])->name('dda.store7450');
  
  Route::get('tabel_7451', [DDAController::class, 'index7451']);
  Route::post('dda.store7451',  [DDAController::class, 'store7451'])->name('dda.store7451');
  
  Route::get('tabel_7452', [DDAController::class, 'index7452']);
  Route::post('dda.store7452',  [DDAController::class, 'store7452'])->name('dda.store7452');
  
  Route::get('tabel_7453', [DDAController::class, 'index7453']);
  Route::post('dda.store7453',  [DDAController::class, 'store7453'])->name('dda.store7453');
  
  Route::get('tabel_7454', [DDAController::class, 'index7454']);
  Route::post('dda.store7454',  [DDAController::class, 'store7454'])->name('dda.store7454');
  
  Route::get('tabel_7455', [DDAController::class, 'index7455']);
  Route::post('dda.store7455',  [DDAController::class, 'store7455'])->name('dda.store7455');
  
  Route::get('tabel_7456', [DDAController::class, 'index7456']);
  Route::post('dda.store7456',  [DDAController::class, 'store7456'])->name('dda.store7456');
  
  Route::get('tabel_7457', [DDAController::class, 'index7457']);
  Route::post('dda.store7457',  [DDAController::class, 'store7457'])->name('dda.store7457');
  
  Route::get('tabel_7458', [DDAController::class, 'index7458']);
  Route::post('dda.store7458',  [DDAController::class, 'store7458'])->name('dda.store7458');
  
  Route::get('tabel_7459', [DDAController::class, 'index7459']);
  Route::post('dda.store7459',  [DDAController::class, 'store7459'])->name('dda.store7459');
  
  Route::get('tabel_7460', [DDAController::class, 'index7460']);
  Route::post('dda.store7460',  [DDAController::class, 'store7460'])->name('dda.store7460');
  
  Route::get('tabel_7461', [DDAController::class, 'index7461']);
  Route::post('dda.store7461',  [DDAController::class, 'store7461'])->name('dda.store7461');
  
  Route::get('tabel_7462', [DDAController::class, 'index7462']);
  Route::post('dda.store7462',  [DDAController::class, 'store7462'])->name('dda.store7462');
  
  Route::get('tabel_7463', [DDAController::class, 'index7463']);
  Route::post('dda.store7463',  [DDAController::class, 'store7463'])->name('dda.store7463');
  
  Route::get('tabel_7464', [DDAController::class, 'index7464']);
  Route::post('dda.store7464',  [DDAController::class, 'store7464'])->name('dda.store7464');
  
  Route::get('tabel_7465', [DDAController::class, 'index7465']);
  Route::post('dda.store7465',  [DDAController::class, 'store7465'])->name('dda.store7465');
  
  Route::get('tabel_7466', [DDAController::class, 'index7466']);
  Route::post('dda.store7466',  [DDAController::class, 'store7466'])->name('dda.store7466');
  
  Route::get('tabel_7467', [DDAController::class, 'index7467']);
  Route::post('dda.store7467',  [DDAController::class, 'store7467'])->name('dda.store7467');
  
  Route::get('tabel_7468', [DDAController::class, 'index7468']);
  Route::post('dda.store7468',  [DDAController::class, 'store7468'])->name('dda.store7468');
  
  Route::get('tabel_7469', [DDAController::class, 'index7469']);
  Route::post('dda.store7469',  [DDAController::class, 'store7469'])->name('dda.store7469');
  
  Route::get('tabel_7470', [DDAController::class, 'index7470']);
  Route::post('dda.store7470',  [DDAController::class, 'store7470'])->name('dda.store7470');
  
  Route::get('tabel_7471', [DDAController::class, 'index7471']);
  Route::post('dda.store7471',  [DDAController::class, 'store7471'])->name('dda.store7471');
  
  Route::get('tabel_7472', [DDAController::class, 'index7472']);
  Route::post('dda.store7472',  [DDAController::class, 'store7472'])->name('dda.store7472');
  
  Route::get('tabel_7473', [DDAController::class, 'index7473']);
  Route::post('dda.store7473',  [DDAController::class, 'store7473'])->name('dda.store7473');
  
  Route::get('tabel_7474', [DDAController::class, 'index7474']);
  Route::post('dda.store7474',  [DDAController::class, 'store7474'])->name('dda.store7474');
  
  Route::get('tabel_7475', [DDAController::class, 'index7475']);
  Route::post('dda.store7475',  [DDAController::class, 'store7475'])->name('dda.store7475');
  
  Route::get('tabel_7476', [DDAController::class, 'index7476']);
  Route::post('dda.store7476',  [DDAController::class, 'store7476'])->name('dda.store7476');
  
  Route::get('tabel_7477', [DDAController::class, 'index7477']);
  Route::post('dda.store7477',  [DDAController::class, 'store7477'])->name('dda.store7477');
  
  Route::get('tabel_7478', [DDAController::class, 'index7478']);
  Route::post('dda.store7478',  [DDAController::class, 'store7478'])->name('dda.store7478');
  
  Route::get('tabel_7479', [DDAController::class, 'index7479']);
  Route::post('dda.store7479',  [DDAController::class, 'store7479'])->name('dda.store7479');
  
  Route::get('tabel_7480', [DDAController::class, 'index7480']);
  Route::post('dda.store7480',  [DDAController::class, 'store7480'])->name('dda.store7480');
  
  Route::get('tabel_7481', [DDAController::class, 'index7481']);
  Route::post('dda.store7481',  [DDAController::class, 'store7481'])->name('dda.store7481');
  
  Route::get('tabel_7482', [DDAController::class, 'index7482']);
  Route::post('dda.store7482',  [DDAController::class, 'store7482'])->name('dda.store7482');
  
  Route::get('tabel_7483', [DDAController::class, 'index7483']);
  Route::post('dda.store7483',  [DDAController::class, 'store7483'])->name('dda.store7483');
  
  Route::get('tabel_7484', [DDAController::class, 'index7484']);
  Route::post('dda.store7484',  [DDAController::class, 'store7484'])->name('dda.store7484');
  
  Route::get('tabel_7485', [DDAController::class, 'index7485']);
  Route::post('dda.store7485',  [DDAController::class, 'store7485'])->name('dda.store7485');
  
  Route::get('tabel_7486', [DDAController::class, 'index7486']);
  Route::post('dda.store7486',  [DDAController::class, 'store7486'])->name('dda.store7486');
  
  Route::get('tabel_7487', [DDAController::class, 'index7487']);
  Route::post('dda.store7487',  [DDAController::class, 'store7487'])->name('dda.store7487');
  
  Route::get('tabel_7488', [DDAController::class, 'index7488']);
  Route::post('dda.store7488',  [DDAController::class, 'store7488'])->name('dda.store7488');
  
  Route::get('tabel_7489', [DDAController::class, 'index7489']);
  Route::post('dda.store7489',  [DDAController::class, 'store7489'])->name('dda.store7489');
  
  Route::get('tabel_7490', [DDAController::class, 'index7490']);
  Route::post('dda.store7490',  [DDAController::class, 'store7490'])->name('dda.store7490');
  
  Route::get('tabel_7491', [DDAController::class, 'index7491']);
  Route::post('dda.store7491',  [DDAController::class, 'store7491'])->name('dda.store7491');
  
  Route::get('tabel_7492', [DDAController::class, 'index7492']);
  Route::post('dda.store7492',  [DDAController::class, 'store7492'])->name('dda.store7492');
  
  Route::get('tabel_7493', [DDAController::class, 'index7493']);
  Route::post('dda.store7493',  [DDAController::class, 'store7493'])->name('dda.store7493');
  
  Route::get('tabel_7494', [DDAController::class, 'index7494']);
  Route::post('dda.store7494',  [DDAController::class, 'store7494'])->name('dda.store7494');
  
  Route::get('tabel_7495', [DDAController::class, 'index7495']);
  Route::post('dda.store7495',  [DDAController::class, 'store7495'])->name('dda.store7495');
  
  Route::get('tabel_7496', [DDAController::class, 'index7496']);
  Route::post('dda.store7496',  [DDAController::class, 'store7496'])->name('dda.store7496');
  
  Route::get('tabel_7497', [DDAController::class, 'index7497']);
  Route::post('dda.store7497',  [DDAController::class, 'store7497'])->name('dda.store7497');
  
  Route::get('tabel_7498', [DDAController::class, 'index7498']);
  Route::post('dda.store7498',  [DDAController::class, 'store7498'])->name('dda.store7498');
  
  Route::get('tabel_7499', [DDAController::class, 'index7499']);
  Route::post('dda.store7499',  [DDAController::class, 'store7499'])->name('dda.store7499');
  
  Route::get('tabel_74100', [DDAController::class, 'index74100']);
  Route::post('dda.store74100',  [DDAController::class, 'store74100'])->name('dda.store74100');
  
  Route::get('tabel_74101', [DDAController::class, 'index74101']);
  Route::post('dda.store74101',  [DDAController::class, 'store74101'])->name('dda.store74101');
  
  Route::get('tabel_74102', [DDAController::class, 'index74102']);
  Route::post('dda.store74102',  [DDAController::class, 'store74102'])->name('dda.store74102');
  
  Route::get('tabel_74103', [DDAController::class, 'index74103']);
  Route::post('dda.store74103',  [DDAController::class, 'store74103'])->name('dda.store74103');
  
  Route::get('tabel_74104', [DDAController::class, 'index74104']);
  Route::post('dda.store74104',  [DDAController::class, 'store74104'])->name('dda.store74104');
  
  Route::get('tabel_74105', [DDAController::class, 'index74105']);
  Route::post('dda.store74105',  [DDAController::class, 'store74105'])->name('dda.store74105');
  
  Route::get('tabel_74106', [DDAController::class, 'index74106']);
  Route::post('dda.store74106',  [DDAController::class, 'store74106'])->name('dda.store74106');
  
  Route::get('tabel_74107', [DDAController::class, 'index74107']);
  Route::post('dda.store74107',  [DDAController::class, 'store74107'])->name('dda.store74107');
  
  Route::get('tabel_74108', [DDAController::class, 'index74108']);
  Route::post('dda.store74108',  [DDAController::class, 'store74108'])->name('dda.store74108');
  
  Route::get('tabel_74109', [DDAController::class, 'index74109']);
  Route::post('dda.store74109',  [DDAController::class, 'store74109'])->name('dda.store74109');
  
  Route::get('tabel_74110', [DDAController::class, 'index74110']);
  Route::post('dda.store74110',  [DDAController::class, 'store74110'])->name('dda.store74110');
  
  Route::get('tabel_74111', [DDAController::class, 'index74111']);
  Route::post('dda.store74111',  [DDAController::class, 'store74111'])->name('dda.store74111');
  
  Route::get('tabel_74112', [DDAController::class, 'index74112']);
  Route::post('dda.store74112',  [DDAController::class, 'store74112'])->name('dda.store74112');
  
  Route::get('tabel_74113', [DDAController::class, 'index74113']);
  Route::post('dda.store74113',  [DDAController::class, 'store74113'])->name('dda.store74113');
  
  Route::get('tabel_74114', [DDAController::class, 'index74114']);
  Route::post('dda.store74114',  [DDAController::class, 'store74114'])->name('dda.store74114');
  
  Route::get('tabel_74115', [DDAController::class, 'index74115']);
  Route::post('dda.store74115',  [DDAController::class, 'store74115'])->name('dda.store74115');
  
  
  Route::get('tabel_74116', [DDAController::class, 'index74116']);
  Route::post('dda.store74116',  [DDAController::class, 'store74116'])->name('dda.store74116');
  
  Route::get('tabel_74117', [DDAController::class, 'index74117']);
  Route::post('dda.store74117',  [DDAController::class, 'store74117'])->name('dda.store74117');
  
  
  Route::get('tabel_74118', [DDAController::class, 'index74118']);
  Route::post('dda.store74118',  [DDAController::class, 'store74118'])->name('dda.store74118');
  
  
  Route::get('tabel_74119', [DDAController::class, 'index74119']);
  Route::post('dda.store74119',  [DDAController::class, 'store74119'])->name('dda.store74119');
  
  Route::get('tabel_74120', [DDAController::class, 'index74120']);
  Route::post('dda.store74120',  [DDAController::class, 'store74120'])->name('dda.store74120');
  
  Route::get('tabel_74121', [DDAController::class, 'index74121']);
  Route::post('dda.store74121',  [DDAController::class, 'store74121'])->name('dda.store74121');
  
  Route::get('tabel_74122', [DDAController::class, 'index74122']);
  Route::post('dda.store74122',  [DDAController::class, 'store74122'])->name('dda.store74122');
  
  Route::get('tabel_74123', [DDAController::class, 'index74123']);
  Route::post('dda.store74123',  [DDAController::class, 'store74123'])->name('dda.store74123');
  
  
  
  Route::get('tabel_923', [DDAController::class, 'index923']);
  Route::post('dda.store923',  [DDAController::class, 'store923'])->name('dda.store923'); 
  
  Route::get('tabel_912', [DDAController::class, 'index912']);
  Route::post('dda.store912',  [DDAController::class, 'store912'])->name('dda.store912'); 
  
  Route::get('tabel_9121', [DDAController::class, 'index9121']);
  Route::post('dda.store9121',  [DDAController::class, 'store9121'])->name('dda.store9121'); 
  
  

  
  
  
  
  
  
  
  
  
  Route::get('rekap_231', [DDAController::class, 'banding231']);
  Route::get('rekap_4215', [DDAController::class, 'banding4215']);
  Route::get('rekap_423', [DDAController::class, 'banding423']);
  Route::get('rekap_425', [DDAController::class, 'banding425']);
  Route::get('rekap_426', [DDAController::class, 'banding426']);
  Route::get('rekap_427', [DDAController::class, 'banding427']);
  Route::get('rekap_455', [DDAController::class, 'banding455']);
  Route::get('rekap_466', [DDAController::class, 'banding466']);
  Route::get('rekap_531', [DDAController::class, 'banding531']);
  Route::get('rekap_532', [DDAController::class, 'banding532']);
  Route::get('rekap_551', [DDAController::class, 'banding551']);
  Route::get('rekap_552', [DDAController::class, 'banding552']);
  Route::get('rekap_553', [DDAController::class, 'banding553']);
  Route::get('rekap_554', [DDAController::class, 'banding554']);
  Route::get('rekap_555', [DDAController::class, 'banding555']);
  Route::get('rekap_63', [DDAController::class, 'banding63']);
  Route::get('rekap_911', [DDAController::class, 'banding911']);
  Route::get('rekap_913', [DDAController::class, 'banding913']);
  Route::get('rekap_914', [DDAController::class, 'banding914']);
  Route::get('rekap_921', [DDAController::class, 'banding921']);
  Route::get('rekap_3217', [DDAController::class, 'banding3217']);
  Route::get('rekap_4214', [DDAController::class, 'banding4214']);
  
  
  
   Route::get('/ekspor_121', [DDAController::class, 'Unduh_Tabel121']);
  Route::get('/ekspor_122', [DDAController::class, 'Unduh_Tabel122']);
  Route::get('/ekspor_123', [DDAController::class, 'Unduh_Tabel123']);
  Route::get('/ekspor_124', [DDAController::class, 'Unduh_Tabel124']);
  Route::get('/ekspor_125', [DDAController::class, 'Unduh_Tabel125']);
  Route::get('/ekspor_126', [DDAController::class, 'Unduh_Tabel126']);
  Route::get('/ekspor_221', [DDAController::class, 'Unduh_Tabel221']);
  Route::get('/ekspor_222', [DDAController::class, 'Unduh_Tabel222']);
  Route::get('/ekspor_223', [DDAController::class, 'Unduh_Tabel223']);
  Route::get('/ekspor_224', [DDAController::class, 'Unduh_Tabel224']);
  Route::get('/ekspor_225', [DDAController::class, 'Unduh_Tabel225']);
  Route::get('/ekspor_226', [DDAController::class, 'Unduh_Tabel226']);
  Route::get('/ekspor_231', [DDAController::class, 'Unduh_Tabel231']);
  Route::get('/ekspor_232', [DDAController::class, 'Unduh_Tabel232']);
  Route::get('/ekspor_233', [DDAController::class, 'Unduh_Tabel233']);
  Route::get('/ekspor_234', [DDAController::class, 'Unduh_Tabel234']);
  Route::get('/ekspor_235', [DDAController::class, 'Unduh_Tabel235']);
  
  Route::get('/ekspor_3218', [DDAController::class, 'Unduh_Tabel3218']);
  Route::get('/ekspor_4211', [DDAController::class, 'Unduh_Tabel4211']);
  Route::get('/ekspor_4213', [DDAController::class, 'Unduh_Tabel4213']);
  Route::get('/ekspor_4214', [DDAController::class, 'Unduh_Tabel4214']);
  Route::get('/ekspor_4215', [DDAController::class, 'Unduh_Tabel4215']);
  Route::get('/ekspor_423', [DDAController::class, 'Unduh_Tabel423']);
  Route::get('/ekspor_425', [DDAController::class, 'Unduh_Tabel425']);
  Route::get('/ekspor_426', [DDAController::class, 'Unduh_Tabel426']);
  Route::get('/ekspor_427', [DDAController::class, 'Unduh_Tabel427']);
  Route::get('/ekspor_441', [DDAController::class, 'Unduh_Tabel441']);
  Route::get('/ekspor_442', [DDAController::class, 'Unduh_Tabel442']);
  Route::get('/ekspor_443', [DDAController::class, 'Unduh_Tabel443']);
  Route::get('/ekspor_444', [DDAController::class, 'Unduh_Tabel444']);
  Route::get('/ekspor_445', [DDAController::class, 'Unduh_Tabel445']);
  Route::get('/ekspor_446', [DDAController::class, 'Unduh_Tabel446']);
  Route::get('/ekspor_454', [DDAController::class, 'Unduh_Tabel454']);
  Route::get('/ekspor_455', [DDAController::class, 'Unduh_Tabel455']);
  Route::get('/ekspor_466', [DDAController::class, 'Unduh_Tabel466']);
  Route::get('/ekspor_531', [DDAController::class, 'Unduh_Tabel531']);
  Route::get('/ekspor_532', [DDAController::class, 'Unduh_Tabel532']);
  Route::get('/ekspor_541', [DDAController::class, 'Unduh_Tabel541']);
  Route::get('/ekspor_542', [DDAController::class, 'Unduh_Tabel542']);
  Route::get('/ekspor_543', [DDAController::class, 'Unduh_Tabel543']);
  Route::get('/ekspor_551', [DDAController::class, 'Unduh_Tabel551']);
  Route::get('/ekspor_552', [DDAController::class, 'Unduh_Tabel552']);
  Route::get('/ekspor_553', [DDAController::class, 'Unduh_Tabel553']);
  Route::get('/ekspor_554', [DDAController::class, 'Unduh_Tabel554']);
  Route::get('/ekspor_555', [DDAController::class, 'Unduh_Tabel555']);
  Route::get('/ekspor_61', [DDAController::class, 'Unduh_Tabel61']);
  Route::get('/ekspor_62', [DDAController::class, 'Unduh_Tabel62']);
  Route::get('/ekspor_63', [DDAController::class, 'Unduh_Tabel63']);
  Route::get('/ekspor_64', [DDAController::class, 'Unduh_Tabel64']);
  Route::get('/ekspor_65', [DDAController::class, 'Unduh_Tabel65']);
  Route::get('/ekspor_66', [DDAController::class, 'Unduh_Tabel66']);
  Route::get('/ekspor_67', [DDAController::class, 'Unduh_Tabel67']);
  Route::get('/ekspor_68', [DDAController::class, 'Unduh_Tabel68']);
  Route::get('/ekspor_721', [DDAController::class, 'Unduh_Tabel721']);
  Route::get('/ekspor_731', [DDAController::class, 'Unduh_Tabel731']);
  Route::get('/ekspor_732', [DDAController::class, 'Unduh_Tabel732']);
  Route::get('/ekspor_733', [DDAController::class, 'Unduh_Tabel733']);
  Route::get('/ekspor_734', [DDAController::class, 'Unduh_Tabel734']);
  Route::get('/ekspor_735', [DDAController::class, 'Unduh_Tabel735']);
  Route::get('/ekspor_85', [DDAController::class, 'Unduh_Tabel85']);
  Route::get('/ekspor_911', [DDAController::class, 'Unduh_Tabel911']);
  Route::get('/ekspor_913', [DDAController::class, 'Unduh_Tabel913']);
  Route::get('/ekspor_914', [DDAController::class, 'Unduh_Tabel914']);
  Route::get('/ekspor_915', [DDAController::class, 'Unduh_Tabel915']);
  Route::get('/ekspor_916', [DDAController::class, 'Unduh_Tabel916']);
  Route::get('/ekspor_103', [DDAController::class, 'Unduh_Tabel103']);
  Route::get('/ekspor_104', [DDAController::class, 'Unduh_Tabel104']);
  Route::get('/ekspor_105', [DDAController::class, 'Unduh_Tabel105']);
  Route::get('/ekspor_106', [DDAController::class, 'Unduh_Tabel106']);
  Route::get('/ekspor_107', [DDAController::class, 'Unduh_Tabel107']);
  Route::get('/ekspor_912', [DDAController::class, 'Unduh_Tabel912']);
  Route::get('/ekspor_921', [DDAController::class, 'Unduh_Tabel921']);
  Route::get('/ekspor_923', [DDAController::class, 'Unduh_Tabel923']);
  Route::get('/ekspor_741', [DDAController::class, 'Unduh_Tabel741']);
  Route::get('/ekspor_742', [DDAController::class, 'Unduh_Tabel742']);
  Route::get('/ekspor_743', [DDAController::class, 'Unduh_Tabel743']);
  Route::get('/ekspor_744', [DDAController::class, 'Unduh_Tabel744']);
  Route::get('/ekspor_745', [DDAController::class, 'Unduh_Tabel745']);
  Route::get('/ekspor_746', [DDAController::class, 'Unduh_Tabel746']);
  Route::get('/ekspor_747', [DDAController::class, 'Unduh_Tabel747']);
  Route::get('/ekspor_748', [DDAController::class, 'Unduh_Tabel748']);
  Route::get('/ekspor_7410', [DDAController::class, 'Unduh_Tabel7410']);
  Route::get('/ekspor_7411', [DDAController::class, 'Unduh_Tabel7411']);
  Route::get('/ekspor_7412', [DDAController::class, 'Unduh_Tabel7412']);
  Route::get('/ekspor_7413', [DDAController::class, 'Unduh_Tabel7413']);
  Route::get('/ekspor_7414', [DDAController::class, 'Unduh_Tabel7414']);
  Route::get('/ekspor_7415', [DDAController::class, 'Unduh_Tabel7415']);
  Route::get('/ekspor_7416', [DDAController::class, 'Unduh_Tabel7416']);
  Route::get('/ekspor_7417', [DDAController::class, 'Unduh_Tabel7417']);
  Route::get('/ekspor_7418', [DDAController::class, 'Unduh_Tabel7418']);
  Route::get('/ekspor_7419', [DDAController::class, 'Unduh_Tabel7419']);
  Route::get('/ekspor_7420', [DDAController::class, 'Unduh_Tabel7420']);
  Route::get('/ekspor_7421', [DDAController::class, 'Unduh_Tabel7421']);
  Route::get('/ekspor_7422', [DDAController::class, 'Unduh_Tabel7422']);
  Route::get('/ekspor_7423', [DDAController::class, 'Unduh_Tabel7423']);
  Route::get('/ekspor_7424', [DDAController::class, 'Unduh_Tabel7424']);
  Route::get('/ekspor_7425', [DDAController::class, 'Unduh_Tabel7425']);
  Route::get('/ekspor_7426', [DDAController::class, 'Unduh_Tabel7426']);
  Route::get('/ekspor_7427', [DDAController::class, 'Unduh_Tabel7427']);
  Route::get('/ekspor_7428', [DDAController::class, 'Unduh_Tabel7428']);
  Route::get('/ekspor_7429', [DDAController::class, 'Unduh_Tabel7429']);
  Route::get('/ekspor_7430', [DDAController::class, 'Unduh_Tabel7430']);
  Route::get('/ekspor_7431', [DDAController::class, 'Unduh_Tabel7431']);
  Route::get('/ekspor_7432', [DDAController::class, 'Unduh_Tabel7432']);
  Route::get('/ekspor_7433', [DDAController::class, 'Unduh_Tabel7433']);
  Route::get('/ekspor_7434', [DDAController::class, 'Unduh_Tabel7434']);
  Route::get('/ekspor_7435', [DDAController::class, 'Unduh_Tabel7435']);
  Route::get('/ekspor_7436', [DDAController::class, 'Unduh_Tabel7436']);
  Route::get('/ekspor_7437', [DDAController::class, 'Unduh_Tabel7437']);
  Route::get('/ekspor_7438', [DDAController::class, 'Unduh_Tabel7438']);
  Route::get('/ekspor_7439', [DDAController::class, 'Unduh_Tabel7439']);
  Route::get('/ekspor_7440', [DDAController::class, 'Unduh_Tabel7440']);
  Route::get('/ekspor_7441', [DDAController::class, 'Unduh_Tabel7441']);
  Route::get('/ekspor_7442', [DDAController::class, 'Unduh_Tabel7442']);
  Route::get('/ekspor_7443', [DDAController::class, 'Unduh_Tabel7443']);
  Route::get('/ekspor_7444', [DDAController::class, 'Unduh_Tabel7444']);
  Route::get('/ekspor_7445', [DDAController::class, 'Unduh_Tabel7445']);
  Route::get('/ekspor_7446', [DDAController::class, 'Unduh_Tabel7446']);
  Route::get('/ekspor_7447', [DDAController::class, 'Unduh_Tabel7447']);
  Route::get('/ekspor_7448', [DDAController::class, 'Unduh_Tabel7448']);
  Route::get('/ekspor_7449', [DDAController::class, 'Unduh_Tabel7449']);
  Route::get('/ekspor_7450', [DDAController::class, 'Unduh_Tabel7450']);
  Route::get('/ekspor_7451', [DDAController::class, 'Unduh_Tabel7451']);
  Route::get('/ekspor_7452', [DDAController::class, 'Unduh_Tabel7452']);
  Route::get('/ekspor_7453', [DDAController::class, 'Unduh_Tabel7453']);
  Route::get('/ekspor_7454', [DDAController::class, 'Unduh_Tabel7454']);
  Route::get('/ekspor_7455', [DDAController::class, 'Unduh_Tabel7455']);
  Route::get('/ekspor_7456', [DDAController::class, 'Unduh_Tabel7456']);
  Route::get('/ekspor_7457', [DDAController::class, 'Unduh_Tabel7457']);
  Route::get('/ekspor_7458', [DDAController::class, 'Unduh_Tabel7458']);
  Route::get('/ekspor_7459', [DDAController::class, 'Unduh_Tabel7459']);
  Route::get('/ekspor_7460', [DDAController::class, 'Unduh_Tabel7460']);
  Route::get('/ekspor_7461', [DDAController::class, 'Unduh_Tabel7461']);
  Route::get('/ekspor_7462', [DDAController::class, 'Unduh_Tabel7462']);
  Route::get('/ekspor_7463', [DDAController::class, 'Unduh_Tabel7463']);
  Route::get('/ekspor_7464', [DDAController::class, 'Unduh_Tabel7464']);
  Route::get('/ekspor_7465', [DDAController::class, 'Unduh_Tabel7465']);
  Route::get('/ekspor_7466', [DDAController::class, 'Unduh_Tabel7466']);
  Route::get('/ekspor_7467', [DDAController::class, 'Unduh_Tabel7467']);
  Route::get('/ekspor_7468', [DDAController::class, 'Unduh_Tabel7468']);
  Route::get('/ekspor_7469', [DDAController::class, 'Unduh_Tabel7469']);
  Route::get('/ekspor_7470', [DDAController::class, 'Unduh_Tabel7470']);
  Route::get('/ekspor_7471', [DDAController::class, 'Unduh_Tabel7471']);
  Route::get('/ekspor_7472', [DDAController::class, 'Unduh_Tabel7472']);
  Route::get('/ekspor_7473', [DDAController::class, 'Unduh_Tabel7473']);
  Route::get('/ekspor_7474', [DDAController::class, 'Unduh_Tabel7474']);
  Route::get('/ekspor_7475', [DDAController::class, 'Unduh_Tabel7475']);
  Route::get('/ekspor_7476', [DDAController::class, 'Unduh_Tabel7476']);
  Route::get('/ekspor_7477', [DDAController::class, 'Unduh_Tabel7477']);
  Route::get('/ekspor_7478', [DDAController::class, 'Unduh_Tabel7478']);
  Route::get('/ekspor_7479', [DDAController::class, 'Unduh_Tabel7479']);
  Route::get('/ekspor_7480', [DDAController::class, 'Unduh_Tabel7480']);
  Route::get('/ekspor_7481', [DDAController::class, 'Unduh_Tabel7481']);
  Route::get('/ekspor_7482', [DDAController::class, 'Unduh_Tabel7482']);
  Route::get('/ekspor_7483', [DDAController::class, 'Unduh_Tabel7483']);
  Route::get('/ekspor_7484', [DDAController::class, 'Unduh_Tabel7484']);
  Route::get('/ekspor_7485', [DDAController::class, 'Unduh_Tabel7485']);
  Route::get('/ekspor_7486', [DDAController::class, 'Unduh_Tabel7486']);
  Route::get('/ekspor_7487', [DDAController::class, 'Unduh_Tabel7487']);
  Route::get('/ekspor_7488', [DDAController::class, 'Unduh_Tabel7488']);
  Route::get('/ekspor_7489', [DDAController::class, 'Unduh_Tabel7489']);
  Route::get('/ekspor_7490', [DDAController::class, 'Unduh_Tabel7490']);
  Route::get('/ekspor_7491', [DDAController::class, 'Unduh_Tabel7491']);
  Route::get('/ekspor_7492', [DDAController::class, 'Unduh_Tabel7492']);
  Route::get('/ekspor_7493', [DDAController::class, 'Unduh_Tabel7493']);
  Route::get('/ekspor_7494', [DDAController::class, 'Unduh_Tabel7494']);
  Route::get('/ekspor_7495', [DDAController::class, 'Unduh_Tabel7495']);
  Route::get('/ekspor_7496', [DDAController::class, 'Unduh_Tabel7496']);
  Route::get('/ekspor_7497', [DDAController::class, 'Unduh_Tabel7497']);
  Route::get('/ekspor_7498', [DDAController::class, 'Unduh_Tabel7498']);
  Route::get('/ekspor_7499', [DDAController::class, 'Unduh_Tabel7499']);
  Route::get('/ekspor_74100', [DDAController::class, 'Unduh_Tabel74100']);
  Route::get('/ekspor_74101', [DDAController::class, 'Unduh_Tabel74101']);
  Route::get('/ekspor_74102', [DDAController::class, 'Unduh_Tabel74102']);
  Route::get('/ekspor_74103', [DDAController::class, 'Unduh_Tabel74103']);
  Route::get('/ekspor_74104', [DDAController::class, 'Unduh_Tabel74104']);
  Route::get('/ekspor_74105', [DDAController::class, 'Unduh_Tabel74105']);
  Route::get('/ekspor_74106', [DDAController::class, 'Unduh_Tabel74106']);
  Route::get('/ekspor_74107', [DDAController::class, 'Unduh_Tabel74107']);
  Route::get('/ekspor_74108', [DDAController::class, 'Unduh_Tabel74108']);
  Route::get('/ekspor_74109', [DDAController::class, 'Unduh_Tabel74109']);
  Route::get('/ekspor_74110', [DDAController::class, 'Unduh_Tabel74110']);
  Route::get('/ekspor_74111', [DDAController::class, 'Unduh_Tabel74111']);
  Route::get('/ekspor_74112', [DDAController::class, 'Unduh_Tabel74112']);
  Route::get('/ekspor_74113', [DDAController::class, 'Unduh_Tabel74113']);
  Route::get('/ekspor_74114', [DDAController::class, 'Unduh_Tabel74114']);
  Route::get('/ekspor_74115', [DDAController::class, 'Unduh_Tabel74115']);
  Route::get('/ekspor_74116', [DDAController::class, 'Unduh_Tabel74116']);
  Route::get('/ekspor_74117', [DDAController::class, 'Unduh_Tabel74117']);
  Route::get('/ekspor_74118', [DDAController::class, 'Unduh_Tabel74118']);
  Route::get('/ekspor_74119', [DDAController::class, 'Unduh_Tabel74119']);
  Route::get('/ekspor_74120', [DDAController::class, 'Unduh_Tabel74120']);
  Route::get('/ekspor_74121', [DDAController::class, 'Unduh_Tabel74121']);
  Route::get('/ekspor_74122', [DDAController::class, 'Unduh_Tabel74122']);
  Route::get('/ekspor_74123', [DDAController::class, 'Unduh_Tabel74123']);



Route::get('/ekspor_3217', [DDAController::class, 'Unduh_Tabel3217']);


  Route::get('/export_121', [DDAController::class, 'Unduh121']);
  Route::get('/export_122', [DDAController::class, 'Unduh122']);
  Route::get('/export_123', [DDAController::class, 'Unduh123']);
  Route::get('/export_124', [DDAController::class, 'Unduh124']);
  Route::get('/export_125', [DDAController::class, 'Unduh125']);
  Route::get('/export_126', [DDAController::class, 'Unduh126']);
  Route::get('/export_221', [DDAController::class, 'Unduh221']);
  Route::get('/export_222', [DDAController::class, 'Unduh222']);
  Route::get('/export_223', [DDAController::class, 'Unduh223']);
  Route::get('/export_224', [DDAController::class, 'Unduh224']);
  Route::get('/export_225', [DDAController::class, 'Unduh225']);
  Route::get('/export_226', [DDAController::class, 'Unduh226']);
  Route::get('/export_231', [DDAController::class, 'Unduh231']);
  Route::get('/export_232', [DDAController::class, 'Unduh232']);
  Route::get('/export_233', [DDAController::class, 'Unduh233']);
  Route::get('/export_234', [DDAController::class, 'Unduh234']);
  Route::get('/export_235', [DDAController::class, 'Unduh235']);
  Route::get('/export_3217', [DDAController::class, 'Unduh3217']);
  Route::get('/export_3218', [DDAController::class, 'Unduh3218']);
  Route::get('/export_4211', [DDAController::class, 'Unduh4211']);
  Route::get('/export_4213', [DDAController::class, 'Unduh4213']);
  Route::get('/export_4214', [DDAController::class, 'Unduh4214']);
  Route::get('/export_4215', [DDAController::class, 'Unduh4215']);
  Route::get('/export_423', [DDAController::class, 'Unduh423']);
  Route::get('/export_425', [DDAController::class, 'Unduh425']);
  Route::get('/export_426', [DDAController::class, 'Unduh426']);
  Route::get('/export_427', [DDAController::class, 'Unduh427']);
  Route::get('/export_441', [DDAController::class, 'Unduh441']);
  Route::get('/export_442', [DDAController::class, 'Unduh442']);
  Route::get('/export_443', [DDAController::class, 'Unduh443']);
  Route::get('/export_444', [DDAController::class, 'Unduh444']);
  Route::get('/export_445', [DDAController::class, 'Unduh445']);
  Route::get('/export_446', [DDAController::class, 'Unduh446']);
  Route::get('/export_454', [DDAController::class, 'Unduh454']);
  Route::get('/export_455', [DDAController::class, 'Unduh455']);
  Route::get('/export_466', [DDAController::class, 'Unduh466']);
  Route::get('/export_531', [DDAController::class, 'Unduh531']);
  Route::get('/export_532', [DDAController::class, 'Unduh532']);
  Route::get('/export_541', [DDAController::class, 'Unduh541']);
  Route::get('/export_542', [DDAController::class, 'Unduh542']);
  Route::get('/export_543', [DDAController::class, 'Unduh543']);
  Route::get('/export_551', [DDAController::class, 'Unduh551']);
  Route::get('/export_552', [DDAController::class, 'Unduh552']);
  Route::get('/export_553', [DDAController::class, 'Unduh553']);
  Route::get('/export_554', [DDAController::class, 'Unduh554']);
  Route::get('/export_555', [DDAController::class, 'Unduh555']);
  Route::get('/export_61', [DDAController::class, 'Unduh61']);
  Route::get('/export_62', [DDAController::class, 'Unduh62']);
  Route::get('/export_63', [DDAController::class, 'Unduh63']);
  Route::get('/export_64', [DDAController::class, 'Unduh64']);
  Route::get('/export_65', [DDAController::class, 'Unduh65']);
  Route::get('/export_66', [DDAController::class, 'Unduh66']);
  Route::get('/export_67', [DDAController::class, 'Unduh67']);
  Route::get('/export_68', [DDAController::class, 'Unduh68']);
  Route::get('/export_721', [DDAController::class, 'Unduh721']);
  Route::get('/export_731', [DDAController::class, 'Unduh731']);
  Route::get('/export_732', [DDAController::class, 'Unduh732']);
  Route::get('/export_733', [DDAController::class, 'Unduh733']);
  Route::get('/export_734', [DDAController::class, 'Unduh734']);
  Route::get('/export_735', [DDAController::class, 'Unduh735']);
  Route::get('/export_85', [DDAController::class, 'Unduh85']);
  Route::get('/export_911', [DDAController::class, 'Unduh911']);
  Route::get('/export_913', [DDAController::class, 'Unduh913']);
  Route::get('/export_914', [DDAController::class, 'Unduh914']);
  Route::get('/export_915', [DDAController::class, 'Unduh915']);
  Route::get('/export_916', [DDAController::class, 'Unduh916']);
  Route::get('/export_103', [DDAController::class, 'Unduh103']);
  Route::get('/export_104', [DDAController::class, 'Unduh104']);
  Route::get('/export_105', [DDAController::class, 'Unduh105']);
  Route::get('/export_106', [DDAController::class, 'Unduh106']);
  Route::get('/export_107', [DDAController::class, 'Unduh107']);
  Route::get('/export_921', [DDAController::class, 'Unduh921']);
  Route::get('/export_923', [DDAController::class, 'Unduh923']);
  Route::get('/export_912', [DDAController::class, 'Unduh912']);
  Route::get('/export_741', [DDAController::class, 'Unduh741']);
  Route::get('/export_742', [DDAController::class, 'Unduh742']);
  Route::get('/export_743', [DDAController::class, 'Unduh743']);
  Route::get('/export_744', [DDAController::class, 'Unduh744']);
  Route::get('/export_745', [DDAController::class, 'Unduh745']);
  Route::get('/export_746', [DDAController::class, 'Unduh746']);
  Route::get('/export_747', [DDAController::class, 'Unduh747']); 


      

});


  Route::get('/ekspor_all', [DDAController::class, 'all_tabel']);
  
  




   Route::get('lihat_103', [LihatController::class, 'index103']);
   Route::get('lihat_104', [LihatController::class, 'index104']);
   Route::get('lihat_105', [LihatController::class, 'index105']);
   Route::get('lihat_106', [LihatController::class, 'index106']);
   Route::get('lihat_107', [LihatController::class, 'index107']);
   Route::get('lihat_124', [LihatController::class, 'index124']);
   Route::get('lihat_125', [LihatController::class, 'index125']);
   Route::get('lihat_126', [LihatController::class, 'index126']);
   Route::get('lihat_531', [LihatController::class, 'index531']);
   Route::get('lihat_532', [LihatController::class, 'index532']);
   Route::get('lihat_541', [LihatController::class, 'index541']);
   Route::get('lihat_542', [LihatController::class, 'index542']);
   Route::get('lihat_543', [LihatController::class, 'index543']);
   Route::get('lihat_551', [LihatController::class, 'index551']);
   Route::get('lihat_552', [LihatController::class, 'index552']);
   Route::get('lihat_553', [LihatController::class, 'index553']);
   Route::get('lihat_554', [LihatController::class, 'index554']);
   Route::get('lihat_555', [LihatController::class, 'index555']);
   Route::get('lihat_61', [LihatController::class, 'index61']);
   Route::get('lihat_62', [LihatController::class, 'index62']);
   Route::get('lihat_63', [LihatController::class, 'index63']);
   Route::get('lihat_64', [LihatController::class, 'index64']);
   Route::get('lihat_65', [LihatController::class, 'index65']);
   Route::get('lihat_66', [LihatController::class, 'index66']);
   Route::get('lihat_67', [LihatController::class, 'index67']);
   Route::get('lihat_68', [LihatController::class, 'index68']);
   Route::get('lihat_721', [LihatController::class, 'index721']);
   Route::get('lihat_731', [LihatController::class, 'index731']);
   Route::get('lihat_732', [LihatController::class, 'index732']);
   Route::get('lihat_733', [LihatController::class, 'index733']);
   Route::get('lihat_734', [LihatController::class, 'index734']);
   Route::get('lihat_735', [LihatController::class, 'index735']);
   Route::get('lihat_85', [LihatController::class, 'index85']);
   Route::get('lihat_911', [LihatController::class, 'index911']);
   Route::get('lihat_912', [LihatController::class, 'index912']);
   Route::get('lihat_913', [LihatController::class, 'index913']);
   Route::get('lihat_914', [LihatController::class, 'index914']);
   Route::get('lihat_915', [LihatController::class, 'index915']);
   Route::get('lihat_916', [LihatController::class, 'index916']);
   Route::get('lihat_921', [LihatController::class, 'index921']);
   Route::get('lihat_923', [LihatController::class, 'index923']);
   Route::get('lihat_121', [LihatController::class, 'index121']);
   Route::get('lihat_122', [LihatController::class, 'index122']);
   Route::get('lihat_123', [LihatController::class, 'index123']);
   Route::get('lihat_221', [LihatController::class, 'index221']);
   Route::get('lihat_222', [LihatController::class, 'index222']);
   Route::get('lihat_223', [LihatController::class, 'index223']);
   Route::get('lihat_224', [LihatController::class, 'index224']);
   Route::get('lihat_225', [LihatController::class, 'index225']);
   Route::get('lihat_226', [LihatController::class, 'index226']);
   Route::get('lihat_231', [LihatController::class, 'index231']);
   Route::get('lihat_232', [LihatController::class, 'index232']);
   Route::get('lihat_233', [LihatController::class, 'index233']);
   Route::get('lihat_234', [LihatController::class, 'index234']);
   Route::get('lihat_235', [LihatController::class, 'index235']);
   Route::get('lihat_3217', [LihatController::class, 'index3217']);
   Route::get('lihat_3218', [LihatController::class, 'index3218']);
   Route::get('lihat_4211', [LihatController::class, 'index4211']);
   Route::get('lihat_4213', [LihatController::class, 'index4213']);
   Route::get('lihat_4214', [LihatController::class, 'index4214']);
   Route::get('lihat_4215', [LihatController::class, 'index4215']);
   Route::get('lihat_423', [LihatController::class, 'index423']);
   Route::get('lihat_425', [LihatController::class, 'index425']);
   Route::get('lihat_426', [LihatController::class, 'index426']);
   Route::get('lihat_427', [LihatController::class, 'index427']);
   Route::get('lihat_441', [LihatController::class, 'index441']);
   Route::get('lihat_442', [LihatController::class, 'index442']);
   Route::get('lihat_443', [LihatController::class, 'index443']);
   Route::get('lihat_444', [LihatController::class, 'index444']);
   Route::get('lihat_445', [LihatController::class, 'index445']);
   Route::get('lihat_446', [LihatController::class, 'index446']);
   Route::get('lihat_454', [LihatController::class, 'index454']);
   Route::get('lihat_455', [LihatController::class, 'index455']);
   Route::get('lihat_466', [LihatController::class, 'index466']);
   Route::get('lihat_744', [LihatController::class, 'index744']);
   Route::get('lihat_745', [LihatController::class, 'index745']);
   Route::get('lihat_746', [LihatController::class, 'index746']);
   Route::get('lihat_747', [LihatController::class, 'index747']);
   Route::get('lihat_7410', [LihatController::class, 'index7410']);
   Route::get('lihat_7412', [LihatController::class, 'index7412']);
   Route::get('lihat_7413', [LihatController::class, 'index7413']);
   Route::get('lihat_7414', [LihatController::class, 'index7414']);
   Route::get('lihat_7416', [LihatController::class, 'index7416']);
   Route::get('lihat_7418', [LihatController::class, 'index7418']);
   Route::get('lihat_7419', [LihatController::class, 'index7419']);
   Route::get('lihat_7420', [LihatController::class, 'index7420']);
   Route::get('lihat_7421', [LihatController::class, 'index7421']);
   Route::get('lihat_7424', [LihatController::class, 'index7424']);
   Route::get('lihat_7425', [LihatController::class, 'index7425']);
   Route::get('lihat_7434', [LihatController::class, 'index7434']);
   Route::get('lihat_7435', [LihatController::class, 'index7435']);
   Route::get('lihat_7439', [LihatController::class, 'index7439']);
   Route::get('lihat_7446', [LihatController::class, 'index7446']);
   Route::get('lihat_7447', [LihatController::class, 'index7447']);
   Route::get('lihat_7448', [LihatController::class, 'index7448']);
   Route::get('lihat_7449', [LihatController::class, 'index7449']);
   Route::get('lihat_7450', [LihatController::class, 'index7450']);
   Route::get('lihat_7451', [LihatController::class, 'index7451']);
   Route::get('lihat_7452', [LihatController::class, 'index7452']);
   Route::get('lihat_7453', [LihatController::class, 'index7453']);
   Route::get('lihat_7454', [LihatController::class, 'index7454']);
   Route::get('lihat_7455', [LihatController::class, 'index7455']);
   Route::get('lihat_7456', [LihatController::class, 'index7456']);
   Route::get('lihat_743', [LihatController::class, 'index743']);
   Route::get('lihat_7464', [LihatController::class, 'index7464']);
   Route::get('lihat_7465', [LihatController::class, 'index7465']);
   Route::get('lihat_7466', [LihatController::class, 'index7466']);
   Route::get('lihat_7467', [LihatController::class, 'index7467']);
   Route::get('lihat_74107', [LihatController::class, 'index74107']);
   Route::get('lihat_74108', [LihatController::class, 'index74108']);
   Route::get('lihat_74109', [LihatController::class, 'index74109']);
   Route::get('lihat_74110', [LihatController::class, 'index74110']);
   Route::get('lihat_74111', [LihatController::class, 'index74111']);
   Route::get('lihat_74112', [LihatController::class, 'index74112']);
   Route::get('lihat_74101', [LihatController::class, 'index74101']);
   Route::get('lihat_74102', [LihatController::class, 'index74102']);
   Route::get('lihat_74103', [LihatController::class, 'index74103']);
   Route::get('lihat_74104', [LihatController::class, 'index74104']);
   Route::get('lihat_74105', [LihatController::class, 'index74105']);
   Route::get('lihat_74106', [LihatController::class, 'index74106']);
   Route::get('lihat_74100', [LihatController::class, 'index74100']);
   Route::get('lihat_7415', [LihatController::class, 'index7415']);
   Route::get('lihat_742', [LihatController::class, 'index742']);
   Route::get('lihat_7422', [LihatController::class, 'index7422']);
   Route::get('lihat_7436', [LihatController::class, 'index7436']);
   Route::get('lihat_7440', [LihatController::class, 'index7440']);
   Route::get('lihat_7441', [LihatController::class, 'index7441']);
   Route::get('lihat_7442', [LihatController::class, 'index7442']);
   Route::get('lihat_7443', [LihatController::class, 'index7443']);
   Route::get('lihat_7483', [LihatController::class, 'index7483']);
   Route::get('lihat_741', [LihatController::class, 'index741']);
   Route::get('lihat_743', [LihatController::class, 'index743']);
   Route::get('lihat_7411', [LihatController::class, 'index7411']);
   Route::get('lihat_7444', [LihatController::class, 'index7444']);
   Route::get('lihat_7445', [LihatController::class, 'index7445']);
   Route::get('lihat_7464', [LihatController::class, 'index7464']);
   Route::get('lihat_7465', [LihatController::class, 'index7465']);
   Route::get('lihat_7466', [LihatController::class, 'index7466']);
   Route::get('lihat_7467', [LihatController::class, 'index7467']);
   Route::get('lihat_74114', [LihatController::class, 'index74114']);
   Route::get('lihat_74115', [LihatController::class, 'index74115']);
   Route::get('lihat_74116', [LihatController::class, 'index74116']);
   Route::get('lihat_74117', [LihatController::class, 'index74117']);
   Route::get('lihat_74118', [LihatController::class, 'index74118']);
   Route::get('lihat_74119', [LihatController::class, 'index74119']);
   Route::get('lihat_74120', [LihatController::class, 'index74120']);
   Route::get('lihat_74121', [LihatController::class, 'index74121']);
   Route::get('lihat_74122', [LihatController::class, 'index74122']);
   Route::get('lihat_74123', [LihatController::class, 'index74123']);
   
   Route::get('lihat_7457', [LihatController::class, 'index7457']);
   Route::get('lihat_7458', [LihatController::class, 'index7458']);
   Route::get('lihat_7459', [LihatController::class, 'index7459']);
   Route::get('lihat_7460', [LihatController::class, 'index7460']);
   Route::get('lihat_7461', [LihatController::class, 'index7461']);
   Route::get('lihat_7462', [LihatController::class, 'index7462']);
   Route::get('lihat_7463', [LihatController::class, 'index7463']);
   
   
   Route::get('lihat_dda', [LihatController::class, 'index2']);
   
   
   Route::get('/ekspor_regosek', [ModulController::class, 'Unduh_Regsosek']);

    Route::get('/ekspor_dda_121', [LihatController::class, 'Unduh_dda121']);
  Route::get('/ekspor_dda_122', [LihatController::class, 'Unduh_dda122']);
  Route::get('/ekspor_dda_123', [LihatController::class, 'Unduh_dda123']);
  Route::get('/ekspor_dda_124', [LihatController::class, 'Unduh_dda124']);
  Route::get('/ekspor_dda_125', [LihatController::class, 'Unduh_dda125']);
  Route::get('/ekspor_dda_126', [LihatController::class, 'Unduh_dda126']);
  Route::get('/ekspor_dda_221', [LihatController::class, 'Unduh_dda221']);
  Route::get('/ekspor_dda_222', [LihatController::class, 'Unduh_dda222']);
  Route::get('/ekspor_dda_223', [LihatController::class, 'Unduh_dda223']);
  Route::get('/ekspor_dda_224', [LihatController::class, 'Unduh_dda224']);
  Route::get('/ekspor_dda_225', [LihatController::class, 'Unduh_dda225']);
  Route::get('/ekspor_dda_226', [LihatController::class, 'Unduh_dda226']);
  Route::get('/ekspor_dda_227', [LihatController::class, 'Unduh_dda227']);
  Route::get('/ekspor_dda_231', [LihatController::class, 'Unduh_dda231']);
  Route::get('/ekspor_dda_232', [LihatController::class, 'Unduh_dda232']);
  Route::get('/ekspor_dda_233', [LihatController::class, 'Unduh_dda233']);
  Route::get('/ekspor_dda_234', [LihatController::class, 'Unduh_dda234']);
  Route::get('/ekspor_dda_235', [LihatController::class, 'Unduh_dda235']);
  Route::get('/ekspor_dda_3217', [LihatController::class, 'Unduh_dda3217']);
  Route::get('/ekspor_dda_3218', [LihatController::class, 'Unduh_dda3218']);
  Route::get('/ekspor_dda_4211', [LihatController::class, 'Unduh_dda4211']);
  Route::get('/ekspor_dda_4213', [LihatController::class, 'Unduh_dda4213']);
  Route::get('/ekspor_dda_4214', [LihatController::class, 'Unduh_dda4214']);
  Route::get('/ekspor_dda_4215', [LihatController::class, 'Unduh_dda4215']);
  Route::get('/ekspor_dda_423', [LihatController::class, 'Unduh_dda423']);
  Route::get('/ekspor_dda_425', [LihatController::class, 'Unduh_dda425']);
  Route::get('/ekspor_dda_426', [LihatController::class, 'Unduh_dda426']);
  Route::get('/ekspor_dda_427', [LihatController::class, 'Unduh_dda427']);
  Route::get('/ekspor_dda_441', [LihatController::class, 'Unduh_dda441']);
  Route::get('/ekspor_dda_442', [LihatController::class, 'Unduh_dda442']);
  Route::get('/ekspor_dda_443', [LihatController::class, 'Unduh_dda443']);
  Route::get('/ekspor_dda_444', [LihatController::class, 'Unduh_dda444']);
  Route::get('/ekspor_dda_445', [LihatController::class, 'Unduh_dda445']);
  Route::get('/ekspor_dda_446', [LihatController::class, 'Unduh_dda446']);
  Route::get('/ekspor_dda_451', [LihatController::class, 'Unduh_dda451']);
  Route::get('/ekspor_dda_454', [LihatController::class, 'Unduh_dda454']);
  Route::get('/ekspor_dda_455', [LihatController::class, 'Unduh_dda455']);
  Route::get('/ekspor_dda_466', [LihatController::class, 'Unduh_dda466']);
  Route::get('/ekspor_dda_531', [LihatController::class, 'Unduh_dda531']);
  Route::get('/ekspor_dda_532', [LihatController::class, 'Unduh_dda532']);
  Route::get('/ekspor_dda_541', [LihatController::class, 'Unduh_dda541']);
  Route::get('/ekspor_dda_542', [LihatController::class, 'Unduh_dda542']);
  Route::get('/ekspor_dda_543', [LihatController::class, 'Unduh_dda543']);
  Route::get('/ekspor_dda_551', [LihatController::class, 'Unduh_dda551']);
  Route::get('/ekspor_dda_552', [LihatController::class, 'Unduh_dda552']);
  Route::get('/ekspor_dda_553', [LihatController::class, 'Unduh_dda553']);
  Route::get('/ekspor_dda_554', [LihatController::class, 'Unduh_dda554']);
  Route::get('/ekspor_dda_555', [LihatController::class, 'Unduh_dda555']);
  Route::get('/ekspor_dda_61', [ModulController::class, 'Unduh_Regsosek']);
  Route::get('/ekspor_dda_62', [LihatController::class, 'Unduh_dda62']);
  Route::get('/ekspor_dda_63', [LihatController::class, 'Unduh_dda63']);
  Route::get('/ekspor_dda_64', [LihatController::class, 'Unduh_dda64']);
  Route::get('/ekspor_dda_65', [LihatController::class, 'Unduh_dda65']);
  Route::get('/ekspor_dda_66', [LihatController::class, 'Unduh_dda66']);
  Route::get('/ekspor_dda_67', [LihatController::class, 'Unduh_dda67']);
  Route::get('/ekspor_dda_68', [LihatController::class, 'Unduh_dda68']);
  Route::get('/ekspor_dda_721', [LihatController::class, 'Unduh_dda721']);
  Route::get('/ekspor_dda_722', [LihatController::class, 'Unduh_dda722']);
  Route::get('/ekspor_dda_731', [LihatController::class, 'Unduh_dda731']);
  Route::get('/ekspor_dda_732', [LihatController::class, 'Unduh_dda732']);
  Route::get('/ekspor_dda_733', [LihatController::class, 'Unduh_dda733']);
  Route::get('/ekspor_dda_734', [LihatController::class, 'Unduh_dda734']);
  Route::get('/ekspor_dda_735', [LihatController::class, 'Unduh_dda735']);
  Route::get('/ekspor_dda_85', [LihatController::class, 'Unduh_dda85']);
  Route::get('/ekspor_dda_911', [LihatController::class, 'Unduh_dda911']);
  Route::get('/ekspor_dda_913', [LihatController::class, 'Unduh_dda913']);
  Route::get('/ekspor_dda_914', [LihatController::class, 'Unduh_dda914']);
  Route::get('/ekspor_dda_915', [LihatController::class, 'Unduh_dda915']);
  Route::get('/ekspor_dda_916', [LihatController::class, 'Unduh_dda916']);
  Route::get('/ekspor_dda_103', [LihatController::class, 'Unduh_dda103']);
  Route::get('/ekspor_dda_104', [LihatController::class, 'Unduh_dda104']);
  Route::get('/ekspor_dda_105', [LihatController::class, 'Unduh_dda105']);
  Route::get('/ekspor_dda_106', [LihatController::class, 'Unduh_dda106']);
  Route::get('/ekspor_dda_107', [LihatController::class, 'Unduh_dda107']);
  Route::get('/ekspor_dda_912', [LihatController::class, 'Unduh_dda912']);
  Route::get('/ekspor_dda_921', [LihatController::class, 'Unduh_dda921']);
  Route::get('/ekspor_dda_923', [LihatController::class, 'Unduh_dda923']);
  Route::get('/ekspor_dda_741', [LihatController::class, 'Unduh_dda741']);
  
  Route::get('/ekspor_dda_744', [LihatController::class, 'Unduh_dda744']);



