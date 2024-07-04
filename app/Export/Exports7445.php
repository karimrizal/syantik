<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_45;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7445 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_45s')
                            ->selectRaw("sum(t7445a) as sum_a,sum(t7445b) as sum_b, sum(t7445c) as sum_c, sum(t7445d) as sum_d, sum(t7445e) as sum_e, sum(t7445f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7445 = tabel_74_45::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7445',compact('tabel_7445', 'year','kab','sum_lk')
       );
    }













   

    
}
