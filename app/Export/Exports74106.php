<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_106;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74106 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_106s')
                            ->selectRaw("sum(t74106a) as sum_a,sum(t74106b) as sum_b, sum(t74106c) as sum_c, sum(t74106d) as sum_d, sum(t74106e) as sum_e, sum(t74106f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74106 = tabel_74_106::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74106',compact('tabel_74106', 'year','kab','sum_lk')
       );
    }



    
}
