<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_466;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports466 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_466s')
                            ->selectRaw("sum(t466a) as sum_a, sum(t466b) as sum_b, sum(t466c) as sum_c, sum(t466d) as sum_d, sum(t466e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_466 = tabel_466::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_466',compact('tabel_466', 'year','kab','sum_lk')
       );
    }













   

    
}