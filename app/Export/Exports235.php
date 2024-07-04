<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\tabel_235;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports235 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_235s')
                            
                            ->selectRaw("sum(t235_lk) as sum_lk, sum(t235_pr) as sum_pr, sum(t235_lk + t235_pr) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_235 = tabel_235::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_235',compact('tabel_235', 'year','kab','sum_lk')
       );
    }













   

    
}
