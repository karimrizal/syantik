<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_16;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7416 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_16s')
                            ->selectRaw("sum(t7416a) as sum_a,sum(t7416b) as sum_b, sum(t7416c) as sum_c, sum(t7416d) as sum_d, sum(t7416e) as sum_e, sum(t7416f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7416 = tabel_74_16::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7416',compact('tabel_7416', 'year','kab','sum_lk')
       );
    }













   

    
}
