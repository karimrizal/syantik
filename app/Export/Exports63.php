<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_63;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports63 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_63s')
                            ->selectRaw("sum(t63a) as sum_a, sum(t63b) as sum_b, sum(t63c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_63 = tabel_63::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_63',compact('tabel_63', 'year','kab','sum_lk')
       );
    }













   

    
}
