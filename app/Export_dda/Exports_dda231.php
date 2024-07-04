<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_231;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda231 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', 7400 )->get();
            }
             return view('export_dda.tabel_231',compact('tabel_231', 'year','kab','sum_lk')
       );
    }













   

    
}
