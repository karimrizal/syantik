<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_423;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda423 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
               $sum_lk = DB::table('tabel_423s')
                            ->selectRaw("sum(t423a) as sum_a, sum(t423b) as sum_b, sum(t423c) as sum_c,sum(t423d) as sum_d,
                            sum(t423e) as sum_e,sum(t423f) as sum_f,sum(t423g) as sum_g,sum(t423h) as sum_h,sum(t423i) as sum_i")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_423 = tabel_423::where('tahun', $year)->where('idkab', 7400 )->get(); 
            }
            
             return view('export_dda.tabel_423',compact('tabel_423', 'year','kab','sum_lk')
       );
    }













   

    
}
