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
                <a href="{{ url('/ekspor_7489') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  Jumlah dan Rasio Puskesmas, Poliklinik, Pustu Per 1000 Penduduk Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>

                     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Puskesmas</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Poliklinik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pustu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Puskesmas, Poliklinik, Pustu Per 1000 Penduduk</center></th>
         
                    </tr>
                  
                    
                   
            </thead>
          
                      @foreach ($tabel_7489 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7489') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7489a))
                            <td>
                                <input type="text" id="t7489a" name="members[{{ $i }}][t7489a]" class="form-control" value="{{number_format(($member->t7489a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7489a" name="members[{{ $i }}][t7489a]" class="form-control" value="{{$member->t7489a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7489b))
                            <td>
                                <input type="text" id="t7489b" name="members[{{ $i }}][t7489b]" class="form-control" value="{{number_format(($member->t7489b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7489b" name="members[{{ $i }}][t7489b]" class="form-control" value="{{$member->t7489b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7489c))
                            <td>
                                <input type="text" id="t7489c" name="members[{{ $i }}][t7489c]" class="form-control" value="{{number_format(($member->t7489c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7489c" name="members[{{ $i }}][t7489c]" class="form-control" value="{{$member->t7489c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7489d))
                            <td>
                                <input type="text" id="t7489d" name="members[{{ $i }}][t7489d]" class="form-control" value="{{number_format(($member->t7489d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7489d" name="members[{{ $i }}][t7489d]" class="form-control" value="{{$member->t7489d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7489e))
                            <td>
                                <input type="text" id="t7489e" name="members[{{ $i }}][t7489e]" class="form-control" value="{{number_format(($member->t7489e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7489e" name="members[{{ $i }}][t7489e]" class="form-control" value="{{$member->t7489e}}">
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

