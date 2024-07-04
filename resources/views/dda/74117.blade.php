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
                        
                            <a href="{{ url('/ekspor_74117') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Nilai SAKIP OPD di Provinsi Sulawesi Tenggara, 2018 - 2021 </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    

                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Nilai SAKIP</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>A</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>AA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>B</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>BB</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>C</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>CC</center></th>
                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_74117 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store74117') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t74117a))
                            <td>
                                <input type="text" id="t74117a" name="members[{{ $i }}][t74117a]" class="form-control" value="{{number_format(($member->t74117a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117a" name="members[{{ $i }}][t74117a]" class="form-control" value="{{$member->t74117a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74117b))
                            <td>
                                <input type="text" id="t74117b" name="members[{{ $i }}][t74117b]" class="form-control" value="{{number_format(($member->t74117b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117b" name="members[{{ $i }}][t74117b]" class="form-control" value="{{$member->t74117b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74117c))
                            <td>
                                <input type="text" id="t74117c" name="members[{{ $i }}][t74117c]" class="form-control" value="{{number_format(($member->t74117c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117c" name="members[{{ $i }}][t74117c]" class="form-control" value="{{$member->t74117c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74117d))
                            <td>
                                <input type="text" id="t74117d" name="members[{{ $i }}][t74117d]" class="form-control" value="{{number_format(($member->t74117d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117d" name="members[{{ $i }}][t74117d]" class="form-control" value="{{$member->t74117d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74117e))
                            <td>
                                <input type="text" id="t74117e" name="members[{{ $i }}][t74117e]" class="form-control" value="{{number_format(($member->t74117e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117e" name="members[{{ $i }}][t74117e]" class="form-control" value="{{$member->t74117e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74117f))
                            <td>
                                <input type="text" id="t74117f" name="members[{{ $i }}][t74117f]" class="form-control" value="{{number_format(($member->t74117f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74117f" name="members[{{ $i }}][t74117f]" class="form-control" value="{{$member->t74117f}}">
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

