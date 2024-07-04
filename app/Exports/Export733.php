<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_733;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Export733 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $year= Session::get('key');
            $kab = master_kab::where('idkab', Auth::user()->idkab )->get();
            
            $tabel_733 = tabel_733::where('tahun', $year)->where('idkab', Auth::user()->idkab )->get();
             return view('exports.tabel_733',compact('tabel_733', 'year','kab')
       );
    }













   

    
}
