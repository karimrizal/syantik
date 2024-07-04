<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_454;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports454 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_454s')
                            ->selectRaw("sum(t454a) as sum_a, sum(t454b) as sum_b, sum(t454c) as sum_c, sum(t454d) as sum_d, sum(t454e) as sum_e, sum(t454f) as sum_f")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_454 = tabel_454::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_454',compact('tabel_454', 'year','kab','sum_lk')
       );
    }













   

    
}
