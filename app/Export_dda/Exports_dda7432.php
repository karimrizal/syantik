<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_32;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7432 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_32s')
                             ->selectRaw("sum(t7432a) as sum_a,sum(t7432b) as sum_b, sum(t7432c) as sum_c, sum(t7432d) as sum_d, sum(t7432e) as sum_e, sum(t7432f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7432 = tabel_74_32::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7432',compact('tabel_7432', 'year','kab','sum_lk')
       );
    }













   

    
}
