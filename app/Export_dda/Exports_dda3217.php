<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_3217;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda3217 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_3217s')
                            ->selectRaw("sum(t3217a_lk) as sum_lka, sum(t3217a_pr) as sum_pra, sum(t3217a_lk + t3217a_pr) as sum_lkpra,
                            sum(t3217b_lk) as sum_lkb, sum(t3217b_pr) as sum_prb, sum(t3217b_lk + t3217b_pr) as sum_lkprb,
                           sum(t3217c_lk) as sum_lkc, sum(t3217c_pr) as sum_prc, sum(t3217c_lk + t3217c_pr) as sum_lkprc ")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_3217 = tabel_3217::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_3217',compact('tabel_3217', 'year','kab','sum_lk')
       );
    }













   

    
}
