<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_105;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports105 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_105s')
                            ->selectRaw("sum(t105a) as sum_a,sum(t105b) as sum_b, sum(t105c) as sum_c, sum(t105d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_105 = tabel_105::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_105',compact('tabel_105', 'year','kab','sum_lk')
       );
    }













   

    
}
