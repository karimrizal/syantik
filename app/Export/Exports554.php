<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_554;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports554 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_554s')
                            ->selectRaw("sum(t554a) as sum_a, sum(t554b) as sum_b, sum(t554c) as sum_c, sum(t554d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_554 = tabel_554::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_554',compact('tabel_554', 'year','kab','sum_lk')
       );
    }













   

    
}
