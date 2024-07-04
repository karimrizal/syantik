<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_117;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74117 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_117s')
                            ->selectRaw("sum(t74117a) as sum_a,sum(t74117b) as sum_b, sum(t74117c)  as sum_c, sum(t74117d) as sum_d, sum(t74117e) as sum_e, sum(t74117f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74117 = tabel_74_117::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74117',compact('tabel_74117', 'year','kab','sum_lk')
       );
    }



    
}
