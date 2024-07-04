<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_2;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda742 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
      
           
                $sum_lk = DB::table('tabel_74_2s')
                            ->selectRaw("sum(t742a) as sum_a")
                            ->where('tahun', $year)->where('idkab', $idkab )
                            ->get();
            $tabel_742 = tabel_74_2::where('tahun', $year)->where('idkab', $idkab )->get();
            
            
             return view('export_dda.tabel_742',compact('tabel_742', 'year','kab','sum_lk')
       );
    }













   

    
}
