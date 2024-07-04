<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_444;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports444 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_444s')
                            
                            ->selectRaw("sum(t444a) as sum_a, sum(t444b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_444 = tabel_444::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_444',compact('tabel_444', 'year','kab','sum_lk')
       );
    }













   

    
}
