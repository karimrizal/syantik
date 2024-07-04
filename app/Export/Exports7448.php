<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_48;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7448 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_48s')
                            ->selectRaw("sum(t7448a) as sum_a,sum(t7448b) as sum_b, sum(t7448c) as sum_c, sum(t7448d) as sum_d, sum(t7448e) as sum_e, sum(t7448f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7448 = tabel_74_48::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7448',compact('tabel_7448', 'year','kab','sum_lk')
       );
    }



    
}
