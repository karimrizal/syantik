<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_34;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7434 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_34s')
                            ->selectRaw("sum(t7434a) as sum_a,sum(t7434b) as sum_b, sum(t7434c) as sum_c, sum(t7434d) as sum_d, sum(t7434e) as sum_e, sum(t7434f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7434 = tabel_74_34::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7434',compact('tabel_7434', 'year','kab','sum_lk')
       );
    }













   

    
}
