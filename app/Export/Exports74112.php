<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_112;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74112 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_112s')
                            ->selectRaw("sum(t74112a) as sum_a,sum(t74112b) as sum_b, ((sum(t74112a)/sum(t74112b) )*100 ) as sum_c, sum(t74112d) as sum_d, sum(t74112e) as sum_e, sum(t74112f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74112 = tabel_74_112::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74112',compact('tabel_74112', 'year','kab','sum_lk')
       );
    }



    
}
