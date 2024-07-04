<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_223;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports223 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_223s')
                            
            ->selectRaw("sum(t223a) as sum_lk")
            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
            ->get();
            $tabel_223 = tabel_223::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_223',compact('tabel_223', 'year','kab','sum_lk')
       );
    }













   

    
}
