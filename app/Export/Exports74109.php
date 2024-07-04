<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_109;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74109 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_109s')
                            ->selectRaw("sum(t74109a) as sum_a,sum(t74109b) as sum_b, sum(t74109c) as sum_c, sum(t74109d) as sum_d, sum(t74109e) as sum_e, sum(t74109f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74109 = tabel_74_109::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74109',compact('tabel_74109', 'year','kab','sum_lk')
       );
    }



    
}
