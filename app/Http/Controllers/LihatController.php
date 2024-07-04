<?php

namespace App\Http\Controllers;
use App\Models\data;
use App\Models\tabel;
use Illuminate\Http\Request;
use DB;
use App\Models\arc;
use App\Models\master_kab;
use App\Models\master_tabel;
use App\Models\master_perbandingan;
use App\Models\master_opd;
use Session;
use Auth;
use Excel;
use App\Models\export;
use App\Models\dda\tabel_103;
use App\Models\dda\tabel_104;
use App\Models\dda\tabel_105;
use App\Models\dda\tabel_106;
use App\Models\dda\tabel_107;
use App\Models\dda\tabel_124;
use App\Models\dda\tabel_125;
use App\Models\dda\tabel_126;
use App\Models\dda\tabel_531;
use App\Models\dda\tabel_532;
use App\Models\dda\tabel_541;
use App\Models\dda\tabel_542;
use App\Models\dda\tabel_543;
use App\Models\dda\tabel_551;
use App\Models\dda\tabel_552;
use App\Models\dda\tabel_553;
use App\Models\dda\tabel_554;
use App\Models\dda\tabel_555;
use App\Models\dda\tabel_61;
use App\Models\dda\tabel_62;
use App\Models\dda\tabel_67;
use App\Models\dda\tabel_63;
use App\Models\dda\tabel_64;
use App\Models\dda\tabel_65;
use App\Models\dda\tabel_66;
use App\Models\dda\tabel_68;
use App\Models\dda\tabel_721;
use App\Models\dda\tabel_731;
use App\Models\dda\tabel_732;
use App\Models\dda\tabel_733;
use App\Models\dda\tabel_734;
use App\Models\dda\tabel_735;
use App\Models\dda\tabel_85;
use App\Models\dda\tabel_911;
use App\Models\dda\tabel_912;
use App\Models\dda\tabel_913;
use App\Models\dda\tabel_914;
use App\Models\dda\tabel_915;
use App\Models\dda\tabel_916;
use App\Models\dda\tabel_921;
use App\Models\dda\tabel_923;
use App\Models\dda\tabel_121;
use App\Models\dda\tabel_122;
use App\Models\dda\tabel_123;
use App\Models\dda\tabel_221;
use App\Models\dda\tabel_222;
use App\Models\dda\tabel_223;
use App\Models\dda\tabel_224;
use App\Models\dda\tabel_225;
use App\Models\dda\tabel_226;
use App\Models\tabel_231;
use App\Models\tabel_232;
use App\Models\tabel_233;
use App\Models\tabel_234;
use App\Models\tabel_235;
use App\Models\tabel_3217;
use App\Models\tabel_3218;
use App\Models\dda\tabel_4211;
use App\Models\dda\tabel_4213;
use App\Models\dda\tabel_4214;
use App\Models\dda\tabel_4215;
use App\Models\tabel_423;
use App\Models\tabel_425;
use App\Models\dda\tabel_426;
use App\Models\dda\tabel_427;
use App\Models\dda\tabel_441;
use App\Models\dda\tabel_442;
use App\Models\dda\tabel_443;
use App\Models\dda\tabel_444;
use App\Models\dda\tabel_445;
use App\Models\dda\tabel_446;
use App\Models\dda\tabel_454;
use App\Models\dda\tabel_455;
use App\Models\dda\tabel_466;

use App\Models\dda\tabel_74_4;
use App\Models\dda\tabel_74_5;
use App\Models\dda\tabel_74_6;
use App\Models\dda\tabel_74_7;
use App\Models\dda\tabel_74_10;
use App\Models\dda\tabel_74_12;
use App\Models\dda\tabel_74_13;
use App\Models\dda\tabel_74_14;
use App\Models\dda\tabel_74_16;
use App\Models\dda\tabel_74_18;
use App\Models\dda\tabel_74_19;
use App\Models\dda\tabel_74_20;
use App\Models\dda\tabel_74_21;
use App\Models\dda\tabel_74_24;
use App\Models\dda\tabel_74_25;
use App\Models\dda\tabel_74_34;
use App\Models\dda\tabel_74_35;
use App\Models\dda\tabel_74_39;
use App\Models\dda\tabel_74_46;

use App\Models\dda\tabel_74_47;
use App\Models\dda\tabel_74_48;
use App\Models\dda\tabel_74_49;
use App\Models\dda\tabel_74_50;
use App\Models\dda\tabel_74_51;
use App\Models\dda\tabel_74_52;
use App\Models\dda\tabel_74_53;
use App\Models\dda\tabel_74_54;
use App\Models\dda\tabel_74_55;
use App\Models\dda\tabel_74_56;



use App\Models\dda\tabel_74_107;
use App\Models\dda\tabel_74_108;
use App\Models\dda\tabel_74_109;
use App\Models\dda\tabel_74_110;
use App\Models\dda\tabel_74_111;
use App\Models\dda\tabel_74_112;

use App\Models\dda\tabel_74_100;
use App\Models\dda\tabel_74_101;
use App\Models\dda\tabel_74_102;
use App\Models\dda\tabel_74_103;
use App\Models\dda\tabel_74_104;
use App\Models\dda\tabel_74_105;
use App\Models\dda\tabel_74_106;

use App\Models\dda\tabel_74_15;
use App\Models\dda\tabel_74_2;
use App\Models\dda\tabel_74_22;
use App\Models\dda\tabel_74_36;
use App\Models\dda\tabel_74_40;
use App\Models\dda\tabel_74_41;
use App\Models\dda\tabel_74_42;
use App\Models\dda\tabel_74_43;
use App\Models\dda\tabel_74_83;
use App\Models\dda\tabel_74_1;
use App\Models\dda\tabel_74_3;
use App\Models\dda\tabel_74_11;
use App\Models\dda\tabel_74_44;
use App\Models\dda\tabel_74_45;
use App\Models\dda\tabel_74_64;
use App\Models\dda\tabel_74_65;
use App\Models\dda\tabel_74_66;
use App\Models\dda\tabel_74_67;
use App\Models\dda\tabel_74_114;
use App\Models\dda\tabel_74_115;
use App\Models\dda\tabel_74_116;
use App\Models\dda\tabel_74_117;
use App\Models\dda\tabel_74_118;
use App\Models\dda\tabel_74_119;
use App\Models\dda\tabel_74_120;
use App\Models\dda\tabel_74_121;
use App\Models\dda\tabel_74_122;
use App\Models\dda\tabel_74_123;

use App\Models\dda\tabel_74_57;
use App\Models\dda\tabel_74_58;
use App\Models\dda\tabel_74_59;
use App\Models\dda\tabel_74_60;
use App\Models\dda\tabel_74_61;
use App\Models\dda\tabel_74_62;
use App\Models\dda\tabel_74_63;

use App\Models\master_lihat;


use App\Export_dda\Exports_dda121;
use App\Export_dda\Exports_dda122;
use App\Export_dda\Exports_dda123;
use App\Export_dda\Exports_dda124;
use App\Export_dda\Exports_dda125;
use App\Export_dda\Exports_dda126;
use App\Export_dda\Exports_dda221;
use App\Export_dda\Exports_dda222;
use App\Export_dda\Exports_dda223;
use App\Export_dda\Exports_dda224;
use App\Export_dda\Exports_dda225;
use App\Export_dda\Exports_dda226;
use App\Export_dda\Exports_dda227;
use App\Export_dda\Exports_dda231;
use App\Export_dda\Exports_dda232;
use App\Export_dda\Exports_dda233;
use App\Export_dda\Exports_dda234;
use App\Export_dda\Exports_dda235;
use App\Export_dda\Exports_dda3217;
use App\Export_dda\Exports_dda3218;
use App\Export_dda\Exports_dda4211;
use App\Export_dda\Exports_dda4213;
use App\Export_dda\Exports_dda4214;
use App\Export_dda\Exports_dda4215;
use App\Export_dda\Exports_dda423;
use App\Export_dda\Exports_dda425;
use App\Export_dda\Exports_dda426;
use App\Export_dda\Exports_dda427;
use App\Export_dda\Exports_dda441;
use App\Export_dda\Exports_dda442;
use App\Export_dda\Exports_dda443;
use App\Export_dda\Exports_dda444;
use App\Export_dda\Exports_dda445;
use App\Export_dda\Exports_dda446;
use App\Export_dda\Exports_dda451;
use App\Export_dda\Exports_dda454;
use App\Export_dda\Exports_dda455;
use App\Export_dda\Exports_dda466;
use App\Export_dda\Exports_dda531;
use App\Export_dda\Exports_dda532;
use App\Export_dda\Exports_dda541;
use App\Export_dda\Exports_dda542;
use App\Export_dda\Exports_dda543;
use App\Export_dda\Exports_dda551;
use App\Export_dda\Exports_dda552;
use App\Export_dda\Exports_dda553;
use App\Export_dda\Exports_dda554;
use App\Export_dda\Exports_dda555;
use App\Export_dda\Exports_dda61;
use App\Export_dda\Exports_dda62;
use App\Export_dda\Exports_dda63;
use App\Export_dda\Exports_dda64;
use App\Export_dda\Exports_dda65;
use App\Export_dda\Exports_dda66;
use App\Export_dda\Exports_dda67;
use App\Export_dda\Exports_dda68;
use App\Export_dda\Exports_dda721;
use App\Export_dda\Exports_dda722;
use App\Export_dda\Exports_dda731;
use App\Export_dda\Exports_dda732;
use App\Export_dda\Exports_dda733;
use App\Export_dda\Exports_dda734;
use App\Export_dda\Exports_dda735;
use App\Export_dda\Exports_dda85;
use App\Export_dda\Exports_dda911;
use App\Export_dda\Exports_dda913;
use App\Export_dda\Exports_dda914;
use App\Export_dda\Exports_dda915;
use App\Export_dda\Exports_dda916;
use App\Export_dda\Exports_dda103;
use App\Export_dda\Exports_dda104;
use App\Export_dda\Exports_dda105;
use App\Export_dda\Exports_dda106;
use App\Export_dda\Exports_dda107;
use App\Export_dda\Exports_dda912;
use App\Export_dda\Exports_dda921;
use App\Export_dda\Exports_dda923;
use App\Export_dda\Exports_dda741;
use App\Export_dda\Exports_dda742;
use App\Export_dda\Exports_dda743;
use App\Export_dda\Exports_dda744;
use App\Export_dda\Exports_dda745;
use App\Export_dda\Exports_dda746;
use App\Export_dda\Exports_dda747;
use App\Export_dda\Exports_dda748;
use App\Export_dda\Exports_dda7410;
use App\Export_dda\Exports_dda7411;
use App\Export_dda\Exports_dda7412;
use App\Export_dda\Exports_dda7413;
use App\Export_dda\Exports_dda7414;
use App\Export_dda\Exports_dda7415;
use App\Export_dda\Exports_dda7416;
use App\Export_dda\Exports_dda7417;
use App\Export_dda\Exports_dda7418;
use App\Export_dda\Exports_dda7419;
use App\Export_dda\Exports_dda7420;
use App\Export_dda\Exports_dda7421;
use App\Export_dda\Exports_dda7422;
use App\Export_dda\Exports_dda7423;
use App\Export_dda\Exports_dda7424;
use App\Export_dda\Exports_dda7425;
use App\Export_dda\Exports_dda7426;
use App\Export_dda\Exports_dda7427;
use App\Export_dda\Exports_dda7428;
use App\Export_dda\Exports_dda7429;
use App\Export_dda\Exports_dda7430;
use App\Export_dda\Exports_dda7431;
use App\Export_dda\Exports_dda7432;
use App\Export_dda\Exports_dda7433;
use App\Export_dda\Exports_dda7434;
use App\Export_dda\Exports_dda7435;
use App\Export_dda\Exports_dda7436;
use App\Export_dda\Exports_dda7437;
use App\Export_dda\Exports_dda7438;
use App\Export_dda\Exports_dda7439;
use App\Export_dda\Exports_dda7440;
use App\Export_dda\Exports_dda7441;
use App\Export_dda\Exports_dda7442;
use App\Export_dda\Exports_dda7443;
use App\Export_dda\Exports_dda7444;
use App\Export_dda\Exports_dda7445;
use App\Export_dda\Exports_dda7446;
use App\Export_dda\Exports_dda7447;
use App\Export_dda\Exports_dda7448;
use App\Export_dda\Exports_dda7449;
use App\Export_dda\Exports_dda7450;
use App\Export_dda\Exports_dda7451;
use App\Export_dda\Exports_dda7452;
use App\Export_dda\Exports_dda7453;
use App\Export_dda\Exports_dda7454;
use App\Export_dda\Exports_dda7455;


class LihatController extends Controller
{
    public $koloms, $datas, $datas_dua, $report, $tabel, $tables ;
    public function index (Request $request){
        
     
       $arcs = DB::table('arcs')
        ->join('tabels', 'tabels.nama', '=', 'arcs.nama_data')
        ->groupBy('tabels.nama')
        ->where('tabels.status_bps', 'Tampil')->get();
       
        $tables = DB::table('data')
        ->join('tabels', 'tabels.nama', '=', 'data.tabel_id')
        ->groupBy('data.tabel_id')
        ->where('tabels.status_bps', 'Tampil')->get();
      
        return view('lihat_data.lihat_data', compact( 'tables','arcs'));
    }
    
