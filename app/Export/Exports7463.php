<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_63;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7463 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_63s')
                            ->selectRaw("sum(t7463a) as sum_a,sum(t7463b) as sum_b, sum(t7463c) as sum_c, sum(t7463d) as sum_d, sum(t7463e) as sum_e, sum(t7463f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7463 = tabel_74_63::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7463',compact('tabel_7463', 'year','kab','sum_lk')
       );
    }



    
}
