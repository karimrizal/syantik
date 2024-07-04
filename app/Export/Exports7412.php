<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_12;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7412 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_12s')
                            ->selectRaw("sum(t7412a) as sum_a,sum(t7412b) as sum_b, sum(t7412c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7412 = tabel_74_12::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7412',compact('tabel_7412', 'year','kab','sum_lk')
       );
    }













   

    
}
