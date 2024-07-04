<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function masterTabel()
    {
        // Use the $tableName parameter to dynamically select the table
        $data = DB::table('master_tabels')->where('idkab',7400)->where('status',1)->where('kopi_panas',1)->orderBy('tahun', 'desc')->get();

        return response()->json($data);
    }
    
    public function fetchData($tableName, $year)
    {
        // Use the $tableName parameter to dynamically select the table
        $data = DB::table($tableName)->where('idkab',7400)->where('tahun',$year)->get();

        return response()->json($data);
    }
    
    public function fetchKolom()
    {
        // Use the $tableName parameter to dynamically select the table
        $data = DB::table('master_kolom')->get();

        return response()->json($data);
    }
}