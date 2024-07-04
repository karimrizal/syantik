<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use App\Models\tabel_1;
use App\Models\tabel_231;
use App\Models\tabel_232;
use App\Models\tabel_233;
use App\Models\tabel_234;
use App\Models\tabel_235;
use App\Models\tabel_3217;
use App\Models\tabel_3218;
use App\Models\tabel_423;
use App\Models\tabel_425;
use App\Models\dda\tabel_426;
use App\Models\dda\tabel_427;
use App\Models\dda\tabel_4211;
use App\Models\dda\tabel_4213;
use App\Models\dda\tabel_441;
use App\Models\dda\tabel_531;
use App\Models\dda\tabel_532;
use App\Models\dda\tabel_551;
use App\Models\dda\tabel_552;
use App\Models\dda\tabel_553;
use App\Models\dda\tabel_554;
use App\Models\dda\tabel_555;
use App\Models\dda\tabel_121;
use App\Models\dda\tabel_122;
use App\Models\dda\tabel_123;
use App\Models\dda\tabel_124;
use App\Models\dda\tabel_125;
use App\Models\dda\tabel_126;
use App\Models\dda\tabel_221;
use App\Models\dda\tabel_222;
use App\Models\dda\tabel_223;
use App\Models\dda\tabel_224;
use App\Models\dda\tabel_225;
use App\Models\dda\tabel_227;
use App\Models\dda\tabel_226;
use App\Models\dda\tabel_442;
use App\Models\dda\tabel_443;
use App\Models\dda\tabel_444;
use App\Models\dda\tabel_445;
use App\Models\dda\tabel_446;
use App\Models\dda\tabel_915;
use App\Models\dda\tabel_916;
use App\Models\dda\tabel_4214;
use App\Models\dda\tabel_4215;
use App\Models\dda\tabel_466;
use App\Models\dda\tabel_61;
use App\Models\dda\tabel_62;
use App\Models\dda\tabel_67;
use App\Models\dda\tabel_63;
use App\Models\dda\tabel_64;
use App\Models\dda\tabel_65;
use App\Models\dda\tabel_66;
use App\Models\dda\tabel_721;
use App\Models\dda\tabel_722;
use App\Models\dda\tabel_731;
use App\Models\dda\tabel_732;
use App\Models\dda\tabel_733;
use App\Models\dda\tabel_734;
use App\Models\dda\tabel_735;
use App\Models\dda\tabel_454;
use App\Models\dda\tabel_451;
use App\Models\dda\tabel_455;
use App\Models\dda\tabel_542;
use App\Models\dda\tabel_541;
use App\Models\dda\tabel_543;
use App\Models\dda\tabel_68;
use App\Models\dda\tabel_85;
use App\Models\dda\tabel_911;
use App\Models\dda\tabel_913;
use App\Models\dda\tabel_914;
use App\Models\dda\tabel_103;
use App\Models\dda\tabel_104;
use App\Models\dda\tabel_105;
use App\Models\dda\tabel_106;
use App\Models\dda\tabel_107;
use App\Models\dda\tabel_921;
use App\Models\dda\tabel_923;
use App\Models\dda\tabel_912;
use App\Models\dda\tabel_9121;
use App\Models\dda\tabel_74_1;
use App\Models\dda\tabel_74_3;
use App\Models\dda\tabel_74_12;
use App\Models\dda\tabel_74_10;
use App\Models\dda\tabel_74_2;
use App\Models\dda\tabel_74_11;
use App\Models\dda\tabel_74_5;
use App\Models\dda\tabel_74_7;
use App\Models\dda\tabel_74_8;
use App\Models\dda\tabel_74_6;
use App\Models\dda\tabel_74_13;
use App\Models\dda\tabel_74_14;
use App\Models\dda\tabel_74_15;
use App\Models\dda\tabel_74_16;
use App\Models\dda\tabel_74_17;
use App\Models\dda\tabel_74_18;
use App\Models\dda\tabel_74_19;
use App\Models\dda\tabel_74_20;
use App\Models\dda\tabel_74_21;
use App\Models\dda\tabel_74_22;
use App\Models\dda\tabel_74_23;
use App\Models\dda\tabel_74_24;
use App\Models\dda\tabel_74_4;
use App\Models\dda\tabel_74_25;
use App\Models\dda\tabel_74_26;
use App\Models\dda\tabel_74_27;
use App\Models\dda\tabel_74_28;
use App\Models\dda\tabel_74_29;
use App\Models\dda\tabel_74_30;
use App\Models\dda\tabel_74_31;
use App\Models\dda\tabel_74_32;
use App\Models\dda\tabel_74_33;
use App\Models\dda\tabel_74_34;
use App\Models\dda\tabel_74_35;
use App\Models\dda\tabel_74_36;
use App\Models\dda\tabel_74_37;
use App\Models\dda\tabel_74_38;
use App\Models\dda\tabel_74_39;
use App\Models\dda\tabel_74_40;
use App\Models\dda\tabel_74_41;
use App\Models\dda\tabel_74_42;
use App\Models\dda\tabel_74_43;
use App\Models\dda\tabel_74_44;
use App\Models\dda\tabel_74_45;
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
use App\Models\dda\tabel_74_57;
use App\Models\dda\tabel_74_58;
use App\Models\dda\tabel_74_59;
use App\Models\dda\tabel_74_60;
use App\Models\dda\tabel_74_61;
use App\Models\dda\tabel_74_62;
use App\Models\dda\tabel_74_63;
use App\Models\dda\tabel_74_64;
use App\Models\dda\tabel_74_65;
use App\Models\dda\tabel_74_66;
use App\Models\dda\tabel_74_67;
use App\Models\dda\tabel_74_68;
use App\Models\dda\tabel_74_69;
use App\Models\dda\tabel_74_70;
use App\Models\dda\tabel_74_71;
use App\Models\dda\tabel_74_72;
use App\Models\dda\tabel_74_73;
use App\Models\dda\tabel_74_74;
use App\Models\dda\tabel_74_75;
use App\Models\dda\tabel_74_76;
use App\Models\dda\tabel_74_77;
use App\Models\dda\tabel_74_78;
use App\Models\dda\tabel_74_79;
use App\Models\dda\tabel_74_80;
use App\Models\dda\tabel_74_81;
use App\Models\dda\tabel_74_82;
use App\Models\dda\tabel_74_83;
use App\Models\dda\tabel_74_84;
use App\Models\dda\tabel_74_85;
use App\Models\dda\tabel_74_86;
use App\Models\dda\tabel_74_87;
use App\Models\dda\tabel_74_88;
use App\Models\dda\tabel_74_89;
use App\Models\dda\tabel_74_90;
use App\Models\dda\tabel_74_91;
use App\Models\dda\tabel_74_92;
use App\Models\dda\tabel_74_93;
use App\Models\dda\tabel_74_94;
use App\Models\dda\tabel_74_95;
use App\Models\dda\tabel_74_96;
use App\Models\dda\tabel_74_97;
use App\Models\dda\tabel_74_98;
use App\Models\dda\tabel_74_99;
use App\Models\dda\tabel_74_100;
use App\Models\dda\tabel_74_101;
use App\Models\dda\tabel_74_102;
use App\Models\dda\tabel_74_103;
use App\Models\dda\tabel_74_104;
use App\Models\dda\tabel_74_105;
use App\Models\dda\tabel_74_106;
use App\Models\dda\tabel_74_107;
use App\Models\dda\tabel_74_108;
use App\Models\dda\tabel_74_109;
use App\Models\dda\tabel_74_110;
use App\Models\dda\tabel_74_111;
use App\Models\dda\tabel_74_112;
use App\Models\dda\tabel_74_113;
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
use App\Models\master_kab;
use App\Models\master_tabel;
use App\Models\master_perbandingan;
use DB;
use Session;
use Auth;
use Excel;

use App\Exports\Export121;
use App\Exports\Export122;
use App\Exports\Export123;
use App\Exports\Export124;
use App\Exports\Export125;
use App\Exports\Export126;
use App\Exports\Export221;
use App\Exports\Export222;
use App\Exports\Export223;
use App\Exports\Export224;
use App\Exports\Export225;
use App\Exports\Export226;
use App\Exports\Export231;
use App\Exports\Export232;
use App\Exports\Export233;
use App\Exports\Export234;
use App\Exports\Export235;
use App\Exports\Export3217;
use App\Exports\Export3218;
use App\Exports\Export4211;
use App\Exports\Export4213;
use App\Exports\Export4214;
use App\Exports\Export4215;
use App\Exports\Export423;
use App\Exports\Export425;
use App\Exports\Export426;
use App\Exports\Export427;
use App\Exports\Export441;
use App\Exports\Export442;
use App\Exports\Export443;
use App\Exports\Export444;
use App\Exports\Export445;
use App\Exports\Export446;
use App\Exports\Export454;
use App\Exports\Export455;
use App\Exports\Export466;
use App\Exports\Export531;
use App\Exports\Export532;
use App\Exports\Export541;
use App\Exports\Export542;
use App\Exports\Export543;
use App\Exports\Export551;
use App\Exports\Export552;
use App\Exports\Export553;
use App\Exports\Export554;
use App\Exports\Export555;
use App\Exports\Export61;
use App\Exports\Export62;
use App\Exports\Export63;
use App\Exports\Export64;
use App\Exports\Export65;
use App\Exports\Export66;
use App\Exports\Export67;
use App\Exports\Export68;
use App\Exports\Export721;
use App\Exports\Export731;
use App\Exports\Export732;
use App\Exports\Export733;
use App\Exports\Export734;
use App\Exports\Export735;
use App\Exports\Export85;
use App\Exports\Export911;
use App\Exports\Export913;
use App\Exports\Export914;
use App\Exports\Export915;
use App\Exports\Export916;
use App\Exports\Export103;
use App\Exports\Export104;
use App\Exports\Export105;
use App\Exports\Export106;
use App\Exports\Export107;
use App\Exports\Export921;
use App\Exports\Export923;
use App\Exports\Export912;
use App\Exports\Export741;
use App\Exports\Export742;
use App\Exports\Export743;
use App\Exports\Export744;
use App\Exports\Export745;
use App\Exports\Export746;
use App\Exports\Export747;


use App\Export\Exports121;
use App\Export\Exports122;
use App\Export\Exports123;
use App\Export\Exports124;
use App\Export\Exports125;
use App\Export\Exports126;
use App\Export\Exports221;
use App\Export\Exports222;
use App\Export\Exports223;
use App\Export\Exports224;
use App\Export\Exports225;
use App\Export\Exports226;
use App\Export\Exports231;
use App\Export\Exports232;
use App\Export\Exports233;
use App\Export\Exports234;
use App\Export\Exports235;
use App\Export\Exports3217;
use App\Export\Exports3218;
use App\Export\Exports4211;
use App\Export\Exports4213;
use App\Export\Exports4214;
use App\Export\Exports4215;
use App\Export\Exports423;
use App\Export\Exports425;
use App\Export\Exports426;
use App\Export\Exports427;
use App\Export\Exports441;
use App\Export\Exports442;
use App\Export\Exports443;
use App\Export\Exports444;
use App\Export\Exports445;
use App\Export\Exports446;
use App\Export\Exports454;
use App\Export\Exports455;
use App\Export\Exports466;
use App\Export\Exports531;
use App\Export\Exports532;
use App\Export\Exports541;
use App\Export\Exports542;
use App\Export\Exports543;
use App\Export\Exports551;
use App\Export\Exports552;
use App\Export\Exports553;
use App\Export\Exports554;
use App\Export\Exports555;
use App\Export\Exports61;
use App\Export\Exports62;
use App\Export\Exports63;
use App\Export\Exports64;
use App\Export\Exports65;
use App\Export\Exports66;
use App\Export\Exports67;
use App\Export\Exports68;
use App\Export\Exports721;
use App\Export\Exports731;
use App\Export\Exports732;
use App\Export\Exports733;
use App\Export\Exports734;
use App\Export\Exports735;
use App\Export\Exports85;
use App\Export\Exports911;
use App\Export\Exports913;
use App\Export\Exports914;
use App\Export\Exports915;
use App\Export\Exports916;
use App\Export\Exports103;
use App\Export\Exports104;
use App\Export\Exports105;
use App\Export\Exports106;
use App\Export\Exports107;
use App\Export\Exports912;
use App\Export\Exports921;
use App\Export\Exports923;
use App\Export\Exports741;
use App\Export\Exports742;
use App\Export\Exports743;
use App\Export\Exports744;
use App\Export\Exports745;
use App\Export\Exports746;
use App\Export\Exports747;
use App\Export\Exports748;

use App\Export\Exports7410;
use App\Export\Exports7411;
use App\Export\Exports7412;
use App\Export\Exports7413;
use App\Export\Exports7414;
use App\Export\Exports7415;
use App\Export\Exports7416;
use App\Export\Exports7417;
use App\Export\Exports7418;
use App\Export\Exports7419;
use App\Export\Exports7420;
use App\Export\Exports7421;
use App\Export\Exports7422;
use App\Export\Exports7423;
use App\Export\Exports7424;
use App\Export\Exports7425;
use App\Export\Exports7426;
use App\Export\Exports7427;
use App\Export\Exports7428;
use App\Export\Exports7429;
use App\Export\Exports7430;
use App\Export\Exports7431;
use App\Export\Exports7432;
use App\Export\Exports7433;
use App\Export\Exports7434;
use App\Export\Exports7435;
use App\Export\Exports7436;
use App\Export\Exports7437;
use App\Export\Exports7438;
use App\Export\Exports7439;
use App\Export\Exports7440;
use App\Export\Exports7441;
use App\Export\Exports7442;
use App\Export\Exports7443;
use App\Export\Exports7444;
use App\Export\Exports7445;
use App\Export\Exports7446;
use App\Export\Exports7447;
use App\Export\Exports7448;
use App\Export\Exports7449;
use App\Export\Exports7450;
use App\Export\Exports7451;
use App\Export\Exports7452;
use App\Export\Exports7453;
use App\Export\Exports7454;
use App\Export\Exports7455;
use App\Export\Exports7456;
use App\Export\Exports7457;
use App\Export\Exports7458;
use App\Export\Exports7459;
use App\Export\Exports7460;
use App\Export\Exports7461;
use App\Export\Exports7462;
use App\Export\Exports7463;
use App\Export\Exports7464;
use App\Export\Exports7465;
use App\Export\Exports7466;
use App\Export\Exports7467;
use App\Export\Exports7468;
use App\Export\Exports7469;
use App\Export\Exports7470;
use App\Export\Exports7471;
use App\Export\Exports7472;
use App\Export\Exports7473;
use App\Export\Exports7474;
use App\Export\Exports7475;
use App\Export\Exports7476;
use App\Export\Exports7477;
use App\Export\Exports7478;
use App\Export\Exports7479;
use App\Export\Exports7480;
use App\Export\Exports7481;
use App\Export\Exports7482;
use App\Export\Exports7483;
use App\Export\Exports7484;
use App\Export\Exports7485;
use App\Export\Exports7486;
use App\Export\Exports7487;
use App\Export\Exports7488;
use App\Export\Exports7489;
use App\Export\Exports7490;
use App\Export\Exports7491;
use App\Export\Exports7492;
use App\Export\Exports7493;
use App\Export\Exports7494;
use App\Export\Exports7495;
use App\Export\Exports7496;
use App\Export\Exports7497;
use App\Export\Exports7498;
use App\Export\Exports7499;
use App\Export\Exports74100;
use App\Export\Exports74101;
use App\Export\Exports74102;
use App\Export\Exports74103;
use App\Export\Exports74104;
use App\Export\Exports74105;
use App\Export\Exports74106;
use App\Export\Exports74107;
use App\Export\Exports74108;
use App\Export\Exports74109;
use App\Export\Exports74110;
use App\Export\Exports74111;
use App\Export\Exports74112;
use App\Export\Exports74113;
use App\Export\Exports74114;
use App\Export\Exports74115;
use App\Export\Exports74116;
use App\Export\Exports74117;
use App\Export\Exports74118;
use App\Export\Exports74119;
use App\Export\Exports74120;
use App\Export\Exports74121;
use App\Export\Exports74122;
use App\Export\Exports74123;

use App\Export\ExportAll;



class DDAController extends Controller
{
    //
    public function index(Request $request)
    {
      $data = $request->input('tabel');
      $tahun = $request->input('tahun');
      
      $master_tabel = master_tabel::where('idkab', Auth::user()->idkab )->where('tahun', $tahun)->where('kode','<>', NULL)->get();
      $master_tabel_opd = master_tabel::where('idkab', Auth::user()->idkab )->where('dinas', Auth::user()->organisasi )->where('tahun', $tahun)->where('kode','<>', NULL)->get();
      
      $master_tabel_now = master_tabel::where('idkab', Auth::user()->idkab )->where('tahun', 2022)->where('kode','<>', NULL)->get();
      $master_tabel_opd_now = master_tabel::where('idkab', Auth::user()->idkab )->where('dinas', Auth::user()->organisasi )->where('tahun', 2022)->where('kode','<>', NULL)->get();
    Session::put('key', $tahun); 
        
   $year= Session::get('key');
        
        
        if($data == '1')
        {
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/tabel_107');
        }

        elseif($data == '2')
        {
            return redirect::to('https://webapps.bps.go.id/sultra/syantik/rekomendasi');
        }

        else{
            return view('dda',compact('master_tabel','master_tabel_opd','master_tabel_now','master_tabel_opd_now','year'));
        }
        
    }
    
    public function index2()
    {
            $year= Session::get('key');
            
            $tabel_1 = tabel_1::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_1',compact('tabel_1', 'year'))->with('k', (request()->input('page', 1) - 1) * 5);
             
        
    }
    
    public function index3(Request $request)
    {
        $tahun = $request->input('tahun');
      $master_banding = master_perbandingan::where('tahun', $tahun)->get();
    Session::put('key', $tahun); 
        
   $year= Session::get('key');
   
   
   
   
   
    $status_4214_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4214a) as t4214a, sum(t4214b) as t4214b FROM tabel_4214s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        INNER JOIN
                                            (SELECT * FROM tabel_4214s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t4214a = t2.t4214a and t1.t4214b = t2.t4214b "));
                                            
    $status_3217_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t3217a_lk) as t3217a_lk, sum(t3217a_pr) as t3217a_pr, sum(t3217a) as t3217a,
                            sum(t3217b_lk) as t3217b_lk, sum(t3217b_pr) as t3217b_pr, sum(t3217b_lk + t3217b_pr) as t3217b,
                           sum(t3217c_lk) as t3217c_lk, sum(t3217c_pr) as t3217c_pr, sum(t3217c_lk + t3217c_pr) as t3217c FROM tabel_3217s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_3217s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t3217a_lk = t2.t3217a_lk and t1.t3217a_pr = t2.t3217a_pr and t1.t3217a = t2.t3217a and 
                                            t1.t3217b_lk = t2.t3217b_lk and t1.t3217b_pr = t2.t3217b_pr and t1.t3217b = t2.t3217b and
                                            t1.t3217c_lk = t2.t3217c_lk and t1.t3217c_pr = t2.t3217c_pr and t1.t3217c = t2.t3217c")); 
                                            
