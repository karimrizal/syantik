<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_916;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports916 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_916s')
                            ->selectRaw("sum(t916a) as sum_a, sum(t916b) as sum_b, sum(t916c) as sum_c, sum(t916d) as sum_d, sum(t916e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_916 = tabel_916::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_916',compact('tabel_916', 'year','kab','sum_lk')
       );
    }













   

    
}
