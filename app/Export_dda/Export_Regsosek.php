<?php

namespace App\Export_dda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Http\Request;
use App\Models\dda\tabel_61;
use App\Models\exports;

use Session;
use DB;
use Auth;

class Export_Regsosek implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */


   
    public function view(): View
    {
  
        $list0 = exports::where('idsubsls', 7401050016000300)->get();
        $list1 = exports::where('idsubsls', 7401050016000100)->get();
        $list2 = exports::where('idsubsls', 7401050016000100)->get();
        $list3 = exports::where('idsubsls', 7401050016000300)->get();
        $list4 = exports::where('idsubsls', 7401050016000100)->get();
          
          
             return view('export_dda.export_regsosek',compact('list0','list2','list1','list3','list4')
       );
    }













   

    
}
