<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_87;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7487 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_87s')
                            ->selectRaw("sum(t7487a) as sum_a,sum(t7487b) as sum_b, sum(t7487c) as sum_c, sum(t7487d) as sum_d, sum(t7487e) as sum_e, sum(t7487f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7487 = tabel_74_87::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7487',compact('tabel_7487', 'year','kab','sum_lk')
       );
    }



    
}
