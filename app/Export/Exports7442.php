<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_42;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7442 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_42s')
                            ->selectRaw("sum(t7442a) as sum_a,sum(t7442b) as sum_b, sum(t7442c) as sum_c, sum(t7442d) as sum_d, sum(t7442e) as sum_e, sum(t7442f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7442 = tabel_74_42::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7442',compact('tabel_7442', 'year','kab','sum_lk')
       );
    }













   

    
}
