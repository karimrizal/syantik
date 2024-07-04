<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
use App\Models\meta_indikator;
use App\Models\meta_kegiatan;
use App\Models\tabel;
use App\Models\meta_variabel;
use Illuminate\Support\Facades\Redirect;
use App\Models\master_tabel;
use App\Models\daftar_rekomendasi;
use DB;

class AuthController extends Controller
{
    public function showFormLogin(Request $request)
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
           
                $tahun = $request->input('tahun');
        
    $master_tabel = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 1 )->groupby('dinas')->get();
        
    $master_tabel_sektoral = master_tabel::select('dinas','kode', DB::raw('count(kode) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('dinas')->get();
        
        
        $master_tabel_sektoral_tahun = master_tabel::select('dinas','kode', DB::raw('count(kode) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 0 )->groupby('dinas')->get();    
    
    $rekomendasi_sektoral = daftar_rekomendasi::select('dinas',DB::raw('sum(status) as progres') )
        ->where('organisasi', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('dinas')->get();
        
    $rekomendasi_sektoral_tahun = daftar_rekomendasi::select('dinas',DB::raw('sum(status) as progres') )
        ->where('organisasi', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 0 )->groupby('dinas')->get();    
        
    $meta_kegiatan_sektoral = meta_kegiatan::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();
        
    $meta_kegiatan_sektoral_tahun = meta_kegiatan::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('b0r2', $tahun)->where('kopi_panas', 0 )->groupby('organisasi')->get();    
        
    $meta_indikator_sektoral = meta_indikator::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();
        
    $meta_variabel_sektoral = meta_variabel::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();    
        
    $master_tabel_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 1 )->groupby('dinas')->get();  
        
        $monitoring_tabel_opd = tabel::select('organisasi', DB::raw('count(*) as total') )
        ->where('idkab', Auth::user()->idkab )->groupby('organisasi')->get(); 
        
    $master_tabel_all = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->groupby('dinas')->get();
        
    $master_tabel_all_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->groupby('dinas')->get();    
        
    $monitoring_kabkot = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->groupby('idkab')->get();
        
    $monitoring_kabkot_all = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->groupby('idkab')->get();
        
     $monitoring_kabkot_tahun = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->where('tahun', $tahun)->groupby('idkab')->get();
        
    $monitoring_kabkot_all_tahun = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->where('tahun', $tahun)->groupby('idkab')->get();        
        
    $idkab = Auth::user()->idkab;
    $jumlah_opd = DB::select(DB::raw("SELECT COUNT(*) as jumlah_opd
                                        FROM
                                        (
                                            SELECT COUNT(*) 
                                            FROM master_tabels 
                                            where idkab = '$idkab' and tahun = 2020
                                            GROUP BY dinas
                                        ) t"));
                                 
    $jumlah_metadata = DB::select(DB::raw("SELECT 
                                            (select count(*) from meta_kegiatan where idkab = '$idkab' and b0r1 IS NOT NULL)
                                            +
                                            (select count(*) from meta_variabel where idkab = '$idkab' and tahun IS NOT NULL )
                                            +
                                            (select count(*) from meta_indikator where idkab = '$idkab' and tahun IS NOT NULL ) as jumlah_metadata"));
    
    $jumlah_metadata_tahun = DB::select(DB::raw("SELECT 
                                            (select count(*) from meta_kegiatan where idkab = '$idkab' and b0r2 = '$tahun' and b0r1 IS NOT NULL)
                                            +
                                            (select count(*) from meta_variabel where idkab = '$idkab' and tahun = '$tahun' )
                                            +
                                            (select count(*) from meta_indikator where idkab = '$idkab' and tahun = '$tahun' ) as jumlah_metadata"));
   
        
      $jumlah_data = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 0)->where('kode','<>', NULL)->get();
        
        $jumlah_data_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 0)->where('tahun', $tahun)->where('kode','<>', NULL)->get(); 
        
        
        
         $jumlah_data_dda = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 1)->get();
        
        $jumlah_data_tahun_dda = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 1)->where('tahun', $tahun)->get(); 
    
    
    
     $jumlah_opd_tahun = DB::select(DB::raw("SELECT COUNT(*) as jumlah_opd
                                        FROM
                                        (
                                            SELECT COUNT(*) 
                                            FROM master_tabels 
                                            where idkab = '$idkab' and tahun = '$tahun'
                                            GROUP BY dinas
                                        ) t"));
                                        
                return view('dashboard',compact('meta_kegiatan_sektoral_tahun','rekomendasi_sektoral_tahun','master_tabel_sektoral_tahun','meta_kegiatan_sektoral','meta_indikator_sektoral','meta_variabel_sektoral','rekomendasi_sektoral','master_tabel_sektoral','jumlah_data_dda','jumlah_data_tahun_dda','monitoring_tabel_opd','jumlah_metadata_tahun','monitoring_kabkot_tahun','monitoring_kabkot_all_tahun','master_tabel_tahun','master_tabel_all_tahun','jumlah_data_tahun','jumlah_opd_tahun','tahun','monitoring_kabkot','monitoring_kabkot_all','jumlah_metadata','master_tabel','master_tabel_all','jumlah_data','jumlah_opd'))->with('k', (request()->input('page', 1) - 1) * 5);
                
           
        }
        return view('login');
    }
  
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
  
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
  
        Auth::attempt($data);
  
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            
          $data_all = tabel::selectRaw("count(organisasi) as jumlah_data")->get();
        
    
    $data = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'BPS')->get();
        
    $data_count = count($data);  
    
    
    $tahun = $request->input('tahun');
    
   $master_tabel = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 1 )->groupby('dinas')->get();
        
    $master_tabel_sektoral = master_tabel::select('dinas','kode', DB::raw('count(kode) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('dinas')->get();
        
    $master_tabel_sektoral_tahun = master_tabel::select('dinas','kode', DB::raw('count(kode) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 0 )->groupby('dinas')->get();    
    
    $rekomendasi_sektoral = daftar_rekomendasi::select('dinas',DB::raw('sum(status) as progres') )
        ->where('organisasi', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('dinas')->get();
        
    $rekomendasi_sektoral_tahun = daftar_rekomendasi::select('dinas',DB::raw('sum(status) as progres') )
        ->where('organisasi', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 0 )->groupby('dinas')->get();    
        
    $meta_kegiatan_sektoral = meta_kegiatan::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();
        
    $meta_kegiatan_sektoral_tahun = meta_kegiatan::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('b0r2', $tahun)->where('kopi_panas', 0 )->groupby('organisasi')->get();    
        
    $meta_indikator_sektoral = meta_indikator::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();
        
    $meta_variabel_sektoral = meta_variabel::select('organisasi',DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas', 0 )->groupby('organisasi')->get();    
        
        $master_tabel_all = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->groupby('dinas')->get();
        $idkab = Auth::user()->idkab;
    $jumlah_opd = DB::select(DB::raw("SELECT COUNT(*) as jumlah_opd
                                        FROM
                                        (
                                            SELECT COUNT(*) 
                                            FROM master_tabels 
                                            where idkab = '$idkab' and tahun = 2020
                                            GROUP BY dinas
                                        ) t")); 
                                        
                                        $monitoring_tabel_opd = tabel::select('organisasi', DB::raw('count(*) as total') )
        ->where('idkab', Auth::user()->idkab )->groupby('organisasi')->get();
                                        
     $monitoring_kabkot = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->groupby('idkab')->get();
        
    $monitoring_kabkot_all = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->groupby('idkab')->get();                                      
    $jumlah_metadata = DB::select(DB::raw("SELECT 
                                            (select count(*) from meta_kegiatan where idkab = '$idkab' and b0r1 IS NOT NULL)
                                            +
                                            (select count(*) from meta_variabel where idkab = '$idkab' and tahun IS NOT NULL )
                                            +
                                            (select count(*) from meta_indikator where idkab = '$idkab' and tahun IS NOT NULL ) as jumlah_metadata"));
                                            
                                            
    $master_tabel_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->where('kopi_panas', 1 )->groupby('dinas')->get();
        
     $master_tabel_all_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->groupby('dinas')->get();    
                                            
    
    $monitoring_kabkot_tahun = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->where('tahun', $tahun)->groupby('idkab')->get();
        
    $monitoring_kabkot_all_tahun = master_tabel::select('idkab', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', '!=', 7400 )->where('tahun', $tahun)->groupby('idkab')->get();
        
       $jumlah_data = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 0)->where('kode','<>', NULL)->get();
        
        $jumlah_data_tahun = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 0)->where('kode','<>', NULL)->where('tahun', $tahun)->get(); 
        
        
        
         $jumlah_data_dda = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 1)->get();
        
        $jumlah_data_tahun_dda = master_tabel::select('dinas', DB::raw('count(*) as total'),DB::raw('sum(status) as progres') )
        ->where('idkab', Auth::user()->idkab )->where('kopi_panas','=', 1)->where('tahun', $tahun)->get(); 
    
    
    
     $jumlah_opd_tahun = DB::select(DB::raw("SELECT COUNT(*) as jumlah_opd
                                        FROM
                                        (
                                            SELECT COUNT(*) 
                                            FROM master_tabels 
                                            where idkab = '$idkab' and tahun = '$tahun'
                                            GROUP BY dinas
                                        ) t"));   
                                        
     $jumlah_metadata_tahun = DB::select(DB::raw("SELECT 
                                            (select count(*) from meta_kegiatan where idkab = '$idkab' and b0r2 = '$tahun')
                                            +
                                            (select count(*) from meta_variabel where idkab = '$idkab' and tahun = '$tahun' )
                                            +
                                            (select count(*) from meta_indikator where idkab = '$idkab' and tahun = '$tahun' ) as jumlah_metadata"));
                                            

        
    $data_kesehatan = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kesehatan')->get();
    
    $data_pppak = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan KB')->get();
        
    $data_peternakan = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Tanaman Pangan dan Peternakan')->get();
        
    $data_pendidikan = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pendidikan dan Kebudayaan')->get();
        
    $data_kehutanan = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kehutanan')->get();
        
    $data_pariwisata = tabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pariwisata')->get();
    
    
    $meta_kegiatan_all = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data")->get();
    
    $meta_kegiatan = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'BPS')->get();
    
    $meta_kegiatan_kesehatan = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kesehatan')->get();
    
    $meta_kegiatan_pppak = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan KB')->get();
        
    $meta_kegiatan_peternakan = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Tanaman Pangan dan Peternakan')->get();
        
    $meta_kegiatan_pendidikan = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pendidikan dan Kebudayaan')->get();
        
    $meta_kegiatan_kehutanan = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kehutanan')->get();
        
    $meta_kegiatan_pariwisata = meta_kegiatan::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pariwisata')->get();
    
    
    $meta_indikator_all = meta_indikator::selectRaw("count(organisasi) as jumlah_data")->get();        
    $meta_indikator = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'BPS')->get();
    
    $meta_indikator_kesehatan = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kesehatan')->get();
    
    $meta_indikator_pppak = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan KB')->get();
        
     $meta_indikator_peternakan = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Tanaman Pangan dan Peternakan')->get();
    
    $meta_indikator_pendidikan = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pendidikan dan Kebudayaan')->get();
        
     $meta_indikator_kehutanan = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kehutanan')->get();
        
    $meta_indikator_pariwisata = meta_indikator::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pariwisata')->get();
    
    
    $meta_variabel_all = meta_variabel::selectRaw("count(organisasi) as jumlah_data")->get();  
    $meta_variabel = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'BPS')->get();
    
    $meta_variabel_kesehatan = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kesehatan')->get();
    
    $meta_variabel_pppak = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pemberdayaan Perempuan, Perlindungan Anak, Kependudukan dan KB')->get();
        
    $meta_variabel_peternakan = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Tanaman Pangan dan Peternakan')->get();
        
    $meta_variabel_pendidikan = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pendidikan dan Kebudayaan')->get();
        
    $meta_variabel_kehutanan = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Kehutanan')->get();
        
    $meta_variabel_pariwisata = meta_variabel::selectRaw("count(organisasi) as jumlah_data, organisasi")
        ->groupBy('organisasi')->where('organisasi', 'Dinas Pariwisata')->get();

        

    return view( 'dashboard', compact('meta_kegiatan_sektoral_tahun','rekomendasi_sektoral_tahun','master_tabel_sektoral_tahun','meta_kegiatan_sektoral','meta_indikator_sektoral','meta_variabel_sektoral','rekomendasi_sektoral','master_tabel_sektoral','jumlah_data_dda','jumlah_data_tahun_dda','monitoring_tabel_opd','jumlah_metadata_tahun','monitoring_kabkot_tahun','monitoring_kabkot_all_tahun','master_tabel_tahun','master_tabel_all_tahun','jumlah_data_tahun','jumlah_opd_tahun','tahun','monitoring_kabkot','monitoring_kabkot_all','jumlah_metadata','master_tabel','master_tabel_all','jumlah_data','jumlah_opd','data_all','data', 'data_kesehatan', 'data_pppak', 'data_peternakan', 'data_pendidikan', 'data_kehutanan', 'data_pariwisata',
    'meta_kegiatan_all','meta_kegiatan', 'meta_kegiatan_kesehatan', 'meta_kegiatan_pppak', 'meta_kegiatan_peternakan', 'meta_kegiatan_pendidikan', 'meta_kegiatan_kehutanan', 'meta_kegiatan_pariwisata',
    'meta_indikator_all','meta_indikator', 'meta_indikator_kesehatan','meta_indikator_pppak', 'meta_indikator_peternakan', 'meta_indikator_pendidikan', 'meta_indikator_kehutanan', 'meta_indikator_pariwisata',
    'meta_variabel_all','meta_variabel', 'meta_variabel_kesehatan', 'meta_variabel_pppak', 'meta_variabel_peternakan', 'meta_variabel_pendidikan', 'meta_variabel_kehutanan', 'meta_variabel_pariwisata' ) );
    }
            
  
         else { // false
  
            //Login Fail
            Session::flash('error', 'Email atau password salah');
             return redirect::to('https://webapps.bps.go.id/sultra/syantik/login');
        }
  
    }
  
    public function showFormRegister()
    {
        return view('register');
    }
  
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
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
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }
  
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return view('welcome');
    }
  
  
}