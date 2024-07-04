<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_121;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports121 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


    
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
  
            
            if(empty($year)){
            $kab = master_kab::where('idkab', 7400 )->get();    
            $year = 2021;
            $tabel_121 = tabel_121::where('tahun', $year)->where('idkab', 7400 )->get();
            }
            else{
                $kab = master_kab::where('idkab', $idkab )->get();
                $tabel_121 = tabel_121::where('tahun', $year)->where('idkab', $idkab )->get();
            }
            
             return view('export.tabel_121',compact('tabel_121', 'year','kab')
       );
    }













   

    
}
