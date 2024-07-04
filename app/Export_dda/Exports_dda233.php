<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_233;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda233 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_233 = tabel_233::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_233s')
                            
                            ->selectRaw("sum(t233_lk) as sum_lk, sum(t233_pr) as sum_pr, sum(t233_lk + t233_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_233 = tabel_233::where('tahun', $year)->where('idkab', 7400 )->get();
            }
             return view('export_dda.tabel_233',compact('tabel_233', 'year','kab','sum_lk')
       );
    }













   

    
}
