<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_106;
use App\Models\master_kab;

use Session;
use DB;
use Auth;

class Exports_dda106 implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
        $idkab= Session::get('key2');
        $year= Session::get('key');
            $kab = master_kab::where('idkab', $idkab )->get();
            
            if(empty($year)){
            $kab = master_kab::where('idkab', 7400 )->get();    
            $year = 2021;
            
            $tabel_106 = tabel_106::where('idkab', 7400 )->get();
            }
            else{
               $tabel_106 = tabel_106::where('idkab', 7400 )->get(); 
            }
             return view('export_dda.tabel_106',compact('tabel_106', 'year','kab')
       );
    }













   

    
}