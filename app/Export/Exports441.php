<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_441;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports441 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_441s')
                            ->selectRaw("sum(t441a) as sum_a, sum(t441b) as sum_b, sum(t441c) as sum_c, sum(t441d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_441 = tabel_441::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_441',compact('tabel_441', 'year','kab','sum_lk')
       );
    }













   

    
}