    public function index2( Request $request)
    {
       
            $tahun = $request->input('tahun');
            $idkab = $request->input('idkab');
            
            Session::put('key', $tahun);
            Session::put('key2', $idkab);
        
             $year= Session::get('key');
             $idkab= Session::get('key2');
            
            $lihats = master_lihat::where('tahun', 2021)->where('status', 1)->where('idkab', 7400)->get();
            $kab = master_kab::where('idkab', $idkab )->get();
            $lihats_tahun = master_lihat::where('tahun', $year)->where('status', 1)->where('idkab', $idkab)->get();
            
             return view('lihat_data.data_dda',compact('lihats','lihats_tahun', 'year','kab'))->with('k', (request()->input('page', 1) - 1) * 5);
             
        
    }
    
    
    public function index_dinas_kesehatan(Request $request, $id)
    {
       
        
          $tahun = $request->input('tahun');
            $idkab = $request->input('idkab');
            
            Session::put('key', $tahun);
            Session::put('key2', $idkab);
        
             $year= Session::get('key');
             $idkab= Session::get('key2');
            
            if(empty($year)){
                $lihats = master_lihat::where('tahun', 2021)->where('status', 1)->where('idkab', 7400)->where('dinas', $id)->get();
                $kab = master_kab::where('idkab', 7400 )->get();
            }
            
            else{
                $lihats = master_lihat::where('tahun', $year)->where('status', 1)->where('idkab', 7400)->where('dinas', $id)->get();
                $kab = master_kab::where('idkab', 7400 )->get();
            }
            $lihats_tahun = master_lihat::where('tahun', $year)->where('status', 1)->where('idkab', $idkab)->where('dinas', $id)->get();
            $opd = master_opd::all();
            
             return view('lihat_data.dinas_kesehatan',compact('lihats','lihats_tahun', 'kab','opd','year'))->with('k', (request()->input('page', 1) - 1) * 5);
             
        
    }
    
    
    
    
    
