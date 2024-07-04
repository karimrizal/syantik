<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_67;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7467 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_67s')
                           ->selectRaw("sum(t7467a) as sum_a,sum(t7467b) as sum_b, ( (sum(t7467b)/sum(t7467a))*100 ) as sum_c, sum(t7467d) as sum_d, sum(t7467e) as sum_e, sum(t7467f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7467 = tabel_74_67::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7467',compact('tabel_7467', 'year','kab','sum_lk')
       );
    }



    
}
