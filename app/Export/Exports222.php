<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_222;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports222 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_222s')
                            
                            ->selectRaw("sum(t222a) as sum_lk, sum(t222b) as sum_pr, sum(t222a + t222b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_222 = tabel_222::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_222',compact('tabel_222', 'year','kab','sum_lk')
       );
    }













   

    
}
