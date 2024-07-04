<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_44;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7444 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_44s')
                             ->selectRaw("sum(t7444a) as sum_a,sum(t7444b) as sum_b, sum(t7444c) as sum_c, sum(t7444d) as sum_d, sum(t7444e) as sum_e, sum(t7444f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7444 = tabel_74_44::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7444',compact('tabel_7444', 'year','kab','sum_lk')
       );
    }













   

    
}
