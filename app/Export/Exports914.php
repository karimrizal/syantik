<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_914;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports914 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_914s')
                            ->selectRaw("sum(t914a) as sum_a,sum(t914b) as sum_b, sum(t914c) as sum_c, sum(t914d) as sum_d")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_914 = tabel_914::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_914',compact('tabel_914', 'year','kab','sum_lk')
       );
    }













   

    
}
