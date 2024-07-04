<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_54;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports7454 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_54s')
                            ->selectRaw("sum(t7454a) as sum_a,sum(t7454b) as sum_b, sum(t7454c) as sum_c, sum(t7454d) as sum_d, sum(t7454e) as sum_e, sum(t7454f) as sum_f, sum(t7454g) as sum_g")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_7454 = tabel_74_54::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_7454',compact('tabel_7454', 'year','kab','sum_lk')
       );
    }



    
}
