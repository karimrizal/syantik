<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_98;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7498 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_98s')
                            ->selectRaw("sum(t7498a) as sum_a,sum(t7498b) as sum_b, sum(t7498c) as sum_c, sum(t7498d) as sum_d, sum(t7498e) as sum_e, sum(t7498f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7498 = tabel_74_98::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7498',compact('tabel_7498', 'year','kab','sum_lk')
       );
    }



    
}
