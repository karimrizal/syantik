<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_103;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74103 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_103s')
                            ->selectRaw("sum(t74103a) as sum_a,sum(t74103b) as sum_b, sum(t74103c) as sum_c, sum(t74103d) as sum_d, sum(t74103e) as sum_e, sum(t74103f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74103 = tabel_74_103::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74103',compact('tabel_74103', 'year','kab','sum_lk')
       );
    }



    
}
