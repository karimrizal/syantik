<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_911;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports911 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_911s')
                            ->selectRaw("sum(t911a) as sum_a,sum(t911b) as sum_b, sum(t911c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_911 = tabel_911::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_911',compact('tabel_911', 'year','kab','sum_lk')
       );
    }













   

    
}
