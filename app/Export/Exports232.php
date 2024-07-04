<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_232;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports232 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_232s')
                            
                            ->selectRaw("sum(t232_lk) as sum_lk, sum(t232_pr) as sum_pr, sum(t232_lk + t232_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_232 = tabel_232::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_232',compact('tabel_232', 'year','kab','sum_lk')
       );
    }













   

    
}
