<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_115;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74115 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_115s')
                            ->selectRaw("sum(t74115a) as sum_a,sum(t74115b) as sum_b, sum(t74115c)  as sum_c, sum(t74115d) as sum_d, sum(t74115e) as sum_e, sum(t74115f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74115 = tabel_74_115::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74115',compact('tabel_74115', 'year','kab','sum_lk')
       );
    }



    
}
