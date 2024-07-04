<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_3218;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports3218 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_3218s')
                            
                            ->selectRaw("sum(t3218_lk) as sum_lk, sum(t3218_pr) as sum_pr, sum(t3218_lk + t3218_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_3218 = tabel_3218::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_3218',compact('tabel_3218', 'year','kab','sum_lk')
       );
    }













   

    
}
