@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	@if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
         
               <br>
               <p class="page-title text-left"><a href="data_dda"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                            <hr><a href="{{ url('/export_744') }}"><button type="button" class="btn btn-primary btn-md">Unduh Template</button></a>	
                            <a href="{{ url('/ekspor_744') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> JUMLAH KASUS DAN JUMLAH KUNJUNGAN RAWAT JALAN PASIEN GIZI BURUK di RUMAH SAKIT BAHTERAMAS PROV. SULTRA Tahun 2016-2021  </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>Jumlah Kasus Baru (kasus)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>JUMLAH KUNJUNGAN (kunjungan)</center></th>
                    
                  
       
                      
                    </tr>
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>P</center></th>
                  
                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_744 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store744') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t744a))
                            <td>
                                <input type="text" id="t744a" name="members[{{ $i }}][t744a]" class="form-control" value="{{number_format(($member->t744a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t744a" name="members[{{ $i }}][t744a]" class="form-control" value="{{$member->t744a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t744b))
                            <td>
                                <input type="text" id="t744b" name="members[{{ $i }}][t744b]" class="form-control" value="{{number_format(($member->t744b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t744b" name="members[{{ $i }}][t744b]" class="form-control" value="{{$member->t744b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t744c))
                            <td>
                                <input type="text" id="t744c" name="members[{{ $i }}][t744c]" class="form-control" value="{{number_format(($member->t744c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t744c" name="members[{{ $i }}][t744c]" class="form-control" value="{{$member->t744c}}">
                            </td>
                            @endif
          
                      
                    </tr>
                    @endforeach
              
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: RSUD Bahteramas</a></p>

     <br>
     <div class="form-group">
         @foreach($catatan as $a)
            <label for ="catatan"><b> Catatan</b> </label>
             	 		
          <textarea name="catatan" id="catatan" >
              {!! $a->catatan !!}
                 @endforeach
            </textarea>
            </div>
                    <button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>




						
	</div>
</div>
					<!-- END OVERVIEW -->
		


    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 
 
