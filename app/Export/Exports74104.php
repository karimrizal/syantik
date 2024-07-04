<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_104;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74104 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_104s')
                            ->selectRaw("sum(t74104a) as sum_a,sum(t74104b) as sum_b, sum(t74104c) as sum_c, sum(t74104d) as sum_d, sum(t74104e) as sum_e, sum(t74104f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74104 = tabel_74_104::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74104',compact('tabel_74104', 'year','kab','sum_lk')
       );
    }



    
}
