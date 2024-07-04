<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_913;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports913 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            $sum_lk = DB::table('tabel_913s')
                            ->selectRaw("sum(t913a) as sum_a,sum(t913b) as sum_b, sum(t913c) as sum_c")
                            ->where('tahun', $year)->where('idkab', Auth::user()->idkab )
                            ->get();
            $tabel_913 = tabel_913::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('export.tabel_913',compact('tabel_913', 'year','kab','sum_lk')
       );
    }













   

    
}
