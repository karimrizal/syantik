<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_733;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda733 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
            if(empty($year)){
            $kab = master_kab::where('idkab', 7400 )->get();    
            $year = 2021;
            $sum_lk = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_733s')
                            ->selectRaw("sum(t733a) as sum_a, sum(t733b) as sum_b")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_733',compact('tabel_733', 'year','kab','sum_lk')
       );
    }













   

    
}