    $status_4215_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4215a) as t4215a, sum(t4215b) as t4215b, sum(t4215c) as t4215c, sum(t4215d) as t4215d, sum(t4215e) as t4215e
                            , sum(t4215f) as t4215f, sum(t4215g) as t4215g, sum(t4215h) as t4215h, sum(t4215i) as t4215i FROM tabel_4215s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_4215s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t4215a = t2.t4215a and t1.t4215b = t2.t4215b and t1.t4215c = t2.t4215c and t1.t4215d = t2.t4215d and t1.t4215e = t2.t4215e
                                            and t1.t4215f = t2.t4215f and t1.t4215g = t2.t4215g and t1.t4215h = t2.t4215h and t1.t4215i = t2.t4215i"));  
                                            
    $status_423_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t423a) as t423a, sum(t423b) as t423b, sum(t423c) as t423c, sum(t423d) as t423d, sum(t423e) as t423e
                            , sum(t423f) as t423f, sum(t423g) as t423g, sum(t423h) as t423h, sum(t423i) as t423i FROM tabel_423s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_423s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t423a = t2.t423a and t1.t423b = t2.t423b and t1.t423c = t2.t423c and t1.t423d = t2.t423d and t1.t423e = t2.t423e
                                            and t1.t423f = t2.t423f and t1.t423g = t2.t423g and t1.t423h = t2.t423h and t1.t423i = t2.t423i "));
                                            
     $status_425_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t425a) as t425a, sum(t425b) as t425b, sum(t425c) as t425c, sum(t425d) as t425d, sum(t425e) as t425e
                            , sum(t425f) as t425f FROM tabel_425s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_425s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t425a = t2.t425a and t1.t425b = t2.t425b and t1.t425c = t2.t425c and t1.t425d = t2.t425d and t1.t425e = t2.t425e
                                            and t1.t425f = t2.t425f ")); 
                                            
    $status_426_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t426a) as t426a, sum(t426b) as t426b, sum(t426c) as t426c, sum(t426d) as t426d, sum(t426e) as t426e
                            , sum(t426f) as t426f, sum(t426g) as t426g FROM tabel_426s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_426s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t426a = t2.t426a and t1.t426b = t2.t426b and t1.t426c = t2.t426c and t1.t426d = t2.t426d and t1.t426e = t2.t426e
                                            and t1.t426f = t2.t426f and t1.t426g = t2.t426g "));
                                            
    $status_427_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t427a) as t427a, sum(t427b) as t427b, sum(t427c) as t427c FROM tabel_427s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_427s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t427a = t2.t427a and t1.t427b = t2.t427b and t1.t427c = t2.t427c "));
                                            
                                            
    $status_455_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t455a) as t455a, sum(t455b) as t455b, sum(t455c) as t455c, sum(t455d) as t455d, sum(t455e) as t455e
                            , sum(t455f) as t455f FROM tabel_455s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_455s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t455a = t2.t455a and t1.t455b = t2.t455b and t1.t455c = t2.t455c and t1.t455d = t2.t455d and t1.t455e = t2.t455e
                                            and t1.t455f = t2.t455f "));  
                                            
    $status_466_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t466a) as t466a, sum(t466b) as t466b, sum(t466c) as t466c, sum(t466d) as t466d, sum(t466e) as t466e
                            , sum(t466f) as t466f FROM tabel_466s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_466s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t466a = t2.t466a and t1.t466b = t2.t466b and t1.t466c = t2.t466c and t1.t466d = t2.t466d and t1.t466e = t2.t466e
                                            and t1.t466f = t2.t466f ")); 
                                            
                                            
    $status_531_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t531a) as t531a, sum(t531b) as t531b, sum(t531c) as t531c, sum(t531d) as t531d, sum(t531e) as t531e
                            , sum(t531f) as t531f, sum(t531g) as t531g, sum(t531h) as t531h, sum(t531i) as t531i, sum(t531j) as t531j, sum(t531k) as t531k, sum(t531l) as t531l, sum(t531m) as t531m FROM tabel_531s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_531s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t531a = t2.t531a and t1.t531b = t2.t531b and t1.t531c = t2.t531c and t1.t531d = t2.t531d and t1.t531e = t2.t531e
                                            and t1.t531f = t2.t531f and t1.t531g = t2.t531g and t1.t531h = t2.t531h and t1.t531i = t2.t531i and t1.t531j = t2.t531j and t1.t531k = t2.t531k
                                            and t1.t531l = t2.t531l and t1.t531m = t2.t531m"));
                                            
    $status_532_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t532a) as t532a, sum(t532b) as t532b, sum(t532c) as t532c, sum(t532d) as t532d, sum(t532e) as t532e
                            , sum(t532f) as t532f, sum(t532g) as t532g, sum(t532h) as t532h, sum(t532i) as t532i, sum(t532j) as t532j, sum(t532k) as t532k, sum(t532l) as t532l, sum(t532m) as t532m FROM tabel_532s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_532s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t532a = t2.t532a and t1.t532b = t2.t532b and t1.t532c = t2.t532c and t1.t532d = t2.t532d and t1.t532e = t2.t532e
                                            and t1.t532f = t2.t532f and t1.t532g = t2.t532g and t1.t532h = t2.t532h and t1.t532i = t2.t532i and t1.t532j = t2.t532j and t1.t532k = t2.t532k
                                            and t1.t532l = t2.t532l and t1.t532m = t2.t532m "));
                                            
                                            
    $status_551_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t551a) as t551a, sum(t551b) as t551b, sum(t551c) as t551c, sum(t551d) as t551d, sum(t551e) as t551e
                            , sum(t551f) as t551f, sum(t551g) as t551g FROM tabel_551s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_551s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t551a = t2.t551a and t1.t551b = t2.t551b and t1.t551c = t2.t551c and t1.t551d = t2.t551d and t1.t551e = t2.t551e
                                            and t1.t551f = t2.t551f and t1.t551g = t2.t551g "));
                                            
    $status_552_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t552a) as t552a, sum(t552b) as t552b, sum(t552c) as t552c, sum(t552d) as t552d FROM tabel_552s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_552s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t552a = t2.t552a and t1.t552b = t2.t552b and t1.t552c = t2.t552c and t1.t552d = t2.t552d "));
                                            
    $status_553_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t553a) as t553a, sum(t553b) as t553b, sum(t553c) as t553c, sum(t553d) as t553d, sum(t553e) as t553e
                            , sum(t553f) as t553f, sum(t553g) as t553g FROM tabel_553s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_553s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t553a = t2.t553a and t1.t553b = t2.t553b and t1.t553c = t2.t553c and t1.t553d = t2.t553d and t1.t553e = t2.t553e
                                            and t1.t553f = t2.t553f and t1.t553g = t2.t553g "));
                                            
    $status_554_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t554a) as t554a, sum(t554b) as t554b, sum(t554c) as t554c, sum(t554d) as t554d FROM tabel_554s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_554s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t554a = t2.t554a and t1.t554b = t2.t554b and t1.t554c = t2.t554c and t1.t554d = t2.t554d ")); 
                                            
    $status_555_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t555a) as t555a, sum(t555b) as t555b, sum(t555c) as t555c, sum(t555d) as t555d FROM tabel_555s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_555s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t555a = t2.t555a and t1.t555b = t2.t555b and t1.t555c = t2.t555c and t1.t555d = t2.t555d ")); 
                                            
                                            
    $status_63_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t63a) as t63a, sum(t63b) as t63b, sum(t63c) as t63c FROM tabel_63s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_63s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t63a = t2.t63a and t1.t63b = t2.t63b and t1.t63c = t2.t63c "));
                                            
    $status_911_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t911a) as t911a, sum(t911b) as t911b, sum(t911c) as t911c, sum(t911d) as t911d FROM tabel_911s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_911s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t911a = t2.t911a and t1.t911b = t2.t911b and t1.t911c = t2.t911c and t1.t911d = t2.t911d "));                                        
    
    $status_913_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t913a) as t913a, sum(t913b) as t913b, sum(t913c) as t913c, sum(t913d) as t913d FROM tabel_913s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_913s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t913a = t2.t913a and t1.t913b = t2.t913b and t1.t913c = t2.t913c and t1.t913d = t2.t913d ")); 
                                            
    $status_914_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t914a) as t914a, sum(t914b) as t914b, sum(t914c) as t914c, sum(t914d) as t914d FROM tabel_914s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_914s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t914a = t2.t914a and t1.t914b = t2.t914b and t1.t914c = t2.t914c and t1.t914d = t2.t914d "));
                                            
    $status_921_2020 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t921a) as t921a FROM tabel_921s where tahun =2020 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_921s where idkab=7400 and tahun =2020 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t921a = t2.t921a ")); 
                                            
                                            
                                            
                                            
    $status_4214_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4214a) as t4214a, sum(t4214b) as t4214b FROM tabel_4214s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        INNER JOIN
                                            (SELECT * FROM tabel_4214s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t4214a = t2.t4214a and t1.t4214b = t2.t4214b "));
                                            
    $status_3217_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t3217a_lk) as t3217a_lk, sum(t3217a_pr) as t3217a_pr, sum(t3217a) as t3217a,
                            sum(t3217b_lk) as t3217b_lk, sum(t3217b_pr) as t3217b_pr, sum(t3217b_lk + t3217b_pr) as t3217b,
                           sum(t3217c_lk) as t3217c_lk, sum(t3217c_pr) as t3217c_pr, sum(t3217c_lk + t3217c_pr) as t3217c FROM tabel_3217s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_3217s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t3217a_lk = t2.t3217a_lk and t1.t3217a_pr = t2.t3217a_pr and t1.t3217a = t2.t3217a and 
                                            t1.t3217b_lk = t2.t3217b_lk and t1.t3217b_pr = t2.t3217b_pr and t1.t3217b = t2.t3217b and
                                            t1.t3217c_lk = t2.t3217c_lk and t1.t3217c_pr = t2.t3217c_pr and t1.t3217c = t2.t3217c")); 
                                            
    $status_4215_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4215a) as t4215a, sum(t4215b) as t4215b, sum(t4215c) as t4215c, sum(t4215d) as t4215d, sum(t4215e) as t4215e
                            , sum(t4215f) as t4215f, sum(t4215g) as t4215g, sum(t4215h) as t4215h, sum(t4215i) as t4215i FROM tabel_4215s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_4215s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t4215a = t2.t4215a and t1.t4215b = t2.t4215b and t1.t4215c = t2.t4215c and t1.t4215d = t2.t4215d and t1.t4215e = t2.t4215e
                                            and t1.t4215f = t2.t4215f and t1.t4215g = t2.t4215g and t1.t4215h = t2.t4215h and t1.t4215i = t2.t4215i"));  
                                            
    $status_423_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t423a) as t423a, sum(t423b) as t423b, sum(t423c) as t423c, sum(t423d) as t423d, sum(t423e) as t423e
                            , sum(t423f) as t423f, sum(t423g) as t423g, sum(t423h) as t423h, sum(t423i) as t423i FROM tabel_423s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_423s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t423a = t2.t423a and t1.t423b = t2.t423b and t1.t423c = t2.t423c and t1.t423d = t2.t423d and t1.t423e = t2.t423e
                                            and t1.t423f = t2.t423f and t1.t423g = t2.t423g and t1.t423h = t2.t423h and t1.t423i = t2.t423i "));
                                            
     $status_425_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t425a) as t425a, sum(t425b) as t425b, sum(t425c) as t425c, sum(t425d) as t425d, sum(t425e) as t425e
                            , sum(t425f) as t425f FROM tabel_425s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_425s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t425a = t2.t425a and t1.t425b = t2.t425b and t1.t425c = t2.t425c and t1.t425d = t2.t425d and t1.t425e = t2.t425e
                                            and t1.t425f = t2.t425f ")); 
                                            
    $status_426_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t426a) as t426a, sum(t426b) as t426b, sum(t426c) as t426c, sum(t426d) as t426d, sum(t426e) as t426e
                            , sum(t426f) as t426f, sum(t426g) as t426g FROM tabel_426s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_426s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t426a = t2.t426a and t1.t426b = t2.t426b and t1.t426c = t2.t426c and t1.t426d = t2.t426d and t1.t426e = t2.t426e
                                            and t1.t426f = t2.t426f and t1.t426g = t2.t426g "));
                                            
    $status_427_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t427a) as t427a, sum(t427b) as t427b, sum(t427c) as t427c FROM tabel_427s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_427s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t427a = t2.t427a and t1.t427b = t2.t427b and t1.t427c = t2.t427c "));
                                            
                                            
    $status_455_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t455a) as t455a, sum(t455b) as t455b, sum(t455c) as t455c, sum(t455d) as t455d, sum(t455e) as t455e
                            , sum(t455f) as t455f FROM tabel_455s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_455s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t455a = t2.t455a and t1.t455b = t2.t455b and t1.t455c = t2.t455c and t1.t455d = t2.t455d and t1.t455e = t2.t455e
                                            and t1.t455f = t2.t455f "));  
                                            
    $status_466_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t466a) as t466a, sum(t466b) as t466b, sum(t466c) as t466c, sum(t466d) as t466d, sum(t466e) as t466e
                            , sum(t466f) as t466f FROM tabel_466s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_466s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t466a = t2.t466a and t1.t466b = t2.t466b and t1.t466c = t2.t466c and t1.t466d = t2.t466d and t1.t466e = t2.t466e
                                            and t1.t466f = t2.t466f ")); 
                                            
                                            
    $status_531_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t531a) as t531a, sum(t531b) as t531b, sum(t531c) as t531c, sum(t531d) as t531d, sum(t531e) as t531e
                            , sum(t531f) as t531f, sum(t531g) as t531g, sum(t531h) as t531h, sum(t531i) as t531i, sum(t531j) as t531j, sum(t531k) as t531k, sum(t531l) as t531l, sum(t531m) as t531m FROM tabel_531s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_531s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t531a = t2.t531a and t1.t531b = t2.t531b and t1.t531c = t2.t531c and t1.t531d = t2.t531d and t1.t531e = t2.t531e
                                            and t1.t531f = t2.t531f and t1.t531g = t2.t531g and t1.t531h = t2.t531h and t1.t531i = t2.t531i and t1.t531j = t2.t531j and t1.t531k = t2.t531k
                                            and t1.t531l = t2.t531l and t1.t531m = t2.t531m"));
                                            
    $status_532_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t532a) as t532a, sum(t532b) as t532b, sum(t532c) as t532c, sum(t532d) as t532d, sum(t532e) as t532e
                            , sum(t532f) as t532f, sum(t532g) as t532g, sum(t532h) as t532h, sum(t532i) as t532i, sum(t532j) as t532j, sum(t532k) as t532k, sum(t532l) as t532l, sum(t532m) as t532m FROM tabel_532s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_532s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t532a = t2.t532a and t1.t532b = t2.t532b and t1.t532c = t2.t532c and t1.t532d = t2.t532d and t1.t532e = t2.t532e
                                            and t1.t532f = t2.t532f and t1.t532g = t2.t532g and t1.t532h = t2.t532h and t1.t532i = t2.t532i and t1.t532j = t2.t532j and t1.t532k = t2.t532k
                                            and t1.t532l = t2.t532l and t1.t532m = t2.t532m "));
                                            
                                            
    $status_551_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t551a) as t551a, sum(t551b) as t551b, sum(t551c) as t551c, sum(t551d) as t551d, sum(t551e) as t551e
                            , sum(t551f) as t551f, sum(t551g) as t551g FROM tabel_551s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_551s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t551a = t2.t551a and t1.t551b = t2.t551b and t1.t551c = t2.t551c and t1.t551d = t2.t551d and t1.t551e = t2.t551e
                                            and t1.t551f = t2.t551f and t1.t551g = t2.t551g "));
                                            
    $status_552_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t552a) as t552a, sum(t552b) as t552b, sum(t552c) as t552c, sum(t552d) as t552d FROM tabel_552s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_552s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t552a = t2.t552a and t1.t552b = t2.t552b and t1.t552c = t2.t552c and t1.t552d = t2.t552d "));
                                            
    $status_553_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t553a) as t553a, sum(t553b) as t553b, sum(t553c) as t553c, sum(t553d) as t553d, sum(t553e) as t553e
                            , sum(t553f) as t553f, sum(t553g) as t553g FROM tabel_553s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_553s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t553a = t2.t553a and t1.t553b = t2.t553b and t1.t553c = t2.t553c and t1.t553d = t2.t553d and t1.t553e = t2.t553e
                                            and t1.t553f = t2.t553f and t1.t553g = t2.t553g "));
                                            
    $status_554_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t554a) as t554a, sum(t554b) as t554b, sum(t554c) as t554c, sum(t554d) as t554d FROM tabel_554s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_554s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t554a = t2.t554a and t1.t554b = t2.t554b and t1.t554c = t2.t554c and t1.t554d = t2.t554d ")); 
                                            
    $status_555_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t555a) as t555a, sum(t555b) as t555b, sum(t555c) as t555c, sum(t555d) as t555d FROM tabel_555s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_555s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t555a = t2.t555a and t1.t555b = t2.t555b and t1.t555c = t2.t555c and t1.t555d = t2.t555d ")); 
                                            
                                            
    $status_63_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t63a) as t63a, sum(t63b) as t63b, sum(t63c) as t63c FROM tabel_63s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_63s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t63a = t2.t63a and t1.t63b = t2.t63b and t1.t63c = t2.t63c "));
                                            
    $status_911_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t911a) as t911a, sum(t911b) as t911b, sum(t911c) as t911c, sum(t911d) as t911d FROM tabel_911s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_911s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t911a = t2.t911a and t1.t911b = t2.t911b and t1.t911c = t2.t911c and t1.t911d = t2.t911d "));                                        
    
    $status_913_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t913a) as t913a, sum(t913b) as t913b, sum(t913c) as t913c, sum(t913d) as t913d FROM tabel_913s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_913s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t913a = t2.t913a and t1.t913b = t2.t913b and t1.t913c = t2.t913c and t1.t913d = t2.t913d ")); 
                                            
    $status_914_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t914a) as t914a, sum(t914b) as t914b, sum(t914c) as t914c, sum(t914d) as t914d FROM tabel_914s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_914s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t914a = t2.t914a and t1.t914b = t2.t914b and t1.t914c = t2.t914c and t1.t914d = t2.t914d "));
                                            
    $status_921_2021 = DB::select(DB::raw("SELECT count(t1.idkab) as jumlah_baris
                                        FROM 
                                            (SELECT idkab,idkec, sum(t921a) as t921a FROM tabel_921s where tahun =2021 and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_921s where idkab=7400 and tahun =2021 GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) WHERE t1.t921a = t2.t921a "));                                           
                                            
                                            
  
                                            
                                            
                                            
                                            
                        

 
            return view('rekap',compact('master_banding','year','status_4214_2020','status_3217_2020','status_4215_2020','status_423_2020','status_425_2020','status_426_2020', 'status_427_2020'
            ,'status_455_2020','status_466_2020','status_531_2020','status_532_2020','status_551_2020','status_552_2020','status_553_2020','status_554_2020','status_555_2020', 'status_63_2020'
            ,'status_911_2020','status_913_2020','status_914_2020','status_921_2020','status_4214_2021','status_3217_2021','status_4215_2021','status_423_2021','status_425_2021','status_426_2021', 'status_427_2021'
            ,'status_455_2021','status_466_2021','status_531_2021','status_532_2021','status_551_2021','status_552_2021','status_553_2021','status_554_2021','status_555_2021', 'status_63_2021'
            ,'status_911_2021','status_913_2021','status_914_2021','status_921_2021'));
        
        
    }
   
    
    public function store(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_1s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
     
    }
    
    
    
      public function index231()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_231')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
             $banding = DB::table('tabel_231s')
                            
                            ->selectRaw("id, kec, idkab, sum(t231_lk) as t231_lk, sum(t231_pr) as t231_pr, sum(t231c) as t231c")->groupBy('idkab')
                            ->where('tahun', 2021)->where('idkab', '!=' , 7400)
                            ->get();     
        
                                         
                            
            $tes = tabel_231::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get(); 
            
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
       
             return view('dda.tabel_231',compact('tabel_231', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding231()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_231')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
             $banding = DB::table('tabel_231s')
                            
                            ->selectRaw("id, kec, idkab, sum(t231_lk) as t231_lk, sum(t231_pr) as t231_pr, sum(t231c) as t231c")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();    
            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t231_lk as t231_lk_k, t1.t231_pr as t231_pr_k, t1.t231c as t231c_k, t2.t231_lk, t2.t231_pr as t231_pr, t2.t231c as t231c
                                        FROM 
                                            (SELECT idkab,idkec, sum(t231_lk) as t231_lk, sum(t231_pr) as t231_pr, sum(t231c) as t231c FROM tabel_231s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_231s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                
                            

            $tes = tabel_231::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
        $isReserved = false;    
        
             return view('rekap.rekap_231',compact('tabel_231', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'isReserved','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store231(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_231s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
          if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_231')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_231')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_231')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index921()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_921')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_921::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_921 = tabel_921::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.921',compact('tabel_921', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store921(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_921s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_921')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_921')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_921')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function banding921()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_921')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();     
                            
            $banding = DB::table('tabel_921s')
                            ->selectRaw("sum(t921a) as t921a")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
             $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t921a as t921a_k
                                 ,t2.t921a
                                        FROM 
                                            (SELECT idkab,idkec, sum(t921a) as t921a FROM tabel_921s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_921s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                       
                            
            $tes = tabel_921::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_921 = tabel_921::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_921',compact('tabel_921', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function index741()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_741')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_1s')
                            ->selectRaw("sum(t741a) as sum_a,sum(t741b) as sum_b,sum(t741c) as sum_c,sum(t741d) as sum_d,sum(t741e) as sum_e,sum(t741f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_741 = tabel_74_1::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.741',compact('tabel_741', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store741(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_1s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_741')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_741')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_741')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
    public function index743()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_743')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_3s')
                            ->selectRaw("sum(t743a) as sum_a,sum(t743b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_743 = tabel_74_3::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.743',compact('tabel_743', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store743(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_3s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_743')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7412()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7412')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_12s')
                            ->selectRaw("sum(t7412a) as sum_a,sum(t7412b) as sum_b, sum(t7412c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7412 = tabel_74_12::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7412',compact('tabel_7412', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7412(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_12s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7412')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index742()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_742')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_2s')
                            ->selectRaw("sum(t742a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_742 = tabel_74_2::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.742',compact('tabel_742', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store742(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_2s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_742')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7410()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7410')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_10s')
                            ->selectRaw("sum(t7410a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7410 = tabel_74_10::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7410',compact('tabel_7410', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7410(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_10s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_7410')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_7410')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_7410')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    public function index7411()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7411')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_11s')
                            ->selectRaw("sum(t7411a) as sum_a,sum(t7411b) as sum_b, sum(t7411c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7411 = tabel_74_11::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7411',compact('tabel_7411', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7411(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_11s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7411')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index745()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_745')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_5s')
                            ->selectRaw("sum(t745a) as sum_a,sum(t745b) as sum_b, sum(t745c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_745 = tabel_74_5::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.745',compact('tabel_745', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store745(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_5s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_745')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index747()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_747')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_7s')
                            ->selectRaw("sum(t747a) as sum_a,sum(t747b) as sum_b, sum(t747c) as sum_c, sum(t747d) as sum_d, sum(t747e) as sum_e, sum(t747f) as sum_f, sum(t747g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_747 = tabel_74_7::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.747',compact('tabel_747', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store747(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_7s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_747')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index748()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_748')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_8s')
                            ->selectRaw("sum(t748a) as sum_a,sum(t748b) as sum_b, sum(t748c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_748 = tabel_74_8::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.748',compact('tabel_748', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store748(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_8s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_748')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index746()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_746')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_6s')
                            ->selectRaw("sum(t746a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_746 = tabel_74_6::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.746',compact('tabel_746', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store746(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_6s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_746')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index7413()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7413')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_13s')
                            ->selectRaw("sum(t7413a) as sum_a,sum(t7413b) as sum_b, sum(t7413c) as sum_c, sum(t7413d) as sum_d, sum(t7413e) as sum_e, sum(t7413f) as sum_f, sum(t7413g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7413 = tabel_74_13::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7413',compact('tabel_7413', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7413(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_13s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7413')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7414()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7414')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_14s')
                            ->selectRaw("sum(t7414a) as sum_a,sum(t7414b) as sum_b, sum(t7414c) as sum_c, sum(t7414d) as sum_d, sum(t7414e) as sum_e, sum(t7414f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7414 = tabel_74_14::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7414',compact('tabel_7414', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7414(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_14s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7414')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7415()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7415')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_15s')
                            ->selectRaw("sum(t7415a) as sum_a,sum(t7415b) as sum_b, sum(t7415c) as sum_c, sum(t7415d) as sum_d, sum(t7415e) as sum_e, sum(t7415f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7415 = tabel_74_15::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7415',compact('tabel_7415', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7415(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_15s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7415')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index7416()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7416')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_16s')
                            ->selectRaw("sum(t7416a) as sum_a,sum(t7416b) as sum_b, sum(t7416c) as sum_c, sum(t7416d) as sum_d, sum(t7416e) as sum_e, sum(t7416f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7416 = tabel_74_16::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7416',compact('tabel_7416', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7416(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_16s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7416')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7417()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7417')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_17s')
                            ->selectRaw("sum(t7417a) as sum_a,sum(t7417b) as sum_b, sum(t7417c) as sum_c, sum(t7417d) as sum_d, sum(t7417e) as sum_e, sum(t7417f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7417 = tabel_74_17::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7417',compact('tabel_7417', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7417(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_17s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7417')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7418()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7418')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_18s')
                            ->selectRaw("sum(t7418a) as sum_a,sum(t7418b) as sum_b, sum(t7418c) as sum_c, sum(t7418d) as sum_d, sum(t7418e) as sum_e, sum(t7418f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7418 = tabel_74_18::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7418',compact('tabel_7418', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7418(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_18s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7418')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7419()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7419')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_19s')
                            ->selectRaw("sum(t7419a) as sum_a,sum(t7419b) as sum_b, sum(t7419c) as sum_c, sum(t7419d) as sum_d, sum(t7419e) as sum_e, sum(t7419f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7419 = tabel_74_19::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7419',compact('tabel_7419', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7419(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_19s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7419')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7420()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7420')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_20s')
                            ->selectRaw("sum(t7420a) as sum_a,sum(t7420b) as sum_b, sum(t7420c) as sum_c, sum(t7420d) as sum_d, sum(t7420e) as sum_e, sum(t7420f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7420 = tabel_74_20::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7420',compact('tabel_7420', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7420(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_20s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7420')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7421()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7421')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_21s')
                            ->selectRaw("sum(t7421a) as sum_a,sum(t7421b) as sum_b, sum(t7421c) as sum_c, sum(t7421d) as sum_d, sum(t7421e) as sum_e, sum(t7421f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7421 = tabel_74_21::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7421',compact('tabel_7421', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7421(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_21s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_7421')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_7421')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_7421')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
    public function index7422()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7422')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_22s')
                            ->selectRaw("sum(t7422a) as sum_a,sum(t7422b) as sum_b, sum(t7422c) as sum_c, sum(t7422d) as sum_d, sum(t7422e) as sum_e, sum(t7422f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7422 = tabel_74_22::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7422',compact('tabel_7422', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7422(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_22s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7422')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7423()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_23s')
                            ->selectRaw("sum(t7423a) as sum_a,sum(t7423b) as sum_b, sum(t7423c) as sum_c, sum(t7423d) as sum_d, sum(t7423e) as sum_e, sum(t7423f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7423 = tabel_74_23::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7423',compact('tabel_7423', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7423(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_23s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7424()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7424')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_24s')
                            ->selectRaw("sum(t7424a) as sum_a,sum(t7424b) as sum_b, sum(t7424c) as sum_c, sum(t7424d) as sum_d, sum(t7424e) as sum_e, sum(t7424f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7424 = tabel_74_24::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7424',compact('tabel_7424', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7424(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_24s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7424')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7425()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_25s')
                            ->selectRaw("sum(t7425a) as sum_a,sum(t7425b) as sum_b, sum(t7425c) as sum_c, sum(t7425d) as sum_d, sum(t7425e) as sum_e, sum(t7425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7425 = tabel_74_25::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7425',compact('tabel_7425', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7425(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_25s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7426()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_26s')
                            ->selectRaw("sum(t7426a) as sum_a,sum(t7426b) as sum_b, sum(t7426c) as sum_c, sum(t7426d) as sum_d, sum(t7426e) as sum_e, sum(t7426f) as sum_f, sum(t7426g) as sum_g, sum(t7426h) as sum_h, sum(t7426i) as sum_i")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7426 = tabel_74_26::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7426',compact('tabel_7426', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7426(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_26s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7427()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_27s')
                            ->selectRaw("sum(t7427a) as sum_a,sum(t7427b) as sum_b, sum(t7427c) as sum_c, sum(t7427d) as sum_d, sum(t7427e) as sum_e, sum(t7427f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7427 = tabel_74_27::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7427',compact('tabel_7427', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7427(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_27s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7428()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7428')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_28s')
                            ->selectRaw("sum(t7428a) as sum_a,sum(t7428b) as sum_b, sum(t7428c) as sum_c, sum(t7428d) as sum_d, sum(t7428e) as sum_e, sum(t7428f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7428 = tabel_74_28::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7428',compact('tabel_7428', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7428(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_28s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7428')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7429()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7429')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_29s')
                            ->selectRaw("sum(t7429a) as sum_a,sum(t7429b) as sum_b, sum(t7429c) as sum_c, sum(t7429d) as sum_d, sum(t7429e) as sum_e, sum(t7429f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7429 = tabel_74_29::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7429',compact('tabel_7429', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7429(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_29s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7429')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7430()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7430')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_30s')
                            ->selectRaw("sum(t7430a) as sum_a,sum(t7430b) as sum_b, sum(t7430c) as sum_c, sum(t7430d) as sum_d, sum(t7430e) as sum_e, sum(t7430f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7430 = tabel_74_30::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7430',compact('tabel_7430', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7430(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_30s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7430')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7431()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7431')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_31s')
                            ->selectRaw("sum(t7431a) as sum_a,sum(t7431b) as sum_b, sum(t7431c) as sum_c, sum(t7431d) as sum_d, sum(t7431e) as sum_e, sum(t7431f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7431 = tabel_74_31::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7431',compact('tabel_7431', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7431(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_31s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7431')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7432()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7432')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_32s')
                            ->selectRaw("sum(t7432a) as sum_a,sum(t7432b) as sum_b, sum(t7432c) as sum_c, sum(t7432d) as sum_d, sum(t7432e) as sum_e, sum(t7432f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7432 = tabel_74_32::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7432',compact('tabel_7432', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7432(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_32s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7432')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7433()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7433')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_33s')
                            ->selectRaw("sum(t7433a) as sum_a,sum(t7433b) as sum_b, sum(t7433c) as sum_c, sum(t7433d) as sum_d, sum(t7433e) as sum_e, sum(t7433f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7433 = tabel_74_33::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7433',compact('tabel_7433', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7433(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_33s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7433')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7434()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7434')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_34s')
                            ->selectRaw("sum(t7434a) as sum_a,sum(t7434b) as sum_b, sum(t7434c) as sum_c, sum(t7434d) as sum_d, sum(t7434e) as sum_e, sum(t7434f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7434 = tabel_74_34::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7434',compact('tabel_7434', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7434(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_34s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7434')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7435()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7435')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_35s')
                            ->selectRaw("sum(t7435a) as sum_a,sum(t7435b) as sum_b, sum(t7435c) as sum_c, sum(t7435d) as sum_d, sum(t7435e) as sum_e, sum(t7435f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7435 = tabel_74_35::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7435',compact('tabel_7435', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7435(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_35s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7435')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7436()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7436')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_36s')
                            ->selectRaw("sum(t7436a) as sum_a,sum(t7436b) as sum_b, sum(t7436c) as sum_c, sum(t7436d) as sum_d, sum(t7436e) as sum_e, sum(t7436f) as sum_f, sum(t7436g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7436 = tabel_74_36::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7436',compact('tabel_7436', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7436(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_36s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7436')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7437()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7437')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_37s')
                            ->selectRaw("sum(t7437a) as sum_a,sum(t7437b) as sum_b, sum(t7437c) as sum_c, sum(t7437d) as sum_d, sum(t7437e) as sum_e, sum(t7437f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7437 = tabel_74_37::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7437',compact('tabel_7437', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7437(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_37s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7437')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7438()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7438')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_38s')
                            ->selectRaw("sum(t7438a) as sum_a,sum(t7438b) as sum_b, sum(t7438c) as sum_c, sum(t7438d) as sum_d, sum(t7438e) as sum_e, sum(t7438f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7438 = tabel_74_38::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7438',compact('tabel_7438', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7438(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_38s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7438')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7439()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7439')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_39s')
                            ->selectRaw("sum(t7439a) as sum_a,sum(t7439b) as sum_b, sum(t7439c) as sum_c, sum(t7439d) as sum_d, sum(t7439e) as sum_e, sum(t7439f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7439 = tabel_74_39::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7439',compact('tabel_7439', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7439(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_39s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7439')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7440()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7440')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_40s')
                            ->selectRaw("sum(t7440a) as sum_a,sum(t7440b) as sum_b, sum(t7440c) as sum_c, sum(t7440d) as sum_d, sum(t7440e) as sum_e, sum(t7440f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7440 = tabel_74_40::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7440',compact('tabel_7440', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7440(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_40s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7440')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7441()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_41s')
                            ->selectRaw("sum(t7441a) as sum_a,sum(t7441b) as sum_b, sum(t7441c) as sum_c, sum(t7441d) as sum_d, sum(t7441e) as sum_e, sum(t7441f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7441 = tabel_74_41::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7441',compact('tabel_7441', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7441(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_41s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7442()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_42s')
                            ->selectRaw("sum(t7442a) as sum_a,sum(t7442b) as sum_b, sum(t7442c) as sum_c, sum(t7442d) as sum_d, sum(t7442e) as sum_e, sum(t7442f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7442 = tabel_74_42::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7442',compact('tabel_7442', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7442(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_42s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7443()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_43s')
                            ->selectRaw("sum(t7443a) as sum_a,sum(t7443b) as sum_b, sum(t7443c) as sum_c, sum(t7443d) as sum_d, sum(t7443e) as sum_e, sum(t7443f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7443 = tabel_74_43::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7443',compact('tabel_7443', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7443(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_43s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7444()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_44s')
                            ->selectRaw("sum(t7444a) as sum_a,sum(t7444b) as sum_b, sum(t7444c) as sum_c, sum(t7444d) as sum_d, sum(t7444e) as sum_e, sum(t7444f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7444 = tabel_74_44::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7444',compact('tabel_7444', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7444(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_44s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7445()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_45s')
                            ->selectRaw("sum(t7445a) as sum_a,sum(t7445b) as sum_b, sum(t7445c) as sum_c, sum(t7445d) as sum_d, sum(t7445e) as sum_e, sum(t7445f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7445 = tabel_74_45::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7445',compact('tabel_7445', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7445(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_45s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7446()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_46s')
                            ->selectRaw("sum(t7446a) as sum_a,sum(t7446b) as sum_b, sum(t7446c) as sum_c, sum(t7446d) as sum_d, sum(t7446e) as sum_e, sum(t7446f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7446 = tabel_74_46::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7446',compact('tabel_7446', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7446(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_46s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7447()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7447')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_47s')
                            ->selectRaw("sum(t7447a) as sum_a,sum(t7447b) as sum_b, sum(t7447c) as sum_c, sum(t7447d) as sum_d, sum(t7447e) as sum_e, sum(t7447f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7447 = tabel_74_47::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7447',compact('tabel_7447', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7447(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_47s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7447')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7448()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7448')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_48s')
                            ->selectRaw("sum(t7448a) as sum_a,sum(t7448b) as sum_b, sum(t7448c) as sum_c, sum(t7448d) as sum_d, sum(t7448e) as sum_e, sum(t7448f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7448 = tabel_74_48::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7448',compact('tabel_7448', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7448(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_48s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7448')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7449()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7449')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_49s')
                            ->selectRaw("sum(t7449a) as sum_a,sum(t7449b) as sum_b, sum(t7449c) as sum_c, sum(t7449d) as sum_d, sum(t7449e) as sum_e, sum(t7449f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7449 = tabel_74_49::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7449',compact('tabel_7449', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7449(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_49s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7449')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7450()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7450')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_50s')
                            ->selectRaw("sum(t7450a) as sum_a,sum(t7450b) as sum_b, sum(t7450c) as sum_c, sum(t7450d) as sum_d, sum(t7450e) as sum_e, sum(t7450f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7450 = tabel_74_50::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7450',compact('tabel_7450', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7450(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_50s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7450')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7451()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_51s')
                            ->selectRaw("sum(t7451a) as sum_a,sum(t7451b) as sum_b, sum(t7451c) as sum_c, sum(t7451d) as sum_d, sum(t7451e) as sum_e, sum(t7451f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7451 = tabel_74_51::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7451',compact('tabel_7451', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7451(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_51s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7452()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7452')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_52s')
                            ->selectRaw("sum(t7452a) as sum_a,sum(t7452b) as sum_b, sum(t7452c) as sum_c, sum(t7452d) as sum_d, sum(t7452e) as sum_e, sum(t7452f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7452 = tabel_74_52::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7452',compact('tabel_7452', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7452(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_52s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7452')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7453()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7453')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_53s')
                            ->selectRaw("sum(t7453a) as sum_a,sum(t7453b) as sum_b, sum(t7453c) as sum_c, sum(t7453d) as sum_d, sum(t7453e) as sum_e, sum(t7453f) as sum_f, sum(t7453g) as sum_g
                            , sum(t7453h) as sum_h, sum(t7453i) as sum_i, (sum(t7453f)/sum(t7453c))*100 as sum_j")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7453 = tabel_74_53::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7453',compact('tabel_7453', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7453(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_53s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7453')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7454()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_54s')
                            ->selectRaw("sum(t7454a) as sum_a,sum(t7454b) as sum_b, sum(t7454c) as sum_c, sum(t7454d) as sum_d, sum(t7454e) as sum_e, sum(t7454f) as sum_f, sum(t7454g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7454 = tabel_74_54::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7454',compact('tabel_7454', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7454(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_54s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7455()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_55s')
                            ->selectRaw("sum(t7455a) as sum_a,sum(t7455b) as sum_b, sum(t7455c) as sum_c, sum(t7455d) as sum_d, sum(t7455e) as sum_e, sum(t7455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7455 = tabel_74_55::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7455',compact('tabel_7455', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7455(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_55s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7456()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7456')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_56s')
                            ->selectRaw("sum(t7456a) as sum_a,sum(t7456b) as sum_b, sum(t7456c) as sum_c, sum(t7456d) as sum_d, sum(t7456e) as sum_e, sum(t7456f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7456 = tabel_74_56::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7456',compact('tabel_7456', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7456(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_56s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7456')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7457()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7457')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_57s')
                            ->selectRaw("sum(t7457a) as sum_a,sum(t7457b) as sum_b, sum(t7457c) as sum_c, sum(t7457d) as sum_d, sum(t7457e) as sum_e, sum(t7457f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7457 = tabel_74_57::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7457',compact('tabel_7457', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7457(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_57s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7457')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7458()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7458')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_58s')
                            ->selectRaw("sum(t7458a) as sum_a,sum(t7458b) as sum_b, sum(t7458c) as sum_c, sum(t7458d) as sum_d, sum(t7458e) as sum_e, sum(t7458f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7458 = tabel_74_58::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7458',compact('tabel_7458', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7458(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_58s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7458')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7459()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7459')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_59s')
                            ->selectRaw("sum(t7459a) as sum_a,sum(t7459b) as sum_b, sum(t7459c) as sum_c, sum(t7459d) as sum_d, sum(t7459e) as sum_e, sum(t7459f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7459 = tabel_74_59::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7459',compact('tabel_7459', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7459(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_59s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7459')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7460()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7460')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_60s')
                            ->selectRaw("sum(t7460a) as sum_a,sum(t7460b) as sum_b, sum(t7460c) as sum_c, sum(t7460d) as sum_d, sum(t7460e) as sum_e, sum(t7460f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7460 = tabel_74_60::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7460',compact('tabel_7460', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7460(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_60s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7460')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7461()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7461')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_61s')
                            ->selectRaw("sum(t7461a) as sum_a,sum(t7461b) as sum_b, sum(t7461c) as sum_c, sum(t7461d) as sum_d, sum(t7461e) as sum_e, sum(t7461f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7461 = tabel_74_61::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7461',compact('tabel_7461', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7461(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_61s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7461')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7462()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7462')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_62s')
                            ->selectRaw("sum(t7462a) as sum_a,sum(t7462b) as sum_b, sum(t7462c) as sum_c, sum(t7462d) as sum_d, sum(t7462e) as sum_e, sum(t7462f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7462 = tabel_74_62::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7462',compact('tabel_7462', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7462(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_62s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7462')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7463()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7463')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_63s')
                            ->selectRaw("sum(t7463a) as sum_a,sum(t7463b) as sum_b, sum(t7463c) as sum_c, sum(t7463d) as sum_d, sum(t7463e) as sum_e, sum(t7463f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7463 = tabel_74_63::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7463',compact('tabel_7463', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7463(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_63s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7463')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7464()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7464')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_64s')
                            ->selectRaw("sum(t7464a) as sum_a,sum(t7464b) as sum_b, sum(t7464c) as sum_c, sum(t7464d) as sum_d, sum(t7464e) as sum_e, sum(t7464f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7464 = tabel_74_64::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7464',compact('tabel_7464', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7464(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_64s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7464')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7465()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7465')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_65s')
                            ->selectRaw("sum(t7465a) as sum_a,sum(t7465b) as sum_b, ( (sum(t7465b)/sum(t7465a))*100 ) as sum_c, sum(t7465d) as sum_d, sum(t7465e) as sum_e, sum(t7465f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7465 = tabel_74_65::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7465',compact('tabel_7465', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7465(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_65s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7465')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7466()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_66s')
                            ->selectRaw("sum(t7466a) as sum_a,sum(t7466b) as sum_b, ( (sum(t7466b)/sum(t7466a))*100 ) as sum_c, sum(t7466d) as sum_d, sum(t7466e) as sum_e, sum(t7466f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7466 = tabel_74_66::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7466',compact('tabel_7466', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7466(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_66s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7467()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7467')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_67s')
                            ->selectRaw("sum(t7467a) as sum_a,sum(t7467b) as sum_b, ( (sum(t7467b)/sum(t7467a))*100 ) as sum_c, sum(t7467d) as sum_d, sum(t7467e) as sum_e, sum(t7467f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7467 = tabel_74_67::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7467',compact('tabel_7467', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7467(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_67s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7467')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7468()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7468')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_68s')
                            ->selectRaw("sum(t7468a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7468 = tabel_74_68::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7468',compact('tabel_7468', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7468(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_68s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7468')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7469()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7469')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_69s')
                            ->selectRaw("sum(t7469a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7469 = tabel_74_69::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7469',compact('tabel_7469', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7469(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_69s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7469')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7470()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7470')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_70s')
                            ->selectRaw("sum(t7470a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7470 = tabel_74_70::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7470',compact('tabel_7470', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7470(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_70s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7470')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7471()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7471')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_71s')
                            ->selectRaw("sum(t7471a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7471 = tabel_74_71::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7471',compact('tabel_7471', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7471(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_71s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7471')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7472()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7472')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_72s')
                            ->selectRaw("sum(t7472a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7472 = tabel_74_72::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7472',compact('tabel_7472', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7472(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_72s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7472')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7473()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7473')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_73s')
                            ->selectRaw("sum(t7473a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7473 = tabel_74_73::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7473',compact('tabel_7473', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7473(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_73s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7473')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7474()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7474')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_74s')
                            ->selectRaw("sum(t7474a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7474 = tabel_74_74::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7474',compact('tabel_7474', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7474(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_74s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7474')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7475()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7475')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_75s')
                            ->selectRaw("sum(t7475a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7475 = tabel_74_75::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7475',compact('tabel_7475', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7475(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_75s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7475')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7476()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7476')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_76s')
                            ->selectRaw("sum(t7476a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7476 = tabel_74_76::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7476',compact('tabel_7476', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7476(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_76s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7476')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7477()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7477')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_77s')
                            ->selectRaw("sum(t7477a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7477 = tabel_74_77::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7477',compact('tabel_7477', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7477(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_77s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7477')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7478()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7478')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_78s')
                            ->selectRaw("sum(t7478a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7478 = tabel_74_78::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7478',compact('tabel_7478', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7478(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_78s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7478')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7479()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7479')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_79s')
                            ->selectRaw("sum(t7479a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7479 = tabel_74_79::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7479',compact('tabel_7479', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7479(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_79s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7479')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7480()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7480')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_80s')
                            ->selectRaw("sum(t7480a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7480 = tabel_74_80::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7480',compact('tabel_7480', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7480(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_80s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7480')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7481()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7481')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_81s')
                            ->selectRaw("sum(t7481a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7481 = tabel_74_81::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7481',compact('tabel_7481', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7481(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_81s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7481')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    public function index7482()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7482')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_82s')
                            ->selectRaw("sum(t7482a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7482 = tabel_74_82::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7482',compact('tabel_7482', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7482(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_82s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7482')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index7483()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7483')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_83s')
                            ->selectRaw("sum(t7483a) as sum_a,sum(t7483b) as sum_b, sum(t7483c) as sum_c, sum(t7483d) as sum_d, sum(t7483e) as sum_e, sum(t7483f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7483 = tabel_74_83::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7483',compact('tabel_7483', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7483(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_83s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7483')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7484()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7484')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_84s')
                            ->selectRaw("sum(t7484a) as sum_a,sum(t7484b) as sum_b, sum(t7484c) as sum_c, sum(t7484d) as sum_d, sum(t7484e) as sum_e, sum(t7484f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7484 = tabel_74_84::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7484',compact('tabel_7484', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7484(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_84s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7484')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7485()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7485')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_85s')
                            ->selectRaw("sum(t7485a) as sum_a,sum(t7485b) as sum_b, sum(t7485c) as sum_c, sum(t7485d) as sum_d, sum(t7485e) as sum_e, sum(t7485f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7485 = tabel_74_85::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7485',compact('tabel_7485', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7485(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_85s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7485')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7486()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7486')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_86s')
                            ->selectRaw("sum(t7486a) as sum_a,sum(t7486b) as sum_b, sum(t7486c) as sum_c, sum(t7486d) as sum_d, sum(t7486e) as sum_e, sum(t7486f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7486 = tabel_74_86::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7486',compact('tabel_7486', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7486(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_86s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7486')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7487()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7487')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_87s')
                            ->selectRaw("sum(t7487a) as sum_a,sum(t7487b) as sum_b, sum(t7487c) as sum_c, sum(t7487d) as sum_d, sum(t7487e) as sum_e, sum(t7487f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7487 = tabel_74_87::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7487',compact('tabel_7487', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7487(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_87s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7487')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7488()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7488')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_88s')
                            ->selectRaw("sum(t7488a) as sum_a,sum(t7488b) as sum_b, sum(t7488c) as sum_c, sum(t7488d) as sum_d, sum(t7488e) as sum_e, sum(t7488f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7488 = tabel_74_88::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7488',compact('tabel_7488', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7488(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_88s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7488')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7489()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7489')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_89s')
                            ->selectRaw("sum(t7489a) as sum_a,sum(t7489b) as sum_b, sum(t7489c) as sum_c, sum(t7489d) as sum_d, sum(t7489e) as sum_e, sum(t7489f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7489 = tabel_74_89::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7489',compact('tabel_7489', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7489(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_89s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7489')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7490()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7490')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_90s')
                            ->selectRaw("sum(t7490a) as sum_a,sum(t7490b) as sum_b, sum(t7490c) as sum_c, sum(t7490d) as sum_d, sum(t7490e) as sum_e, sum(t7490f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7490 = tabel_74_90::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7490',compact('tabel_7490', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7490(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_90s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7490')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7491()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7491')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_91s')
                            ->selectRaw("sum(t7491a) as sum_a,sum(t7491b) as sum_b, sum(t7491c) as sum_c, sum(t7491d) as sum_d, sum(t7491e) as sum_e, sum(t7491f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7491 = tabel_74_91::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7491',compact('tabel_7491', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7491(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_91s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7491')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7492()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7492')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_92s')
                            ->selectRaw("sum(t7492a) as sum_a,sum(t7492b) as sum_b, sum(t7492c) as sum_c, sum(t7492d) as sum_d, sum(t7492e) as sum_e, sum(t7492f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7492 = tabel_74_92::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7492',compact('tabel_7492', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7492(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_92s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7492')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7493()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7493')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_93s')
                            ->selectRaw("sum(t7493a) as sum_a,sum(t7493b) as sum_b, sum(t7493c) as sum_c, sum(t7493d) as sum_d, sum(t7493e) as sum_e, sum(t7493f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7493 = tabel_74_93::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7493',compact('tabel_7493', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7493(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_93s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7493')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7494()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7494')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_94s')
                            ->selectRaw("sum(t7494a) as sum_a,sum(t7494b) as sum_b, sum(t7494c) as sum_c, sum(t7494d) as sum_d, sum(t7494e) as sum_e, sum(t7494f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7494 = tabel_74_94::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7494',compact('tabel_7494', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7494(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_94s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7494')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7495()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7495')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_95s')
                            ->selectRaw("sum(t7495a) as sum_a,sum(t7495b) as sum_b, sum(t7495c) as sum_c, sum(t7495d) as sum_d, sum(t7495e) as sum_e, sum(t7495f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7495 = tabel_74_95::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7495',compact('tabel_7495', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7495(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_95s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7495')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7496()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7496')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_96s')
                            ->selectRaw("sum(t7496a) as sum_a,sum(t7496b) as sum_b, sum(t7496c) as sum_c, sum(t7496d) as sum_d, sum(t7496e) as sum_e, sum(t7496f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7496 = tabel_74_96::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7496',compact('tabel_7496', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7496(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_96s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7496')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7497()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7497')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_97s')
                            ->selectRaw("sum(t7497a) as sum_a,sum(t7497b) as sum_b, sum(t7497c) as sum_c, sum(t7497d) as sum_d, sum(t7497e) as sum_e, sum(t7497f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7497 = tabel_74_97::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7497',compact('tabel_7497', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7497(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_97s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7497')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index7498()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7498')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_98s')
                            ->selectRaw("sum(t7498a) as sum_a,sum(t7498b) as sum_b, sum(t7498c) as sum_c, sum(t7498d) as sum_d, sum(t7498e) as sum_e, sum(t7498f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7498 = tabel_74_98::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7498',compact('tabel_7498', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7498(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_98s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7498')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index7499()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_7499')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_99s')
                            ->selectRaw("sum(t7499a) as sum_a,sum(t7499b) as sum_b, sum(t7499c) as sum_c, sum(t7499d) as sum_d, sum(t7499e) as sum_e, sum(t7499f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_7499 = tabel_74_99::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.7499',compact('tabel_7499', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store7499(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_99s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_7499')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index74100()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74100')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_100s')
                            ->selectRaw("sum(t74100a) as sum_a,sum(t74100b) as sum_b, sum(t74100c) as sum_c, sum(t74100d) as sum_d, sum(t74100e) as sum_e, sum(t74100f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74100 = tabel_74_100::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74100',compact('tabel_74100', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74100(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_100s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74100')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74100')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74100')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
     public function index74101()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74101')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_101s')
                            ->selectRaw("sum(t74101a) as sum_a,sum(t74101b) as sum_b, sum(t74101c) as sum_c, sum(t74101d) as sum_d, sum(t74101e) as sum_e, sum(t74101f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74101 = tabel_74_101::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74101',compact('tabel_74101', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74101(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_101s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74101')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74101')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74101')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74102()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74102')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_102s')
                            ->selectRaw("sum(t74102a) as sum_a,sum(t74102b) as sum_b, sum(t74102c) as sum_c, sum(t74102d) as sum_d, sum(t74102e) as sum_e, sum(t74102f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74102 = tabel_74_102::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74102',compact('tabel_74102', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74102(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_102s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74102')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74102')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74102')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74103()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_103s')
                            ->selectRaw("sum(t74103a) as sum_a,sum(t74103b) as sum_b, sum(t74103c) as sum_c, sum(t74103d) as sum_d, sum(t74103e) as sum_e, sum(t74103f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74103 = tabel_74_103::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74103',compact('tabel_74103', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74103(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_103s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74104()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_104s')
                            ->selectRaw("sum(t74104a) as sum_a,sum(t74104b) as sum_b, sum(t74104c) as sum_c, sum(t74104d) as sum_d, sum(t74104e) as sum_e, sum(t74104f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74104 = tabel_74_104::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74104',compact('tabel_74104', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74104(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_104s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74105()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_105s')
                            ->selectRaw("sum(t74105a) as sum_a,sum(t74105b) as sum_b, sum(t74105c) as sum_c, sum(t74105d) as sum_d, sum(t74105e) as sum_e, sum(t74105f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74105 = tabel_74_105::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74105',compact('tabel_74105', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74105(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_105s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74106()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_106s')
                            ->selectRaw("sum(t74106a) as sum_a,sum(t74106b) as sum_b, sum(t74106c) as sum_c, sum(t74106d) as sum_d, sum(t74106e) as sum_e, sum(t74106f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74106 = tabel_74_106::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74106',compact('tabel_74106', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74106(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_106s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74107()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_107s')
                            ->selectRaw("sum(t74107a) as sum_a,sum(t74107b) as sum_b, sum(t74107c) as sum_c, sum(t74107d) as sum_d, sum(t74107e) as sum_e, sum(t74107f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74107 = tabel_74_107::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74107',compact('tabel_74107', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74107(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_107s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
     public function index74108()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74108')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_108s')
                            ->selectRaw("sum(t74108a) as sum_a,sum(t74108b) as sum_b, ((sum(t74108a)/sum(t74108b) )*100 ) as sum_c, sum(t74108d) as sum_d, sum(t74108e) as sum_e, sum(t74108f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74108 = tabel_74_108::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74108',compact('tabel_74108', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74108(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_108s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74108')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74108')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74108')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74109()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74109')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_109s')
                            ->selectRaw("sum(t74109a) as sum_a,sum(t74109b) as sum_b, sum(t74109c) as sum_c, sum(t74109d) as sum_d, sum(t74109e) as sum_e, sum(t74109f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74109 = tabel_74_109::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74109',compact('tabel_74109', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74109(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_109s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74109')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74109')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74109')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74110()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74110')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_110s')
                            ->selectRaw("sum(t74110a) as sum_a,sum(t74110b) as sum_b, sum(t74110c) as sum_c, sum(t74110d) as sum_d, sum(t74110e) as sum_e, sum(t74110f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74110 = tabel_74_110::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74110',compact('tabel_74110', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74110(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_110s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74110')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74110')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74110')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74111()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74111')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_111s')
                            ->selectRaw("sum(t74111a) as sum_a,sum(t74111b) as sum_b, sum(t74111c) as sum_c, sum(t74111d) as sum_d, sum(t74111e) as sum_e, sum(t74111f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74111 = tabel_74_111::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74111',compact('tabel_74111', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74111(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_111s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74111')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74111')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74111')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
     public function index74112()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74112')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_112s')
                            ->selectRaw("sum(t74112a) as sum_a,sum(t74112b) as sum_b, ((sum(t74112a)/sum(t74112b) )*100 ) as sum_c, sum(t74112d) as sum_d, sum(t74112e) as sum_e, sum(t74112f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74112 = tabel_74_112::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74112',compact('tabel_74112', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74112(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_112s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_74112')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_74112')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_74112')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
     public function index74113()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74113')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_113s')
                            ->selectRaw("sum(t74113a) as sum_a,sum(t74113b) as sum_b, ((sum(t74113a)/sum(t74113b) )*100 ) as sum_c, sum(t74113d) as sum_d, sum(t74113e) as sum_e, sum(t74113f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74113 = tabel_74_113::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74113',compact('tabel_74113', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74113(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_113s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74113')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index74114()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74114')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_114s')
                            ->selectRaw("sum(t74114a) as sum_a,sum(t74114b) as sum_b, sum(t74114c) as sum_c, sum(t74114d) as sum_d, sum(t74114e) as sum_e, sum(t74114f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74114 = tabel_74_114::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74114',compact('tabel_74114', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74114(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_114s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74114')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index74115()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74115')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_115s')
                            ->selectRaw("sum(t74115a) as sum_a,sum(t74115b) as sum_b, sum(t74115c) as sum_c, sum(t74115d) as sum_d, sum(t74115e) as sum_e, sum(t74115f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74115 = tabel_74_115::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74115',compact('tabel_74115', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74115(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_115s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74115')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
     public function index74116()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74116')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_116s')
                            ->selectRaw("sum(t74116a) as sum_a,sum(t74116b) as sum_b, sum(t74116c) as sum_c, sum(t74116d) as sum_d, sum(t74116e) as sum_e, sum(t74116f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74116 = tabel_74_116::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74116',compact('tabel_74116', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74116(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_116s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74116')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index74117()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74117')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_117s')
                            ->selectRaw("sum(t74117a) as sum_a,sum(t74117b) as sum_b, sum(t74117c) as sum_c, sum(t74117d) as sum_d, sum(t74117e) as sum_e, sum(t74117f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74117 = tabel_74_117::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74117',compact('tabel_74117', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74117(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_117s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74117')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index74118()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74118')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_118s')
                            ->selectRaw("sum(t74118a) as sum_a,sum(t74118b) as sum_b, sum(t74118c) as sum_c, sum(t74118d) as sum_d, sum(t74118e) as sum_e, sum(t74118f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74118 = tabel_74_118::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74118',compact('tabel_74118', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74118(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_118s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74118')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
     public function index74119()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74119')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_119s')
                            ->selectRaw("sum(t74119a) as sum_a,sum(t74119b) as sum_b, sum(t74119c) as sum_c, sum(t74119d) as sum_d, sum(t74119e) as sum_e, sum(t74119f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74119 = tabel_74_119::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74119',compact('tabel_74119', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74119(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_119s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74119')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
      public function index74120()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74120')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_120s')
                            ->selectRaw("sum(t74120a) as sum_a,sum(t74120b) as sum_b, sum(t74120c) as sum_c, sum(t74120d) as sum_d, sum(t74120e) as sum_e, sum(t74120f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74120 = tabel_74_120::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74120',compact('tabel_74120', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74120(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_120s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74120')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
      public function index74121()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_121s')
                            ->selectRaw("sum(t74121a) as sum_a,sum(t74121b) as sum_b, sum(t74121c) as sum_c, sum(t74121d) as sum_d, sum(t74121e) as sum_e, sum(t74121f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74121 = tabel_74_121::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74121',compact('tabel_74121', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74121(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_121s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
      public function index74122()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_122s')
                            ->selectRaw("sum(t74122a) as sum_a,sum(t74122b) as sum_b, sum(t74122c) as sum_c, sum(t74122d) as sum_d, sum(t74122e) as sum_e, sum(t74122f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74122 = tabel_74_122::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74122',compact('tabel_74122', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74122(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_122s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
      public function index74123()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_74123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_123s')
                            ->selectRaw("sum(t74123a) as sum_a,sum(t74123b) as sum_b, sum(t74123c) as sum_c, sum(t74123d) as sum_d, sum(t74123e) as sum_e, sum(t74123f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_74123 = tabel_74_123::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.74123',compact('tabel_74123', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store74123(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_123s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_74123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }
    
    
    public function index744()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_744')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_74_4s')
                            ->selectRaw("sum(t744a) as sum_a,sum(t744b) as sum_b, sum(t744c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
                      
              
            $tabel_744 = tabel_74_4::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.744',compact('tabel_744', 'year','kab','sum_lk','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store744(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_74_4s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            DB::table('master_tabels')
            ->where('judul', 'tabel_744')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
    }

    public function index923()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_923')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_923s')
                            ->selectRaw("sum(t923a) as sum_a,sum(t923b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_923s')
                            ->selectRaw("sum(t923a) as sum_a,sum(t923b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_923::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_923 = tabel_923::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.923',compact('tabel_923', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store923(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_923s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_923')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_923')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_923')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index232()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_232')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_232s')
                            
                            ->selectRaw("sum(t232_lk) as sum_lk, sum(t232_pr) as sum_pr, sum(t232_lk + t232_pr) as sum_lkpr")->whereNotIn('id', [3,11,19,27,35,43,51,59,67,75,83,91,99,107,115,123,131,139,147,155,163,171,179,187,195,203,211,219,227,235,243,251,259,267,275,283
])
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_232s')
                            
                            ->selectRaw("sum(t232_lk) as sum_lk, sum(t232_pr) as sum_pr, sum(t232_lk + t232_pr) as sum_lkpr")->whereNotIn('id', [3,11,19,27,35,43,51,59,67,75,83,91,99,107,115,123,131,139,147,155,163,171,179,187,195,203,211,219,227,235,243,251,259,267,275,283
])
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_232::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_232 = tabel_232::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_232',compact('tabel_232', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store232(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_232s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_232')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_232')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_232')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index233()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_233')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
             $tes = tabel_233::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_233 = tabel_233::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_233',compact('tabel_233', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store233(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_233s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_233')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_233')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_233')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
    public function index234()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_234')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_234s')
                            
                            ->selectRaw("sum(t234_lk) as sum_lk, sum(t234_pr) as sum_pr, sum(t234_lk + t234_pr) as sum_lkpr")->whereNotIn('id', [5,10,15,21,26,31,36,42,47,52,57,63,68,73,78,84,89,94,99,105,110,115,120,126,131,136,141,147,152,157,162,168,173,178,183,189,194,199,204,210,215,220,225,231,236,241,246,252,257,262,267,273,278,283,288,294,299,304,309,315,320,325,330,336,341,346,351,357,362,367,372,378,383,388,393,399,404,409,414,420,425,430,435,441,446,451,456,462,467,472,477,483,488,493,498,504,509,514,519,525,530,535,540,546,551,556,561,567,572,577,582,588,593,598,603,609,614,619,624,630,635,640,645,651,656,661,666,672,677,682,687,693,698,703,708,714,719,724,729,735,740,745,750,756
])
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_234s')
                            
                            ->selectRaw("sum(t234_lk) as sum_lk, sum(t234_pr) as sum_pr, sum(t234_lk + t234_pr) as sum_lkpr")->whereNotIn('id', [5,10,15,21,26,31,36,42,47,52,57,63,68,73,78,84,89,94,99,105,110,115,120,126,131,136,141,147,152,157,162,168,173,178,183,189,194,199,204,210,215,220,225,231,236,241,246,252,257,262,267,273,278,283,288,294,299,304,309,315,320,325,330,336,341,346,351,357,362,367,372,378,383,388,393,399,404,409,414,420,425,430,435,441,446,451,456,462,467,472,477,483,488,493,498,504,509,514,519,525,530,535,540,546,551,556,561,567,572,577,582,588,593,598,603,609,614,619,624,630,635,640,645,651,656,661,666,672,677,682,687,693,698,703,708,714,719,724,729,735,740,745,750,756
])
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();               
            $tes = tabel_234::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_234 = tabel_234::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_234',compact('tabel_234', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store234(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_234s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_234')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_234')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_234')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index235()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_235')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_235s')
                            
                            ->selectRaw("sum(t235_lk) as sum_lk, sum(t235_pr) as sum_pr, sum(t235_lk + t235_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_235s')
                            
                            ->selectRaw("sum(t235_lk) as sum_lk, sum(t235_pr) as sum_pr, sum(t235_lk + t235_pr) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_235::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_235 = tabel_235::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_235',compact('tabel_235', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store235(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_235s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_235')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_235')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_235')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index3217()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_3217')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
                    $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
         $sum_lalu = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
             $tes = tabel_3217::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_3217',compact('tabel_3217', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding3217()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_3217')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
                    $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
         $sum_lalu = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as t3217a_lk, sum(t3217a_pr) as t3217a_pr, sum(t3217a_lk + t3217a_pr) as t3217a,
                            sum(t3217b_lk) as t3217b_lk, sum(t3217b_pr) as t3217b_pr, sum(t3217b_lk + t3217b_pr) as t3217b,
                           sum(t3217c_lk) as t3217c_lk, sum(t3217c_pr) as t3217c_pr, sum(t3217c_lk + t3217c_pr) as t3217c ")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get(); 
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t3217a_lk as t3217a_lk_k, t1.t3217a_pr as t3217a_pr_k, t1.t3217a as t3217a_k,
                                                t1.t3217b_lk as t3217b_lk_k, t1.t3217b_pr as t3217b_pr_k, t1.t3217b as t3217b_k,
                                                t1.t3217c_lk as t3217c_lk_k, t1.t3217c_pr as t3217c_pr_k, t1.t3217c as t3217c_k,
                                        t2.t3217a_lk, t2.t3217a_pr, t2.t3217a,t2.t3217b_lk, t2.t3217b_pr, t2.t3217b,t2.t3217c_lk, t2.t3217c_pr, t2.t3217c
                                        FROM 
                                            (SELECT idkab,idkec, sum(t3217a_lk) as t3217a_lk, sum(t3217a_pr) as t3217a_pr, sum(t3217a) as t3217a,
                            sum(t3217b_lk) as t3217b_lk, sum(t3217b_pr) as t3217b_pr, sum(t3217b_lk + t3217b_pr) as t3217b,
                           sum(t3217c_lk) as t3217c_lk, sum(t3217c_pr) as t3217c_pr, sum(t3217c_lk + t3217c_pr) as t3217c FROM tabel_3217s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_3217s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                
                            
                            
             $tes = tabel_3217::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_3217',compact('tabel_3217', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    
    public function store3217(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_3217s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_3217')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_3217')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_3217')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
      public function index3218()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_3218')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_3218s')
                            
                            ->selectRaw("sum(t3218_lk) as sum_lk, sum(t3218_pr) as sum_pr, sum(t3218_lk + t3218_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_3218s')
                            
                            ->selectRaw("sum(t3218_lk) as sum_lk, sum(t3218_pr) as sum_pr, sum(t3218_lk + t3218_pr) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_3218::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                     
            $tabel_3218 = tabel_3218::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_3218',compact('tabel_3218', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store3218(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_3218s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_3218')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_3218')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_3218')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index423()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_423::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_423',compact('tabel_423', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding423()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();  
                            
            $banding = DB::table('tabel_423s')
                            ->selectRaw("idkab,sum(t423a) as t423a, sum(t423b) as t423b, sum(t423c) as t423c,sum(t423d) as t423d,
                            sum(t423e) as t423e,sum(t423f) as t423f,sum(t423g) as t423g,sum(t423h) as t423h,sum(t423i) as t423i")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t423a as t423a_k, t1.t423b as t423b_k, t1.t423c as t423c_k,t1.t423d as t423d_k, t1.t423e as t423e_k,t1.t423f as t423f_k,t1.t423g as t423g_k,t1.t423h as t423h_k,t1.t423i as t423i_k 
                                        ,t2.t423a, t2.t423b, t2.t423c, t2.t423d, t2.t423e, t2.t423f, t2.t423g, t2.t423h, t2.t423i
                                        FROM 
                                            (SELECT idkab,idkec, sum(t423a) as t423a, sum(t423b) as t423b, sum(t423c) as t423c, sum(t423d) as t423d, sum(t423e) as t423e
                            , sum(t423f) as t423f, sum(t423g) as t423g, sum(t423h) as t423h, sum(t423i) as t423i FROM tabel_423s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_423s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                            
            
                            
            $tes = tabel_423::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_423',compact('tabel_423', 'year','kab','sum_lk','tes','sum_lalu','catatan', 'banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store423(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_423s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_423')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index425()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_425::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_425 = tabel_425::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_425',compact('tabel_425', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding425()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();     
            
            $banding = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as t425a, sum(t425b) as t425b, sum(t425c) as t425c,sum(t425d) as t425d,
                            sum(t425e) as t425e,sum(t425f) as t425f")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t425a as t425a_k, t1.t425b as t425b_k, t1.t425c as t425c_k,t1.t425d as t425d_k, t1.t425e as t425e_k,t1.t425f as t425f_k
                                        ,t2.t425a, t2.t425b, t2.t425c, t2.t425d, t2.t425e, t2.t425f
                                        FROM 
                                            (SELECT idkab,idkec, sum(t425a) as t425a, sum(t425b) as t425b, sum(t425c) as t425c, sum(t425d) as t425d, sum(t425e) as t425e
                            , sum(t425f) as t425f FROM tabel_425s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_425s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
            
                            
                            
            $tes = tabel_425::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_425 = tabel_425::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_425',compact('tabel_425', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store425(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_425s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_425')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index426()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,sum(t426d_2) as sum_d_2,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_426::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                  
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_426',compact('tabel_426', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding426()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as t426a, sum(t426b) as t426b, sum(t426c) as t426c,sum(t426d) as t426d,
                            sum(t426e) as t426e,sum(t426f) as t426f,sum(t426g) as t426g")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t426a as t426a_k, t1.t426b as t426b_k, t1.t426c as t426c_k,t1.t426d as t426d_k, t1.t426e as t426e_k,t1.t426f as t426f_k,t1.t426g as t426g_k 
                                        ,t2.t426a, t2.t426b, t2.t426c, t2.t426d, t2.t426e, t2.t426f, t2.t426g
                                        FROM 
                                            (SELECT idkab,idkec, sum(t426a) as t426a, sum(t426b) as t426b, sum(t426c) as t426c, sum(t426d) as t426d, sum(t426e) as t426e
                            , sum(t426f) as t426f, sum(t426g) as t426g FROM tabel_426s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_426s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                
                            
            $tes = tabel_426::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                  
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_426',compact('tabel_426', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store426(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_426s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_426')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
    
    
     public function index427()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_427::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_427 = tabel_427::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_427',compact('tabel_427', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding427()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as sum_a, sum(t427b) as sum_b, sum(t427c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get(); 
                            
            $banding = DB::table('tabel_427s')
                            ->selectRaw("sum(t427a) as t427a, sum(t427b) as t427b, sum(t427c) as t427c")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t427a as t427a_k, t1.t427b as t427b_k, t1.t427c as t427c_k
                                        ,t2.t427a, t2.t427b, t2.t427c
                                        FROM 
                                            (SELECT idkab,idkec, sum(t427a) as t427a, sum(t427b) as t427b, sum(t427c) as t427c FROM tabel_427s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_427s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                                
                            
            $tes = tabel_427::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_427 = tabel_427::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_427',compact('tabel_427', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store427(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_427s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_427')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index4211()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4211')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_4211s')
                            ->selectRaw("sum(t4211a) as sum_a, sum(t4211b) as sum_b, sum(t4211c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_4211s')
                            ->selectRaw("sum(t4211a) as sum_a, sum(t4211b) as sum_b, sum(t4211c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_4211::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_4211 = tabel_4211::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_4211',compact('tabel_4211', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store4211(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_4211s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_4211')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_4211')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_4211')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index4213()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4213')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
        
            $tabel_4213 = tabel_4213::where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_4213',compact('tabel_4213', 'year','kab','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store4213(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_4213s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_4213')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_4213')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_4213')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
    public function index441()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_441s')
                            ->selectRaw("sum(t441a) as sum_a, sum(t441b) as sum_b, sum(t441c) as sum_c, sum(t441d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_441s')
                            ->selectRaw("sum(t441a) as sum_a, sum(t441b) as sum_b, sum(t441c) as sum_c, sum(t441d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_441::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_441 = tabel_441::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_441',compact('tabel_441', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store441(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_441s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_441')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index531()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_531')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_531::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.531',compact('tabel_531', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding531()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_531')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as t531a, sum(t531b) as t531b, sum(t531c) as t531c, sum(t531d) as t531d
                            ,sum(t531e) as t531e, sum(t531f) as t531f, sum(t531g) as t531g, sum(t531h) as t531h
                            , sum(t531i) as t531i, sum(t531j) as t531j, sum(t531k) as t531k, sum(t531l) as t531l, sum(t531m) as t531m")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t531a as t531a_k, t1.t531b as t531b_k, t1.t531c as t531c_k,t1.t531d as t531d_k, t1.t531e as t531e_k,t1.t531f as t531f_k,t1.t531g as t531g_k,t1.t531h as t531h_k,t1.t531i as t531i_k,t1.t531j as t531j_k,t1.t531k as t531k_k,t1.t531l as t531l_k,t1.t531m as t531m_k 
                                        ,t2.t531a, t2.t531b, t2.t531c, t2.t531d, t2.t531e, t2.t531f, t2.t531g, t2.t531h, t2.t531i, t2.t531j, t2.t531k, t2.t531l, t2.t531m
                                        FROM 
                                            (SELECT idkab,idkec, sum(t531a) as t531a, sum(t531b) as t531b, sum(t531c) as t531c, sum(t531d) as t531d, sum(t531e) as t531e
                            , sum(t531f) as t531f, sum(t531g) as t531g, sum(t531h) as t531h, sum(t531i) as t531i, sum(t531j) as t531j, sum(t531k) as t531k, sum(t531l) as t531l, sum(t531m) as t531m FROM tabel_531s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_531s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));
                            
                            
            $tes = tabel_531::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_531',compact('tabel_531', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store531(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_531s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
              if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_531')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_531')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_531')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
        public function index532()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_532')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_532::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.532',compact('tabel_532', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
        public function banding532()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_532')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get(); 
            $banding = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as t532a, sum(t532b) as t532b, sum(t532c) as t532c, sum(t532d) as t532d
                            ,sum(t532e) as t532e, sum(t532f) as t532f, sum(t532g) as t532g, sum(t532h) as t532h
                            , sum(t532i) as t532i, sum(t532j) as t532j, sum(t532k) as t532k, sum(t532l) as t532l, sum(t532m) as t532m")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t532a as t532a_k, t1.t532b as t532b_k, t1.t532c as t532c_k,t1.t532d as t532d_k, t1.t532e as t532e_k,t1.t532f as t532f_k,t1.t532g as t532g_k,t1.t532h as t532h_k,t1.t532i as t532i_k,t1.t532j as t532j_k,t1.t532k as t532k_k,t1.t532l as t532l_k,t1.t532m as t532m_k 
                                        ,t2.t532a, t2.t532b, t2.t532c, t2.t532d, t2.t532e, t2.t532f, t2.t532g, t2.t532h, t2.t532i, t2.t532j, t2.t532k, t2.t532l, t2.t532m
                                        FROM 
                                            (SELECT idkab,idkec, sum(t532a) as t532a, sum(t532b) as t532b, sum(t532c) as t532c, sum(t532d) as t532d, sum(t532e) as t532e
                            , sum(t532f) as t532f, sum(t532g) as t532g, sum(t532h) as t532h, sum(t532i) as t532i, sum(t532j) as t532j, sum(t532k) as t532k, sum(t532l) as t532l, sum(t532m) as t532m FROM tabel_532s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_532s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));
                            
                            
            $tes = tabel_532::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_532',compact('tabel_532', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function store532(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_532s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_532')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_532')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_532')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index551()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_551')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_551::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.551',compact('tabel_551', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding551()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_551')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
                            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_551s')
                            ->selectRaw("sum(t551a) as t551a, sum(t551b) as t551b, sum(t551c) as t551c, sum(t551d) as t551d
                            ,sum(t551e) as t551e, sum(t551f) as t551f, sum(t551g) as t551g")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t551a as t551a_k, t1.t551b as t551b_k, t1.t551c as t551c_k,t1.t551d as t551d_k, t1.t551e as t551e_k,t1.t551f as t551f_k,t1.t551g as t551g_k
                                        ,t2.t551a, t2.t551b, t2.t551c, t2.t551d, t2.t551e, t2.t551f, t2.t551g
                                        FROM 
                                            (SELECT idkab,idkec, sum(t551a) as t551a, sum(t551b) as t551b, sum(t551c) as t551c, sum(t551d) as t551d, sum(t551e) as t551e
                            , sum(t551f) as t551f, sum(t551g) as t551g FROM tabel_551s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_551s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                            
                            
            $tes = tabel_551::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_551',compact('tabel_551', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store551(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_551s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_551')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_551')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_551')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
      public function index552()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_552')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_552::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_552 = tabel_552::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.552',compact('tabel_552', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
      public function banding552()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_552')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();  
                            
            $banding = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as t552a, sum(t552b) as t552b, sum(t552c) as t552c, sum(t552d) as t552d")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
             $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t552a as t552a_k, t1.t552b as t552b_k, t1.t552c as t552c_k,t1.t552d as t552d_k
                                        FROM 
                                            (SELECT idkab,idkec, sum(t552a) as t552a, sum(t552b) as t552b, sum(t552c) as t552c, sum(t552d) as t552d FROM tabel_552s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_552s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                           
                            
            $tes = tabel_552::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_552 = tabel_552::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_552',compact('tabel_552', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store552(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_552s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_552')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_552')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_552')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index553()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_553')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_553::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.553',compact('tabel_553', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function banding553()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_553')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();      
                            
            $banding = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as t553a, sum(t553b) as t553b, sum(t553c) as t553c, sum(t553d) as t553d
                            ,sum(t553e) as t553e, sum(t553f) as t553f, sum(t553g) as t553g")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t553a as t553a_k, t1.t553b as t553b_k, t1.t553c as t553c_k,t1.t553d as t553d_k, t1.t553e as t553e_k,t1.t553f as t553f_k,t1.t553g as t553g_k
                                        ,t2.t553a, t2.t553b, t2.t553c, t2.t553d, t2.t553e, t2.t553f, t2.t553g
                                        FROM 
                                            (SELECT idkab,idkec, sum(t553a) as t553a, sum(t553b) as t553b, sum(t553c) as t553c, sum(t553d) as t553d, sum(t553e) as t553e
                            , sum(t553f) as t553f, sum(t553g) as t553g FROM tabel_553s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_553s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                    
                            
            $tes = tabel_553::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_553',compact('tabel_553', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store553(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_553s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_553')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_553')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_553')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
      public function index554()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_554')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_554::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_554 = tabel_554::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.554',compact('tabel_554', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
      public function banding554()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_554')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get(); 
                            
            $banding = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as t554a, sum(t554b) as t554b, sum(t554c) as t554c, sum(t554d) as t554d")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t554a as t554a_k, t1.t554b as t554b_k, t1.t554c as t554c_k,t1.t554d as t554d_k
            ,t2.t554a, t2.t554b, t2.t554c, t2.t554d
                                        FROM 
                                            (SELECT idkab,idkec, sum(t554a) as t554a, sum(t554b) as t554b, sum(t554c) as t554c, sum(t554d) as t554d FROM tabel_554s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_554s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                            
            $tes = tabel_554::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_554 = tabel_554::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_554',compact('tabel_554', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store554(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_554s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_554')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_554')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_554')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index555()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_555')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_555::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_555 = tabel_555::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.555',compact('tabel_555', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function banding555()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_555')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();  
                            
            $banding = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as t555a, sum(t555b) as t555b, sum(t555c) as t555c, sum(t555d) as t555d")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t555a as t555a_k, t1.t555b as t555b_k, t1.t555c as t555c_k,t1.t555d as t555d_k
            ,t2.t555a, t2.t555b, t2.t555c, t2.t555d
                                        FROM 
                                            (SELECT idkab,idkec, sum(t555a) as t555a, sum(t555b) as t555b, sum(t555c) as t555c, sum(t555d) as t555d FROM tabel_555s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_555s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                            
            $tes = tabel_555::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_555 = tabel_555::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_555',compact('tabel_555', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store555(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_555s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
              if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_555')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_555')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_555')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index121()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tes = tabel_121::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $tabel_121 = tabel_121::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
            
             return view('dda.tabel_121',compact('tabel_121', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store121(Request $request)
    {   
           $year= Session::get('key');
         
      
        
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_121s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
             
     
    }
    
    
    public function index122()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tes = tabel_122::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $tabel_122 = tabel_122::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_122',compact('tabel_122', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store122(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_122s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_122')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
             
             
    }
    
     public function index123()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $tes = tabel_123::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tabel_123 = tabel_123::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_123',compact('tabel_123', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store123(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_123s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_123')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index124()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $tes = tabel_124::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_124')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tabel_124 = tabel_124::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.124',compact('tabel_124', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store124(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_124s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_124')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_124')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_124')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index125()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $tes = tabel_125::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_125')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tabel_125 = tabel_125::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.125',compact('tabel_125', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store125(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_125s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_125')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_125')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_125')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index126()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $tes = tabel_126::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_126')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tabel_126 = tabel_126::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.126',compact('tabel_126', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store126(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_126s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_126')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_126')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_126')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index221()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_221')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_221s')
                            
                            ->selectRaw("sum(t221a) as sum_lk, sum(t221b) as sum_pr, sum(t221a + t221b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_221s')
                            
                            ->selectRaw("sum(t221a) as sum_lk, sum(t221b) as sum_pr, sum(t221a + t221b) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
                            
            $tes = tabel_221::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            
            $tabel_221 = tabel_221::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_221',compact('tabel_221', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store221(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_221s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_221')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_221')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_221')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index222()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_222')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_222s')
                            
                            ->selectRaw("sum(t222a) as sum_lk, sum(t222b) as sum_pr, sum(t222a + t222b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_222s')
                            
                            ->selectRaw("sum(t222a) as sum_lk, sum(t222b) as sum_pr, sum(t222a + t222b) as sum_lkpr")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
                            
            $tes = tabel_222::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get(); 
                            
            $tabel_222 = tabel_222::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_222',compact('tabel_222', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store222(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_222s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_222')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_222')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_222')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index223()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_223')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_223s')
                            
                            ->selectRaw("sum(t223a) as sum_lk")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_223s')
                            
                            ->selectRaw("sum(t223a) as sum_lk")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
                            
            $tes = tabel_223::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
                            
            $tabel_223 = tabel_223::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_223',compact('tabel_223', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store223(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_223s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_223')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_223')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_223')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index224()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_224')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lalu = DB::table('tabel_224s')
                            
                            ->selectRaw("sum(t224a) as sum_lk")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
                            
            $tes = tabel_224::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
                            
            $tabel_224 = tabel_224::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_224',compact('tabel_224', 'year','kab','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store224(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_224s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_224')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_224')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_224')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index225()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_225')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_225s')
                            
                            ->selectRaw("sum(t225a) as sum_a,sum(t225b) as sum_b,sum(t225c) as sum_c,sum(t225d) as sum_d,
                            sum(t225e) as sum_e,sum(t225f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            
            $sum_lalu = DB::table('tabel_225s')
                            
                            ->selectRaw("sum(t225a) as sum_a,sum(t225b) as sum_b,sum(t225c) as sum_c,sum(t225d) as sum_d,
                            sum(t225e) as sum_e,sum(t225f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $tes = tabel_225::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_225 = tabel_225::where('tahun', $year)->where('idkab', Auth::user()->idkab )->orderby('id')->get();
             return view('dda.tabel_225',compact('tabel_225', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store225(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_225s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_225')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_225')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_225')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index227()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_227')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_227s')
                            
                            ->selectRaw("sum(t227a) as sum_a,sum(t227b) as sum_b,sum(t227c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            
            $sum_lalu = DB::table('tabel_227s')
                            
                            ->selectRaw("sum(t227a) as sum_a,sum(t227b) as sum_b,sum(t227c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $tes = tabel_227::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_227 = tabel_227::where('tahun', $year)->where('idkab', Auth::user()->idkab )->orderby('id')->get();
             return view('dda.tabel_227',compact('tabel_227', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store227(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_227s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_227')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_227')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_227')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index226()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_226')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
                            
            $tes = tabel_226::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                         
            $tabel_226 = tabel_226::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_226',compact('tabel_226', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store226(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_226s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_226')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_226')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_226')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index442()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $tes = tabel_442::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();
            $tabel_442 = tabel_442::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_442',compact('tabel_442', 'year','kab','tes','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store442(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_442s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
              if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_442')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
     public function index443()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_443s')
                            
                            ->selectRaw("sum(t443a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_443s')
                            
                            ->selectRaw("sum(t443a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
             $tes = tabel_443::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_443 = tabel_443::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_443',compact('tabel_443', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store443(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_443s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_443')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index444()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $catatan = master_tabel::where('judul', 'tabel_444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_444s')
                            
                            ->selectRaw("sum(t444a) as sum_a, sum(t444b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_444s')
                            
                            ->selectRaw("sum(t444a) as sum_a, sum(t444b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_444::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_444 = tabel_444::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_444',compact('tabel_444', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store444(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_444s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_444')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    public function index445()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_445s')
                            
                            ->selectRaw("sum(t445a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_445s')
                            
                            ->selectRaw("sum(t445a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_445::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_445 = tabel_445::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_445',compact('tabel_445', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store445(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_445s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_445')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index446()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_446s')
                            
                            ->selectRaw("sum(t446a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_446s')
                            
                            ->selectRaw("sum(t446a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_446::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                  
            $tabel_446 = tabel_446::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_446',compact('tabel_446', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store446(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_446s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_446')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index915()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_915')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_915s')
                            ->selectRaw("sum(t915a) as sum_a, sum(t915b) as sum_b, sum(t915c) as sum_c, sum(t915d) as sum_d, sum(t915e) as sum_e, sum(t915f) as sum_f")->whereNotIn('id', [1,7,12,19,26,32,38,43,50,57])
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_915s')
                            ->selectRaw("sum(t915a) as sum_a, sum(t915b) as sum_b, sum(t915c) as sum_c, sum(t915d) as sum_d, sum(t915e) as sum_e, sum(t915f) as sum_f")->whereNotIn('id', [1,7,12,19,26,32,38,43,50,57])
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_915::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_915 = tabel_915::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.915',compact('tabel_915', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store915(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_915s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_915')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_915')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_915')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index916()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_916')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_916::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.916',compact('tabel_916', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store916(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_916s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
              if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_916')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_916')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_916')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index4214()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4214')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_4214::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_4214 = tabel_4214::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_4214',compact('tabel_4214', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding4214()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4214')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get(); 
                            
            $banding = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
           
     
            
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t4214a as t4214a_k, t1.t4214b as t4214b_k
                                        ,t2.t4214a, t2.t4214b
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4214a) as t4214a, sum(t4214b) as t4214b FROM tabel_4214s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_4214s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                                 
                            
            $tes = tabel_4214::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_4214 = tabel_4214::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_4214',compact('tabel_4214', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store4214(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_4214s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_4214')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_4214')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_4214')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index4215()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4215')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_4215::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_4215 = tabel_4215::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_4215',compact('tabel_4215', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding4215()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_4215')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get(); 
                            
            $banding = DB::table('tabel_4215s')
                            ->selectRaw("idkab,sum(t4215a) 4215t4215a, sum(t4215b) as t4215b, sum(t4215c) as t4215c, sum(t4215d) as t4215d, sum(t4215e) as t4215e
                            , sum(t4215f) as t4215f, sum(t4215g) as t4215g, sum(t4215h) as t4215h, sum(t4215i) as t4215i")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t4215a as t4215a_k, t1.t4215b as t4215b_k, t1.t4215c as t4215c_k,t1.t4215d as t4215d_k, t1.t4215e as t4215e_k,t1.t4215f as t4215f_k,t1.t4215g as t4215g_k,t1.t4215h as t4215h_k,t1.t4215i as t4215i_k 
                                        ,t2.t4215a, t2.t4215b, t2.t4215c, t2.t4215d, t2.t4215e, t2.t4215f, t2.t4215g, t2.t4215h, t2.t4215i
                                        FROM 
                                            (SELECT idkab,idkec, sum(t4215a) as t4215a, sum(t4215b) as t4215b, sum(t4215c) as t4215c, sum(t4215d) as t4215d, sum(t4215e) as t4215e
                            , sum(t4215f) as t4215f, sum(t4215g) as t4215g, sum(t4215h) as t4215h, sum(t4215i) as t4215i FROM tabel_4215s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_4215s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                            
                            
                            
            $tes = tabel_4215::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_4215 = tabel_4215::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_4215',compact('tabel_4215', 'year','kab','sum_lk','tes','sum_lalu','catatan', 'banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store4215(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_4215s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_4215')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_4215')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_4215')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index466()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_466::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_466 = tabel_466::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_466',compact('tabel_466', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding466()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as t466a, sum(t466b) as t466b, sum(t466c) as t466c, sum(t466d) as t466d, sum(t466e) as t466e")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t466a as t466a_k, t1.t466b as t466b_k, t1.t466c as t466c_k,t1.t466d as t466d_k, t1.t466e as t466e_k,t1.t466f as t466f_k 
                                        ,t2.t466a, t2.t466b, t2.t466c, t2.t466d, t2.t466e, t2.t466f
                                        FROM 
                                            (SELECT idkab,idkec, sum(t466a) as t466a, sum(t466b) as t466b, sum(t466c) as t466c, sum(t466d) as t466d, sum(t466e) as t466e
                            , sum(t466f) as t466f FROM tabel_466s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_466s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                
                            
            $tes = tabel_466::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_466 = tabel_466::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_466',compact('tabel_466', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store466(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_466s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_466')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    public function index61()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_61')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_61s')
                            ->selectRaw("sum(t61a) as sum_a, sum(t61b) as sum_b, sum(t61c) as sum_c, sum(t61d) as sum_d, sum(t61e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_61s')
                            ->selectRaw("sum(t61a) as sum_a, sum(t61b) as sum_b, sum(t61c) as sum_c, sum(t61d) as sum_d, sum(t61e) as sum_e")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_61::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_61 = tabel_61::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.61',compact('tabel_61', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store61(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_61s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_61')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_61')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_61')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index62()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_62')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_62s')
                            ->selectRaw("sum(t62a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_62s')
                            ->selectRaw("sum(t62a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_62::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_62 = tabel_62::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.62',compact('tabel_62', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store62(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_62s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_62')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_62')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_62')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index67()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_67')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_67s')
                            ->selectRaw("sum(t67a) as sum_a, sum(t67b) as sum_b, sum(t67c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_67s')
                            ->selectRaw("sum(t67a) as sum_a, sum(t67b) as sum_b, sum(t67c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_67::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_67 = tabel_67::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.67',compact('tabel_67', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store67(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_67s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_67')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_67')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_67')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index63()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_63')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_63::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_63 = tabel_63::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.63',compact('tabel_63', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
     public function banding63()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_63')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();  
                            
            $banding = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as t63a, sum(t63b) as t63b, sum(t63c) as t63c")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
             $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t63a as t63a_k, t1.t63b as t63b_k, t1.t63c as t63c_k
                                 ,t2.t63a, t2.t63b, t2.t63c
                                        FROM 
                                            (SELECT idkab,idkec, sum(t63a) as t63a, sum(t63b) as t63b, sum(t63c) as t63c FROM tabel_63s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_63s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                           
                            
            $tes = tabel_63::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_63 = tabel_63::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_63',compact('tabel_63', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store63(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_63s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_63')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_63')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_63')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    public function index64()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_64')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_64s')
                            ->selectRaw("sum(t64a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
           $sum_lalu = DB::table('tabel_64s')
                            ->selectRaw("sum(t64a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                 
           $tes = tabel_64::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                  
            $tabel_64 = tabel_64::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.64',compact('tabel_64', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store64(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_64s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_64')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_64')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_64')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index65()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_65')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_65s')
                            ->selectRaw("sum(t65a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_65s')
                            ->selectRaw("sum(t65a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_65::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_65 = tabel_65::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.65',compact('tabel_65', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store65(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_65s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
          if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_65')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_65')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_65')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
     public function index66()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_66')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_66s')
                            ->selectRaw("sum(t66a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
             $sum_lalu = DB::table('tabel_66s')
                            ->selectRaw("sum(t66a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
             $tes = tabel_66::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();               
            $tabel_66 = tabel_66::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.66',compact('tabel_66', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store66(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_66s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_66')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_66')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_66')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index721()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_721')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_721s')
                            ->selectRaw("sum(t721a) as sum_a, sum(t721b) as sum_b, sum(t721c) as sum_c, sum(t721d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_721s')
                            ->selectRaw("sum(t721a) as sum_a, sum(t721b) as sum_b, sum(t721c) as sum_c, sum(t721d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_721::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_721 = tabel_721::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.721',compact('tabel_721', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store721(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_721s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_721')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_721')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_721')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    public function index722()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_722')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_722s')
                            ->selectRaw("sum(t722a) as sum_a, sum(t722b) as sum_b, sum(t722c) as sum_c, sum(t722d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_722s')
                            ->selectRaw("sum(t722a) as sum_a, sum(t722b) as sum_b, sum(t722c) as sum_c, sum(t722d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_722::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_722 = tabel_722::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.722',compact('tabel_722', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store722(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_722s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_722')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_722')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_722')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index731()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_731')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_731s')
                            ->selectRaw("sum(t731a) as sum_a, sum(t731b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_731s')
                            ->selectRaw("sum(t731a) as sum_a, sum(t731b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_731::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_731 = tabel_731::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.731',compact('tabel_731', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store731(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_731s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_731')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_731')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_731')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index732()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_732')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_732s')
                            ->selectRaw("sum(t732a) as sum_a, sum(t732b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_732s')
                            ->selectRaw("sum(t732a) as sum_a, sum(t732b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_732::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_732 = tabel_732::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.732',compact('tabel_732', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store732(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_732s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_732')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_732')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_732')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index733()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_733')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_733::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                  
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.733',compact('tabel_733', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store733(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_733s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
              if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_733')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_733')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_733')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index734()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_734')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_734s')
                            ->selectRaw("sum(t734a) as sum_a, sum(t734b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_734s')
                            ->selectRaw("sum(t734a) as sum_a, sum(t734b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_734::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_734 = tabel_734::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.734',compact('tabel_734', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store734(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_734s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_734')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_734')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_734')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index735()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_735')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_735s')
                            ->selectRaw("sum(t735a) as sum_a, sum(t735b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_735s')
                            ->selectRaw("sum(t735a) as sum_a, sum(t735b) as sum_b")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_735::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_735 = tabel_735::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.735',compact('tabel_735', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store735(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_735s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_735')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_735')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_735')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index454()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_454s')
                            ->selectRaw("sum(t454a) as sum_a, sum(t454b) as sum_b, sum(t454c) as sum_c, sum(t454d) as sum_d, sum(t454e) as sum_e, sum(t454f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_454s')
                            ->selectRaw("sum(t454a) as sum_a, sum(t454b) as sum_b, sum(t454c) as sum_c, sum(t454d) as sum_d, sum(t454e) as sum_e, sum(t454f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_454::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_454 = tabel_454::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_454',compact('tabel_454', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store454(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_454s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_454')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
    public function index451()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_451s')
                            ->selectRaw("sum(t451a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_451s')
                            ->selectRaw("sum(t451a) as sum_a")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_451::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_451 = tabel_451::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_451',compact('tabel_451', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store451(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_451s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_451')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index455()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_455::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_455 = tabel_455::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.tabel_455',compact('tabel_455', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding455()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as sum_a, sum(t455b) as sum_b, sum(t455c) as sum_c, sum(t455d) as sum_d, sum(t455e) as sum_e, sum(t455f) as sum_f")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            
            $banding = DB::table('tabel_455s')
                            ->selectRaw("sum(t455a) as t455a, sum(t455b) as t455b, sum(t455c) as t455c, sum(t455d) as t455d, sum(t455e) as t455e, sum(t455f) as t455f")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();    
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t455a as t455a_k, t1.t455b as t455b_k, t1.t455c as t455c_k,t1.t455d as t455d_k, t1.t455e as t455e_k,t1.t455f as t455f_k 
                                        ,t2.t455a, t2.t455b, t2.t455c, t2.t455d, t2.t455e, t2.t455f
                                        FROM 
                                            (SELECT idkab,idkec, sum(t455a) as t455a, sum(t455b) as t455b, sum(t455c) as t455c, sum(t455d) as t455d, sum(t455e) as t455e
                            , sum(t455f) as t455f FROM tabel_455s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_455s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                
                            
                            
            $tes = tabel_455::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_455 = tabel_455::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_455',compact('tabel_455', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding', 'perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store455(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_455s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_455')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
      public function index542()
    {
          $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_542')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
           
            $tabel_542 = tabel_542::where('idkab', Auth::user()->idkab )->get();
             return view('dda.542',compact('tabel_542', 'kab','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store542(Request $request)
    {   
          $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_542s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_542')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_542')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_542')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
    public function index541()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_541')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_541::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_541 = tabel_541::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.541',compact('tabel_541', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store541(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_541s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_541')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_541')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_541')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index543()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_543')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            $sum_lk = DB::table('tabel_543s')
                            ->selectRaw("sum(t543b) as sum_b, sum(t543c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_543s')
                            ->selectRaw("sum(t543b) as sum_b, sum(t543c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();                
            $tes = tabel_543::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_543 = tabel_543::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.543',compact('tabel_543', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store543(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_543s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
          if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_543')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_543')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_543')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index68()
    {
          $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_68')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
           
            $tabel_68 = tabel_68::where('idkab', Auth::user()->idkab )->get();
             return view('dda.68',compact('tabel_68', 'kab','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store68(Request $request)
    {   
          $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_68s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
                
             DB::table('master_tabels')
            ->where('judul', 'tabel_68')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
            else{
                DB::table('master_tabels')
            ->where('judul', 'tabel_68')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_68')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
            }
    }
    
    
     public function index85()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_85')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_85s')
                            ->selectRaw("sum(t85a) as sum_a,sum(t85b) as sum_b, sum(t85c) as sum_c, sum(t85d) as sum_d,
                            sum(t85e) as sum_e, sum(t85f) as sum_f, sum(t85g) as sum_g, sum(t85h) as sum_h, sum(t85i) as sum_i,
                            sum(t85j) as sum_j, sum(t85k) as sum_k, sum(t85l) as sum_l, sum(t85m) as sum_m, sum(t85n) as sum_n, sum(t85o) as sum_o,
                            sum(t85p) as sum_p, sum(t85q) as sum_q")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $sum_lalu = DB::table('tabel_85s')
                            ->selectRaw("sum(t85a) as sum_a,sum(t85b) as sum_b, sum(t85c) as sum_c, sum(t85d) as sum_d,
                            sum(t85e) as sum_e, sum(t85f) as sum_f, sum(t85g) as sum_g, sum(t85h) as sum_h, sum(t85i) as sum_i,
                            sum(t85j) as sum_j, sum(t85k) as sum_k, sum(t85l) as sum_l, sum(t85m) as sum_m, sum(t85n) as sum_n, sum(t85o) as sum_o,
                            sum(t85p) as sum_p, sum(t85q) as sum_q")
                            ->where('tahun',2020)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_85::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                 
            $tabel_85 = tabel_85::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.85',compact('tabel_85', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store85(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_85s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_85')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_85')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_85')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index911()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_911')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_911::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_911 = tabel_911::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.911',compact('tabel_911', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
     public function banding911()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_911')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as t911a,sum(t911b) as t911b, sum(t911c) as t911c")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t911a as t911a_k, t1.t911b as t911b_k, t1.t911c as t911c_k, t1.t911d as t911d_k
                                 ,t2.t911a, t2.t911b, t2.t911c, t2.t911d
                                        FROM 
                                            (SELECT idkab,idkec, sum(t911a) as t911a, sum(t911b) as t911b, sum(t911c) as t911c, sum(t911d) as t911d FROM tabel_911s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_911s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
                             
                            
            $tes = tabel_911::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_911 = tabel_911::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_911',compact('tabel_911', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store911(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_911s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_911')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_911')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_911')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
     public function index912()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_912')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_912s')
                            ->selectRaw("sum(t912a) as sum_a,sum(t912b) as sum_b, sum(t912c) as sum_c, sum(t912d) as sum_d, sum(t912e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_912s')
                            ->selectRaw("sum(t912a) as sum_a,sum(t912b) as sum_b, sum(t912c) as sum_c, sum(t912d) as sum_d, sum(t912e) as sum_e")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_912::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_912 = tabel_912::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.912',compact('tabel_912', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store912(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_912s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_912')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_912')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_912')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    
         public function index9121()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_9121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_9121s')
                            ->selectRaw("sum(t9121a) as sum_a,sum(t9121b) as sum_b, sum(t9121c) as sum_c, sum(t9121d) as sum_d, sum(t9121e) as sum_e, sum(t9121f) as sum_f, sum(t9121g) as sum_g
                            , sum(t9121h) as sum_h, sum(t9121i) as sum_i, sum(t9121j) as sum_j, sum(t9121k) as sum_k, sum(t9121l) as sum_l")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_9121s')
                            ->selectRaw("sum(t9121a) as sum_a,sum(t9121b) as sum_b, sum(t9121c) as sum_c, sum(t9121d) as sum_d, sum(t9121e) as sum_e, sum(t9121f) as sum_f, sum(t9121g) as sum_g
                            , sum(t9121h) as sum_h, sum(t9121i) as sum_i, sum(t9121j) as sum_j, sum(t9121k) as sum_k, sum(t9121l) as sum_l")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_9121::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_9121 = tabel_9121::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.9121',compact('tabel_9121', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store9121(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_9121s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_9121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_9121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_9121')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index913()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_913')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_913::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_913 = tabel_913::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.913',compact('tabel_913', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    
    public function banding913()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_913')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as t913a,sum(t913b) as t913b, sum(t913c) as t913c")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t913a as t913a_k, t1.t913b as t913b_k, t1.t913c as t913c_k, t1.t913d as t913d_k
                                 ,t2.t913a, t2.t913b, t2.t913c, t2.t913d
                                        FROM 
                                            (SELECT idkab,idkec, sum(t913a) as t913a, sum(t913b) as t913b, sum(t913c) as t913c, sum(t913d) as t913d FROM tabel_913s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_913s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                 
            
                            
                            
            $tes = tabel_913::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_913 = tabel_913::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_913',compact('tabel_913', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store913(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_913s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_913')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_913')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_913')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index914()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_914')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_914::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_914 = tabel_914::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.914',compact('tabel_914', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function banding914()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_914')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
                            
            $banding = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as t914a,sum(t914b) as t914b, sum(t914c) as t914c, sum(t914d) as t914d")->groupBy('idkab')
                            ->where('tahun', $year)->where('idkab', '!=' , 7400)
                            ->get();
                            
            $perbandingan = DB::select(DB::raw("SELECT t1.idkab as idkab, t1.t914a as t914a_k, t1.t914b as t914b_k, t1.t914c as t914c_k, t1.t914d as t914d_k
                                 ,t2.t914a, t2.t914b, t2.t914c, t2.t914d
                                        FROM 
                                            (SELECT idkab,idkec, sum(t914a) as t914a, sum(t914b) as t914b, sum(t914c) as t914c, sum(t914d) as t914d FROM tabel_914s where tahun ='$year' and idkab <> 7400  GROUP BY idkab ) t1
                                        LEFT JOIN
                                            (SELECT * FROM tabel_914s where idkab=7400 and tahun ='$year' GROUP BY idkec) t2
                                            ON (t1.idkec=t2.idkec) "));                          
                            
            $tes = tabel_914::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_914 = tabel_914::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('rekap.rekap_914',compact('tabel_914', 'year','kab','sum_lk','tes','sum_lalu','catatan','banding','perbandingan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store914(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_914s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
            if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_914')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_914')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_914')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index104()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_104s')
                            ->selectRaw("sum(t104a) as sum_a,sum(t104b) as sum_b, sum(t104c) as sum_c, sum(t104d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_104s')
                            ->selectRaw("sum(t104a) as sum_a,sum(t104b) as sum_b, sum(t104c) as sum_c, sum(t104d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_104::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_104 = tabel_104::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.104',compact('tabel_104', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store104(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_104s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
             if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_104')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
     public function index105()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_105s')
                            ->selectRaw("sum(t105a) as sum_a,sum(t105b) as sum_b, sum(t105c) as sum_c, sum(t105d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_105s')
                            ->selectRaw("sum(t105a) as sum_a,sum(t105b) as sum_b, sum(t105c) as sum_c, sum(t105d) as sum_d")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_105::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_105 = tabel_105::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.105',compact('tabel_105', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store105(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_105s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_105')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
     public function index103()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
            
            $sum_lk = DB::table('tabel_103s')
                            ->selectRaw("sum(t103a) as sum_a,sum(t103b) as sum_b, sum(t103c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $sum_lalu = DB::table('tabel_103s')
                            ->selectRaw("sum(t103a) as sum_a,sum(t103b) as sum_b, sum(t103c) as sum_c")
                            ->where('tahun', 2021)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tes = tabel_103::where('tahun', 2021)->where('idkab', Auth::user()->idkab )->get();                
            $tabel_103 = tabel_103::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('dda.103',compact('tabel_103', 'year','kab','sum_lk','tes','sum_lalu','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store103(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_103s')->where('id', $member['id'])->where('tahun',$year)
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_103')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function index106()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
      
            $tabel_106 = tabel_106::where('idkab', Auth::user()->idkab )->get();
             return view('dda.106',compact('tabel_106', 'year','kab','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store106(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_106s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_106')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
     public function index107()
    {
            $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $catatan = master_tabel::where('judul', 'tabel_107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)->get();
      
            $tabel_107 = tabel_107::where('idkab', Auth::user()->idkab )->get();
             return view('dda.107',compact('tabel_107', 'year','kab','catatan'))->with('k', (request()->input('page', 1) - 1) * 5
       );
             
    }
    
    public function store107(Request $request)
    {   
           $year= Session::get('key');
            foreach($request->get('members', []) as $member) {
             DB::table('tabel_107s')->where('id', $member['id'])
            ->update(Arr::except($member, ['id']));
              
            }
           if(Auth::user()->role == 'Admin OPD' || Auth::user()->role == 'Operator OPD' ){
             DB::table('master_tabels')
            ->where('judul', 'tabel_107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_opd' => $request->status_opd,'petugas_upload' => Auth::user()->name]);
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
             
             }
             else{
                   DB::table('master_tabels')
            ->where('judul', 'tabel_107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => "1", 'catatan' => $request->input('catatan'),'setuju_bps' => $request->status_bps]);
            
             DB::table('master_lihats')
            ->where('judul', 'lihat_107')->where('idkab', Auth::user()->idkab )->where('tahun', $year)
            ->update(['status' => $request->status_bps]);
            
             return redirect()->back()->with(['success' => 'Berhasil Kirim'])->withInput($request->all);
                 
             }
    }
    
    
    public function Unduh121()
    {
        
       return Excel::download(new Export121, 'Tabel 121.xlsx');
    }
    
    public function Unduh122()
    {
        
       return Excel::download(new Export122, 'Tabel 122.xlsx');
    }
    
    public function Unduh123()
    {
        
       return Excel::download(new Export123, 'Tabel 123.xlsx');
    }
    
    public function Unduh124()
    {
        
       return Excel::download(new Export124, 'Tabel 124.xlsx');
    }
    
    public function Unduh125()
    {
        
       return Excel::download(new Export125, 'Tabel 125.xlsx');
    }
    
    public function Unduh126()
    {
        
       return Excel::download(new Export126, 'Tabel 126.xlsx');
    }
    
    public function Unduh221()
    {
        
       return Excel::download(new Export221, 'Tabel 221.xlsx');
    }
    public function Unduh222()
    {
        
       return Excel::download(new Export222, 'Tabel 222.xlsx');
    }
     public function Unduh223()
    {
        
       return Excel::download(new Export223, 'Tabel 223.xlsx');
    }
    public function Unduh224()
    {
        
       return Excel::download(new Export224, 'Tabel 224.xlsx');
    }
    public function Unduh225()
    {
        
       return Excel::download(new Export225, 'Tabel 225.xlsx');
    }
    public function Unduh226()
    {
        
       return Excel::download(new Export226, 'Tabel 226.xlsx');
    }
    public function Unduh231()
    {
        
       return Excel::download(new Export231, 'Tabel 231.xlsx');
    }
    public function Unduh232()
    {
        
       return Excel::download(new Export232, 'Tabel 232.xlsx');
    }
    public function Unduh233()
    {
        
       return Excel::download(new Export233, 'Tabel 233.xlsx');
    }
    
    public function Unduh234()
    {
        
       return Excel::download(new Export234, 'Tabel 234.xlsx');
    }
     public function Unduh235()
    {
        
       return Excel::download(new Export235, 'Tabel 235.xlsx');
    }
    public function Unduh3217()
    {
       return Excel::download(new Export3217, 'Tabel 3217.xlsx');
    }
    public function Unduh3218()
    {
       return Excel::download(new Export3218, 'Tabel 3218.xlsx');
    }
    public function Unduh4211()
    {
       return Excel::download(new Export4211, 'Tabel 4211.xlsx');
    }
     public function Unduh4213()
    {
       return Excel::download(new Export4213, 'Tabel 4213.xlsx');
    }
    public function Unduh4214()
    {
       return Excel::download(new Export4214, 'Tabel 4214.xlsx');
    }
    public function Unduh4215()
    {
       return Excel::download(new Export4215, 'Tabel 4215.xlsx');
    }
    public function Unduh423()
    {
       return Excel::download(new Export423, 'Tabel 423.xlsx');
    }
    public function Unduh425()
    {
       return Excel::download(new Export425, 'Tabel 425.xlsx');
    }
    public function Unduh426()
    {
       return Excel::download(new Export426, 'Tabel 426.xlsx');
    }
    public function Unduh427()
    {
       return Excel::download(new Export427, 'Tabel 427.xlsx');
    }
    public function Unduh441()
    {
       return Excel::download(new Export441, 'Tabel 441.xlsx');
    }
     public function Unduh442()
    {
       return Excel::download(new Export442, 'Tabel 442.xlsx');
    }
    public function Unduh443()
    {
       return Excel::download(new Export443, 'Tabel 443.xlsx');
    }
    public function Unduh444()
    {
       return Excel::download(new Export444, 'Tabel 444.xlsx');
    }
    public function Unduh445()
    {
       return Excel::download(new Export445, 'Tabel 445.xlsx');
    }
    public function Unduh446()
    {
       return Excel::download(new Export446, 'Tabel 446.xlsx');
    }
    public function Unduh454()
    {
       return Excel::download(new Export454, 'Tabel 454.xlsx');
    }
    public function Unduh455()
    {
       return Excel::download(new Export455, 'Tabel 455.xlsx');
    }
    public function Unduh466()
    {
       return Excel::download(new Export466, 'Tabel 466.xlsx');
    }
    public function Unduh531()
    {
       return Excel::download(new Export531, 'Tabel 531.xlsx');
    }
    public function Unduh532()
    {
       return Excel::download(new Export532, 'Tabel 532.xlsx');
    }
    public function Unduh541()
    {
       return Excel::download(new Export541, 'Tabel 541.xlsx');
    }
    public function Unduh542()
    {
       return Excel::download(new Export542, 'Tabel 542.xlsx');
    }
    public function Unduh543()
    {
       return Excel::download(new Export543, 'Tabel 543.xlsx');
    }
    public function Unduh551()
    {
       return Excel::download(new Export551, 'Tabel 551.xlsx');
    }
    public function Unduh552()
    {
       return Excel::download(new Export552, 'Tabel 552.xlsx');
    }
    public function Unduh553()
    {
       return Excel::download(new Export553, 'Tabel 553.xlsx');
    }
    public function Unduh554()
    {
       return Excel::download(new Export554, 'Tabel 554.xlsx');
    }
    public function Unduh555()
    {
       return Excel::download(new Export555, 'Tabel 555.xlsx');
    }
    public function Unduh61()
    {
       return Excel::download(new Export61, 'Tabel 61.xlsx');
    }
    public function Unduh62()
    {
       return Excel::download(new Export62, 'Tabel 62.xlsx');
    }
    public function Unduh63()
    {
       return Excel::download(new Export63, 'Tabel 63.xlsx');
    }
    public function Unduh64()
    {
       return Excel::download(new Export64, 'Tabel 64.xlsx');
    }
    public function Unduh65()
    {
       return Excel::download(new Export65, 'Tabel 65.xlsx');
    }
    public function Unduh66()
    {
       return Excel::download(new Export66, 'Tabel 66.xlsx');
    }
    public function Unduh67()
    {
       return Excel::download(new Export67, 'Tabel 67.xlsx');
    }
    
    public function Unduh721()
    {
       return Excel::download(new Export721, 'Tabel 721.xlsx');
    }
    public function Unduh731()
    {
       return Excel::download(new Export731, 'Tabel 731.xlsx');
    }
    public function Unduh732()
    {
       return Excel::download(new Export732, 'Tabel 732.xlsx');
    }
    public function Unduh733()
    {
       return Excel::download(new Export733, 'Tabel 733.xlsx');
    }
    public function Unduh734()
    {
       return Excel::download(new Export734, 'Tabel 734.xlsx');
    }
    public function Unduh735()
    {
       return Excel::download(new Export735, 'Tabel 735.xlsx');
    }
    public function Unduh85()
    {
       return Excel::download(new Export85, 'Tabel 85.xlsx');
    }
    public function Unduh911()
    {
       return Excel::download(new Export911, 'Tabel 911.xlsx');
    }
    public function Unduh913()
    {
       return Excel::download(new Export913, 'Tabel 913.xlsx');
    }
    public function Unduh914()
    {
       return Excel::download(new Export914, 'Tabel 914.xlsx');
    }
    public function Unduh915()
    {
       return Excel::download(new Export915, 'Tabel 915.xlsx');
    }
    public function Unduh916()
    {
       return Excel::download(new Export916, 'Tabel 916.xlsx');
    }
    public function Unduh103()
    {
       return Excel::download(new Export103, 'Tabel 103.xlsx');
    }
    public function Unduh104()
    {
       return Excel::download(new Export104, 'Tabel 104.xlsx');
    }
    public function Unduh105()
    {
       return Excel::download(new Export105, 'Tabel 105.xlsx');
    }
    public function Unduh106()
    {
       return Excel::download(new Export106, 'Tabel 106.xlsx');
    }
    public function Unduh107()
    {
       return Excel::download(new Export107, 'Tabel 107.xlsx');
    }
    
    public function Unduh921()
    {
       return Excel::download(new Export921, 'Tabel 921.xlsx');
    }
    
    public function Unduh923()
    {
       return Excel::download(new Export923, 'Tabel 923.xlsx');
    }
    
    public function Unduh912()
    {
       return Excel::download(new Export912, 'Tabel 912.xlsx');
    }
    
    public function Unduh741()
    {
       return Excel::download(new Export741, 'Tabel 741.xlsx');
    }
    
    public function Unduh742()
    {
       return Excel::download(new Export742, 'Tabel 742.xlsx');
    }
    public function Unduh743()
    {
       return Excel::download(new Export743, 'Tabel 743.xlsx');
    }
    public function Unduh744()
    {
       return Excel::download(new Export744, 'Tabel 744.xlsx');
    }
    public function Unduh745()
    {
       return Excel::download(new Export745, 'Tabel 745.xlsx');
    }
    public function Unduh746()
    {
       return Excel::download(new Export746, 'Tabel 746.xlsx');
    }
    public function Unduh747()
    {
       return Excel::download(new Export747, 'Tabel 747.xlsx');
    }
    
    
    
    
    
    
    public function Unduh_Tabel121()
    {
        
       return Excel::download(new Exports121, 'Tabel 121.xlsx');
    }
    
    public function Unduh_Tabel122()
    {
        
       return Excel::download(new Exports122, 'Tabel 122.xlsx');
    }
    
    public function Unduh_Tabel123()
    {
        
       return Excel::download(new Exports123, 'Tabel 123.xlsx');
    }
    
    public function Unduh_Tabel124()
    {
        
       return Excel::download(new Exports124, 'Tabel 124.xlsx');
    }
    
    public function Unduh_Tabel125()
    {
        
       return Excel::download(new Exports125, 'Tabel 125.xlsx');
    }
    
    public function Unduh_Tabel126()
    {
        
       return Excel::download(new Exports126, 'Tabel 126.xlsx');
    }
    
    public function Unduh_Tabel221()
    {
        
       return Excel::download(new Exports221, 'Tabel 221.xlsx');
    }
    public function Unduh_Tabel222()
    {
        
       return Excel::download(new Exports222, 'Tabel 222.xlsx');
    }
     public function Unduh_Tabel223()
    {
        
       return Excel::download(new Exports223, 'Tabel 223.xlsx');
    }
    public function Unduh_Tabel224()
    {
        
       return Excel::download(new Exports224, 'Tabel 224.xlsx');
    }
    public function Unduh_Tabel225()
    {
        
       return Excel::download(new Exports225, 'Tabel 225.xlsx');
    }
    public function Unduh_Tabel226()
    {
        
       return Excel::download(new Exports226, 'Tabel 226.xlsx');
    }
    public function Unduh_Tabel231()
    {
        
       return Excel::download(new Exports231, 'Tabel 231.xlsx');
    }
    public function Unduh_Tabel232()
    {
        
       return Excel::download(new Exports232, 'Tabel 232.xlsx');
    }
    public function Unduh_Tabel233()
    {
        
       return Excel::download(new Exports233, 'Tabel 233.xlsx');
    }
    
    public function Unduh_Tabel234()
    {
        
       return Excel::download(new Exports234, 'Tabel 234.xlsx');
    }
     public function Unduh_Tabel235()
    {
        
       return Excel::download(new Exports235, 'Tabel 235.xlsx');
    }
    public function Unduh_Tabel3217()
    {
       return Excel::download(new Exports3217, 'Tabel 3217.xlsx');
    }
    public function Unduh_Tabel3218()
    {
       return Excel::download(new Exports3218, 'Tabel 3218.xlsx');
    }
    public function Unduh_Tabel4211()
    {
       return Excel::download(new Exports4211, 'Tabel 4211.xlsx');
    }
     public function Unduh_Tabel4213()
    {
       return Excel::download(new Exports4213, 'Tabel 4213.xlsx');
    }
    public function Unduh_Tabel4214()
    {
       return Excel::download(new Exports4214, 'Tabel 4214.xlsx');
    }
    public function Unduh_Tabel4215()
    {
       return Excel::download(new Exports4215, 'Tabel 4215.xlsx');
    }
    public function Unduh_Tabel423()
    {
       return Excel::download(new Exports423, 'Tabel 423.xlsx');
    }
    public function Unduh_Tabel425()
    {
       return Excel::download(new Exports425, 'Tabel 425.xlsx');
    }
    public function Unduh_Tabel426()
    {
       return Excel::download(new Exports426, 'Tabel 426.xlsx');
    }
    public function Unduh_Tabel427()
    {
       return Excel::download(new Exports427, 'Tabel 427.xlsx');
    }
    public function Unduh_Tabel441()
    {
       return Excel::download(new Exports441, 'Tabel 441.xlsx');
    }
     public function Unduh_Tabel442()
    {
       return Excel::download(new Exports442, 'Tabel 442.xlsx');
    }
    public function Unduh_Tabel443()
    {
       return Excel::download(new Exports443, 'Tabel 443.xlsx');
    }
    public function Unduh_Tabel444()
    {
       return Excel::download(new Exports444, 'Tabel 444.xlsx');
    }
    public function Unduh_Tabel445()
    {
       return Excel::download(new Exports445, 'Tabel 445.xlsx');
    }
    public function Unduh_Tabel446()
    {
       return Excel::download(new Exports446, 'Tabel 446.xlsx');
    }
    public function Unduh_Tabel454()
    {
       return Excel::download(new Exports454, 'Tabel 454.xlsx');
    }
    public function Unduh_Tabel455()
    {
       return Excel::download(new Exports455, 'Tabel 455.xlsx');
    }
    public function Unduh_Tabel466()
    {
       return Excel::download(new Exports466, 'Tabel 466.xlsx');
    }
    public function Unduh_Tabel531()
    {
       return Excel::download(new Exports531, 'Tabel 531.xlsx');
    }
    public function Unduh_Tabel532()
    {
       return Excel::download(new Exports532, 'Tabel 532.xlsx');
    }
    public function Unduh_Tabel541()
    {
       return Excel::download(new Exports541, 'Tabel 541.xlsx');
    }
    public function Unduh_Tabel542()
    {
       return Excel::download(new Exports542, 'Tabel 542.xlsx');
    }
    public function Unduh_Tabel543()
    {
       return Excel::download(new Exports543, 'Tabel 543.xlsx');
    }
    public function Unduh_Tabel551()
    {
       return Excel::download(new Exports551, 'Tabel 551.xlsx');
    }
    public function Unduh_Tabel552()
    {
       return Excel::download(new Exports552, 'Tabel 552.xlsx');
    }
    public function Unduh_Tabel553()
    {
       return Excel::download(new Exports553, 'Tabel 553.xlsx');
    }
    public function Unduh_Tabel554()
    {
       return Excel::download(new Exports554, 'Tabel 554.xlsx');
    }
    public function Unduh_Tabel555()
    {
       return Excel::download(new Exports555, 'Tabel 555.xlsx');
    }
    public function Unduh_Tabel61()
    {
       return Excel::download(new Exports61, 'Tabel 61.xlsx');
    }
    public function Unduh_Tabel62()
    {
       return Excel::download(new Exports62, 'Tabel 62.xlsx');
    }
    public function Unduh_Tabel63()
    {
       return Excel::download(new Exports63, 'Tabel 63.xlsx');
    }
    public function Unduh_Tabel64()
    {
       return Excel::download(new Exports64, 'Tabel 64.xlsx');
    }
    public function Unduh_Tabel65()
    {
       return Excel::download(new Exports65, 'Tabel 65.xlsx');
    }
    public function Unduh_Tabel66()
    {
       return Excel::download(new Exports66, 'Tabel 66.xlsx');
    }
    public function Unduh_Tabel67()
    {
       return Excel::download(new Exports67, 'Tabel 67.xlsx');
    }
    
    public function Unduh_Tabel721()
    {
       return Excel::download(new Exports721, 'Tabel 721.xlsx');
    }
    public function Unduh_Tabel731()
    {
       return Excel::download(new Exports731, 'Tabel 731.xlsx');
    }
    public function Unduh_Tabel732()
    {
       return Excel::download(new Exports732, 'Tabel 732.xlsx');
    }
    public function Unduh_Tabel733()
    {
       return Excel::download(new Exports733, 'Tabel 733.xlsx');
    }
    public function Unduh_Tabel734()
    {
       return Excel::download(new Exports734, 'Tabel 734.xlsx');
    }
    public function Unduh_Tabel735()
    {
       return Excel::download(new Exports735, 'Tabel 735.xlsx');
    }
    public function Unduh_Tabel85()
    {
       return Excel::download(new Exports85, 'Tabel 85.xlsx');
    }
    public function Unduh_Tabel911()
    {
       return Excel::download(new Exports911, 'Tabel 911.xlsx');
    }
    public function Unduh_Tabel913()
    {
       return Excel::download(new Exports913, 'Tabel 913.xlsx');
    }
    public function Unduh_Tabel914()
    {
       return Excel::download(new Exports914, 'Tabel 914.xlsx');
    }
    public function Unduh_Tabel915()
    {
       return Excel::download(new Exports915, 'Tabel 915.xlsx');
    }
    public function Unduh_Tabel916()
    {
       return Excel::download(new Exports916, 'Tabel 916.xlsx');
    }
    public function Unduh_Tabel103()
    {
       return Excel::download(new Exports103, 'Tabel 103.xlsx');
    }
    public function Unduh_Tabel104()
    {
       return Excel::download(new Exports104, 'Tabel 104.xlsx');
    }
    public function Unduh_Tabel105()
    {
       return Excel::download(new Exports105, 'Tabel 105.xlsx');
    }
    public function Unduh_Tabel106()
    {
       return Excel::download(new Exports106, 'Tabel 106.xlsx');
    }
    public function Unduh_Tabel107()
    {
       return Excel::download(new Exports107, 'Tabel 107.xlsx');
    }
    
    public function Unduh_Tabel912()
    {
       return Excel::download(new Exports912, 'Tabel 912.xlsx');
    }
    
    public function Unduh_Tabel921()
    {
       return Excel::download(new Exports921, 'Tabel 921.xlsx');
    }
    public function Unduh_Tabel923()
    {
       return Excel::download(new Exports923, 'Tabel 923.xlsx');
    }
    public function Unduh_Tabel741()
    {
       return Excel::download(new Exports741, 'Tabel 741.xlsx');
    }
    public function Unduh_Tabel742()
    {
       return Excel::download(new Exports742, 'Tabel 742.xlsx');
    }
    public function Unduh_Tabel743()
    {
       return Excel::download(new Exports743, 'Tabel 743.xlsx');
    }
    public function Unduh_Tabel744()
    {
       return Excel::download(new Exports744, 'Tabel 744.xlsx');
    }
    public function Unduh_Tabel745()
    {
       return Excel::download(new Exports745, 'Tabel 745.xlsx');
    }
    public function Unduh_Tabel746()
    {
       return Excel::download(new Exports746, 'Tabel 746.xlsx');
    }
    public function Unduh_Tabel747()
    {
       return Excel::download(new Exports747, 'Tabel 747.xlsx');
    }
    
    public function Unduh_Tabel748()
    {
       return Excel::download(new Exports748, 'Tabel 748.xlsx');
    }
    
    public function Unduh_Tabel7410()
    {
       return Excel::download(new Exports7410, 'Tabel 7410.xlsx');
    }
    public function Unduh_Tabel7411()
    {
       return Excel::download(new Exports7411, 'Tabel 7411.xlsx');
    }
    public function Unduh_Tabel7412()
    {
       return Excel::download(new Exports7412, 'Tabel 7412.xlsx');
    }
    public function Unduh_Tabel7413()
    {
       return Excel::download(new Exports7413, 'Tabel 7413.xlsx');
    }
    public function Unduh_Tabel7414()
    {
       return Excel::download(new Exports7414, 'Tabel 7414.xlsx');
    }
    public function Unduh_Tabel7415()
    {
       return Excel::download(new Exports7415, 'Tabel 7415.xlsx');
    }
    public function Unduh_Tabel7416()
    {
       return Excel::download(new Exports7416, 'Tabel 7416.xlsx');
    }
    public function Unduh_Tabel7417()
    {
       return Excel::download(new Exports7417, 'Tabel 7417.xlsx');
    }
    public function Unduh_Tabel7418()
    {
       return Excel::download(new Exports7418, 'Tabel 7418.xlsx');
    }
    public function Unduh_Tabel7419()
    {
       return Excel::download(new Exports7419, 'Tabel 7419.xlsx');
    }
    public function Unduh_Tabel7420()
    {
       return Excel::download(new Exports7420, 'Tabel 7420.xlsx');
    }
    public function Unduh_Tabel7421()
    {
       return Excel::download(new Exports7421, 'Tabel 7421.xlsx');
    }
    public function Unduh_Tabel7422()
    {
       return Excel::download(new Exports7422, 'Tabel 7422.xlsx');
    }
    public function Unduh_Tabel7423()
    {
       return Excel::download(new Exports7423, 'Tabel 7423.xlsx');
    }
    public function Unduh_Tabel7424()
    {
       return Excel::download(new Exports7424, 'Tabel 7424.xlsx');
    }
    public function Unduh_Tabel7425()
    {
       return Excel::download(new Exports7425, 'Tabel 7425.xlsx');
    }
    public function Unduh_Tabel7426()
    {
       return Excel::download(new Exports7426, 'Tabel 7426.xlsx');
    }
    public function Unduh_Tabel7427()
    {
       return Excel::download(new Exports7427, 'Tabel 7427.xlsx');
    }
    public function Unduh_Tabel7428()
    {
       return Excel::download(new Exports7428, 'Tabel 7428.xlsx');
    }
    public function Unduh_Tabel7429()
    {
       return Excel::download(new Exports7429, 'Tabel 7429.xlsx');
    }
    public function Unduh_Tabel7430()
    {
       return Excel::download(new Exports7430, 'Tabel 7430.xlsx');
    }
    public function Unduh_Tabel7431()
    {
       return Excel::download(new Exports7431, 'Tabel 7431.xlsx');
    }
    public function Unduh_Tabel7432()
    {
       return Excel::download(new Exports7432, 'Tabel 7432.xlsx');
    }
    public function Unduh_Tabel7433()
    {
       return Excel::download(new Exports7433, 'Tabel 7433.xlsx');
    }
    public function Unduh_Tabel7434()
    {
       return Excel::download(new Exports7434, 'Tabel 7434.xlsx');
    }
    public function Unduh_Tabel7435()
    {
       return Excel::download(new Exports7435, 'Tabel 7435.xlsx');
    }
    public function Unduh_Tabel7436()
    {
       return Excel::download(new Exports7436, 'Tabel 7436.xlsx');
    }
    public function Unduh_Tabel7437()
    {
       return Excel::download(new Exports7437, 'Tabel 7437.xlsx');
    }
    public function Unduh_Tabel7438()
    {
       return Excel::download(new Exports7438, 'Tabel 7438.xlsx');
    }
    public function Unduh_Tabel7439()
    {
       return Excel::download(new Exports7439, 'Tabel 7439.xlsx');
    }
    public function Unduh_Tabel7440()
    {
       return Excel::download(new Exports7440, 'Tabel 7440.xlsx');
    }
    public function Unduh_Tabel7441()
    {
       return Excel::download(new Exports7441, 'Tabel 7441.xlsx');
    }
    public function Unduh_Tabel7442()
    {
       return Excel::download(new Exports7442, 'Tabel 7442.xlsx');
    }
    public function Unduh_Tabel7443()
    {
       return Excel::download(new Exports7443, 'Tabel 7443.xlsx');
    }
    public function Unduh_Tabel7444()
    {
       return Excel::download(new Exports7444, 'Tabel 7444.xlsx');
    }
    public function Unduh_Tabel7445()
    {
       return Excel::download(new Exports7445, 'Tabel 7445.xlsx');
    }
    public function Unduh_Tabel7446()
    {
       return Excel::download(new Exports7446, 'Tabel 7446.xlsx');
    }
    public function Unduh_Tabel7447()
    {
       return Excel::download(new Exports7447, 'Tabel 7447.xlsx');
    }
    public function Unduh_Tabel7448()
    {
       return Excel::download(new Exports7448, 'Tabel 7448.xlsx');
    }
    public function Unduh_Tabel7449()
    {
       return Excel::download(new Exports7449, 'Tabel 7449.xlsx');
    }
    public function Unduh_Tabel7450()
    {
       return Excel::download(new Exports7450, 'Tabel 7450.xlsx');
    }
    public function Unduh_Tabel7451()
    {
       return Excel::download(new Exports7451, 'Tabel 7451.xlsx');
    }
    public function Unduh_Tabel7452()
    {
       return Excel::download(new Exports7452, 'Tabel 7452.xlsx');
    }
    public function Unduh_Tabel7453()
    {
       return Excel::download(new Exports7453, 'Tabel 7453.xlsx');
    }
    public function Unduh_Tabel7454()
    {
       return Excel::download(new Exports7454, 'Tabel 7454.xlsx');
    }
    public function Unduh_Tabel7455()
    {
       return Excel::download(new Exports7455, 'Tabel 7455.xlsx');
    }
    public function Unduh_Tabel7456()
    {
       return Excel::download(new Exports7456, 'Tabel 7456.xlsx');
    }
    public function Unduh_Tabel7457()
    {
       return Excel::download(new Exports7457, 'Tabel 7457.xlsx');
    }
    public function Unduh_Tabel7458()
    {
       return Excel::download(new Exports7458, 'Tabel 7458.xlsx');
    }
    public function Unduh_Tabel7459()
    {
       return Excel::download(new Exports7459, 'Tabel 7459.xlsx');
    }
    public function Unduh_Tabel7460()
    {
       return Excel::download(new Exports7460, 'Tabel 7460.xlsx');
    }
    public function Unduh_Tabel7461()
    {
       return Excel::download(new Exports7461, 'Tabel 7461.xlsx');
    }
    public function Unduh_Tabel7462()
    {
       return Excel::download(new Exports7462, 'Tabel 7462.xlsx');
    }
    public function Unduh_Tabel7463()
    {
       return Excel::download(new Exports7463, 'Tabel 7463.xlsx');
    }
    public function Unduh_Tabel7464()
    {
       return Excel::download(new Exports7464, 'Tabel 7464.xlsx');
    }
    public function Unduh_Tabel7465()
    {
       return Excel::download(new Exports7465, 'Tabel 7465.xlsx');
    }
    public function Unduh_Tabel7466()
    {
       return Excel::download(new Exports7466, 'Tabel 7466.xlsx');
    }
    public function Unduh_Tabel7467()
    {
       return Excel::download(new Exports7467, 'Tabel 7467.xlsx');
    }
    public function Unduh_Tabel7468()
    {
       return Excel::download(new Exports7468, 'Tabel 7468.xlsx');
    }
    public function Unduh_Tabel7469()
    {
       return Excel::download(new Exports7469, 'Tabel 7469.xlsx');
    }
    public function Unduh_Tabel7470()
    {
       return Excel::download(new Exports7470, 'Tabel 7470.xlsx');
    }
    public function Unduh_Tabel7471()
    {
       return Excel::download(new Exports7471, 'Tabel 7471.xlsx');
    }
    public function Unduh_Tabel7472()
    {
       return Excel::download(new Exports7472, 'Tabel 7472.xlsx');
    }
    public function Unduh_Tabel7473()
    {
       return Excel::download(new Exports7473, 'Tabel 7473.xlsx');
    }
    public function Unduh_Tabel7474()
    {
       return Excel::download(new Exports7474, 'Tabel 7474.xlsx');
    }
    public function Unduh_Tabel7475()
    {
       return Excel::download(new Exports7475, 'Tabel 7475.xlsx');
    }
    public function Unduh_Tabel7476()
    {
       return Excel::download(new Exports7476, 'Tabel 7476.xlsx');
    }
    public function Unduh_Tabel7477()
    {
       return Excel::download(new Exports7477, 'Tabel 7477.xlsx');
    }
    public function Unduh_Tabel7478()
    {
       return Excel::download(new Exports7478, 'Tabel 7478.xlsx');
    }
    public function Unduh_Tabel7479()
    {
       return Excel::download(new Exports7479, 'Tabel 7479.xlsx');
    }
    public function Unduh_Tabel7480()
    {
       return Excel::download(new Exports7480, 'Tabel 7480.xlsx');
    }
    public function Unduh_Tabel7481()
    {
       return Excel::download(new Exports7481, 'Tabel 7481.xlsx');
    }
    public function Unduh_Tabel7482()
    {
       return Excel::download(new Exports7482, 'Tabel 7482.xlsx');
    }
    public function Unduh_Tabel7483()
    {
       return Excel::download(new Exports7483, 'Tabel 7483.xlsx');
    }
    public function Unduh_Tabel7484()
    {
       return Excel::download(new Exports7484, 'Tabel 7484.xlsx');
    }
    public function Unduh_Tabel7485()
    {
       return Excel::download(new Exports7485, 'Tabel 7485.xlsx');
    }
    public function Unduh_Tabel7486()
    {
       return Excel::download(new Exports7486, 'Tabel 7486.xlsx');
    }
    public function Unduh_Tabel7487()
    {
       return Excel::download(new Exports7487, 'Tabel 7487.xlsx');
    }
    public function Unduh_Tabel7488()
    {
       return Excel::download(new Exports7488, 'Tabel 7488.xlsx');
    }
    public function Unduh_Tabel7489()
    {
       return Excel::download(new Exports7489, 'Tabel 7489.xlsx');
    }
    public function Unduh_Tabel7490()
    {
       return Excel::download(new Exports7490, 'Tabel 7490.xlsx');
    }
    public function Unduh_Tabel7491()
    {
       return Excel::download(new Exports7491, 'Tabel 7491.xlsx');
    }
    public function Unduh_Tabel7492()
    {
       return Excel::download(new Exports7492, 'Tabel 7492.xlsx');
    }
    public function Unduh_Tabel7493()
    {
       return Excel::download(new Exports7493, 'Tabel 7493.xlsx');
    }
    public function Unduh_Tabel7494()
    {
       return Excel::download(new Exports7494, 'Tabel 7494.xlsx');
    }
    public function Unduh_Tabel7495()
    {
       return Excel::download(new Exports7495, 'Tabel 7495.xlsx');
    }
    public function Unduh_Tabel7496()
    {
       return Excel::download(new Exports7496, 'Tabel 7496.xlsx');
    }
    public function Unduh_Tabel7497()
    {
       return Excel::download(new Exports7497, 'Tabel 7497.xlsx');
    }
    public function Unduh_Tabel7498()
    {
       return Excel::download(new Exports7498, 'Tabel 7498.xlsx');
    }
    public function Unduh_Tabel7499()
    {
       return Excel::download(new Exports7499, 'Tabel 7499.xlsx');
    }
    public function Unduh_Tabel74100()
    {
       return Excel::download(new Exports74100, 'Tabel 74100.xlsx');
    }
    public function Unduh_Tabel74101()
    {
       return Excel::download(new Exports74101, 'Tabel 74101.xlsx');
    }
    public function Unduh_Tabel74102()
    {
       return Excel::download(new Exports74102, 'Tabel 74102.xlsx');
    }
    public function Unduh_Tabel74103()
    {
       return Excel::download(new Exports74103, 'Tabel 74103.xlsx');
    }
    public function Unduh_Tabel74104()
    {
       return Excel::download(new Exports74104, 'Tabel 74104.xlsx');
    }
    public function Unduh_Tabel74105()
    {
       return Excel::download(new Exports74105, 'Tabel 74105.xlsx');
    }
    public function Unduh_Tabel74106()
    {
       return Excel::download(new Exports74106, 'Tabel 74106.xlsx');
    }
    public function Unduh_Tabel74107()
    {
       return Excel::download(new Exports74107, 'Tabel 74107.xlsx');
    }
    public function Unduh_Tabel74108()
    {
       return Excel::download(new Exports74108, 'Tabel 74108.xlsx');
    }
    public function Unduh_Tabel74109()
    {
       return Excel::download(new Exports74109, 'Tabel 74109.xlsx');
    }
    public function Unduh_Tabel74110()
    {
       return Excel::download(new Exports74110, 'Tabel 74110.xlsx');
    }
    public function Unduh_Tabel74111()
    {
       return Excel::download(new Exports74111, 'Tabel 74111.xlsx');
    }
    public function Unduh_Tabel74112()
    {
       return Excel::download(new Exports74112, 'Tabel 74112.xlsx');
    }
    
    public function Unduh_Tabel74113()
    {
       return Excel::download(new Exports74113, 'Tabel 74113.xlsx');
    }
    
    public function Unduh_Tabel74114()
    {
       return Excel::download(new Exports74114, 'Tabel 74114.xlsx');
    }
    
    public function Unduh_Tabel74115()
    {
       return Excel::download(new Exports74115, 'Tabel 74115.xlsx');
    }
    
     public function Unduh_Tabel74116()
    {
       return Excel::download(new Exports74116, 'Tabel 74116.xlsx');
    }
    
     public function Unduh_Tabel74117()
    {
       return Excel::download(new Exports74117, 'Tabel 74117.xlsx');
    }
    
     public function Unduh_Tabel74118()
    {
       return Excel::download(new Exports74118, 'Tabel 74118.xlsx');
    }
    
     public function Unduh_Tabel74119()
    {
       return Excel::download(new Exports74119, 'Tabel 74119.xlsx');
    }
    
    public function Unduh_Tabel74120()
    {
       return Excel::download(new Exports74120, 'Tabel 74120.xlsx');
    }
    
    public function Unduh_Tabel74121()
    {
       return Excel::download(new Exports74121, 'Tabel 74121.xlsx');
    }
    
    public function Unduh_Tabel74122()
    {
       return Excel::download(new Exports74122, 'Tabel 74122.xlsx');
    }
    
    public function Unduh_Tabel74123()
    {
       return Excel::download(new Exports74123, 'Tabel 74123.xlsx');
    }
    
    public function all_tabel()
    {
        return Excel::download(new ExportAll, 'result.xlsx');
    }
   
    




}
