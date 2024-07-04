<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use App\Imports\DataImportDua;
use App\Imports\DataImportTiga;
use App\Exports\DataExport;
use App\Exports\DataExportDua;
use App\Exports\DataExportTiga;
use App\Models\data;
use App\Models\Kolom;
use App\Models\tabel;
use App\Models\Tahun;
use Excel;
use DB;
use Auth;

class DataExportTiga implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    protected $id;

        function __construct($id) {
                $this->id = $id;
                }


    public function view(): View
    {
        //
        $datas = data::all();

        $report =[];
        $tables = tabel::all();

        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id, ''),'_',COALESCE(kolom_id2,'')) AS title")
        ])
       ->where('tabel_id', '=', $this->id)
       ->where('sumber', '=', Auth::user()->organisasi)
       ->groupBy('title')
        ->groupBy('desa')
       ->orderBy('id')
        ->get();

        
        $datas->each(function($item) use (&$report) {
            $report[$item->desa][$item->title] = [
                'count' => $item->amount,
                'desas' => $item->desa,
                
               
            ];
        });

        $koloms = $datas->pluck('title')->unique();

        $koloms_id2 = $datas->pluck('kolom_id2')->sortBy('kolom_id')->unique();
         $span = DB::table('data')->where('tabel_id', '=', $this->id)->groupBy('kolom_id2')->distinct('kolom_id')->count('kolom_id');

        return view('exports.data_tiga', compact('report', 'koloms','koloms_id2','span'),
        ['tes' => Data::all()->where('tabel_id', '=', $this->id)->where('sumber', '=', Auth::user()->organisasi)->take(1)
        ]);
    }













   

    
}
