<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_923;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports923 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
          $sum_lk = DB::table('tabel_923s')
                            ->selectRaw("sum(t923a) as sum_a,sum(t923b) as sum_b")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_923 = tabel_923::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_923',compact('tabel_923', 'year','kab','sum_lk')
       );
    }













   

    
}
