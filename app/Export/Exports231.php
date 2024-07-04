<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_231;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports231 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_231s')
                            
                            ->selectRaw("sum(t231_lk) as sum_lk, sum(t231_pr) as sum_pr, sum(t231_lk + t231_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_231 = tabel_231::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_231',compact('tabel_231', 'year','kab','sum_lk')
       );
    }













   

    
}
