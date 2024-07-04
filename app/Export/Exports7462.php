<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_62;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7462 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_62s')
                            ->selectRaw("sum(t7462a) as sum_a,sum(t7462b) as sum_b, sum(t7462c) as sum_c, sum(t7462d) as sum_d, sum(t7462e) as sum_e, sum(t7462f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7462 = tabel_74_62::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7462',compact('tabel_7462', 'year','kab','sum_lk')
       );
    }



    
}
