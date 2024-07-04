<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_74_123;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports74123 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
           $sum_lk = DB::table('tabel_74_123s')
                            ->selectRaw("sum(t74123a) as sum_a,sum(t74123b) as sum_b, sum(t74123c)  as sum_c, sum(t74123d) as sum_d, sum(t74123e) as sum_e, sum(t74123f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_74123 = tabel_74_123::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_74123',compact('tabel_74123', 'year','kab','sum_lk')
       );
    }



    
}
