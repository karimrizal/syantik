<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_7;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda747 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_7s')
                            ->selectRaw("sum(t747a) as sum_a,sum(t747b) as sum_b, sum(t747c) as sum_c, sum(t747d) as sum_d, sum(t747e) as sum_e, sum(t747f) as sum_f, sum(t747g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_747 = tabel_74_7::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_747',compact('tabel_747', 'year','kab','sum_lk')
       );
    }













   

    
}
