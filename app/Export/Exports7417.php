<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_17;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7417 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_17s')
                            ->selectRaw("sum(t7417a) as sum_a,sum(t7417b) as sum_b, sum(t7417c) as sum_c, sum(t7417d) as sum_d, sum(t7417e) as sum_e, sum(t7417f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7417 = tabel_74_17::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7417',compact('tabel_7417', 'year','kab','sum_lk')
       );
    }













   

    
}
