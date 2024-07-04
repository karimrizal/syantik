<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_4211;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports4211 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_4211s')
                            ->selectRaw("sum(t4211a) as sum_a, sum(t4211b) as sum_b, sum(t4211c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_4211 = tabel_4211::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_4211',compact('tabel_4211', 'year','kab','sum_lk')
       );
    }













   

    
}
