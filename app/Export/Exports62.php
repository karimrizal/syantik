<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_62;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports62 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_62s')
                            ->selectRaw("sum(t62a) as sum_a")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_62 = tabel_62::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_62',compact('tabel_62', 'year','kab','sum_lk')
       );
    }













   

    
}
