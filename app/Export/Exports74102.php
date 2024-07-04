<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_102;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74102 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_102s')
                            ->selectRaw("sum(t74102a) as sum_a,sum(t74102b) as sum_b, sum(t74102c) as sum_c, sum(t74102d) as sum_d, sum(t74102e) as sum_e, sum(t74102f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74102 = tabel_74_102::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74102',compact('tabel_74102', 'year','kab','sum_lk')
       );
    }



    
}
