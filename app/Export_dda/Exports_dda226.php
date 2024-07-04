<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_226;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda226 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_226 = tabel_226::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_226s')
                            
                            ->selectRaw("sum(t226a) as sum_a,sum(t226b) as sum_b,sum(t226c) as sum_c,sum(t226d) as sum_d,
                            sum(t226e) as sum_e,sum(t226f) as sum_f,sum(t226g) as sum_g,sum(t226h) as sum_h,sum(t226i) as sum_i
                            ,sum(t226j) as sum_j,sum(t226k) as sum_k,sum(t226l) as sum_l")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_226 = tabel_226::where('tahun', $year)->where('idkab', 7400 )->get();
            }
             return view('export_dda.tabel_226',compact('tabel_226', 'year','kab','sum_lk')
       );
    }













   

    
}
