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
                	
                            <a href="{{ url('/ekspor_dda_68') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Produksi Hasil Pertambangan Nikel dan Aspal di {{ $a->kab }}, 2018 - 2022</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Produksi</center></th>
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Fero Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Aspal <br> Ton</center></th>

                    </tr>
                    
            
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_68 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store68') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                               @if(is_numeric($member->t68a))
                            <td>
                                <input type="text" id="t68a" name="members[{{ $i }}][t68a]" class="form-control" value="{{number_format(($member->t68a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68a" name="members[{{ $i }}][t68a]" class="form-control" value="{{$member->t68a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t68b))
                            <td>
                                <input type="text" id="t68b" name="members[{{ $i }}][t68b]" class="form-control" value="{{number_format(($member->t68b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68b" name="members[{{ $i }}][t68b]" class="form-control" value="{{$member->t68b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t68c))
                            <td>
                                <input type="text" id="t68c" name="members[{{ $i }}][t68c]" class="form-control" value="{{number_format(($member->t68c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68c" name="members[{{ $i }}][t68c]" class="form-control" value="{{$member->t68c}}" disabled>
                            </td>
                            @endif    
                           
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t68a))
                            <td>
                                <input type="text" id="t68a" name="members[{{ $i }}][t68a]" class="form-control" value="{{number_format(($member->t68a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68a" name="members[{{ $i }}][t68a]" class="form-control" value="{{$member->t68a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t68b))
                            <td>
                                <input type="text" id="t68b" name="members[{{ $i }}][t68b]" class="form-control" value="{{number_format(($member->t68b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68b" name="members[{{ $i }}][t68b]" class="form-control" value="{{$member->t68b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t68c))
                            <td>
                                <input type="text" id="t68c" name="members[{{ $i }}][t68c]" class="form-control" value="{{number_format(($member->t68c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t68c" name="members[{{ $i }}][t68c]" class="form-control" value="{{$member->t68c}}">
                            </td>
                            @endif  
                        
                        @else @endif @endforeach
                       
                      
                    </tr>
                    @endforeach
                  
    </table>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Energi dan Sumber Daya Mineral Provinsi Sulawesi Tenggara</a></p>

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
