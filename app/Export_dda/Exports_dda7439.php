<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_39;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7439 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_39s')
                             ->selectRaw("sum(t7439a) as sum_a,sum(t7439b) as sum_b, sum(t7439c) as sum_c, sum(t7439d) as sum_d, sum(t7439e) as sum_e, sum(t7439f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7439 = tabel_74_39::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7439',compact('tabel_7439', 'year','kab','sum_lk')
       );
    }













   

    
}
