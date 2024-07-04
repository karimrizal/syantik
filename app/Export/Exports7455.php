<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_55;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7455 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_55s')
                            ->selectRaw("sum(t7455a) as sum_a,sum(t7455b) as sum_b, sum(t7455c) as sum_c, sum(t7455d) as sum_d, sum(t7455e) as sum_e, sum(t7455f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7455 = tabel_74_55::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7455',compact('tabel_7455', 'year','kab','sum_lk')
       );
    }



    
}
