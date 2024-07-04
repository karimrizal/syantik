<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_118;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74118 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_118s')
                            ->selectRaw("sum(t74118a) as sum_a,sum(t74118b) as sum_b, sum(t74118c)  as sum_c, sum(t74118d) as sum_d, sum(t74118e) as sum_e, sum(t74118f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74118 = tabel_74_118::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74118',compact('tabel_74118', 'year','kab','sum_lk')
       );
    }



    
}
