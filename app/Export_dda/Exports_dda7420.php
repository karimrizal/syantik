<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_20;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7420 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_20s')
                            ->selectRaw("sum(t7420a) as sum_a,sum(t7420b) as sum_b, sum(t7420c) as sum_c, sum(t7420d) as sum_d, sum(t7420e) as sum_e, sum(t7420f) as sum_f")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7420 = tabel_74_20::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7420',compact('tabel_7420', 'year','kab','sum_lk')
       );
    }













   

    
}
