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
                            <hr><a href="{{ url('/export_921') }}"><button type="button" class="btn btn-primary btn-md">Unduh Template</button></a>	
                            <a href="{{ url('/ekspor_921') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Persentase Tindak Lanjut Temuan APIP di Provinsi Sulawesi Tenggara, 2018 - 2021 </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
           
                        <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Temuan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tindaklanjut</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Tindaklanjut</center></th>

                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7445 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7445') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7445a))
                            <td>
                                <input type="text" id="t7445a" name="members[{{ $i }}][t7445a]" class="form-control" value="{{number_format(($member->t7445a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7445a" name="members[{{ $i }}][t7445a]" class="form-control" value="{{$member->t7445a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7445b))
                            <td>
                                <input type="text" id="t7445b" name="members[{{ $i }}][t7445b]" class="form-control" value="{{number_format(($member->t7445b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7445b" name="members[{{ $i }}][t7445b]" class="form-control" value="{{$member->t7445b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7445c))
                            <td>
                                <input type="text" id="t7445c" name="members[{{ $i }}][t7445c]" class="form-control" value="{{number_format(($member->t7445c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7445c" name="members[{{ $i }}][t7445c]" class="form-control" value="{{$member->t7445c}}">
                            </td>
                            @endif
                            
                   
             
          
                      
                    </tr>
                    @endforeach
          
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Inspektorat Daerah Provinsi Sulawesi Tenggara</a></p>

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

