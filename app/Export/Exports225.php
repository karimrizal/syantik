<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_225;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports225 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_225s')
                            
                            ->selectRaw("sum(t225a) as sum_a,sum(t225b) as sum_b,sum(t225c) as sum_c,sum(t225d) as sum_d,
                            sum(t225e) as sum_e,sum(t225f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_225 = tabel_225::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_225',compact('tabel_225', 'year','kab','sum_lk')
       );
    }













   

    
}
