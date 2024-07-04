<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_426;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda426 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
               $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', 7400 )->get(); 
            }
            
             return view('export_dda.tabel_426',compact('tabel_426', 'year','kab','sum_lk')
       );
    }













   

    
}
