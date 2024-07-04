<?php

namespace App\Exports;

use App\Models\meta_variabel;
use App\Exports\meta_variabel_export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Excel;
use DB;

class meta_variabel_export implements FromView
{
    protected $id;

    function __construct($id){
        $this->id = $id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    /* public function collection()
    {
        return meta_variabel::all();
    } */

    public function view(): View
    {
        return view('exports.variabel', ['data' => meta_variabel::all()->where('id', '=', $this->id)->take(1)]);
    }
}
