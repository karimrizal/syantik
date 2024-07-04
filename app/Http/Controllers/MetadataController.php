<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konsultasi;
use App\Models\pembinaan;
use App\Models\master_opd;
use App\Models\metadata_kegiatan;
use App\Models\metadata_indikator;
use App\Models\metadata_variabel;
use App\Models\m_kabs;
use App\Models\master_metode;
use Validator;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;

class MetadataController extends Controller
{
    public function index() {

    $pembinaans = pembinaan::all();
    $opds = master_opd::orderBy('nama_opd')->get();
    $opd = master_opd::all();

    return view( 'form-metadata', compact('pembinaans','opds','opd') );
    }
    
    public function index_daftar() {

    $metadata_kegiatan = metadata_kegiatan::where('opd', Auth::user()->organisasi)->get();
 

    return view( 'daftar-metadata', compact('metadata_kegiatan') );
    }
    
    
    public function lihatMetadata(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->get() ;
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all() ;
                 
        

        return view( 'lihat-metadata', compact('metadata','kabs','metodes'));
        }
        
     public function viewMetadata(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->where('opd', Auth::user()->organisasi)->get();
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all();
        $metadata_indikator = metadata_indikator::where('id_keg', $id)->where('opd', Auth::user()->organisasi)->get();
        $metadata_variabel = metadata_variabel::where('id_keg', $id)->where('opd', Auth::user()->organisasi)->get();
                 
        

        return view( 'view-metadata', compact('metadata','metadata_indikator','metadata_variabel','kabs','metodes'));
        }
        
    public function editVariabel(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->get();
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all();
        $metadata_indikator = metadata_indikator::all();
        $metadata_variabel = metadata_variabel::where('id', $id)->get();
                 
        

        return view( 'edit-variabel', compact('metadata','metadata_indikator','metadata_variabel','kabs','metodes'));
        } 
        
    public function editIndikator(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->get();
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all();
        $metadata_indikator = metadata_indikator::where('id', $id)->get();
        $metadata_variabel = metadata_variabel::all();
                 
        

        return view( 'edit-indikator', compact('metadata','metadata_indikator','metadata_variabel','kabs','metodes'));
        }        
        
        
         public function viewIndikator(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->get() ;
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all() ;
                 
        $keg_id = $id;

        return view( 'view-indikator', compact('metadata','kabs','metodes','keg_id'));
        }
        
        public function viewVariabel(Request $request, $id) {

        $metadata = metadata_kegiatan::where('id', $id)->get() ;
        $kabs = m_kabs::all() ;
        $metodes = master_metode::all() ;
                 
        $keg_id = $id;

        return view( 'view-variabel', compact('metadata','kabs','metodes','keg_id'));
        }
        
         
    
    public function simpan(Request $request)
    {

    //  $rule['b3r34k1'] = $request->input('b3r34k1');
    //  $rule['rule'] = $request->input('rule');
        $input = $request->all();
        
    
  
            $input['b3r34k1'] = $request->input('b3r34k1');

        
        $input['b3r34k2'] = $request->input('b3r34k2');
        $input['b3r34k3'] = $request->input('b3r34k3');
        $input['b3r34k4'] = $request->input('b3r34k4');
        $input['b4r5'] = $request->input('b4r5');
        
      
        $input['b4r6'] = $request->input('b4r6');
        $input['b4r7'] = $request->input('b4r7');
        $input['b4r8'] = $request->input('b4r8');
        $input['b6r2'] = $request->input('b6r2');
        $input['b7r3'] = $request->input('b7r3');
        $input['b7r4'] = $request->input('b7r4');
        

      //  $banyak_rule = $rule['b3r34k1'];
       // dd(count($banyak_rule));
        
        metadata_kegiatan::create($input);

        return Redirect::to('https://webapps.bps.go.id/sultra/syantik/daftar-metadata');

    }
    
    
     public function update(Request $request)
    {

    //  $rule['b3r34k1'] = $request->input('b3r34k1');
    //  $rule['rule'] = $request->input('rule');
        $input = $request->all();
        
    
  
            $input['b3r34k1'] = $request->input('b3r34k1');

        
        $input['b3r34k2'] = $request->input('b3r34k2');
        $input['b3r34k3'] = $request->input('b3r34k3');
        $input['b3r34k4'] = $request->input('b3r34k4');
        $input['b4r5'] = $request->input('b4r5');
        
      
        $input['b4r6'] = $request->input('b4r6');
        $input['b4r7'] = $request->input('b4r7');
        $input['b4r8'] = $request->input('b4r8');
        $input['b6r2'] = $request->input('b6r2');
        $input['b7r3'] = $request->input('b7r3');
        $input['b7r4'] = $request->input('b7r4');
        
        
      //  $banyak_rule = $rule['b3r34k1'];
       // dd(count($banyak_rule));
        
        metadata_kegiatan::where('id', $request->input('id'))->update($input);

        return redirect()->back()->with(['success2' => 'Terima kasih'])->withInput($request->all);

    }
    
    
     public function simpanIndikator(Request $request)
    {

    //  $rule['b3r34k1'] = $request->input('b3r34k1');
    //  $rule['rule'] = $request->input('rule');
        $input = $request->all();
        
    
  
            $input['i11k1'] = $request->input('i11k1');
            $input['i11k2'] = $request->input('i11k2');

        
        $input['i12k1'] = $request->input('i12k1');
        $input['i12k2'] = $request->input('i12k2');

        
        metadata_indikator::create($input);

        return redirect()->back()->with(['success2' => 'Terima kasih'])->withInput($request->all);

    }
    
     public function simpanVariabel(Request $request)
    {

        $input = $request->all();
        
    
  
            $input['v10k1'] = $request->input('v10k1');
            $input['v10k2'] = $request->input('v10k2');

       
        metadata_variabel::create($input);

        return redirect()->back()->with(['success2' => 'Terima kasih'])->withInput($request->all);

    }
    
    public function updateVariabel(Request $request)
    {


        $input = $request->all();
        
    
  
          $input['v10k1'] = $request->input('v10k1');
            $input['v10k2'] = $request->input('v10k2');
        

        
        metadata_variabel::where('id', $request->input('id'))->update($input);

        return redirect()->back()->with(['success2' => 'Terima kasih'])->withInput($request->all);

    }
    
    public function updateIndikator(Request $request)
    {


        $input = $request->all();
        
    
  
          $input['i11k1'] = $request->input('i11k1');
            $input['i11k2'] = $request->input('i11k2');

        
        $input['i12k1'] = $request->input('i12k1');
        $input['i12k2'] = $request->input('i12k2');
        

        
        metadata_indikator::where('id', $request->input('id'))->update($input);

        return redirect()->back()->with(['success2' => 'Terima kasih'])->withInput($request->all);

    }


}
