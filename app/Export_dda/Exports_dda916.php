<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_916;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda916 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                 $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_916',compact('tabel_916', 'year','kab','sum_lk')
       );
    }













   

    
}
