<?php

namespace App\Http\Controllers;
use App\Models\tabel;
use App\Models\data;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;
class VerifikasiDataOPD extends Controller
{
    //
    public function index(Request $request)
    {
        $tabels = tabel::where('idkab', Auth::user()->idkab )->get();
        $tabels_opd = tabel::where('organisasi', Auth::user()->organisasi )->where('idkab', Auth::user()->idkab )->get();
        $tabel = $request->input('tabel');
        $report =[];
        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $tabel)
        
        ->groupBy('desa')
        ->groupBy('title')
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
      
        return view('verifikasi_data_opd',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span', 'tabels_opd' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->take(1)
   
    ]     );
        
    }


    
     public function show4(Request $request)
    {
        
        $tabel = $request->input('tabel');
        $tabels = tabel::where('nama', $tabel )->get();
        $report =[];
        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $tabel)
        
        ->groupBy('desa')
        ->groupBy('title')
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
      
        return view('posts.show4',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->take(1)
   
    ]     );
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
     
      
    
       public function submit2(Request $request)
    {
       $user = tabel::find($request->user_id);
       
        $user->petugas_bps = $request->petugas_bps;
        $user->tanggal_verifikasi_bps = Carbon::now();
        $user->status_bps = $request->status_bps;
   $user->alasan_tampil_bps = $request->alasan_tampil_bps;
        $user->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_data');
    }
    
    
}
