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
                <a href="{{ url('/ekspor_7488') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  Jumlah dan Rasio Posyandu Per 1.000 Balita Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>

                         <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Balita</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Posyandu</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Posyandu Per 1000 Balita</center></th>
     

                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
          
                      @foreach ($tabel_7488 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7488') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7488a))
                            <td>
                                <input type="text" id="t7488a" name="members[{{ $i }}][t7488a]" class="form-control" value="{{number_format(($member->t7488a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7488a" name="members[{{ $i }}][t7488a]" class="form-control" value="{{$member->t7488a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7488b))
                            <td>
                                <input type="text" id="t7488b" name="members[{{ $i }}][t7488b]" class="form-control" value="{{number_format(($member->t7488b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7488b" name="members[{{ $i }}][t7488b]" class="form-control" value="{{$member->t7488b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7488c))
                            <td>
                                <input type="text" id="t7488c" name="members[{{ $i }}][t7488c]" class="form-control" value="{{number_format(($member->t7488c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7488c" name="members[{{ $i }}][t7488c]" class="form-control" value="{{$member->t7488c}}">
                            </td>
                            @endif
                            
          
                      
                    </tr>
                    @endforeach
                    
                   
                    
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Kesehatan Provinsi Sulawesi Tenggara</a></p>

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

