<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\product;
use App\Models\video;
use App\Models\pdf;
use App\Models\slide;
use App\Models\exports;
use App\Models\juknis;
use App\Models\master_opd;
use App\Models\master_lihat;
use App\Export_dda\Export_Regsosek;
use DB;
use Session;
use Excel;
class ModulController extends Controller
{
    //
    public function index (){
        $list = product::all();
        $videos = video::all();
        $pdfs = pdf::all();
        $slides = slide::all();
        $juknis = juknis::all();
        $opd = master_opd::all();
        $regsosek = exports::where('kode_kec', '050')->where('kode_desa', '016')->where('kode_sls', '0001')->get();
        return view('modul', compact('regsosek', 'list', 'videos','pdfs', 'slides','juknis','opd'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
     public function beranda (){
   
        return view('beranda');
    }
    
    public function cariHome(Request $request)
    {
        // Extract input parameters from the request
        $q = $request->input('nama');
        $tahun = $request->input('tahun');
        $idkab = 7400; // Assuming this is a constant value

        // Store parameters in session
        Session::put('key3', $q);
        Session::put('key', $tahun);
        Session::put('key2', $idkab);

        // Query the database, grouping by 'nama' and filtering by 'status'
        $lihats = master_lihat::where('status', 1)->groupBy('nama')->get();

        // Check if 'nama' parameter is provided
        if (!empty($q)) {
            // Redirect to an external URL if 'nama' is provided
            return Redirect::to('https://webapps.bps.go.id/sultra/syantik/pencarian');
        } else {
            // Return the 'welcome' view with the data if 'nama' is not provided
            return view('cari-home', compact('lihats'));
        }
    }

    public function Unduh_Regsosek()
    {
        
       return Excel::download(new Export_Regsosek, 'Regsosek.xlsx');
    }
    
    public function tes_home (Request $request){
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
            return view('tes_home', compact('lihats'));
        }
 
    }
    
    public function pencarian (Request $request){
        
        $q= Session::get('key3');
        
        $q2 = $request->input('nama');
       $tahun= Session::get('key');
       $tahun2 = $request->input('tahun');
      
      if (empty($q2))
      {
          
      
       $lihats = master_lihat::where('nama', 'LIKE', '%'. $q. '%')->where('status', 1)->where('tahun', $tahun)->where('idkab', 7400)->groupby('nama')->get();
      }
      else
      {
           Session::put('key', $tahun2);
          $lihats = master_lihat::where('nama', 'LIKE', '%'. $q2. '%')->where('status', 1)->where('tahun', $tahun2)->where('idkab', 7400)->groupby('nama')->get();
      }
        return view('pencarian', compact('lihats','tahun','tahun2','q2'));
    }
    
    
    public function search(Request $request)
    {
          $search = $request->get('term');
      
          $result = master_lihat::where('nama', 'LIKE', '%'. $search. '%')->where('status', 1)->groupby('nama')->get();
 
          return response()->json($result);
            
    } 
    
      public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$videos = DB::table('videos')
		->where('nama_video','like',"%".$cari."%")
		->paginate();
        $list = product::all();
     $slides = slide::all();
        $pdfs = pdf::all();
        $juknis = juknis::all();
        $opd = master_opd::all();
    		// mengirim data pegawai ke view index
	 return view('modul', compact('list', 'videos','pdfs','slides','juknis','opd'))->with('i', (request()->input('page', 1) - 1) * 5);
 
	}
	
	  public function caripdf(Request $request)
	{
		// menangkap data pencarian
	    $caripdf = $request->caripdf;
 $slides = slide::all();
    		// mengambil data dari table pegawai sesuai pencarian data
		$pdfs = DB::table('pdfs')
		->where('nama_pdf','like',"%".$caripdf."%")
		->paginate();
        $videos = video::all();
	$juknis = juknis::all();
        $list = product::all();
        $opd = master_opd::all();

    		// mengirim data pegawai ke view index
	 return view('modul', compact('list', 'pdfs','videos','slides','juknis','opd'))->with('i', (request()->input('page', 1) - 1) * 5);
 
	}
	
	public function carislide(Request $request)
	{
		// menangkap data pencarian
	    $carislide = $request->carislide;
 $slides = DB::table('slides')
		->where('nama_slide','like',"%".$carislide."%")
		->paginate();
    		// mengambil data dari table pegawai sesuai pencarian data
		$pdfs = pdf::all();
        $videos = video::all();
	    $juknis = juknis::all();
        $list = product::all();
        $opd = master_opd::all();

    		// mengirim data pegawai ke view index
	 return view('modul', compact('list', 'pdfs','videos','slides','juknis','opd'))->with('i', (request()->input('page', 1) - 1) * 5);
 
	}
	
	public function carijuknis(Request $request)
	{
		// menangkap data pencarian
	    $carijuknis = $request->carijuknis;
 $juknis = DB::table('juknis')
		->where('nama_juknis','like',"%".$carijuknis."%")
		->paginate();
    		// mengambil data dari table pegawai sesuai pencarian data
		$pdfs = pdf::all();
        $videos = video::all();
	     $slides = slide::all();
        $list = product::all();
        $opd = master_opd::all();

    		// mengirim data pegawai ke view index
	 return view('modul', compact('list', 'pdfs','videos','slides','juknis','opd'))->with('i', (request()->input('page', 1) - 1) * 5);
 
	}
	
	

}
