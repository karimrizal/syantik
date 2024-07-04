<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_28;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7428 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_28s')
                             ->selectRaw("sum(t7428a) as sum_a,sum(t7428b) as sum_b, sum(t7428c) as sum_c, sum(t7428d) as sum_d, sum(t7428e) as sum_e, sum(t7428f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7428 = tabel_74_28::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7428',compact('tabel_7428', 'year','kab','sum_lk')
       );
    }













   

    
}
