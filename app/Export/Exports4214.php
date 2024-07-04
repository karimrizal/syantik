<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_4214;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports4214 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_4214s')
                            ->selectRaw("sum(t4214a) as sum_a, sum(t4214b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_4214 = tabel_4214::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_4214',compact('tabel_4214', 'year','kab','sum_lk')
       );
    }













   

    
}
