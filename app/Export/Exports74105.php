<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_105;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74105 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_105s')
                            ->selectRaw("sum(t74105a) as sum_a,sum(t74105b) as sum_b, sum(t74105c) as sum_c, sum(t74105d) as sum_d, sum(t74105e) as sum_e, sum(t74105f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74105 = tabel_74_105::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74105',compact('tabel_74105', 'year','kab','sum_lk')
       );
    }



    
}
