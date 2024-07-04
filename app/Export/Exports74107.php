<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_107;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74107 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_107s')
                            ->selectRaw("sum(t74107a) as sum_a,sum(t74107b) as sum_b, sum(t74107c) as sum_c, sum(t74107d) as sum_d, sum(t74107e) as sum_e, sum(t74107f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74107 = tabel_74_107::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74107',compact('tabel_74107', 'year','kab','sum_lk')
       );
    }



    
}
