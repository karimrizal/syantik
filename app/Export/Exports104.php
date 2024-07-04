<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_104;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports104 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_104s')
            ->selectRaw("sum(t104a) as sum_a,sum(t104b) as sum_b, sum(t104c) as sum_c, sum(t104d) as sum_d")
            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
            ->get();
            $tabel_104 = tabel_104::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_104',compact('tabel_104', 'year','kab','sum_lk')
       );
    }













   

    
}
