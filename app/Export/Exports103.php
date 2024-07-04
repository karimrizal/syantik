<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_103;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports103 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_103s')
                            ->selectRaw("sum(t103a) as sum_a,sum(t103b) as sum_b, sum(t103c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_103 = tabel_103::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_103',compact('tabel_103', 'year','kab','sum_lk')
       );
    }













   

    
}
