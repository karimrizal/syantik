<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use App\Imports\DataImportDua;
use App\Imports\DataImportTiga;
use App\Exports\DataExport;
use App\Exports\DataExportDua;
use App\Exports\DataExportTiga;
use App\Exports\DataExportEmpat;
use App\Models\data;
use App\Models\Kolom;
use App\Models\tabel;
use App\Models\Tahun;
use App\Models\meta_kegiatan;
use App\Models\meta_indikator;
use App\Models\meta_variabel;
use App\Models\metadata;
use App\Models\master_tabel;
use App\Models\arc;
use Excel;
use DB;
use Session;
use Auth;
class DataController extends Controller
{
    public $datas, $bulan, $koloms, $data, $datas_dua, $report, $tabel, $tables;
    
    public function index (Request $request){

        $bulan2 = $request->input('bulan2');
        $bulan3 = $request->input('bulan3');
        $bulan4 = $request->input('bulan4');
        $tabel = $request->input('tabel');
        
        $jenis_data = $request->input('jenisData');
        
        $arcs = arc::where('organisasi', Auth::user()->organisasi )->get();
        
        $metadata = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
            'metadata.id AS id','meta_kegiatan.b0r1 AS nama', 'meta_indikator.ind_b1k2 AS ind_nama', 'meta_variabel.var_b1k2 AS var_nama', 'metadata.tabel_id AS tabel'
        ])
    
        ->where('metadata.organisasi', Auth::user()->organisasi )->get();

        $meta_keg = meta_kegiatan::where('organisasi', Auth::user()->organisasi )->get();
        $meta_ind = meta_indikator::where('organisasi', Auth::user()->organisasi )->get();
        $meta_var = meta_variabel::where('organisasi', Auth::user()->organisasi )->get();

  
        $datas = data::all();

        $bulan = $request->input('bulan');
        
        
         $hapus = DB::table('tabels')
        
        
        ->select([
           'id', 'nama AS tabel', 'petugas_upload'
            , 'created_at', 'status', 'status_opd', 'status_bps'
        ])
        
        ->where('organisasi', Auth::user()->organisasi )->get();

  
        $report =[];
        $tables = master_tabel::where('idkab', Auth::user()->idkab )->where('tahun', 2020 )->get();
        $tables2 = tabel::where('idkab', Auth::user()->idkab )->where('organisasi', Auth::user()->organisasi )->get();
        
        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id, ''),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $tabel)
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
        
        $span = DB::table('data')->where('tabel_id', '=', $tabel)->groupBy('kolom_id2')->distinct('kolom_id')->count('kolom_id');
    
        
        return view('data.input_data',compact('bulan','report', 'koloms', 'hapus', 'koloms_id2', 'tables','tables2', 'tabel','datas','span','meta_keg', 'meta_ind','meta_var','metadata','arcs','jenis_data' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
    ]     );


    }
    
    
    public function index2 (Request $request){

        
        $metadata = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
            'metadata.id AS id','meta_kegiatan.b0r1 AS nama', 'meta_indikator.ind_b1k2 AS ind_nama', 'meta_variabel.var_b1k2 AS var_nama', 'metadata.tabel_id AS tabel'
        ])
    
        ->where('metadata.organisasi', Auth::user()->organisasi )->get();
        
        $meta_keg = meta_kegiatan::where('organisasi', Auth::user()->organisasi )->get();
        $meta_ind = meta_indikator::where('organisasi', Auth::user()->organisasi )->get();
        $meta_var = meta_variabel::where('organisasi', Auth::user()->organisasi )->get();

  
      
       
        $tables = master_tabel::where('idkab', Auth::user()->idkab )->where('tahun', 2020 )->get();
      
    
        
        return view('data.metadata_data',compact('tables','meta_keg', 'meta_ind','meta_var', 'metadata' ));


    }
    
    
    public function inputMetadata(Request $request)
    {
       
      
        
        $user = new metadata;
        $user->tabel_id = $request->tabel_id;
        $user->kegiatan_id = $request->kegiatan_id;
        $user->meta__indikator_id = $request->meta__indikator_id;
        $user->meta__variabel_id = $request->meta__variabel_id;
         $user->organisasi = Auth::user()->organisasi;
        $simpan = $user->save();
  
        if($simpan){
            Session::flash('success', 'Tambah Metadata Berhasil');
            return redirect()->back();
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->back();
        }
    }
       public function destroy9(metadata $post)
    {

        
         
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $post->delete();
        
        return redirect()->back()
                        ->with('success','Post deleted successfully');
    }

    function import(Request $request){
        
          $request->validate([
           
            'file9' => 'required',
          
        ]);
       
            /*$request->validate([
                'file9' => 'required|mimes:xlsx,xls'
            ]);*/
            $file = $request->file('file9');
            $name = time().'.xlsx';
            $path = public_path('documents'.DIRECTORY_SEPARATOR);
             $user = Auth::user()->name;
             $organisasi = Auth::user()->organisasi;
              $idkab = Auth::user()->idkab;
          
           
          
            if ( $file->move($path, $name) ){
                $inputFileName = $path.$name;
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                $reader->setReadDataOnly(true);
                $reader->setLoadSheetsOnly(["Worksheet"]);
                $spreadSheet = $reader->load($inputFileName);
                $workSheet = $spreadSheet->getActiveSheet()->toArray();
                

                $worksheets = $spreadSheet->getActiveSheet();
                $column    = $worksheets->getHighestColumn();
                $Row = $worksheets->getHighestRow();


                     $nama_tabel    = $workSheet[0][1];
                     $jumlah_kolom    = $workSheet[4][1];
 
                Tabel::updateOrCreate([

                    'nama' => $nama_tabel,
                    'organisasi' => $organisasi,
                    'idkab' => $idkab, 
                ], [
                    
                    
                    'petugas_upload' => $user,
                     
                     
                ]);

                
                
                switch($column) {
                    case "B":
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                    $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;

                case "C":
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                    $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;
                case "D":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][3];
                    
                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;
                 case "E":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;

                case "F":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                        
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                break;


                case "G":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                

                break;
                
                
                case "H":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;
                
                case "I":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['8'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][8];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                break;
                
                case "J":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['8'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][8];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['9'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][9];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                break;
                
                
                case "K":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['8'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][8];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['9'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][9];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                 for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['10'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][10];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                break;
                
                case "L":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['8'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][8];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['9'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][9];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                 for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['10'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][10];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['11'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][11];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                     elseif($jumlah_kolom == 10){
                        $kolom2    = $workSheet[5][11];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                break;
                
                
                case "M":

                    
                    for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['1'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][1];

                    
                    
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['2'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    $kolom2    = $workSheet[5][1];
                    $kolom    = $workSheet[6][2];
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['3'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                  
                    $kolom    = $workSheet[6][3];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['4'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][4];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][3];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['5'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][5];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }

                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['6'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                   
                    $kolom    = $workSheet[6][6];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][4];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['7'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][7];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['8'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][8];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][5];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['9'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][9];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                 for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['10'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][10];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][6];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['11'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][11];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                     elseif($jumlah_kolom == 10){
                        $kolom2    = $workSheet[5][11];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                for($i = 7;$i <$Row;$i++)
                {
                    $baris     = $workSheet[$i]['0'];
                    $data    = $workSheet[$i]['12'];
                    $tabel    = $workSheet[0][1];
                    $wilayah    = $workSheet[1][1];
                    $tahun    = $workSheet[2][1];
                   $sumber    = Auth::user()->organisasi;
                    
                    $kolom    = $workSheet[6][12];

                    if($jumlah_kolom == 2){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 3){
                        $kolom2    = $workSheet[5][10];
                    }
                    elseif($jumlah_kolom == 4){
                        $kolom2    = $workSheet[5][9];
                    }
                    elseif($jumlah_kolom == 5){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 6){
                        $kolom2    = $workSheet[5][7];
                    }
                    elseif($jumlah_kolom == 7){
                        $kolom2    = $workSheet[5][8];
                    }
                    elseif($jumlah_kolom == 8){
                        $kolom2    = $workSheet[5][9];
                    }
                     elseif($jumlah_kolom == 9){
                        $kolom2    = $workSheet[5][10];
                    }
                     elseif($jumlah_kolom == 10){
                        $kolom2    = $workSheet[5][11];
                    }
                    elseif($jumlah_kolom == 11){
                        $kolom2    = $workSheet[5][12];
                    }
                    else{
                        $kolom2    = $workSheet[5][1];
                    }
                    
                    data::updateOrCreate([

                        'desa' => $baris,
                        'kolom_id' => $kolom,
                        'tabel_id' => $tabel,
                        'wilayah' => $wilayah,
                        'tahun' => $tahun,
                        'sumber' => $sumber,
                        'kolom_id2' => $kolom2,
                                
                    ], [
                        
                        'data' => $data,
                         
                    ]);
                  //  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
                   
                }
                
                break;
                
                
                
                default:
            }

                return redirect()->back()->with(['success4' => 'Upload success']);
            }
        }
        
    
    function import_ARC(Request $request){
        
	$request->validate([
	   
	   'nama_data' => 'required',
	  'file9' => 'required',
	
  ]);
 
	  /*$request->validate([
		  'file9' => 'required|mimes:xlsx,xls'
	  ]);*/
	  $file = $request->file('file9');
	  $name = time().'.xlsx';
	  $path = public_path('documents'.DIRECTORY_SEPARATOR);
	   $user = Auth::user()->name;
	   $organisasi = Auth::user()->organisasi;
	
	 
	
	  if ( $file->move($path, $name) ){
		  $inputFileName = $path.$name;
		  $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		  $reader->setReadDataOnly(true);
		  $reader->setLoadSheetsOnly(["Worksheet"]);
		  $spreadSheet = $reader->load($inputFileName);
		  $workSheet = $spreadSheet->getActiveSheet()->toArray();
		  

		  $worksheets = $spreadSheet->getActiveSheet();
		  $column    = $worksheets->getHighestColumn();
		  $Row = $worksheets->getHighestRow();


			   $nama_tabel    = $request->nama_data;
			   $jumlah_kolom    = $workSheet[4][1];

		  Tabel::updateOrCreate([

			  'nama' => $nama_tabel,
			  'organisasi' => $organisasi,       
		  ], [
			  
			  
			  'petugas_upload' => $user,
			   
			   
		  ]);

		  
		  
		  switch($column) {
			  case "B":
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;

		  case "C":
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;
		  case "D":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][3];
			  
			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;
		   case "E":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;

		  case "F":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
				  
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  break;


		  case "G":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  

		  break;
		  
		  
		  case "H":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;
		  
		  case "I":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['8'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][8];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  break;
		  
		  case "J":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['8'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][8];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['9'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][9];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  break;
		  
		  
		  case "K":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['8'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][8];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['9'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][9];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		   for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['10'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][10];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  break;
		  
		  case "L":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['8'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][8];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['9'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][9];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		   for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['10'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][10];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['11'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][11];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			   elseif($jumlah_kolom == 10){
				  $kolom2    = $workSheet[5][11];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  break;
		  
		  
		  case "M":

			  
			  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['1'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][1];

			  
			  
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['2'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  $kolom2    = $workSheet[5][1];
			  $kolom    = $workSheet[6][2];
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['3'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			
			  $kolom    = $workSheet[6][3];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['4'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][4];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][3];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['5'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][5];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }

		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['6'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			 
			  $kolom    = $workSheet[6][6];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][4];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['7'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][7];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['8'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][8];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][5];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['9'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][9];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		   for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['10'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][10];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][6];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['11'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][11];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			   elseif($jumlah_kolom == 10){
				  $kolom2    = $workSheet[5][11];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  for($i = 7;$i <$Row;$i++)
		  {
			  $baris     = $workSheet[$i]['0'];
			  $data    = $workSheet[$i]['12'];
			  $tabel    = $request->nama_data;
			  $wilayah    = $workSheet[1][1];
			  $tahun    = $workSheet[2][1];
			 $sumber    = Auth::user()->organisasi;
			  
			  $kolom    = $workSheet[6][12];

			  if($jumlah_kolom == 2){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 3){
				  $kolom2    = $workSheet[5][10];
			  }
			  elseif($jumlah_kolom == 4){
				  $kolom2    = $workSheet[5][9];
			  }
			  elseif($jumlah_kolom == 5){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 6){
				  $kolom2    = $workSheet[5][7];
			  }
			  elseif($jumlah_kolom == 7){
				  $kolom2    = $workSheet[5][8];
			  }
			  elseif($jumlah_kolom == 8){
				  $kolom2    = $workSheet[5][9];
			  }
			   elseif($jumlah_kolom == 9){
				  $kolom2    = $workSheet[5][10];
			  }
			   elseif($jumlah_kolom == 10){
				  $kolom2    = $workSheet[5][11];
			  }
			  elseif($jumlah_kolom == 11){
				  $kolom2    = $workSheet[5][12];
			  }
			  else{
				  $kolom2    = $workSheet[5][1];
			  }
			  
			  data::updateOrCreate([

				  'desa' => $baris,
				  'kolom_id' => $kolom,
				  'tabel_id' => $tabel,
				  'wilayah' => $wilayah,
				  'tahun' => $tahun,
				  'sumber' => $sumber,
				  'kolom_id2' => $kolom2,
						  
			  ], [
				  
				  'data' => $data,
				   
			  ]);
			//  \DB::insert('insert into data(desa,data,tabel_id) values (?,?,?)', [$nim, $nama, $tabel]);
			 
		  }
		  
		  break;
		  
		  
		  
		  default:
	  }

		  return redirect()->back()->with(['success4' => 'Upload success']);
	  }
  }

      
    

   

    public function UnduhExcel()
    {
        return Excel::download(new DataExport, 'Tabel 1 Arah.xlsx');
    }

    public function UnduhExcel2()
    {
        return Excel::download(new DataExportDua, 'Tabel 2 Arah.xlsx');
    }

    public function UnduhExcel3(Request $request)
    {
        
        $file = 'Tabel_'.$request->id.'.xlsx';
        return Excel::download(new DataExportTiga($request->id), $file);
    }
    public function UnduhExcel4(Request $request)
    {
        return Excel::download(new DataExportEmpat($request->id), 'Tabel 3 Arah.xlsx');
    }
    
      public function destroy($post, $id)
    {

        
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        data::where('tabel_id' , $id)->where('sumber', '=', Auth::user()->organisasi)->delete();
        tabel::where('nama' , $id)->where('organisasi', '=', Auth::user()->organisasi)->delete();
        
        return redirect()->back();
    }

}
