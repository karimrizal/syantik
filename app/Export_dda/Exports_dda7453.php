<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_53;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7453 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_53s')
                            ->selectRaw("sum(t7453a) as sum_a,sum(t7453b) as sum_b, sum(t7453c) as sum_c, sum(t7453d) as sum_d, sum(t7453e) as sum_e, sum(t7453f) as sum_f, sum(t7453g) as sum_g
                            , sum(t7453h) as sum_h, sum(t7453i) as sum_i, (sum(t7453f)/sum(t7453c))*100 as sum_j")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7453 = tabel_74_53::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7453',compact('tabel_7453', 'year','kab','sum_lk')
       );
    }













   

    
}
