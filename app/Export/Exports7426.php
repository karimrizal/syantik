<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_26;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7426 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_26s')
                            ->selectRaw("sum(t7426a) as sum_a,sum(t7426b) as sum_b, sum(t7426c) as sum_c, sum(t7426d) as sum_d, sum(t7426e) as sum_e, sum(t7426f) as sum_f, sum(t7426g) as sum_g, sum(t7426h) as sum_h, sum(t7426i) as sum_i")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7426 = tabel_74_26::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7426',compact('tabel_7426', 'year','kab','sum_lk')
       );
    }













   

    
}
