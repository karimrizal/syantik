<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_4;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda744 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_4s')
                            ->selectRaw("sum(t744a) as sum_a,sum(t744b) as sum_b,sum(t744c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_744 = tabel_74_4::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_744',compact('tabel_744', 'year','kab','sum_lk')
       );
    }













   

    
}
