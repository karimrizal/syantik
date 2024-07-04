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
                <a href="{{ url('/ekspor_74101') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  Jumlah Penderita dan Prevalensi HIV/AIDS (%) Menurut Kelompok Umur dan Jenis Kelamin di Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>

                     <tr>

                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3" > <center>Jumlah Penderita HIV/AIDS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3" > <center>Prevalensi HIV/AIDS (%) dari Total Penduduk</center></th>
                    </tr>
                    <tr>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki + Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki + Perempuan</center></th>
              
         
                    </tr>
                  
                    
                   
            </thead>
          
                      @foreach ($tabel_74101 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store74101') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             @if(is_numeric($member->t74101a))
                            <td>
                                <input type="text" id="t74101a" name="members[{{ $i }}][t74101a]" class="form-control" value="{{number_format(($member->t74101a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101a" name="members[{{ $i }}][t74101a]" class="form-control" value="{{$member->t74101a}}" disabled>
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74101b))
                            <td>
                                <input type="text" id="t74101b" name="members[{{ $i }}][t74101b]" class="form-control" value="{{number_format(($member->t74101b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101b" name="members[{{ $i }}][t74101b]" class="form-control" value="{{$member->t74101b}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101c))
                            <td>
                                <input type="text" id="t74101c" name="members[{{ $i }}][t74101c]" class="form-control" value="{{number_format(($member->t74101c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101c" name="members[{{ $i }}][t74101c]" class="form-control" value="{{$member->t74101c}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101d))
                            <td>
                                <input type="text" id="t74101d" name="members[{{ $i }}][t74101d]" class="form-control" value="{{number_format(($member->t74101d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101d" name="members[{{ $i }}][t74101d]" class="form-control" value="{{$member->t74101d}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101e))
                            <td>
                                <input type="text" id="t74101e" name="members[{{ $i }}][t74101e]" class="form-control" value="{{number_format(($member->t74101e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101e" name="members[{{ $i }}][t74101e]" class="form-control" value="{{$member->t74101e}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101f))
                            <td>
                                <input type="text" id="t74101f" name="members[{{ $i }}][t74101f]" class="form-control" value="{{number_format(($member->t74101f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101f" name="members[{{ $i }}][t74101f]" class="form-control" value="{{$member->t74101f}}" disabled>
                            </td>
                            @endif
                            
                       
                         @elseif( $a->setuju_opd == 0)
                         
                          @if(is_numeric($member->t74101a))
                            <td>
                                <input type="text" id="t74101a" name="members[{{ $i }}][t74101a]" class="form-control" value="{{number_format(($member->t74101a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101a" name="members[{{ $i }}][t74101a]" class="form-control" value="{{$member->t74101a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74101b))
                            <td>
                                <input type="text" id="t74101b" name="members[{{ $i }}][t74101b]" class="form-control" value="{{number_format(($member->t74101b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101b" name="members[{{ $i }}][t74101b]" class="form-control" value="{{$member->t74101b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101c))
                            <td>
                                <input type="text" id="t74101c" name="members[{{ $i }}][t74101c]" class="form-control" value="{{number_format(($member->t74101c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101c" name="members[{{ $i }}][t74101c]" class="form-control" value="{{$member->t74101c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101d))
                            <td>
                                <input type="text" id="t74101d" name="members[{{ $i }}][t74101d]" class="form-control" value="{{number_format(($member->t74101d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101d" name="members[{{ $i }}][t74101d]" class="form-control" value="{{$member->t74101d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101e))
                            <td>
                                <input type="text" id="t74101e" name="members[{{ $i }}][t74101e]" class="form-control" value="{{number_format(($member->t74101e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101e" name="members[{{ $i }}][t74101e]" class="form-control" value="{{$member->t74101e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74101f))
                            <td>
                                <input type="text" id="t74101f" name="members[{{ $i }}][t74101f]" class="form-control" value="{{number_format(($member->t74101f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74101f" name="members[{{ $i }}][t74101f]" class="form-control" value="{{$member->t74101f}}">
                            </td>
                            @endif
                         
                         @else @endif @endforeach
        
                            
                  
          
                      
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
                
            </textarea>
            </div>
                     @if (Auth::user()->role == 'Admin OPD' &&  $a->setuju_bps=="0" )
            <div class="form-group">
									<label for="">Apakah data akan ditampilkan?</label><br>
									<input type="radio" name="status_opd" id="status_opd" value="1" {{ ($a->setuju_opd=="1")? "checked" : "" }} required>
									<label for="tampil">Tampil</label><br>
									<input type="radio" name="status_opd" id="status_opd" value="0" {{ ($a->setuju_opd=="0")? "checked" : "" }} required>
									<label for="tidak_tampil">Tidak Tampil</label>
								</div>
			 <button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>
						
			@elseif (Auth::user()->role == 'Operator OPD' &&  $a->setuju_bps=="0" )			
			<button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>
			 @elseif (Auth::user()->role == 'Admin BPS' &&  $a->setuju_opd=="1")
			  <div class="form-group">
									<label for="">Apakah data akan ditampilkan?</label><br>
									<input type="radio" name="status_bps" id="status_bps" value="1" {{ ($a->setuju_bps=="1")? "checked" : "" }} required>
									<label for="tampil">Tampil</label><br>
									<input type="radio" name="status_bps" id="status_bps" value="0" {{ ($a->setuju_bps=="0")? "checked" : "" }} required>
									<label for="tidak_tampil">Tidak Tampil</label>
								</div>
								 <button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>
			 @elseif($a->setuju_opd=="0")
			 Data belum disetujui Admin OPD.
			 @else
			 
			 Data Sudah Disetujui BPS, hubungi Admin BPS Jika ingin mengubah data.
			 @endif
			 
			 @endforeach




						
	</div>
</div>
					<!-- END OVERVIEW -->
		


    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

