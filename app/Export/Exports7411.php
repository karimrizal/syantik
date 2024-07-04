<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_11;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7411 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_11s')
                            ->selectRaw("sum(t7411a) as sum_a,sum(t7411b) as sum_b, sum(t7411c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7411 = tabel_74_11::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7411',compact('tabel_7411', 'year','kab','sum_lk')
       );
    }













   

    
}
