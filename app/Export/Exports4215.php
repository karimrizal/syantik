<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_4215;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports4215 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_4215s')
                            ->selectRaw("sum(t4215a) as sum_a, sum(t4215b) as sum_b, sum(t4215c) as sum_c, sum(t4215d) as sum_d, sum(t4215e) as sum_e
                            , sum(t4215f) as sum_f, sum(t4215g) as sum_g, sum(t4215h) as sum_h")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_4215 = tabel_4215::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_4215',compact('tabel_4215', 'year','kab','sum_lk')
       );
    }













   

    
}
