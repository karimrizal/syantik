<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_5;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports745 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_5s')
                            ->selectRaw("sum(t745a) as sum_a,sum(t745b) as sum_b,sum(t745c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_745 = tabel_74_5::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_745',compact('tabel_745', 'year','kab','sum_lk')
       );
    }













   

    
}
