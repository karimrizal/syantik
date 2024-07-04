<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_67;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports67 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_67s')
                            ->selectRaw("sum(t67a) as sum_a, sum(t67b) as sum_b, sum(t67c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_67 = tabel_67::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_67',compact('tabel_67', 'year','kab','sum_lk')
       );
    }













   

    
}
