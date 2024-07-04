<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_732;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports732 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_732s')
                            ->selectRaw("sum(t732a) as sum_a, sum(t732b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_732 = tabel_732::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_732',compact('tabel_732', 'year','kab','sum_lk')
       );
    }













   

    
}
