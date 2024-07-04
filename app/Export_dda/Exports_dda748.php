<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_8;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda748 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_8s')
                            ->selectRaw("sum(t748a) as sum_a,sum(t748b) as sum_b, sum(t748c) as sum_c")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_748 = tabel_74_8::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_748',compact('tabel_748', 'year','kab','sum_lk')
       );
    }













   

    
}
