<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_66;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports66 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_66s')
            ->selectRaw("sum(t66a) as sum_a")
            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
            ->get();
            $tabel_66 = tabel_66::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_66',compact('tabel_66', 'year','kab','sum_lk')
       );
    }













   

    
}
