<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_85;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports85 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_85s')
                            ->selectRaw("sum(t85a) as sum_a,sum(t85b) as sum_b, sum(t85c) as sum_c, sum(t85d) as sum_d,
                            sum(t85e) as sum_e, sum(t85f) as sum_f, sum(t85g) as sum_g, sum(t85h) as sum_h, sum(t85i) as sum_i,
                            sum(t85j) as sum_j, sum(t85k) as sum_k, sum(t85l) as sum_l, sum(t85m) as sum_m, sum(t85n) as sum_n, sum(t85o) as sum_o,
                            sum(t85p) as sum_p, sum(t85q) as sum_q")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_85 = tabel_85::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_85',compact('tabel_85', 'year','kab','sum_lk')
       );
    }













   

    
}
