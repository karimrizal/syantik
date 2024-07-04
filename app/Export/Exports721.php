<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_721;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports721 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_721s')
                            ->selectRaw("sum(t721a) as sum_a, sum(t721b) as sum_b, sum(t721c) as sum_c, sum(t721d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_721 = tabel_721::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_721',compact('tabel_721', 'year','kab','sum_lk')
       );
    }













   

    
}
