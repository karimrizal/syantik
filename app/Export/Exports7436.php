<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_36;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7436 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_36s')
                            ->selectRaw("sum(t7436a) as sum_a,sum(t7436b) as sum_b, sum(t7436c) as sum_c, sum(t7436d) as sum_d, sum(t7436e) as sum_e, sum(t7436f) as sum_f, sum(t7436g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7436 = tabel_74_36::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7436',compact('tabel_7436', 'year','kab','sum_lk')
       );
    }













   

    
}
