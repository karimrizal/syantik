<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_66;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7466 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_66s')
                           ->selectRaw("sum(t7466a) as sum_a,sum(t7466b) as sum_b, ( (sum(t7466b)/sum(t7466a))*100 ) as sum_c, sum(t7466d) as sum_d, sum(t7466e) as sum_e, sum(t7466f) as sum_f
                           ")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7466 = tabel_74_66::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7466',compact('tabel_7466', 'year','kab','sum_lk')
       );
    }



    
}
