<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_234;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports234 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_234s')
                            
                            ->selectRaw("sum(t234_lk) as sum_lk, sum(t234_pr) as sum_pr, sum(t234_lk + t234_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_234 = tabel_234::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_234',compact('tabel_234', 'year','kab','sum_lk')
       );
    }













   

    
}
