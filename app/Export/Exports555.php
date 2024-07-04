<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_555;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports555 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_555s')
                            ->selectRaw("sum(t555a) as sum_a, sum(t555b) as sum_b, sum(t555c) as sum_c, sum(t555d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_555 = tabel_555::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_555',compact('tabel_555', 'year','kab','sum_lk')
       );
    }













   

    
}
