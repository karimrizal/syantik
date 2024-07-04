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
                <a href="{{ url('/ekspor_7491') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  Jumlah dan Rasio Dokter Per 1000 Penduduk Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>

                     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Dokter Umum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Dokter Spesialis</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Dokter Per 1000 Penduduk</center></th>
         
                    </tr>
                  
                    
                   
            </thead>
          
                      @foreach ($tabel_7491 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7491') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7491a))
                            <td>
                                <input type="text" id="t7491a" name="members[{{ $i }}][t7491a]" class="form-control" value="{{number_format(($member->t7491a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7491a" name="members[{{ $i }}][t7491a]" class="form-control" value="{{$member->t7491a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7491b))
                            <td>
                                <input type="text" id="t7491b" name="members[{{ $i }}][t7491b]" class="form-control" value="{{number_format(($member->t7491b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7491b" name="members[{{ $i }}][t7491b]" class="form-control" value="{{$member->t7491b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7491c))
                            <td>
                                <input type="text" id="t7491c" name="members[{{ $i }}][t7491c]" class="form-control" value="{{number_format(($member->t7491c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7491c" name="members[{{ $i }}][t7491c]" class="form-control" value="{{$member->t7491c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7491d))
                            <td>
                                <input type="text" id="t7491d" name="members[{{ $i }}][t7491d]" class="form-control" value="{{number_format(($member->t7491d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7491d" name="members[{{ $i }}][t7491d]" class="form-control" value="{{$member->t7491d}}">
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

