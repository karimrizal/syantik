<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_64;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports64 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_64s')
            ->selectRaw("sum(t64a) as sum_a")
            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
            ->get();
            $tabel_64 = tabel_64::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_64',compact('tabel_64', 'year','kab','sum_lk')
       );
    }













   

    
}
