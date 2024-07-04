<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_553;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda553 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_553s')
                            ->selectRaw("sum(t553a) as sum_a, sum(t553b) as sum_b, sum(t553c) as sum_c, sum(t553d) as sum_d
                            ,sum(t553e) as sum_e, sum(t553f) as sum_f, sum(t553g) as sum_g")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_553 = tabel_553::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_553',compact('tabel_553', 'year','kab','sum_lk')
       );
    }













   

    
}