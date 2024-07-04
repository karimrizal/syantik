<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_426;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports426 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_426s')
                            ->selectRaw("sum(t426a) as sum_a, sum(t426b) as sum_b, sum(t426c) as sum_c,sum(t426d) as sum_d,
                            sum(t426e) as sum_e,sum(t426f) as sum_f,sum(t426g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_426 = tabel_426::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_426',compact('tabel_426', 'year','kab','sum_lk')
       );
    }













   

    
}
