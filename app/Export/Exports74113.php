<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_113;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74113 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_113s')
                            ->selectRaw("sum(t74113a) as sum_a,sum(t74113b) as sum_b, ((sum(t74113a)/sum(t74113b) )*100 ) as sum_c, sum(t74113d) as sum_d, sum(t74113e) as sum_e, sum(t74113f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74113 = tabel_74_113::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74113',compact('tabel_74113', 'year','kab','sum_lk')
       );
    }



    
}
