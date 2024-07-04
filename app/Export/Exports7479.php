<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_79;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7479 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_79s')
                            ->selectRaw("sum(t7479a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7479 = tabel_74_79::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7479',compact('tabel_7479', 'year','kab','sum_lk')
       );
    }



    
}