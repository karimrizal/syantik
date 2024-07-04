<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_541;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda541 implements FromView, ShouldAutoSize
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
            $sum_lk = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_541 = tabel_541::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $sum_lk = DB::table('tabel_541s')
                            ->selectRaw("sum(t541a) as sum_a, sum(t541b) as sum_b, sum(t541c) as sum_c, sum(t541d) as sum_d, sum(t541e) as sum_e, sum(t541f) as sum_f,
                            sum(t541g) as sum_g, sum(t541h) as sum_h, sum(t541i) as sum_i, sum(t541j) as sum_j, sum(t541k) as sum_k, sum(t541l) as sum_l")
                            ->where('tahun', $year)->where('idkab', 7400 )
                            ->get();
            $tabel_541 = tabel_541::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            
             return view('export_dda.tabel_541',compact('tabel_541', 'year','kab','sum_lk')
       );
    }













   

    
}
