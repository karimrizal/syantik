<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_119;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74119 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_119s')
                            ->selectRaw("sum(t74119a) as sum_a,sum(t74119b) as sum_b, sum(t74119c)  as sum_c, sum(t74119d) as sum_d, sum(t74119e) as sum_e, sum(t74119f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74119 = tabel_74_119::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74119',compact('tabel_74119', 'year','kab','sum_lk')
       );
    }



    
}
