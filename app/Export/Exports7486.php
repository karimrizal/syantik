<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_86;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7486 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_86s')
                            ->selectRaw("sum(t7486a) as sum_a,sum(t7486b) as sum_b, sum(t7486c) as sum_c, sum(t7486d) as sum_d, sum(t7486e) as sum_e, sum(t7486f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7486 = tabel_74_86::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7486',compact('tabel_7486', 'year','kab','sum_lk')
       );
    }



    
}
