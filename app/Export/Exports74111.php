<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_111;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74111 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_111s')
                            ->selectRaw("sum(t74111a) as sum_a,sum(t74111b) as sum_b, sum(t74111c) as sum_c, sum(t74111d) as sum_d, sum(t74111e) as sum_e, sum(t74111f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74111 = tabel_74_111::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74111',compact('tabel_74111', 'year','kab','sum_lk')
       );
    }



    
}
