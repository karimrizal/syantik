<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_531;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Export531 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $tabel_531 = tabel_531::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('exports.tabel_531',compact('tabel_531', 'year','kab')
       );
    }













   

    
}
