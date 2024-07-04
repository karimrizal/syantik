<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_915;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports915 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_915s')
                            ->selectRaw("sum(t915a) as sum_a, sum(t915b) as sum_b, sum(t915c) as sum_c, sum(t915d) as sum_d, sum(t915e) as sum_e")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_915 = tabel_915::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_915',compact('tabel_915', 'year','kab','sum_lk')
       );
    }













   

    
}
