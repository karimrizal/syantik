<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_531;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports531 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_531s')
                            ->selectRaw("sum(t531a) as sum_a, sum(t531b) as sum_b, sum(t531c) as sum_c, sum(t531d) as sum_d
                            ,sum(t531e) as sum_e, sum(t531f) as sum_f, sum(t531g) as sum_g, sum(t531h) as sum_h
                            , sum(t531i) as sum_i, sum(t531j) as sum_j, sum(t531k) as sum_k, sum(t531l) as sum_l, sum(t531m) as sum_m")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_531',compact('tabel_531', 'year','kab','sum_lk')
       );
    }













   

    
}
