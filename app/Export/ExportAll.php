<?php

namespace App\Export;

use App\Models\dda\tabel_74_113;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 
use Illuminate\Support\Facades\Schema;
class ExportAll implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tabel_74_113::all();
    }

    
    public function headings(): array
    {
        return [
            Schema::getColumnListing('tabel_74_113s'),
        ];
    }
    
}