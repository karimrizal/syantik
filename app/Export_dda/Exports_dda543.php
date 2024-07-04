<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_543;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda543 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_543s')
            ->selectRaw("sum(t543b) as sum_b, sum(t543c) as sum_c")
            ->where('tahun', $year)->where('idkab', $idkab )
            ->get();
            $tabel_543 = tabel_543::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $tabel_543 = tabel_543::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_543',compact('tabel_543', 'year','kab','sum_lk')
       );
    }













   

    
}
