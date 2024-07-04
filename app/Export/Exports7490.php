<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_90;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7490 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_90s')
                            ->selectRaw("sum(t7490a) as sum_a,sum(t7490b) as sum_b, sum(t7490c) as sum_c, sum(t7490d) as sum_d, sum(t7490e) as sum_e, sum(t7490f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7490 = tabel_74_90::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7490',compact('tabel_7490', 'year','kab','sum_lk')
       );
    }



    
}
