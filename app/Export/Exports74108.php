<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_108;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74108 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_108s')
                           ->selectRaw("sum(t74108a) as sum_a,sum(t74108b) as sum_b, ((sum(t74108a)/sum(t74108b) )*100 ) as sum_c, sum(t74108d) as sum_d, sum(t74108e) as sum_e, sum(t74108f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74108 = tabel_74_108::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74108',compact('tabel_74108', 'year','kab','sum_lk')
       );
    }



    
}
