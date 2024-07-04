<?php

namespace App\Http\Controllers;
use App\Models\tabel;
use App\Models\data;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Auth;
class VerifikasiDataController extends Controller
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
        ->where('sumber', '=', Auth::user()->organisasi)
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
      
        return view('verifikasi_data',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span', 'tabels_opd' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
    ]     );
        
    }
    
     public function update_ketWali($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_ketBps($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_ketOpd($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
    public function update_ketPerbaikan($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }
    
     public function update_ketDetail($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }


    public function show(Request $request)
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
      
        return view('posts.show',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
    ]     );
    }
    
     public function show2(Request $request)
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
      
        return view('posts.show2',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
    ]     );
    }
    
    public function show3(Request $request)
    {
        
        $tabel = $request->input('tabel');
        $tabels = tabel::where('nama', $tabel )->get();
        $report =[];
        
        $metadatas = DB::table('metadata')
        ->join('meta_kegiatan', 'meta_kegiatan.id', '=', 'metadata.kegiatan_id')
     
        ->where('metadata.tabel_id', '=', $tabel)
        ->where('meta_kegiatan.status_tampil', '=', 'Tampil')
        ->groupBy('tabel_id')
        ->get();
        
        
        $metadatas_ind = DB::table('metadata')
        
        ->join('meta_indikator', 'meta_indikator.id', '=', 'metadata.meta__indikator_id')
        ->select([
             'meta_indikator.ind_b1k2 AS ind_nama'
        ])
        ->where('metadata.tabel_id', '=', $tabel)
        ->where('meta_indikator.status_tampil', '=', 'Tampil')
        ->groupBy('meta__indikator_id')
        ->get();
        
        $metadatas_var = DB::table('metadata')
        
        ->join('meta_variabel', 'meta_variabel.id', '=', 'metadata.meta__variabel_id')
        ->select([
             'meta_variabel.var_b1k2 AS var_nama'
        ])
        ->where('metadata.tabel_id', '=', $tabel)
        ->where('meta_variabel.status_tampil', '=', 'Tampil')
        ->groupBy('meta__variabel_id')
        ->get();
        
        $datas = DB::table('data')
        
        ->select([
            'desa as desa', 'kolom_id', 'kolom_id2 as kolom_id2', 'data as amount', DB::raw("CONCAT(COALESCE(kolom_id),'_',COALESCE(kolom_id2,'')) AS title")
        ])
        ->where('tabel_id', '=', $tabel)
        ->where('sumber', '=', Auth::user()->organisasi)
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
      
        return view('posts.show3',compact('report', 'koloms', 'koloms_id2', 'tabels', 'tabel','datas','span','metadatas_ind','metadatas','metadatas_var' ), 
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
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
        ->where('sumber', '=', Auth::user()->organisasi)
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
        ['tes' => Data::all()->where('tabel_id', '=', $tabel)->where('sumber', '=', Auth::user()->organisasi)->take(1)
   
    ]     );
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
     
      public function submit(Request $request)
    {
       $user = tabel::find($request->user_id);
       
        $user->petugas = $request->petugas;
        $user->tanggal_verifikasi_walidata = Carbon::now();
        $user->status = $request->status;
   $user->alasan_tampil_walidata = $request->alasan_tampil_walidata;
        $user->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_data');
    }
    
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
    
     public function submit3(Request $request)
    {
       $user = tabel::find($request->user_id);
       
        $user->petugas_opd = $request->petugas_opd;
        $user->tanggal_verifikasi_opd = Carbon::now();
        $user->status_opd = $request->status_opd;
   $user->alasan_tampil_opd = $request->alasan_tampil_opd;
        $user->save();
        return redirect::to('https://webapps.bps.go.id/sultra/syantik/verifikasi_data');
    }
    
    
    public function changeStatus(Request $request)
    {
        $user = tabel::find($request->user_id);
        $user->status = $request->status;
        $user->petugas = $request->petugas;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    
    public function changeStatus2(Request $request)
    {
        $user = tabel::find($request->user_id);
        $user->status_bps = $request->status_bps;
        $user->petugas_bps = $request->petugas_bps;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    
    
    public function update_perbaikan($id)
    {
    	$category = tabel::find($id);

	    return response()->json([
	      'data' => $category
	    ]);
    }

    public function edit_perbaikan(Request $request, $id)
    {
        

      tabel::updateOrCreate(
       [
        'id' => $id
       ],
       [
        'perbaikan_opd' => $request->perbaikan_opd,
        'catatan_perbaikan' => $request->catatan_perbaikan,
   
      

     
       ]
      );

      return response()->json([ 'success' => true ]);

    }
}
