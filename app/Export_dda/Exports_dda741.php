<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_1;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda741 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_1s')
                            ->selectRaw("sum(t741a) as sum_a,sum(t741b) as sum_b,sum(t741c) as sum_c,sum(t741d) as sum_d,sum(t741e) as sum_e,sum(t741f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_741 = tabel_74_1::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_741',compact('tabel_741', 'year','kab','sum_lk')
       );
    }













   

    
}
