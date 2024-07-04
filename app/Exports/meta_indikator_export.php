<?php

namespace App\Exports;

use App\Models\meta_indikator;
use App\Exports\meta_indikator_export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Excel;
use DB;

class meta_indikator_export implements FromView
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
        return meta_indikator::all();
    } */

    public function view(): View
    {
        return view('exports.indikator', ['data' => meta_indikator::all()->where('id', '=', $this->id)->take(1)]);
    }
}
