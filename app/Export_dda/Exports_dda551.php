<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_551;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda551 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_551s')
            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
            ->where('tahun', $year)->where('idkab', 7400 )
            ->get();
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
               $sum_lk = DB::table('tabel_551s')
            ->selectRaw("sum(t551a) as sum_a, sum(t551b) as sum_b, sum(t551c) as sum_c, sum(t551d) as sum_d
            ,sum(t551e) as sum_e, sum(t551f) as sum_f, sum(t551g) as sum_g")
            ->where('tahun', $year)->where('idkab', 7400 )
            ->get();
            $tabel_551 = tabel_551::where('tahun', $year)->where('idkab', 7400 )->get(); 
            }
            
             return view('export_dda.tabel_551',compact('tabel_551', 'year','kab','sum_lk')
       );
    }













   

    
}
