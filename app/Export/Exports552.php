<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_552;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports552 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_552s')
                            ->selectRaw("sum(t552a) as sum_a, sum(t552b) as sum_b, sum(t552c) as sum_c, sum(t552d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_552 = tabel_552::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_552',compact('tabel_552', 'year','kab','sum_lk')
       );
    }













   

    
}