    public function index103()
    {
            $year= Session::get('key');
            $idkab= Session::get('key2');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_103')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            $opd = master_opd::all();
            
            if(empty($year)){
            $kab = master_kab::where('idkab', 7400 )->get();    
            $year = 2021;
            $sum_lk = DB::table('tabel_103s')
                            ->selectRaw("sum(t103a) as sum_a,sum(t103b) as sum_b, sum(t103c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', 7400 )
                            ->get();
            $tabel_103 = tabel_103::where('tahun', 2021)->where('idkab', 7400 )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_103s')
                            ->selectRaw("sum(t103a) as sum_a,sum(t103b) as sum_b, sum(t103c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_103 = tabel_103::where('tahun', $year)->where('idkab', $idkab )->get(); 
            }
                            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_103')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_103')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_103')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.103',compact('tabel_103', 'year','kab','sum_lk','catatan','opd','metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function index104()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_104')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;   
            $kab = master_kab::where('idkab', 7400 )->get();    
            $sum_lk = DB::table('tabel_104s')
                            ->selectRaw("sum(t104a) as sum_a,sum(t104b) as sum_b, sum(t104c) as sum_c, sum(t104d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', 7400 )
                            ->get();
                            
            $tabel_104 = tabel_104::where('tahun', 2021)->where('idkab', 7400 )->get();                
            }
            
            else{
                $kab = master_kab::where('idkab', $idkab )->get();
               $sum_lk = DB::table('tabel_104s')
                            ->selectRaw("sum(t104a) as sum_a,sum(t104b) as sum_b, sum(t104c) as sum_c, sum(t104d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_104 = tabel_104::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_104')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_104')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_104')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                         
            
             return view('lihat_data.104',compact('tabel_104', 'year','kab','sum_lk','opd','catatan', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index105()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_105')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get(); 
            $sum_lk = DB::table('tabel_105s')
                            ->selectRaw("sum(t105a) as sum_a,sum(t105b) as sum_b, sum(t105c) as sum_c, sum(t105d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_105 = tabel_105::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
             $sum_lk = DB::table('tabel_105s')
                            ->selectRaw("sum(t105a) as sum_a,sum(t105b) as sum_b, sum(t105c) as sum_c, sum(t105d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_105 = tabel_105::where('tahun', $year)->where('idkab', $idkab )->get();   
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_105')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_105')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_105')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                          
            
             return view('lihat_data.105',compact('tabel_105', 'year','kab','sum_lk','opd','catatan', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index106()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_106')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_106 = tabel_106::where('idkab', $idkab )->get();
            
            
            }
            else{
            $tabel_106 = tabel_106::where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_106')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_106')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_106')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
      
            
             return view('lihat_data.106',compact('tabel_106', 'year','kab','catatan', 'opd' ,'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index107()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_107')->where('idkab', $idkab )->where('tahun', $year)->get();
      $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_107 = tabel_107::where('idkab', $idkab )->get();
            }
            else{
                $tabel_107 = tabel_107::where('idkab', $idkab )->get();
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_107')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_107')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_107')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
      
            
             return view('lihat_data.107',compact('tabel_107', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
     public function index124()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
             $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_124 = tabel_124::where('tahun', $year)->where('idkab', $idkab )->get();
           
            }
            
            else{
                $tabel_124 = tabel_124::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_124')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_124')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_124')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            $catatan = master_tabel::where('judul', 'tabel_124')->where('idkab', $idkab )->where('tahun', $year)->get();
            
             return view('lihat_data.124',compact('tabel_124', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index125()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_125 = tabel_125::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
                $tabel_125 = tabel_125::where('tahun', $year)->where('idkab', $idkab )->get();
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_125')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_125')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_125')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                
            $catatan = master_tabel::where('judul', 'tabel_125')->where('idkab', $idkab )->where('tahun', $year)->get();
            
             return view('lihat_data.125',compact('tabel_125', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index126()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
             $tabel_126 = tabel_126::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
                $tabel_126 = tabel_126::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_126')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_126')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_126')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            $catatan = master_tabel::where('judul', 'tabel_126')->where('idkab', $idkab )->where('tahun', $year)->get();
           
             return view('lihat_data.126',compact('tabel_126', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index531()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_531')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            
            $sum_lk = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
                $sum_lk = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_531')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_531')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_531')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                 
            
             return view('lihat_data.531',compact('tabel_531', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index532()
    {
        
            $idkab= Session::get('key2');
            
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_532')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
             $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', $idkab )->get();  
             
            }
            
            else{
              $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
             $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', $idkab )->get();   
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_532')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_532')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_532')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
           
             return view('lihat_data.532',compact('tabel_532', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index541()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_541')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l, sum(t541m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_541 = tabel_541::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
                $sum_lk = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l, sum(t541m) as sum_m")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_541 = tabel_541::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_541')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_541')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_541')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
                 
            
             return view('lihat_data.541',compact('tabel_541', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index542()
    {
            $idkab= Session::get('key2');
          $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_542')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_542 = tabel_542::where('idkab', $idkab )->get();
            }
            
            else{
                
                 $tabel_542 = tabel_542::where('idkab', $idkab )->get();
            }
            $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_542')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_542')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_542')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
           
           
            
             return view('lihat_data.542',compact('tabel_542', 'kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index543()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_543')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_543s')
                            ->selectRaw("sum(t543b) as sum_b, sum(t543c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_543 = tabel_543::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_543s')
                            ->selectRaw("sum(t543b) as sum_b, sum(t543c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_543 = tabel_543::where('tahun', $year)->where('idkab', $idkab )->get();   
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_543')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_543')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_543')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                            
            
             return view('lihat_data.543',compact('tabel_543', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index551()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_551')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
               $sum_lk = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_551')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_551')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_551')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.551',compact('tabel_551', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index552()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_552')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_552 = tabel_552::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_552 = tabel_552::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_552')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_552')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_552')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
              
            
             return view('lihat_data.552',compact('tabel_552', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index553()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_553')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
                $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_553')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_553')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_553')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                      
            
             return view('lihat_data.553',compact('tabel_553', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index554()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_554')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_554 = tabel_554::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
                $sum_lk = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_554 = tabel_554::where('tahun', $year)->where('idkab', $idkab )->get();
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_554')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_554')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_554')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                           
            
             return view('lihat_data.554',compact('tabel_554', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index555()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_555')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_555 = tabel_555::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_555 = tabel_555::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_555')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_555')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_555')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                  
            
             return view('lihat_data.555',compact('tabel_555', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index61()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_61')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_61s')
                            ->selectRaw("sum(t61a) as sum_a, sum(t61b) as sum_b, sum(t61c) as sum_c, sum(t61d) as sum_d, sum(t61e) as sum_e")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_61 = tabel_61::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
               $sum_lk = DB::table('tabel_61s')
                            ->selectRaw("sum(t61a) as sum_a, sum(t61b) as sum_b, sum(t61c) as sum_c, sum(t61d) as sum_d, sum(t61e) as sum_e")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_61 = tabel_61::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_61')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_61')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_61')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                         
            
             return view('lihat_data.61',compact('tabel_61', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index62()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_62')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_62s')
                            ->selectRaw("sum(t62a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_62 = tabel_62::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_62s')
                            ->selectRaw("sum(t62a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_62 = tabel_62::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_62')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_62')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_62')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
              
           
             return view('lihat_data.62',compact('tabel_62', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index67()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_67')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_67s')
                            ->selectRaw("sum(t67a) as sum_a, sum(t67b) as sum_b, sum(t67c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_67 = tabel_67::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_67s')
                            ->selectRaw("sum(t67a) as sum_a, sum(t67b) as sum_b, sum(t67c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_67 = tabel_67::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_67')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_67')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_67')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                      
           
             return view('lihat_data.67',compact('tabel_67', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index63()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_63')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_63 = tabel_63::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_63 = tabel_63::where('tahun', $year)->where('idkab', $idkab )->get();  
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_63')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_63')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_63')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                
            
             return view('lihat_data.63',compact('tabel_63', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index64()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_64')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_64s')
                            ->selectRaw("sum(t64a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_64 = tabel_64::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_64s')
                            ->selectRaw("sum(t64a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_64 = tabel_64::where('tahun', $year)->where('idkab', $idkab )->get();  
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_64')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_64')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_64')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                           
            
             return view('lihat_data.64',compact('tabel_64', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index65()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_65')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_65s')
                            ->selectRaw("sum(t65a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_65 = tabel_65::where('tahun', $year)->where('idkab', $idkab )->get();               
            }
            else{
                $sum_lk = DB::table('tabel_65s')
                            ->selectRaw("sum(t65a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_65 = tabel_65::where('tahun', $year)->where('idkab', $idkab )->get();   
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_65')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_65')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_65')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                   
            
             return view('lihat_data.65',compact('tabel_65', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index66()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_66')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_66s')
                            ->selectRaw("sum(t66a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_66 = tabel_66::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_66s')
                            ->selectRaw("sum(t66a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_66 = tabel_66::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_66')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_66')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_66')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.66',compact('tabel_66', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index68()
    {
        
            $idkab= Session::get('key2');
          $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_68')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_68 = tabel_68::where('idkab', $idkab )->get();
            }
            
            else{
                $tabel_68 = tabel_68::where('idkab', $idkab )->get();
            }
            $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_68')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_68')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_68')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
           
            
             return view('lihat_data.68',compact('tabel_68', 'kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function index721()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_721')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_721s')
                            ->selectRaw("sum(t721a) as sum_a, sum(t721b) as sum_b, sum(t721c) as sum_c, sum(t721d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_721 = tabel_721::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_721s')
                            ->selectRaw("sum(t721a) as sum_a, sum(t721b) as sum_b, sum(t721c) as sum_c, sum(t721d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_721 = tabel_721::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_721')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_721')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_721')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
                        
            
             return view('lihat_data.721',compact('tabel_721', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index731()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_731')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_731s')
                            ->selectRaw("sum(t731a) as sum_a, sum(t731b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_731 = tabel_731::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_731s')
                            ->selectRaw("sum(t731a) as sum_a, sum(t731b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_731 = tabel_731::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_731')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_731')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_731')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                           
           
             return view('lihat_data.731',compact('tabel_731', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index732()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_732')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_732s')
                            ->selectRaw("sum(t732a) as sum_a, sum(t732b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_732 = tabel_732::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
                $sum_lk = DB::table('tabel_732s')
                            ->selectRaw("sum(t732a) as sum_a, sum(t732b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_732 = tabel_732::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_732')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_732')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_732')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                        
            
             return view('lihat_data.732',compact('tabel_732', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index733()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_733')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
               $sum_lk = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_733')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_733')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_733')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.733',compact('tabel_733', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index734()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_734')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_734s')
                            ->selectRaw("sum(t734a) as sum_a, sum(t734b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_734 = tabel_734::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
              $sum_lk = DB::table('tabel_734s')
                            ->selectRaw("sum(t734a) as sum_a, sum(t734b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_734 = tabel_734::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_734')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_734')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_734')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                     
            
             return view('lihat_data.734',compact('tabel_734', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index735()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_735')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_735s')
                            ->selectRaw("sum(t735a) as sum_a, sum(t735b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_735 = tabel_735::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
              $sum_lk = DB::table('tabel_735s')
                            ->selectRaw("sum(t735a) as sum_a, sum(t735b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_735 = tabel_735::where('tahun', $year)->where('idkab', $idkab )->get();   
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_735')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_735')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_735')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
                        
            
             return view('lihat_data.735',compact('tabel_735', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index85()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_85')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_85s')
                            ->selectRaw("sum(t85a) as sum_a,sum(t85b) as sum_b, sum(t85c) as sum_c, sum(t85d) as sum_d,
                            sum(t85e) as sum_e, sum(t85f) as sum_f, sum(t85g) as sum_g, sum(t85h) as sum_h, sum(t85i) as sum_i,
                            sum(t85j) as sum_j, sum(t85k) as sum_k, sum(t85l) as sum_l, sum(t85m) as sum_m, sum(t85n) as sum_n, sum(t85o) as sum_o,
                            sum(t85p) as sum_p, sum(t85q) as sum_q")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_85 = tabel_85::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
               $sum_lk = DB::table('tabel_85s')
                            ->selectRaw("sum(t85a) as sum_a,sum(t85b) as sum_b, sum(t85c) as sum_c, sum(t85d) as sum_d,
                            sum(t85e) as sum_e, sum(t85f) as sum_f, sum(t85g) as sum_g, sum(t85h) as sum_h, sum(t85i) as sum_i,
                            sum(t85j) as sum_j, sum(t85k) as sum_k, sum(t85l) as sum_l, sum(t85m) as sum_m, sum(t85n) as sum_n, sum(t85o) as sum_o,
                            sum(t85p) as sum_p, sum(t85q) as sum_q")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_85 = tabel_85::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_85')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_85')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_85')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
            
            
             return view('lihat_data.85',compact('tabel_85', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function index911()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_911')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c, sum(t911d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_911 = tabel_911::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c, sum(t911d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_911 = tabel_911::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_911')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_911')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_911')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                    
            
             return view('lihat_data.911',compact('tabel_911', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index912()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_912')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_912s')
                            ->selectRaw("sum(t912a) as sum_a,sum(t912b) as sum_b, sum(t912c) as sum_c, sum(t912d) as sum_d, sum(t912e) as sum_e")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_912 = tabel_912::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_912s')
                            ->selectRaw("sum(t912a) as sum_a,sum(t912b) as sum_b, sum(t912c) as sum_c, sum(t912d) as sum_d, sum(t912e) as sum_e")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_912 = tabel_912::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_912')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_912')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_912')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
                   
           
             return view('lihat_data.912',compact('tabel_912', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function index913()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_913')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c, sum(t913d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_913 = tabel_913::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c, sum(t913d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_913 = tabel_913::where('tahun', $year)->where('idkab', $idkab )->get(); 
            }
           
            $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_913')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_913')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_913')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                     
            
             return view('lihat_data.913',compact('tabel_913', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index914()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_914')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_914 = tabel_914::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
               $sum_lk = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_914 = tabel_914::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_914')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_914')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_914')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                    
            
             return view('lihat_data.914',compact('tabel_914', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index915()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_915')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_915s')
                            ->selectRaw("sum(t915a) as sum_a, sum(t915b) as sum_b, sum(t915c) as sum_c, sum(t915d) as sum_d, sum(t915e) as sum_e, sum(t915f) as sum_f")->whereNotIn('id', [1,7,12,19,26,32,38,43,50,57])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_915 = tabel_915::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                 $sum_lk = DB::table('tabel_915s')
                            ->selectRaw("sum(t915a) as sum_a, sum(t915b) as sum_b, sum(t915c) as sum_c, sum(t915d) as sum_d, sum(t915e) as sum_e, sum(t915f) as sum_f")->whereNotIn('id', [1,7,12,19,26,32,38,43,50,57])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_915 = tabel_915::where('tahun', $year)->where('idkab', $idkab )->get();
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_915')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_915')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_915')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                        
            
             return view('lihat_data.915',compact('tabel_915', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index916()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_916')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e, sum(t916f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
                $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e, sum(t916f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_916')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_916')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_916')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                          
            
             return view('lihat_data.916',compact('tabel_916', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index921()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_921')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
        if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_921 = tabel_921::where('tahun', $year)->where('idkab', $idkab )->get();                
        }
        else{
            $sum_lk = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_921 = tabel_921::where('tahun', $year)->where('idkab', $idkab )->get();  
            
        }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_921')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_921')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_921')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
                     
            
             return view('lihat_data.921',compact('tabel_921', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index923()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_923')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_923s')
                            ->selectRaw("sum(t923a) as sum_a,sum(t923b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_923 = tabel_923::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                $sum_lk = DB::table('tabel_923s')
                            ->selectRaw("sum(t923a) as sum_a,sum(t923b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_923 = tabel_923::where('tahun', $year)->where('idkab', $idkab )->get();  
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_923')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_923')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_923')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
                      
            
             return view('lihat_data.923',compact('tabel_923', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index121()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_121')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
             $tabel_121 = tabel_121::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
                $tabel_121 = tabel_121::where('tahun', $year)->where('idkab', $idkab )->get();
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_121')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_121')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_121')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
           
           
            
             return view('lihat_data.tabel_121',compact('tabel_121', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index122()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_122')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_122 = tabel_122::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
                
              $tabel_122 = tabel_122::where('tahun', $year)->where('idkab', $idkab )->get();  
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_122')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_122')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_122')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.tabel_122',compact('tabel_122', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index123()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
             $tabel_123 = tabel_123::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
                
               $tabel_123 = tabel_123::where('tahun', $year)->where('idkab', $idkab )->get(); 
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_123')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_123')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_123')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
   
            $catatan = master_tabel::where('judul', 'tabel_123')->where('idkab', $idkab )->where('tahun', $year)->get();
           
             return view('lihat_data.tabel_123',compact('tabel_123', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index221()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            $catatan = master_tabel::where('judul', 'tabel_221')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_221s')
                            
                            ->selectRaw("sum(t221a) as sum_lk, sum(t221b) as sum_pr, sum(t221a + t221b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_221 = tabel_221::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
              $sum_lk = DB::table('tabel_221s')
                            
                            ->selectRaw("sum(t221a) as sum_lk, sum(t221b) as sum_pr, sum(t221a + t221b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_221 = tabel_221::where('tahun', $year)->where('idkab', $idkab )->get();  
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_221')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_221')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_221')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.tabel_221',compact('tabel_221', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index222()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_222')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_222s')
                            
                            ->selectRaw("sum(t222a) as sum_lk, sum(t222b) as sum_pr, sum(t222a + t222b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_222 = tabel_222::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
               $sum_lk = DB::table('tabel_222s')
                            
                            ->selectRaw("sum(t222a) as sum_lk, sum(t222b) as sum_pr, sum(t222a + t222b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_222 = tabel_222::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_222')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_222')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_222')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                         
            
             return view('lihat_data.tabel_222',compact('tabel_222', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index223()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_223')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_223s')
                            
                            ->selectRaw("sum(t223a) as sum_lk")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_223 = tabel_223::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
               $sum_lk = DB::table('tabel_223s')
                            
                            ->selectRaw("sum(t223a) as sum_lk")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_223 = tabel_223::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_223')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_223')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_223')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
           
            
             return view('lihat_data.tabel_223',compact('tabel_223', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index224()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_224')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_224 = tabel_224::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
               $tabel_224 = tabel_224::where('tahun', $year)->where('idkab', $idkab )->get(); 
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_224')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_224')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_224')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                            
            
             return view('lihat_data.tabel_224',compact('tabel_224', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index225()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_225')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_225s')
                            
                            ->selectRaw("sum(t225a) as sum_a,sum(t225b) as sum_b,sum(t225c) as sum_c,sum(t225d) as sum_d,
                            sum(t225e) as sum_e,sum(t225f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_225 = tabel_225::where('tahun', $year)->where('idkab', $idkab )->orderby('id')->get();                
            }
            else{
                
              $sum_lk = DB::table('tabel_225s')
                            
                            ->selectRaw("sum(t225a) as sum_a,sum(t225b) as sum_b,sum(t225c) as sum_c,sum(t225d) as sum_d,
                            sum(t225e) as sum_e,sum(t225f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_225 = tabel_225::where('tahun', $year)->where('idkab', $idkab )->orderby('id')->get();    
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_225')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_225')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_225')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.tabel_225',compact('tabel_225', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index226()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            $catatan = master_tabel::where('judul', 'tabel_226')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_226 = tabel_226::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_226 = tabel_226::where('tahun', $year)->where('idkab', $idkab )->get();     
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_226')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_226')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_226')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
                        
            
             return view('lihat_data.tabel_226',compact('tabel_226', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index231()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            $catatan = master_tabel::where('judul', 'tabel_231')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
             $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_231')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_231')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_231')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
       
             return view('lihat_data.tabel_231',compact('tabel_231', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index232()
    {
            
            $idkab= Session::get('key2');

            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_232')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_232s')
                            
                            ->selectRaw("sum(t232_lk) as sum_lk, sum(t232_pr) as sum_pr, sum(t232_lk + t232_pr) as sum_lkpr")->whereNotIn('id', [3,11,19,27,35,43,51,59,67,75,83,91,99,107,115,123,131,139,147,155,163,171,179,187,195,203,211,219,227,235,243,251,259,267,275,283
])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_232 = tabel_232::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
             $sum_lk = DB::table('tabel_232s')
                            
                            ->selectRaw("sum(t232_lk) as sum_lk, sum(t232_pr) as sum_pr, sum(t232_lk + t232_pr) as sum_lkpr")->whereNotIn('id', [3,11,19,27,35,43,51,59,67,75,83,91,99,107,115,123,131,139,147,155,163,171,179,187,195,203,211,219,227,235,243,251,259,267,275,283
])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_232 = tabel_232::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
                            
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_232')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_232')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_232')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
           
             return view('lihat_data.tabel_232',compact('tabel_232', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index233()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_233')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_233 = tabel_233::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
            $sum_lk = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_233 = tabel_233::where('tahun', $year)->where('idkab', $idkab )->get();         
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_233')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_233')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_233')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                   
            
             return view('lihat_data.tabel_233',compact('tabel_233', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index234()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_234')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_234s')
                            
                            ->selectRaw("sum(t234_lk) as sum_lk, sum(t234_pr) as sum_pr, sum(t234_lk + t234_pr) as sum_lkpr")->whereNotIn('id', [5,10,15,21,26,31,36,42,47,52,57,63,68,73,78,84,89,94,99,105,110,115,120,126,131,136,141,147,152,157,162,168,173,178,183,189,194,199,204,210,215,220,225,231,236,241,246,252,257,262,267,273,278,283,288,294,299,304,309,315,320,325,330,336,341,346,351,357,362,367,372,378,383,388,393,399,404,409,414,420,425,430,435,441,446,451,456,462,467,472,477,483,488,493,498,504,509,514,519,525,530,535,540,546,551,556,561,567,572,577,582,588,593,598,603,609,614,619,624,630,635,640,645,651,656,661,666,672,677,682,687,693,698,703,708,714,719,724,729,735,740,745,750,756
])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_234 = tabel_234::where('tahun', $year)->where('idkab', $idkab )->get();                 
            }
            
            else{
              $sum_lk = DB::table('tabel_234s')
                            
                            ->selectRaw("sum(t234_lk) as sum_lk, sum(t234_pr) as sum_pr, sum(t234_lk + t234_pr) as sum_lkpr")->whereNotIn('id', [5,10,15,21,26,31,36,42,47,52,57,63,68,73,78,84,89,94,99,105,110,115,120,126,131,136,141,147,152,157,162,168,173,178,183,189,194,199,204,210,215,220,225,231,236,241,246,252,257,262,267,273,278,283,288,294,299,304,309,315,320,325,330,336,341,346,351,357,362,367,372,378,383,388,393,399,404,409,414,420,425,430,435,441,446,451,456,462,467,472,477,483,488,493,498,504,509,514,519,525,530,535,540,546,551,556,561,567,572,577,582,588,593,598,603,609,614,619,624,630,635,640,645,651,656,661,666,672,677,682,687,693,698,703,708,714,719,724,729,735,740,745,750,756
])
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_234 = tabel_234::where('tahun', $year)->where('idkab', $idkab )->get();        
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_234')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_234')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_234')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
           
             return view('lihat_data.tabel_234',compact('tabel_234', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index235()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_235')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_235s')
                            
                            ->selectRaw("sum(t235_lk) as sum_lk, sum(t235_pr) as sum_pr, sum(t235_lk + t235_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_235 = tabel_235::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
            $sum_lk = DB::table('tabel_235s')
                            
                            ->selectRaw("sum(t235_lk) as sum_lk, sum(t235_pr) as sum_pr, sum(t235_lk + t235_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_235 = tabel_235::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_235')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_235')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_235')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
               
            
             return view('lihat_data.tabel_235',compact('tabel_235', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index3217()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_3217')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
                    $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
                    $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', $idkab )->get();        
            }
            else{
                
             $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
                    $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', $idkab )->get();   
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_3217')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_3217')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_3217')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                
            
             return view('lihat_data.tabel_3217',compact('tabel_3217', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index3218()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_3218')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_3218s')
                            
                            ->selectRaw("sum(t3218_lk) as sum_lk, sum(t3218_pr) as sum_pr, sum(t3218_lk + t3218_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_3218 = tabel_3218::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_3218s')
                            
                            ->selectRaw("sum(t3218_lk) as sum_lk, sum(t3218_pr) as sum_pr, sum(t3218_lk + t3218_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_3218 = tabel_3218::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_3218')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_3218')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_3218')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                
            
             return view('lihat_data.tabel_3218',compact('tabel_3218', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index4211()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4211')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_4211s')
                            ->selectRaw("sum(t4211a) as sum_a, sum(t4211b) as sum_b, sum(t4211c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
             $tabel_4211 = tabel_4211::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
            $sum_lk = DB::table('tabel_4211s')
                            ->selectRaw("sum(t4211a) as sum_a, sum(t4211b) as sum_b, sum(t4211c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
             $tabel_4211 = tabel_4211::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_4211')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4211')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4211')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
             
           
             return view('lihat_data.tabel_4211',compact('tabel_4211', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
    }
    
    public function index4213()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4213')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
             if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
             $tabel_4213 = tabel_4213::where('idkab', $idkab )->get();
             }
             else{
                 
             $tabel_4213 = tabel_4213::where('idkab', $idkab )->get();    
             }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_4213')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4213')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4213')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
        
           
             return view('lihat_data.tabel_4213',compact('tabel_4213', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index4214()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4214')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_4214 = tabel_4214::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            
            else{
            $sum_lk = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
                            
            $tabel_4214 = tabel_4214::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_4214')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4214')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4214')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                        
            
             return view('lihat_data.tabel_4214',compact('tabel_4214', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index4215()
    {
        
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4215')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h, sum(t4215i) as sum_i")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_4215 = tabel_4215::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h, sum(t4215i) as sum_i")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_4215 = tabel_4215::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
                            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_4215')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4215')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_4215')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                  
            
             return view('lihat_data.tabel_4215',compact('tabel_4215', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index423()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_423')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
              $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_423')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_423')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_423')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
                           
           
             return view('lihat_data.tabel_423',compact('tabel_423', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index425()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_425')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_425 = tabel_425::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_425 = tabel_425::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_425')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_425')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_425')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                      
            
             return view('lihat_data.tabel_425',compact('tabel_425', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index426()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_426')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,sum(t426d_2) as sum_d_2,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,sum(t426d_2) as sum_d_2,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_426')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_426')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_426')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
              
            
             return view('lihat_data.tabel_426',compact('tabel_426', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index427()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_427')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_427 = tabel_427::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_427 = tabel_427::where('tahun', $year)->where('idkab', $idkab )->get();     
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_427')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_427')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_427')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                        
            
             return view('lihat_data.tabel_427',compact('tabel_427', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function index441()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_441')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_441s')
                            ->selectRaw("sum(t441a) as sum_a, sum(t441b) as sum_b, sum(t441c) as sum_c, sum(t441d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_441 = tabel_441::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_441s')
                            ->selectRaw("sum(t441a) as sum_a, sum(t441b) as sum_b, sum(t441c) as sum_c, sum(t441d) as sum_d")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_441 = tabel_441::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_441')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_441')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_441')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                    
           
             return view('lihat_data.tabel_441',compact('tabel_441', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index442()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            $catatan = master_tabel::where('judul', 'tabel_442')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $tabel_442 = tabel_442::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
            else{
                
            $tabel_442 = tabel_442::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_442')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_442')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_442')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.tabel_442',compact('tabel_442', 'year','kab','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index443()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_443')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_443s')
                            
                            ->selectRaw("sum(t443a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_443 = tabel_443::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_443s')
                            
                            ->selectRaw("sum(t443a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_443 = tabel_443::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_443')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_443')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_443')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
                        
            
             return view('lihat_data.tabel_443',compact('tabel_443', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index444()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $opd = master_opd::all();
            $catatan = master_tabel::where('judul', 'tabel_444')->where('idkab', $idkab )->where('tahun', $year)->get();
            
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_444s')
                            
                            ->selectRaw("sum(t444a) as sum_a, sum(t444b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_444 = tabel_444::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
             $sum_lk = DB::table('tabel_444s')
                            
                            ->selectRaw("sum(t444a) as sum_a, sum(t444b) as sum_b")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_444 = tabel_444::where('tahun', $year)->where('idkab', $idkab )->get();      
                
            }
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_444')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_444')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_444')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
                   
            
             return view('lihat_data.tabel_444',compact('tabel_444', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index445()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_445')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
           
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get(); 
            $sum_lk = DB::table('tabel_445s')
                            
                            ->selectRaw("sum(t445a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_445 = tabel_445::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_445s')
                            
                            ->selectRaw("sum(t445a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_445 = tabel_445::where('tahun', $year)->where('idkab', $idkab )->get();          
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_445')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_445')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_445')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                         
            
             return view('lihat_data.tabel_445',compact('tabel_445', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index446()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_446')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_446s')
                            
                            ->selectRaw("sum(t446a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_446 = tabel_446::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_446s')
                            
                            ->selectRaw("sum(t446a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_446 = tabel_446::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
            $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_446')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_446')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_446')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
            
            
             return view('lihat_data.tabel_446',compact('tabel_446', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index454()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_454')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_454s')
                            ->selectRaw("sum(t454a) as sum_a, sum(t454b) as sum_b, sum(t454c) as sum_c, sum(t454d) as sum_d, sum(t454e) as sum_e, sum(t454f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_454 = tabel_454::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
            $sum_lk = DB::table('tabel_454s')
                            ->selectRaw("sum(t454a) as sum_a, sum(t454b) as sum_b, sum(t454c) as sum_c, sum(t454d) as sum_d, sum(t454e) as sum_e, sum(t454f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
             $tabel_454 = tabel_454::where('tahun', $year)->where('idkab', $idkab )->get();    
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_454')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_454')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_454')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                 
                            
           
             return view('lihat_data.tabel_454',compact('tabel_454', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index455()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_455')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_455 = tabel_455::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            else{
              $sum_lk = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_455 = tabel_455::where('tahun', $year)->where('idkab', $idkab )->get();   
                
            }
            
             $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_455')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_455')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_455')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                                
                      
            
             return view('lihat_data.tabel_455',compact('tabel_455', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function index466()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_466')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e, sum(t466f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_466 = tabel_466::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e, sum(t466f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_466 = tabel_466::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_466')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_466')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_466')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.tabel_466',compact('tabel_466', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index744()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_744')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_4s')
                            ->selectRaw("sum(t744a) as sum_a, sum(t744b) as sum_b, sum(t744c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_744 = tabel_74_4::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_4s')
                            ->selectRaw("sum(t744a) as sum_a, sum(t744b) as sum_b, sum(t744c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_744 = tabel_74_4::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_744')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_744')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_744')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.744',compact('tabel_744', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index745()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_745')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_5s')
                            ->selectRaw("sum(t745a) as sum_a, sum(t745b) as sum_b, sum(t745c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_745 = tabel_74_5::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_5s')
                            ->selectRaw("sum(t745a) as sum_a, sum(t745b) as sum_b, sum(t745c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_745 = tabel_74_5::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_745')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_745')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_745')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.745',compact('tabel_745', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index746()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_746')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_6s')
                            ->selectRaw("sum(t746a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_746 = tabel_74_6::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_6s')
                            ->selectRaw("sum(t746a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_746 = tabel_74_6::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_746')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_746')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_746')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.746',compact('tabel_746', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index747()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_747')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_7s')
                            ->selectRaw("sum(t747a) as sum_a, sum(t747b) as sum_b, sum(t747c) as sum_c, sum(t747d) as sum_d, sum(t747e) as sum_e, sum(t747f) as sum_f, sum(t747g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_747 = tabel_74_7::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_7s')
                            ->selectRaw("sum(t747a) as sum_a, sum(t747b) as sum_b, sum(t747c) as sum_c, sum(t747d) as sum_d, sum(t747e) as sum_e, sum(t747f) as sum_f, sum(t747g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_747 = tabel_74_7::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_747')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_747')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_747')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.747',compact('tabel_747', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7410()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7410')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_10s')
                            ->selectRaw("sum(t7410a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7410 = tabel_74_10::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_10s')
                            ->selectRaw("sum(t7410a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7410 = tabel_74_10::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7410')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7410')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7410')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7410',compact('tabel_7410', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
      public function index7412()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7412')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_12s')
                            ->selectRaw("sum(t7412a) as sum_a, sum(t7412b) as sum_b, sum(t7412c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7412 = tabel_74_12::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_12s')
                            ->selectRaw("sum(t7412a) as sum_a, sum(t7412b) as sum_b, sum(t7412c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7412 = tabel_74_12::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7412')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7412')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7412')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7412',compact('tabel_7412', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7413()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7413')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_13s')
                            ->selectRaw("sum(t7413a) as sum_a, sum(t7413b) as sum_b, sum(t7413c) as sum_c, sum(t7413d) as sum_d, sum(t7413e) as sum_e, sum(t7413f) as sum_f, sum(t7413g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7413 = tabel_74_13::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_13s')
                            ->selectRaw("sum(t7413a) as sum_a, sum(t7413b) as sum_b, sum(t7413c) as sum_c, sum(t7413d) as sum_d, sum(t7413e) as sum_e, sum(t7413f) as sum_f, sum(t7413g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7413 = tabel_74_13::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7413')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7413')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7413')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7413',compact('tabel_7413', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7414()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7414')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_14s')
                            ->selectRaw("sum(t7414a) as sum_a, sum(t7414b) as sum_b, sum(t7414c) as sum_c, sum(t7414d) as sum_d, sum(t7414e) as sum_e, sum(t7414f) as sum_f, sum(t7414g) as sum_g, sum(t7414h) as sum_h")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7414 = tabel_74_14::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_14s')
                            ->selectRaw("sum(t7414a) as sum_a, sum(t7414b) as sum_b, sum(t7414c) as sum_c, sum(t7414d) as sum_d, sum(t7414e) as sum_e, sum(t7414f) as sum_f, sum(t7414g) as sum_g, sum(t7414h) as sum_h")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7414 = tabel_74_14::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7414')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7414')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7414')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7414',compact('tabel_7414', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7416()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7416')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_16s')
                            ->selectRaw("sum(t7416a) as sum_a, sum(t7416b) as sum_b, sum(t7416c) as sum_c, sum(t7416d) as sum_d, sum(t7416e) as sum_e, sum(t7416f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7416 = tabel_74_16::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_16s')
                            ->selectRaw("sum(t7416a) as sum_a, sum(t7416b) as sum_b, sum(t7416c) as sum_c, sum(t7416d) as sum_d, sum(t7416e) as sum_e, sum(t7416f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7416 = tabel_74_16::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7416')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7416')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7416')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7416',compact('tabel_7416', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7418()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7418')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_18s')
                            ->selectRaw("sum(t7418a) as sum_a, sum(t7418b) as sum_b, sum(t7418c) as sum_c, sum(t7418d) as sum_d, sum(t7418e) as sum_e, sum(t7418f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7418 = tabel_74_18::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_18s')
                            ->selectRaw("sum(t7418a) as sum_a, sum(t7418b) as sum_b, sum(t7418c) as sum_c, sum(t7418d) as sum_d, sum(t7418e) as sum_e, sum(t7418f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7418 = tabel_74_18::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7418')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7418')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7418')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7418',compact('tabel_7418', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7419()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7419')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_19s')
                            ->selectRaw("sum(t7419a) as sum_a, sum(t7419b) as sum_b, sum(t7419c) as sum_c, sum(t7419d) as sum_d, sum(t7419e) as sum_e, sum(t7419f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7419 = tabel_74_19::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_19s')
                            ->selectRaw("sum(t7419a) as sum_a, sum(t7419b) as sum_b, sum(t7419c) as sum_c, sum(t7419d) as sum_d, sum(t7419e) as sum_e, sum(t7419f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7419 = tabel_74_19::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7419')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7419')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7419')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7419',compact('tabel_7419', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7420()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7420')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_20s')
                            ->selectRaw("sum(t7420a) as sum_a, sum(t7420b) as sum_b, sum(t7420c) as sum_c, sum(t7420d) as sum_d, sum(t7420e) as sum_e, sum(t7420f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7420 = tabel_74_20::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_20s')
                            ->selectRaw("sum(t7420a) as sum_a, sum(t7420b) as sum_b, sum(t7420c) as sum_c, sum(t7420d) as sum_d, sum(t7420e) as sum_e, sum(t7420f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7420 = tabel_74_20::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7420')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7420')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7420')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7420',compact('tabel_7420', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7421()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7421')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_21s')
                            ->selectRaw("sum(t7421a) as sum_a, sum(t7421b) as sum_b, sum(t7421c) as sum_c, sum(t7421d) as sum_d, sum(t7421e) as sum_e, sum(t7421f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7421 = tabel_74_21::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_21s')
                            ->selectRaw("sum(t7421a) as sum_a, sum(t7421b) as sum_b, sum(t7421c) as sum_c, sum(t7421d) as sum_d, sum(t7421e) as sum_e, sum(t7421f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7421 = tabel_74_21::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7421')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7421')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7421')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7421',compact('tabel_7421', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7424()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7424')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_24s')
                            ->selectRaw("sum(t7424a) as sum_a, sum(t7424b) as sum_b, sum(t7424c) as sum_c, sum(t7424d) as sum_d, sum(t7424e) as sum_e, sum(t7424f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7424 = tabel_74_24::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_24s')
                            ->selectRaw("sum(t7424a) as sum_a, sum(t7424b) as sum_b, sum(t7424c) as sum_c, sum(t7424d) as sum_d, sum(t7424e) as sum_e, sum(t7424f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7424 = tabel_74_24::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7424')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7424')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7424')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7424',compact('tabel_7424', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7425()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7425')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_25s')
                            ->selectRaw("sum(t7425a) as sum_a, sum(t7425b) as sum_b, sum(t7425c) as sum_c, sum(t7425d) as sum_d, sum(t7425e) as sum_e, sum(t7425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7425 = tabel_74_25::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_25s')
                            ->selectRaw("sum(t7425a) as sum_a, sum(t7425b) as sum_b, sum(t7425c) as sum_c, sum(t7425d) as sum_d, sum(t7425e) as sum_e, sum(t7425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7425 = tabel_74_25::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7425')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7425')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7425')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7425',compact('tabel_7425', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7434()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7434')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_34s')
                            ->selectRaw("sum(t7434a) as sum_a, sum(t7434b) as sum_b, sum(t7434c) as sum_c, sum(t7434d) as sum_d, sum(t7434e) as sum_e, sum(t7434f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7434 = tabel_74_34::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_34s')
                            ->selectRaw("sum(t7434a) as sum_a, sum(t7434b) as sum_b, sum(t7434c) as sum_c, sum(t7434d) as sum_d, sum(t7434e) as sum_e, sum(t7434f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7434 = tabel_74_34::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7434')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7434')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7434')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7434',compact('tabel_7434', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7435()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7435')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_35s')
                            ->selectRaw("sum(t7435a) as sum_a, sum(t7435b) as sum_b, sum(t7435c) as sum_c, sum(t7435d) as sum_d, sum(t7435e) as sum_e, sum(t7435f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7435 = tabel_74_35::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_35s')
                            ->selectRaw("sum(t7435a) as sum_a, sum(t7435b) as sum_b, sum(t7435c) as sum_c, sum(t7435d) as sum_d, sum(t7435e) as sum_e, sum(t7435f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7435 = tabel_74_35::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7435')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7435')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7435')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7435',compact('tabel_7435', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7439()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7439')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_39s')
                            ->selectRaw("sum(t7439a) as sum_a, sum(t7439b) as sum_b, sum(t7439c) as sum_c, sum(t7439d) as sum_d, sum(t7439e) as sum_e, sum(t7439f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7439 = tabel_74_39::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_39s')
                            ->selectRaw("sum(t7439a) as sum_a, sum(t7439b) as sum_b, sum(t7439c) as sum_c, sum(t7439d) as sum_d, sum(t7439e) as sum_e, sum(t7439f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7439 = tabel_74_39::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7439')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7439')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7439')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7439',compact('tabel_7439', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7446()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7446')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_46s')
                            ->selectRaw("sum(t7446a) as sum_a, sum(t7446b) as sum_b, sum(t7446c) as sum_c, sum(t7446d) as sum_d, sum(t7446e) as sum_e, sum(t7446f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7446 = tabel_74_46::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_46s')
                            ->selectRaw("sum(t7446a) as sum_a, sum(t7446b) as sum_b, sum(t7446c) as sum_c, sum(t7446d) as sum_d, sum(t7446e) as sum_e, sum(t7446f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7446 = tabel_74_46::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7446')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7446')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7446')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7446',compact('tabel_7446', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7447()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7447')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_47s')
                            ->selectRaw("sum(t7447a) as sum_a, sum(t7447b) as sum_b, sum(t7447c) as sum_c, sum(t7447d) as sum_d, sum(t7447e) as sum_e, sum(t7447f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7447 = tabel_74_47::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_47s')
                            ->selectRaw("sum(t7447a) as sum_a, sum(t7447b) as sum_b, sum(t7447c) as sum_c, sum(t7447d) as sum_d, sum(t7447e) as sum_e, sum(t7447f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7447 = tabel_74_47::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7447')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7447')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7447')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7447',compact('tabel_7447', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7448()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7448')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_48s')
                            ->selectRaw("sum(t7448a) as sum_a, sum(t7448b) as sum_b, sum(t7448c) as sum_c, sum(t7448d) as sum_d, sum(t7448e) as sum_e, sum(t7448f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7448 = tabel_74_48::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_48s')
                            ->selectRaw("sum(t7448a) as sum_a, sum(t7448b) as sum_b, sum(t7448c) as sum_c, sum(t7448d) as sum_d, sum(t7448e) as sum_e, sum(t7448f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7448 = tabel_74_48::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7448')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7448')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7448')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7448',compact('tabel_7448', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7449()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7449')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_49s')
                            ->selectRaw("sum(t7449a) as sum_a, sum(t7449b) as sum_b, sum(t7449c) as sum_c, sum(t7449d) as sum_d, sum(t7449e) as sum_e, sum(t7449f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7449 = tabel_74_49::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_49s')
                            ->selectRaw("sum(t7449a) as sum_a, sum(t7449b) as sum_b, sum(t7449c) as sum_c, sum(t7449d) as sum_d, sum(t7449e) as sum_e, sum(t7449f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7449 = tabel_74_49::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7449')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7449')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7449')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7449',compact('tabel_7449', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7450()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7450')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_50s')
                            ->selectRaw("sum(t7450a) as sum_a, sum(t7450b) as sum_b, sum(t7450c) as sum_c, sum(t7450d) as sum_d, sum(t7450e) as sum_e, sum(t7450f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7450 = tabel_74_50::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_50s')
                            ->selectRaw("sum(t7450a) as sum_a, sum(t7450b) as sum_b, sum(t7450c) as sum_c, sum(t7450d) as sum_d, sum(t7450e) as sum_e, sum(t7450f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7450 = tabel_74_50::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7450')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7450')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7450')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7450',compact('tabel_7450', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7451()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7451')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_51s')
                            ->selectRaw("sum(t7451a) as sum_a, sum(t7451b) as sum_b, sum(t7451c) as sum_c, sum(t7451d) as sum_d, sum(t7451e) as sum_e, sum(t7451f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7451 = tabel_74_51::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_51s')
                            ->selectRaw("sum(t7451a) as sum_a, sum(t7451b) as sum_b, sum(t7451c) as sum_c, sum(t7451d) as sum_d, sum(t7451e) as sum_e, sum(t7451f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7451 = tabel_74_51::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7451')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7451')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7451')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7451',compact('tabel_7451', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7452()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7452')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_52s')
                            ->selectRaw("sum(t7452a) as sum_a, sum(t7452b) as sum_b, sum(t7452c) as sum_c, sum(t7452d) as sum_d, sum(t7452e) as sum_e, sum(t7452f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7452 = tabel_74_52::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_52s')
                            ->selectRaw("sum(t7452a) as sum_a, sum(t7452b) as sum_b, sum(t7452c) as sum_c, sum(t7452d) as sum_d, sum(t7452e) as sum_e, sum(t7452f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7452 = tabel_74_52::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7452')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7452')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7452')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7452',compact('tabel_7452', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7453()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7453')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_53s')
                            ->selectRaw("sum(t7453a) as sum_a, sum(t7453b) as sum_b, sum(t7453c) as sum_c, sum(t7453d) as sum_d, sum(t7453e) as sum_e, sum(t7453f) as sum_f, sum(t7453g) as sum_g
                            , sum(t7453h) as sum_h, sum(t7453i) as sum_i, (sum(t7453f)/sum(t7453c))*100 as sum_j")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7453 = tabel_74_53::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_53s')
                            ->selectRaw("sum(t7453a) as sum_a, sum(t7453b) as sum_b, sum(t7453c) as sum_c, sum(t7453d) as sum_d, sum(t7453e) as sum_e, sum(t7453f) as sum_f, sum(t7453g) as sum_g
                            , sum(t7453h) as sum_h, sum(t7453i) as sum_i, (sum(t7453f)/sum(t7453c))*100 as sum_j")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7453 = tabel_74_53::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7453')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7453')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7453')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7453',compact('tabel_7453', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7454()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7454')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_54s')
                            ->selectRaw("sum(t7454a) as sum_a, sum(t7454b) as sum_b, sum(t7454c) as sum_c, sum(t7454d) as sum_d, sum(t7454e) as sum_e, sum(t7454f) as sum_f, sum(t7454g) as sum_g
                     ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7454 = tabel_74_54::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_54s')
                            ->selectRaw("sum(t7454a) as sum_a, sum(t7454b) as sum_b, sum(t7454c) as sum_c, sum(t7454d) as sum_d, sum(t7454e) as sum_e, sum(t7454f) as sum_f, sum(t7454g) as sum_g
                      ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7454 = tabel_74_54::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7454')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7454')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7454')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7454',compact('tabel_7454', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7455()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7455')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_55s')
                            ->selectRaw("sum(t7455a) as sum_a, sum(t7455b) as sum_b, sum(t7455c) as sum_c, sum(t7455d) as sum_d, sum(t7455e) as sum_e, sum(t7455f) as sum_f
                     ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7455 = tabel_74_55::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_55s')
                            ->selectRaw("sum(t7455a) as sum_a, sum(t7455b) as sum_b, sum(t7455c) as sum_c, sum(t7455d) as sum_d, sum(t7455e) as sum_e, sum(t7455f) as sum_f
                      ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7455 = tabel_74_55::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7455')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7455')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7455')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7455',compact('tabel_7455', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index7456()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7456')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_56s')
                            ->selectRaw("sum(t7456a) as sum_a, sum(t7456b) as sum_b, sum(t7456c) as sum_c, sum(t7456d) as sum_d, sum(t7456e) as sum_e, sum(t7456f) as sum_f
                     ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7456 = tabel_74_56::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_56s')
                            ->selectRaw("sum(t7456a) as sum_a, sum(t7456b) as sum_b, sum(t7456c) as sum_c, sum(t7456d) as sum_d, sum(t7456e) as sum_e, sum(t7456f) as sum_f
                      ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7456 = tabel_74_56::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7456')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7456')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7456')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7456',compact('tabel_7456', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index743()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_743')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_3s')
                            ->selectRaw("sum(t743a) as sum_a, sum(t743b) as sum_b
                     ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_743 = tabel_74_3::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_3s')
                            ->selectRaw("sum(t743a) as sum_a, sum(t743b) as sum_b
                      ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_743 = tabel_74_3::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_743')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_743')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_743')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.743',compact('tabel_743', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7464()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7464')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_64s')
                            ->selectRaw("sum(t7464a) as sum_a, sum(t7464b) as sum_b, sum(t7464c) as sum_c, sum(t7464d) as sum_d, sum(t7464e) as sum_e, sum(t7464f) as sum_f
                     ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7464 = tabel_74_64::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_64s')
                            ->selectRaw("sum(t7464a) as sum_a, sum(t7464b) as sum_b, sum(t7464c) as sum_c, sum(t7464d) as sum_d, sum(t7464e) as sum_e, sum(t7464f) as sum_f
                      ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7464 = tabel_74_64::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7464')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7464')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7464')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7464',compact('tabel_7464', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7465()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7465')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_65s')
                         ->selectRaw("sum(t7465a) as sum_a,sum(t7465b) as sum_b, ( (sum(t7465b)/sum(t7465a))*100 ) as sum_c, sum(t7465d) as sum_d, sum(t7465e) as sum_e, sum(t7465f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7465 = tabel_74_65::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_65s')
                            ->selectRaw("sum(t7465a) as sum_a,sum(t7465b) as sum_b, ( (sum(t7465b)/sum(t7465a))*100 ) as sum_c, sum(t7465d) as sum_d, sum(t7465e) as sum_e, sum(t7465f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7465 = tabel_74_65::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7465')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7465')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7465')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7465',compact('tabel_7465', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7466()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7466')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_66s')
                         ->selectRaw("sum(t7466a) as sum_a,sum(t7466b) as sum_b, ( (sum(t7466b)/sum(t7466a))*100 ) as sum_c, sum(t7466d) as sum_d, sum(t7466e) as sum_e, sum(t7466f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7466 = tabel_74_66::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_66s')
                            ->selectRaw("sum(t7466a) as sum_a,sum(t7466b) as sum_b, ( (sum(t7466b)/sum(t7466a))*100 ) as sum_c, sum(t7466d) as sum_d, sum(t7466e) as sum_e, sum(t7466f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7466 = tabel_74_66::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7466')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7466')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7466')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7466',compact('tabel_7466', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7467()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7467')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_67s')
                         ->selectRaw("sum(t7467a) as sum_a,sum(t7467b) as sum_b, ( (sum(t7467b)/sum(t7467a))*100 ) as sum_c, sum(t7467d) as sum_d, sum(t7467e) as sum_e, sum(t7467f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7467 = tabel_74_67::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_67s')
                            ->selectRaw("sum(t7467a) as sum_a,sum(t7467b) as sum_b, ( (sum(t7467b)/sum(t7467a))*100 ) as sum_c, sum(t7467d) as sum_d, sum(t7467e) as sum_e, sum(t7467f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7467 = tabel_74_67::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7467')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7467')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7467')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7467',compact('tabel_7467', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74107()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74107')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_107s')
                         ->selectRaw("sum(t74107a) as sum_a,sum(t74107b) as sum_b, sum(t74107c) as sum_c, sum(t74107d) as sum_d, sum(t74107e) as sum_e, sum(t74107f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74107 = tabel_74_107::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_107s')
                            ->selectRaw("sum(t74107a) as sum_a,sum(t74107b) as sum_b, sum(t74107c) as sum_c, sum(t74107d) as sum_d, sum(t74107e) as sum_e, sum(t74107f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74107 = tabel_74_107::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74107')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74107')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74107')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74107',compact('tabel_74107', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index74108()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74108')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_108s')
                         ->selectRaw("sum(t74108a) as sum_a,sum(t74108b) as sum_b, ( (sum(t74108a)/sum(t74108b))*100 ) as sum_c, sum(t74108d) as sum_d, sum(t74108e) as sum_e, sum(t74108f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74108 = tabel_74_108::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_108s')
                            ->selectRaw("sum(t74108a) as sum_a,sum(t74108b) as sum_b, ( (sum(t74108a)/sum(t74108b))*100 ) as sum_c, sum(t74108d) as sum_d, sum(t74108e) as sum_e, sum(t74108f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74108 = tabel_74_108::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74108')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74108')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74108')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74108',compact('tabel_74108', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index74111()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74111')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_111s')
                         ->selectRaw("sum(t74111a) as sum_a,sum(t74111b) as sum_b, ( (sum(t74111a)/sum(t74111b))*100 ) as sum_c, sum(t74111d) as sum_d, sum(t74111e) as sum_e, sum(t74111f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74111 = tabel_74_111::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_111s')
                            ->selectRaw("sum(t74111a) as sum_a,sum(t74111b) as sum_b, ( (sum(t74111a)/sum(t74111b))*100 ) as sum_c, sum(t74111d) as sum_d, sum(t74111e) as sum_e, sum(t74111f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74111 = tabel_74_111::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74111')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74111')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74111')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74111',compact('tabel_74111', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    function displayTabel($id) {
        
         $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
    $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();

        $report =[];

        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id, ''),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $id)
        ->where('sumber', '=', Auth::user()->organisasi)
         ->groupBy('kolom_id')
        ->groupBy('desa')
       ->orderBy('id')
        ->get();

        
        $datas->each(function($item) use (&$report) {
            $report[$item->desa][$item->title] = [
                'count' => $item->amount,
                'desas' => $item->desa,
                
               
            ];
        });

        
        $koloms = $datas->pluck('title')->unique();

        $koloms_id2 = $datas->pluck('kolom_id2')->sortBy('kolom_id')->unique();
        
            $span = DB::table('data')->where('tabel_id', '=', $id)->groupBy('kolom_id2')->distinct('kolom_id')->count('kolom_id');

        return view('displayTabel', compact('report', 'koloms','koloms_id2','span','metadatas_ind','metadatas','metadatas_var'),
        ['tes' => Data::all()->where('tabel_id', '=', $id)->where('sumber', '=', Auth::user()->organisasi)->take(1)
        ]);
    }
    
    
    public function index74109()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74109')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_109s')
                         ->selectRaw("sum(t74109a) as sum_a,sum(t74109b) as sum_b, sum(t74109c) as sum_c, sum(t74109d) as sum_d, sum(t74109e) as sum_e, sum(t74109f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74109 = tabel_74_109::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_109s')
                            ->selectRaw("sum(t74109a) as sum_a,sum(t74109b) as sum_b, sum(t74109c) as sum_c, sum(t74109d) as sum_d, sum(t74109e) as sum_e, sum(t74109f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74109 = tabel_74_109::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74109')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74109')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74109')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74109',compact('tabel_74109', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74110()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74110')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_110s')
                         ->selectRaw("sum(t74110a) as sum_a,sum(t74110b) as sum_b, sum(t74110c) as sum_c, sum(t74110d) as sum_d, sum(t74110e) as sum_e, sum(t74110f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74110 = tabel_74_110::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_110s')
                            ->selectRaw("sum(t74110a) as sum_a,sum(t74110b) as sum_b, sum(t74110c) as sum_c, sum(t74110d) as sum_d, sum(t74110e) as sum_e, sum(t74110f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74110 = tabel_74_110::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74110')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74110')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74110')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74110',compact('tabel_74110', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index74112()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74112')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_112s')
                         ->selectRaw("sum(t74112a) as sum_a,sum(t74112b) as sum_b, sum(t74112c) as sum_c, sum(t74112d) as sum_d, sum(t74112e) as sum_e, sum(t74112f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74112 = tabel_74_112::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_112s')
                            ->selectRaw("sum(t74112a) as sum_a,sum(t74112b) as sum_b, sum(t74112c) as sum_c, sum(t74112d) as sum_d, sum(t74112e) as sum_e, sum(t74112f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74112 = tabel_74_112::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74112')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74112')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74112')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74112',compact('tabel_74112', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    
    public function index74101()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74101')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_101s')
                         ->selectRaw("sum(t74101a) as sum_a,sum(t74101b) as sum_b, sum(t74101c) as sum_c, sum(t74101d) as sum_d, sum(t74101e) as sum_e, sum(t74101f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74101 = tabel_74_101::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_101s')
                            ->selectRaw("sum(t74101a) as sum_a,sum(t74101b) as sum_b, sum(t74101c) as sum_c, sum(t74101d) as sum_d, sum(t74101e) as sum_e, sum(t74101f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74101 = tabel_74_101::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74101')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74101')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74101')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74101',compact('tabel_74101', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74102()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74102')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_102s')
                         ->selectRaw("sum(t74102a) as sum_a,sum(t74102b) as sum_b, sum(t74102c) as sum_c, sum(t74102d) as sum_d, sum(t74102e) as sum_e, sum(t74102f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74102 = tabel_74_102::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_102s')
                            ->selectRaw("sum(t74102a) as sum_a,sum(t74102b) as sum_b, sum(t74102c) as sum_c, sum(t74102d) as sum_d, sum(t74102e) as sum_e, sum(t74102f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74102 = tabel_74_102::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74102')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74102')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74102')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74102',compact('tabel_74102', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74103()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74103')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_103s')
                         ->selectRaw("sum(t74103a) as sum_a,sum(t74103b) as sum_b, sum(t74103c) as sum_c, sum(t74103d) as sum_d, sum(t74103e) as sum_e, sum(t74103f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74103 = tabel_74_103::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_103s')
                            ->selectRaw("sum(t74103a) as sum_a,sum(t74103b) as sum_b, sum(t74103c) as sum_c, sum(t74103d) as sum_d, sum(t74103e) as sum_e, sum(t74103f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74103 = tabel_74_103::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74103')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74103')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74103')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74103',compact('tabel_74103', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74104()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74104')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_104s')
                         ->selectRaw("sum(t74104a) as sum_a,sum(t74104b) as sum_b, sum(t74104c) as sum_c, sum(t74104d) as sum_d, sum(t74104e) as sum_e, sum(t74104f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74104 = tabel_74_104::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_104s')
                            ->selectRaw("sum(t74104a) as sum_a,sum(t74104b) as sum_b, sum(t74104c) as sum_c, sum(t74104d) as sum_d, sum(t74104e) as sum_e, sum(t74104f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74104 = tabel_74_104::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74104')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74104')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74104')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74104',compact('tabel_74104', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index74105()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74105')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_105s')
                         ->selectRaw("sum(t74105a) as sum_a,sum(t74105b) as sum_b, sum(t74105c) as sum_c, sum(t74105d) as sum_d, sum(t74105e) as sum_e, sum(t74105f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74105 = tabel_74_105::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_105s')
                            ->selectRaw("sum(t74105a) as sum_a,sum(t74105b) as sum_b, sum(t74105c) as sum_c, sum(t74105d) as sum_d, sum(t74105e) as sum_e, sum(t74105f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74105 = tabel_74_105::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74105')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74105')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74105')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74105',compact('tabel_74105', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index74106()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74106')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_106s')
                         ->selectRaw("sum(t74106a) as sum_a,sum(t74106b) as sum_b, sum(t74106c) as sum_c, sum(t74106d) as sum_d, sum(t74106e) as sum_e, sum(t74106f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74106 = tabel_74_106::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_106s')
                            ->selectRaw("sum(t74106a) as sum_a,sum(t74106b) as sum_b, sum(t74106c) as sum_c, sum(t74106d) as sum_d, sum(t74106e) as sum_e, sum(t74106f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74106 = tabel_74_106::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74106')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74106')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74106')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74106',compact('tabel_74106', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index74100()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74100')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_100s')
                         ->selectRaw("sum(t74100a) as sum_a,sum(t74100b) as sum_b, sum(t74100c) as sum_c, sum(t74100d) as sum_d, sum(t74100e) as sum_e, sum(t74100f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74100 = tabel_74_100::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_100s')
                            ->selectRaw("sum(t74100a) as sum_a,sum(t74100b) as sum_b, sum(t74100c) as sum_c, sum(t74100d) as sum_d, sum(t74100e) as sum_e, sum(t74100f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74100 = tabel_74_100::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74100')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74100')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74100')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74100',compact('tabel_74100', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7415()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7415')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_15s')
                         ->selectRaw("sum(t7415a) as sum_a,sum(t7415b) as sum_b, sum(t7415c) as sum_c, sum(t7415d) as sum_d, sum(t7415e) as sum_e, sum(t7415f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7415 = tabel_74_15::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_15s')
                            ->selectRaw("sum(t7415a) as sum_a,sum(t7415b) as sum_b, sum(t7415c) as sum_c, sum(t7415d) as sum_d, sum(t7415e) as sum_e, sum(t7415f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7415 = tabel_74_15::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7415')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7415')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7415')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7415',compact('tabel_7415', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index742()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_742')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_2s')
                         ->selectRaw("sum(t742a) as sum_a
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_742 = tabel_74_2::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_2s')
                            ->selectRaw("sum(t742a) as sum_a
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_742 = tabel_74_2::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_742')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_742')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_742')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.742',compact('tabel_742', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7422()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7422')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_22s')
                         ->selectRaw("sum(t7422a) as sum_a,sum(t7422b) as sum_b, sum(t7422c) as sum_c, sum(t7422d) as sum_d, sum(t7422e) as sum_e, sum(t7422f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7422 = tabel_74_22::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_22s')
                            ->selectRaw("sum(t7422a) as sum_a,sum(t7422b) as sum_b, sum(t7422c) as sum_c, sum(t7422d) as sum_d, sum(t7422e) as sum_e, sum(t7422f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7422 = tabel_74_22::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7422')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7422')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7422')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7422',compact('tabel_7422', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index7436()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7436')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_36s')
                         ->selectRaw("sum(t7436a) as sum_a,sum(t7436b) as sum_b, sum(t7436c) as sum_c, sum(t7436d) as sum_d, sum(t7436e) as sum_e, sum(t7436f) as sum_f, sum(t7436g) as sum_g
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7436 = tabel_74_36::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_36s')
                            ->selectRaw("sum(t7436a) as sum_a,sum(t7436b) as sum_b, sum(t7436c) as sum_c, sum(t7436d) as sum_d, sum(t7436e) as sum_e, sum(t7436f) as sum_f, sum(t7436g) as sum_g
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7436 = tabel_74_36::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7436')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7436')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7436')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7436',compact('tabel_7436', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7440()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7440')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_40s')
                         ->selectRaw("sum(t7440a) as sum_a,sum(t7440b) as sum_b, sum(t7440c) as sum_c, sum(t7440d) as sum_d, sum(t7440e) as sum_e, sum(t7440f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7440 = tabel_74_40::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_40s')
                            ->selectRaw("sum(t7440a) as sum_a,sum(t7440b) as sum_b, sum(t7440c) as sum_c, sum(t7440d) as sum_d, sum(t7440e) as sum_e, sum(t7440f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7440 = tabel_74_40::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7440')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7440')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7440')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7440',compact('tabel_7440', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7441()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7441')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_41s')
                         ->selectRaw("sum(t7441a) as sum_a,sum(t7441b) as sum_b, sum(t7441c) as sum_c, sum(t7441d) as sum_d, sum(t7441e) as sum_e, sum(t7441f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7441 = tabel_74_41::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_41s')
                            ->selectRaw("sum(t7441a) as sum_a,sum(t7441b) as sum_b, sum(t7441c) as sum_c, sum(t7441d) as sum_d, sum(t7441e) as sum_e, sum(t7441f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7441 = tabel_74_41::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7441')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7441')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7441')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7441',compact('tabel_7441', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7442()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7442')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_42s')
                         ->selectRaw("sum(t7442a) as sum_a,sum(t7442b) as sum_b, sum(t7442c) as sum_c, sum(t7442d) as sum_d, sum(t7442e) as sum_e, sum(t7442f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7442 = tabel_74_42::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_42s')
                            ->selectRaw("sum(t7442a) as sum_a,sum(t7442b) as sum_b, sum(t7442c) as sum_c, sum(t7442d) as sum_d, sum(t7442e) as sum_e, sum(t7442f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7442 = tabel_74_42::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7442')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7442')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7442')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7442',compact('tabel_7442', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7443()
    {
            $idkab= Session::get('key43');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7443')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_43s')
                         ->selectRaw("sum(t7443a) as sum_a,sum(t7443b) as sum_b, sum(t7443c) as sum_c, sum(t7443d) as sum_d, sum(t7443e) as sum_e, sum(t7443f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7443 = tabel_74_43::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_43s')
                            ->selectRaw("sum(t7443a) as sum_a,sum(t7443b) as sum_b, sum(t7443c) as sum_c, sum(t7443d) as sum_d, sum(t7443e) as sum_e, sum(t7443f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7443 = tabel_74_43::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7443')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7443')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7443')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7443',compact('tabel_7443', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7483()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7483')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_83s')
                         ->selectRaw("sum(t7483a) as sum_a,sum(t7483b) as sum_b, sum(t7483c) as sum_c, sum(t7483d) as sum_d, sum(t7483e) as sum_e, sum(t7483f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7483 = tabel_74_83::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_83s')
                            ->selectRaw("sum(t7483a) as sum_a,sum(t7483b) as sum_b, sum(t7483c) as sum_c, sum(t7483d) as sum_d, sum(t7483e) as sum_e, sum(t7483f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7483 = tabel_74_83::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7483')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7483')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7483')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7483',compact('tabel_7483', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index741()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_741')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_1s')
                         ->selectRaw("sum(t741a) as sum_a,sum(t741b) as sum_b, sum(t741c) as sum_c, sum(t741d) as sum_d, sum(t741e) as sum_e, sum(t741f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_741 = tabel_74_1::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_1s')
                            ->selectRaw("sum(t741a) as sum_a,sum(t741b) as sum_b, sum(t741c) as sum_c, sum(t741d) as sum_d, sum(t741e) as sum_e, sum(t741f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_741 = tabel_74_1::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_741')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_741')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_741')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.741',compact('tabel_741', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
   
    
    
    public function index7411()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7411')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_11s')
                         ->selectRaw("sum(t7411a) as sum_a,sum(t7411b) as sum_b, sum(t7411c) as sum_c
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7411 = tabel_74_11::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_11s')
                            ->selectRaw("sum(t7411a) as sum_a,sum(t7411b) as sum_b, sum(t7411c) as sum_c
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7411 = tabel_74_11::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7411')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7411')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7411')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7411',compact('tabel_7411', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index7444()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7444')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_44s')
                         ->selectRaw("sum(t7444a) as sum_a,sum(t7444b) as sum_b, sum(t7444c) as sum_c, sum(t7444d) as sum_d, sum(t7444e) as sum_e, sum(t7444f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7444 = tabel_74_44::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_44s')
                            ->selectRaw("sum(t7444a) as sum_a,sum(t7444b) as sum_b, sum(t7444c) as sum_c, sum(t7444d) as sum_d, sum(t7444e) as sum_e, sum(t7444f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7444 = tabel_74_44::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7444')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7444')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7444')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7444',compact('tabel_7444', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index7445()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7445')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_45s')
                         ->selectRaw("sum(t7445a) as sum_a,sum(t7445b) as sum_b, sum(t7445c) as sum_c, sum(t7445d) as sum_d, sum(t7445e) as sum_e, sum(t7445f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7445 = tabel_74_45::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_45s')
                            ->selectRaw("sum(t7445a) as sum_a,sum(t7445b) as sum_b, sum(t7445c) as sum_c, sum(t7445d) as sum_d, sum(t7445e) as sum_e, sum(t7445f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7445 = tabel_74_45::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7445')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7445')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7445')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7445',compact('tabel_7445', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
   
    
     public function index74114()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74114')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_114s')
                         ->selectRaw("sum(t74114a) as sum_a,sum(t74114b) as sum_b, sum(t74114c) as sum_c, sum(t74114d) as sum_d, sum(t74114e) as sum_e, sum(t74114f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74114 = tabel_74_114::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_114s')
                            ->selectRaw("sum(t74114a) as sum_a,sum(t74114b) as sum_b, sum(t74114c) as sum_c, sum(t74114d) as sum_d, sum(t74114e) as sum_e, sum(t74114f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74114 = tabel_74_114::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74114')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74114')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74114')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74114',compact('tabel_74114', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index74115()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74115')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_115s')
                         ->selectRaw("sum(t74115a) as sum_a,sum(t74115b) as sum_b, sum(t74115c) as sum_c, sum(t74115d) as sum_d, sum(t74115e) as sum_e, sum(t74115f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74115 = tabel_74_115::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_115s')
                            ->selectRaw("sum(t74115a) as sum_a,sum(t74115b) as sum_b, sum(t74115c) as sum_c, sum(t74115d) as sum_d, sum(t74115e) as sum_e, sum(t74115f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74115 = tabel_74_115::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74115')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74115')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74115')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74115',compact('tabel_74115', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
     public function index74116()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74116')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_116s')
                         ->selectRaw("sum(t74116a) as sum_a,sum(t74116b) as sum_b, sum(t74116c) as sum_c, sum(t74116d) as sum_d, sum(t74116e) as sum_e, sum(t74116f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74116 = tabel_74_116::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_116s')
                            ->selectRaw("sum(t74116a) as sum_a,sum(t74116b) as sum_b, sum(t74116c) as sum_c, sum(t74116d) as sum_d, sum(t74116e) as sum_e, sum(t74116f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74116 = tabel_74_116::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74116')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74116')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74116')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74116',compact('tabel_74116', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index74117()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74117')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_117s')
                         ->selectRaw("sum(t74117a) as sum_a,sum(t74117b) as sum_b, sum(t74117c) as sum_c, sum(t74117d) as sum_d, sum(t74117e) as sum_e, sum(t74117f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74117 = tabel_74_117::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_117s')
                            ->selectRaw("sum(t74117a) as sum_a,sum(t74117b) as sum_b, sum(t74117c) as sum_c, sum(t74117d) as sum_d, sum(t74117e) as sum_e, sum(t74117f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74117 = tabel_74_117::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74117')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74117')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74117')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74117',compact('tabel_74117', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index74118()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74118')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_118s')
                         ->selectRaw("sum(t74118a) as sum_a,sum(t74118b) as sum_b, sum(t74118c) as sum_c, sum(t74118d) as sum_d, sum(t74118e) as sum_e, sum(t74118f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74118 = tabel_74_118::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_118s')
                            ->selectRaw("sum(t74118a) as sum_a,sum(t74118b) as sum_b, sum(t74118c) as sum_c, sum(t74118d) as sum_d, sum(t74118e) as sum_e, sum(t74118f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74118 = tabel_74_118::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74118')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74118')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74118')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74118',compact('tabel_74118', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
     public function index74119()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74119')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_119s')
                         ->selectRaw("sum(t74119a) as sum_a,sum(t74119b) as sum_b, sum(t74119c) as sum_c, sum(t74119d) as sum_d, sum(t74119e) as sum_e, sum(t74119f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74119 = tabel_74_119::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_119s')
                            ->selectRaw("sum(t74119a) as sum_a,sum(t74119b) as sum_b, sum(t74119c) as sum_c, sum(t74119d) as sum_d, sum(t74119e) as sum_e, sum(t74119f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74119 = tabel_74_119::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74119')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74119')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74119')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74119',compact('tabel_74119', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index7457()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7457')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_57s')
                         ->selectRaw("sum(t7457a) as sum_a,sum(t7457b) as sum_b, sum(t7457c) as sum_c, sum(t7457d) as sum_d, sum(t7457e) as sum_e, sum(t7457f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7457 = tabel_74_57::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_57s')
                            ->selectRaw("sum(t7457a) as sum_a,sum(t7457b) as sum_b, sum(t7457c) as sum_c, sum(t7457d) as sum_d, sum(t7457e) as sum_e, sum(t7457f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7457 = tabel_74_57::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7457')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7457')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7457')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7457',compact('tabel_7457', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index7458()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7458')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_58s')
                         ->selectRaw("sum(t7458a) as sum_a,sum(t7458b) as sum_b, sum(t7458c) as sum_c, sum(t7458d) as sum_d, sum(t7458e) as sum_e, sum(t7458f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7458 = tabel_74_58::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_58s')
                            ->selectRaw("sum(t7458a) as sum_a,sum(t7458b) as sum_b, sum(t7458c) as sum_c, sum(t7458d) as sum_d, sum(t7458e) as sum_e, sum(t7458f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7458 = tabel_74_58::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7458')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7458')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7458')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7458',compact('tabel_7458', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    public function index7459()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7459')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_59s')
                         ->selectRaw("sum(t7459a) as sum_a,sum(t7459b) as sum_b, sum(t7459c) as sum_c, sum(t7459d) as sum_d, sum(t7459e) as sum_e, sum(t7459f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7459 = tabel_74_59::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_59s')
                            ->selectRaw("sum(t7459a) as sum_a,sum(t7459b) as sum_b, sum(t7459c) as sum_c, sum(t7459d) as sum_d, sum(t7459e) as sum_e, sum(t7459f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7459 = tabel_74_59::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7459')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7459')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7459')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7459',compact('tabel_7459', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7460()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7460')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_60s')
                         ->selectRaw("sum(t7460a) as sum_a,sum(t7460b) as sum_b, sum(t7460c) as sum_c, sum(t7460d) as sum_d, sum(t7460e) as sum_e, sum(t7460f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7460 = tabel_74_60::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_60s')
                            ->selectRaw("sum(t7460a) as sum_a,sum(t7460b) as sum_b, sum(t7460c) as sum_c, sum(t7460d) as sum_d, sum(t7460e) as sum_e, sum(t7460f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7460 = tabel_74_60::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7460')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7460')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7460')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7460',compact('tabel_7460', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7461()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7461')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_61s')
                         ->selectRaw("sum(t7461a) as sum_a,sum(t7461b) as sum_b, sum(t7461c) as sum_c, sum(t7461d) as sum_d, sum(t7461e) as sum_e, sum(t7461f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7461 = tabel_74_61::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_61s')
                            ->selectRaw("sum(t7461a) as sum_a,sum(t7461b) as sum_b, sum(t7461c) as sum_c, sum(t7461d) as sum_d, sum(t7461e) as sum_e, sum(t7461f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7461 = tabel_74_61::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7461')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7461')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7461')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7461',compact('tabel_7461', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7462()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7462')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_62s')
                         ->selectRaw("sum(t7462a) as sum_a,sum(t7462b) as sum_b, sum(t7462c) as sum_c, sum(t7462d) as sum_d, sum(t7462e) as sum_e, sum(t7462f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7462 = tabel_74_62::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_62s')
                            ->selectRaw("sum(t7462a) as sum_a,sum(t7462b) as sum_b, sum(t7462c) as sum_c, sum(t7462d) as sum_d, sum(t7462e) as sum_e, sum(t7462f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7462 = tabel_74_62::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7462')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7462')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7462')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7462',compact('tabel_7462', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index7463()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7463')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_63s')
                         ->selectRaw("sum(t7463a) as sum_a,sum(t7463b) as sum_b, sum(t7463c) as sum_c, sum(t7463d) as sum_d, sum(t7463e) as sum_e, sum(t7463f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7463 = tabel_74_63::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_63s')
                            ->selectRaw("sum(t7463a) as sum_a,sum(t7463b) as sum_b, sum(t7463c) as sum_c, sum(t7463d) as sum_d, sum(t7463e) as sum_e, sum(t7463f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7463 = tabel_74_63::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_7463')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7463')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_7463')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.7463',compact('tabel_7463', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index74120()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74120')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_120s')
                         ->selectRaw("sum(t74120a) as sum_a,sum(t74120b) as sum_b, sum(t74120c) as sum_c, sum(t74120d) as sum_d, sum(t74120e) as sum_e, sum(t74120f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74120 = tabel_74_120::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_120s')
                            ->selectRaw("sum(t74120a) as sum_a,sum(t74120b) as sum_b, sum(t74120c) as sum_c, sum(t74120d) as sum_d, sum(t74120e) as sum_e, sum(t74120f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74120 = tabel_74_120::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74120')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74120')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74120')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74120',compact('tabel_74120', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index74121()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74121')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_121s')
                         ->selectRaw("sum(t74121a) as sum_a,sum(t74121b) as sum_b, sum(t74121c) as sum_c, sum(t74121d) as sum_d, sum(t74121e) as sum_e, sum(t74121f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74121 = tabel_74_121::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_121s')
                            ->selectRaw("sum(t74121a) as sum_a,sum(t74121b) as sum_b, sum(t74121c) as sum_c, sum(t74121d) as sum_d, sum(t74121e) as sum_e, sum(t74121f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74121 = tabel_74_121::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74121')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74121')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74121')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74121',compact('tabel_74121', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index74122()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74122')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_122s')
                         ->selectRaw("sum(t74122a) as sum_a,sum(t74122b) as sum_b, sum(t74122c) as sum_c, sum(t74122d) as sum_d, sum(t74122e) as sum_e, sum(t74122f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74122 = tabel_74_122::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_122s')
                            ->selectRaw("sum(t74122a) as sum_a,sum(t74122b) as sum_b, sum(t74122c) as sum_c, sum(t74122d) as sum_d, sum(t74122e) as sum_e, sum(t74122f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74122 = tabel_74_122::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74122')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74122')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74122')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74122',compact('tabel_74122', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    public function index74123()
    {
            $idkab= Session::get('key2');
            $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74123')->where('idkab', $idkab )->where('tahun', $year)->get();
            $opd = master_opd::all();
            if(empty($year)){
             $year = 2021;
             $idkab = 7400;
            $kab = master_kab::where('idkab', 7400 )->get();
            $sum_lk = DB::table('tabel_74_123s')
                         ->selectRaw("sum(t74123a) as sum_a,sum(t74123b) as sum_b, sum(t74123c) as sum_c, sum(t74123d) as sum_d, sum(t74123e) as sum_e, sum(t74123f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74123 = tabel_74_123::where('tahun', $year)->where('idkab', $idkab )->get();                
            }
            else{
                
             $sum_lk = DB::table('tabel_74_123s')
                            ->selectRaw("sum(t74123a) as sum_a,sum(t74123b) as sum_b, sum(t74123c) as sum_c, sum(t74123d) as sum_d, sum(t74123e) as sum_e, sum(t74123f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_74123 = tabel_74_123::where('tahun', $year)->where('idkab', $idkab )->get();    
            }
                            
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', 'tabel_74123')
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74123')
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', 'tabel_74123')
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();                
                       
            
             return view('lihat_data.74123',compact('tabel_74123', 'year','kab','sum_lk','catatan','opd', 'metadatas','metadatas_ind','metadatas_var'))->with('k', (request()->input('page', 1) - 1) * 5
       );
           
    }
    
    
    
    
    function displayTabel2($id) {
        
         $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
$metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', $id)
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();

        $report =[];

        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id, ''),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $id)
        ->where('sumber', '=', Auth::user()->organisasi)
         ->groupBy('kolom_id')
        ->groupBy('desa')
       ->orderBy('id')
        ->get();

        
        $datas->each(function($item) use (&$report) {
            $report[$item->desa][$item->title] = [
                'count' => $item->amount,
                'desas' => $item->desa,
                
               
            ];
        });

        
        $koloms = $datas->pluck('title')->unique();

        $koloms_id2 = $datas->pluck('kolom_id2')->sortBy('kolom_id')->unique();
        
            $span = DB::table('data')->where('tabel_id', '=', $id)->groupBy('kolom_id2')->distinct('kolom_id')->count('kolom_id');

        return view('displayTabel2', compact('report', 'koloms','koloms_id2','span','metadatas_ind','metadatas','metadatas_var'),
        ['tes' => Data::all()->where('tabel_id', '=', $id)->where('sumber', '=', Auth::user()->organisasi)->take(1)
        ]);
    }
    
    
    
    function displayIndikator($id) {
        
        $metadatas_ind = DB::table('meta_indikator')
        ->where('ind_b1k2', '=', $id)
        ->groupBy('ind_b1k2')
        ->get();
       
        
        return view('displayIndikator', compact('metadatas_ind'));
    }
    
     function displayVariabel($id) {
        
        $metadatas_var = DB::table('meta_variabel')
        ->where('var_b1k2', '=', $id)
        ->groupBy('var_b1k2')
        ->get();
       
        
        return view('displayVariabel', compact('metadatas_var'));
    }
    
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$tables = DB::table('tabels')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('lihat_data.lihat_data',['tables' => $tables]);
 
	}
	
	 public function Unduh_dda121()
    {
        
       return Excel::download(new Exports_dda121, 'Tabel 121.xlsx');
    }
    
    public function Unduh_dda122()
    {
        
       return Excel::download(new Exports_dda122, 'Tabel 122.xlsx');
    }
    
    public function Unduh_dda123()
    {
        
       return Excel::download(new Exports_dda123, 'Tabel 123.xlsx');
    }
    
    public function Unduh_dda124()
    {
        
       return Excel::download(new Exports_dda124, 'Tabel 124.xlsx');
    }
    
    public function Unduh_dda125()
    {
        
       return Excel::download(new Exports_dda125, 'Tabel 125.xlsx');
    }
    
    public function Unduh_dda126()
    {
        
       return Excel::download(new Exports_dda126, 'Tabel 126.xlsx');
    }
    
    public function Unduh_dda221()
    {
        
       return Excel::download(new Exports_dda221, 'Tabel 221.xlsx');
    }
    public function Unduh_dda222()
    {
        
       return Excel::download(new Exports_dda222, 'Tabel 222.xlsx');
    }
     public function Unduh_dda223()
    {
        
       return Excel::download(new Exports_dda223, 'Tabel 223.xlsx');
    }
    public function Unduh_dda224()
    {
        
       return Excel::download(new Exports_dda224, 'Tabel 224.xlsx');
    }
    public function Unduh_dda225()
    {
        
       return Excel::download(new Exports_dda225, 'Tabel 225.xlsx');
    }
    public function Unduh_dda226()
    {
        
       return Excel::download(new Exports_dda226, 'Tabel 226.xlsx');
    }
    public function Unduh_dda227()
    {
        
       return Excel::download(new Exports_dda227, 'Tabel 227.xlsx');
    }
    public function Unduh_dda231()
    {
        
       return Excel::download(new Exports_dda231, 'Tabel 231.xlsx');
    }
    public function Unduh_dda232()
    {
        
       return Excel::download(new Exports_dda232, 'Tabel 232.xlsx');
    }
    public function Unduh_dda233()
    {
        
       return Excel::download(new Exports_dda233, 'Tabel 233.xlsx');
    }
    
    public function Unduh_dda234()
    {
        
       return Excel::download(new Exports_dda234, 'Tabel 234.xlsx');
    }
     public function Unduh_dda235()
    {
        
       return Excel::download(new Exports_dda235, 'Tabel 235.xlsx');
    }
    public function Unduh_dda3217()
    {
       return Excel::download(new Exports_dda3217, 'Tabel 3217.xlsx');
    }
    public function Unduh_dda3218()
    {
       return Excel::download(new Exports_dda3218, 'Tabel 3218.xlsx');
    }
    public function Unduh_dda4211()
    {
       return Excel::download(new Exports_dda4211, 'Tabel 4211.xlsx');
    }
     public function Unduh_dda4213()
    {
       return Excel::download(new Exports_dda4213, 'Tabel 4213.xlsx');
    }
    public function Unduh_dda4214()
    {
       return Excel::download(new Exports_dda4214, 'Tabel 4214.xlsx');
    }
    public function Unduh_dda4215()
    {
       return Excel::download(new Exports_dda4215, 'Tabel 4215.xlsx');
    }
    public function Unduh_dda423()
    {
       return Excel::download(new Exports_dda423, 'Tabel 423.xlsx');
    }
    public function Unduh_dda425()
    {
       return Excel::download(new Exports_dda425, 'Tabel 425.xlsx');
    }
    public function Unduh_dda426()
    {
       return Excel::download(new Exports_dda426, 'Tabel 426.xlsx');
    }
    public function Unduh_dda427()
    {
       return Excel::download(new Exports_dda427, 'Tabel 427.xlsx');
    }
    public function Unduh_dda441()
    {
       return Excel::download(new Exports_dda441, 'Tabel 441.xlsx');
    }
     public function Unduh_dda442()
    {
       return Excel::download(new Exports_dda442, 'Tabel 442.xlsx');
    }
    public function Unduh_dda443()
    {
       return Excel::download(new Exports_dda443, 'Tabel 443.xlsx');
    }
    public function Unduh_dda444()
    {
       return Excel::download(new Exports_dda444, 'Tabel 444.xlsx');
    }
    public function Unduh_dda445()
    {
       return Excel::download(new Exports_dda445, 'Tabel 445.xlsx');
    }
    public function Unduh_dda446()
    {
       return Excel::download(new Exports_dda446, 'Tabel 446.xlsx');
    }
    
    public function Unduh_dda451()
    {
       return Excel::download(new Exports_dda451, 'Tabel 451.xlsx');
    }
    public function Unduh_dda454()
    {
       return Excel::download(new Exports_dda454, 'Tabel 454.xlsx');
    }
    public function Unduh_dda455()
    {
       return Excel::download(new Exports_dda455, 'Tabel 455.xlsx');
    }
    public function Unduh_dda466()
    {
       return Excel::download(new Exports_dda466, 'Tabel 466.xlsx');
    }
    public function Unduh_dda531()
    {
       return Excel::download(new Exports_dda531, 'Tabel 531.xlsx');
    }
    public function Unduh_dda532()
    {
       return Excel::download(new Exports_dda532, 'Tabel 532.xlsx');
    }
    public function Unduh_dda541()
    {
       return Excel::download(new Exports_dda541, 'Tabel 541.xlsx');
    }
    public function Unduh_dda542()
    {
       return Excel::download(new Exports_dda542, 'Tabel 542.xlsx');
    }
    public function Unduh_dda543()
    {
       return Excel::download(new Exports_dda543, 'Tabel 543.xlsx');
    }
    public function Unduh_dda551()
    {
       return Excel::download(new Exports_dda551, 'Tabel 551.xlsx');
    }
    public function Unduh_dda552()
    {
       return Excel::download(new Exports_dda552, 'Tabel 552.xlsx');
    }
    public function Unduh_dda553()
    {
       return Excel::download(new Exports_dda553, 'Tabel 553.xlsx');
    }
    public function Unduh_dda554()
    {
       return Excel::download(new Exports_dda554, 'Tabel 554.xlsx');
    }
    public function Unduh_dda555()
    {
       return Excel::download(new Exports_dda555, 'Tabel 555.xlsx');
    }
    public function Unduh_dda61()
    {
       return Excel::download(new Exports_dda61, 'Tabel 61.xlsx');
    }
    public function Unduh_dda62()
    {
       return Excel::download(new Exports_dda62, 'Tabel 62.xlsx');
    }
    public function Unduh_dda63()
    {
       return Excel::download(new Exports_dda63, 'Tabel 63.xlsx');
    }
    public function Unduh_dda64()
    {
       return Excel::download(new Exports_dda64, 'Tabel 64.xlsx');
    }
    public function Unduh_dda65()
    {
       return Excel::download(new Exports_dda65, 'Tabel 65.xlsx');
    }
    public function Unduh_dda66()
    {
       return Excel::download(new Exports_dda66, 'Tabel 66.xlsx');
    }
    public function Unduh_dda67()
    {
       return Excel::download(new Exports_dda67, 'Tabel 67.xlsx');
    }
    
     public function Unduh_dda68()
    {
       return Excel::download(new Exports_dda68, 'Tabel 68.xlsx');
    }
    
    public function Unduh_dda721()
    {
       return Excel::download(new Exports_dda721, 'Tabel 721.xlsx');
    }
    
     public function Unduh_dda722()
    {
       return Excel::download(new Exports_dda722, 'Tabel 722.xlsx');
    }
    
    public function Unduh_dda731()
    {
       return Excel::download(new Exports_dda731, 'Tabel 731.xlsx');
    }
    public function Unduh_dda732()
    {
       return Excel::download(new Exports_dda732, 'Tabel 732.xlsx');
    }
    public function Unduh_dda733()
    {
       return Excel::download(new Exports_dda733, 'Tabel 733.xlsx');
    }
    public function Unduh_dda734()
    {
       return Excel::download(new Exports_dda734, 'Tabel 734.xlsx');
    }
    public function Unduh_dda735()
    {
       return Excel::download(new Exports_dda735, 'Tabel 735.xlsx');
    }
    public function Unduh_dda85()
    {
       return Excel::download(new Exports_dda85, 'Tabel 85.xlsx');
    }
    public function Unduh_dda911()
    {
       return Excel::download(new Exports_dda911, 'Tabel 911.xlsx');
    }
    public function Unduh_dda913()
    {
       return Excel::download(new Exports_dda913, 'Tabel 913.xlsx');
    }
    public function Unduh_dda914()
    {
       return Excel::download(new Exports_dda914, 'Tabel 914.xlsx');
    }
    public function Unduh_dda915()
    {
       return Excel::download(new Exports_dda915, 'Tabel 915.xlsx');
    }
    public function Unduh_dda916()
    {
       return Excel::download(new Exports_dda916, 'Tabel 916.xlsx');
    }
    public function Unduh_dda103()
    {
       return Excel::download(new Exports_dda103, 'Tabel 103.xlsx');
    }
    public function Unduh_dda104()
    {
       return Excel::download(new Exports_dda104, 'Tabel 104.xlsx');
    }
    public function Unduh_dda105()
    {
       return Excel::download(new Exports_dda105, 'Tabel 105.xlsx');
    }
    public function Unduh_dda106()
    {
       return Excel::download(new Exports_dda106, 'Tabel 106.xlsx');
    }
    public function Unduh_dda107()
    {
       return Excel::download(new Exports_dda107, 'Tabel 107.xlsx');
    }
    
    public function Unduh_dda912()
    {
       return Excel::download(new Exports_dda912, 'Tabel 912.xlsx');
    }
    
    public function Unduh_dda921()
    {
       return Excel::download(new Exports_dda921, 'Tabel 921.xlsx');
    }
    public function Unduh_dda923()
    {
       return Excel::download(new Exports_dda923, 'Tabel 923.xlsx');
    }
    public function Unduh_dda741()
    {
       return Excel::download(new Exports_dda741, 'Tabel 741.xlsx');
    }
    
     public function Unduh_dda742()
    {
       return Excel::download(new Exports_dda742, 'Tabel 742.xlsx');
    }
    
    
    
    public function Unduh_dda744()
    {
       return Excel::download(new Exports_dda744, 'Tabel 744.xlsx');
    }
	
	
}
