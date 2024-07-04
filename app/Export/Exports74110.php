<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_110;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74110 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_110s')
                            ->selectRaw("sum(t74110a) as sum_a,sum(t74110b) as sum_b, sum(t74110c) as sum_c, sum(t74110d) as sum_d, sum(t74110e) as sum_e, sum(t74110f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74110 = tabel_74_110::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74110',compact('tabel_74110', 'year','kab','sum_lk')
       );
    }



    
}
