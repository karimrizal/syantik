<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_425;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports425 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_425s')
                            ->selectRaw("sum(t425a) as sum_a, sum(t425b) as sum_b, sum(t425c) as sum_c,sum(t425d) as sum_d,
                            sum(t425e) as sum_e,sum(t425f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_425 = tabel_425::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_425',compact('tabel_425', 'year','kab','sum_lk')
       );
    }













   

    
}
