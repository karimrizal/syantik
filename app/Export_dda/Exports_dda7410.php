<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_10;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda7410 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_10s')
                            ->selectRaw("sum(t7410a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_7410 = tabel_74_10::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_7410',compact('tabel_7410', 'year','kab','sum_lk')
       );
    }













   

    
}
