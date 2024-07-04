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

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  Tingkat Kematian Tuberkulosis (per 100.000 penduduk) Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>

                     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penduduk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Pasien TB yang Meninggal</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tingkat Kematian Tuberkulosis per 100.000 penduduk</center></th>
                   
         
                    </tr>
                  
                    
                   
            </thead>
          
                      @foreach ($tabel_7496 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7496') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7496a))
                            <td>
                                <input type="text" id="t7496a" name="members[{{ $i }}][t7496a]" class="form-control" value="{{number_format(($member->t7496a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7496a" name="members[{{ $i }}][t7496a]" class="form-control" value="{{$member->t7496a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7496b))
                            <td>
                                <input type="text" id="t7496b" name="members[{{ $i }}][t7496b]" class="form-control" value="{{number_format(($member->t7496b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7496b" name="members[{{ $i }}][t7496b]" class="form-control" value="{{$member->t7496b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7496c))
                            <td>
                                <input type="text" id="t7496c" name="members[{{ $i }}][t7496c]" class="form-control" value="{{number_format(($member->t7496c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7496c" name="members[{{ $i }}][t7496c]" class="form-control" value="{{$member->t7496c}}">
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

