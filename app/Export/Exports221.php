<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_221;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports221 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_221s')
                            
                            ->selectRaw("sum(t221a) as sum_lk, sum(t221b) as sum_pr, sum(t221a + t221b) as sum_lkpr")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_221 = tabel_221::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_221',compact('tabel_221', 'year','kab','sum_lk')
       );
    }













   

    
}
