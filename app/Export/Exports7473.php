<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_73;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7473 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_73s')
                            ->selectRaw("sum(t7473a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7473 = tabel_74_73::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7473',compact('tabel_7473', 'year','kab','sum_lk')
       );
    }



    
}
