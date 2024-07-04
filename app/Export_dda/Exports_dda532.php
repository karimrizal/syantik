<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_532;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda532 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
            if(empty($year)){
            $kab = master_kab::where('idkab', 7400 )->get();    
            $year = 2021;
            $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_532s')
                            ->selectRaw("sum(t532a) as sum_a, sum(t532b) as sum_b, sum(t532c) as sum_c, sum(t532d) as sum_d
                            ,sum(t532e) as sum_e, sum(t532f) as sum_f, sum(t532g) as sum_g, sum(t532h) as sum_h
                            , sum(t532i) as sum_i, sum(t532j) as sum_j, sum(t532k) as sum_k, sum(t532l) as sum_l, sum(t532m) as sum_m")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_532 = tabel_532::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_532',compact('tabel_532', 'year','kab','sum_lk')
       );
    }













   

    
}