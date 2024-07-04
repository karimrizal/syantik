<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_13;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7413 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_13s')
                            ->selectRaw("sum(t7413a) as sum_a,sum(t7413b) as sum_b, sum(t7413c) as sum_c, sum(t7413d) as sum_d, sum(t7413e) as sum_e, sum(t7413f) as sum_f, sum(t7413g) as sum_g")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7413 = tabel_74_13::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7413',compact('tabel_7413', 'year','kab','sum_lk')
       );
    }













   

    
}
