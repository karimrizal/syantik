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
              
                <a href="{{ url('/ekspor_dda_106') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>                            
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Perkembangan Giro, Deposito, dan Tabungan Keadaan 31 Desember di {{ $a->kab }}, 2018-2022</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                       
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Giro</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tabungan</center></th>
                        <th colspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Deposito</center></th>
                    
                    </tr>
                     <tr>
                     
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                    
                    </tr>
                    
                   
                    
                    
            </thead>
                   @foreach ($tabel_106 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store106') }}" method="POST">
                             @csrf
                             
                         
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                         
                          @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t106a))
                            <td>
                                <input type="text" id="t106a" name="members[{{ $i }}][t106a]" class="form-control" value="{{number_format(($member->t106a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106a" name="members[{{ $i }}][t106a]" class="form-control" value="{{$member->t106a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t106b))
                            <td>
                                <input type="text" id="t106b" name="members[{{ $i }}][t106b]" class="form-control" value="{{number_format(($member->t106b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106b" name="members[{{ $i }}][t106b]" class="form-control" value="{{$member->t106b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t106c))
                            <td>
                                <input type="text" id="t106c" name="members[{{ $i }}][t106c]" class="form-control" value="{{number_format(($member->t106c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106c" name="members[{{ $i }}][t106c]" class="form-control" value="{{$member->t106c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t106d))
                            <td>
                                <input type="text" id="t106d" name="members[{{ $i }}][t106d]" class="form-control" value="{{number_format(($member->t106d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106d" name="members[{{ $i }}][t106d]" class="form-control" value="{{$member->t106d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106e))
                            <td>
                                <input type="text" id="t106e" name="members[{{ $i }}][t106e]" class="form-control" value="{{number_format(($member->t106e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106e" name="members[{{ $i }}][t106e]" class="form-control" value="{{$member->t106e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106f))
                            <td>
                                <input type="text" id="t106f" name="members[{{ $i }}][t106f]" class="form-control" value="{{number_format(($member->t106f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106f" name="members[{{ $i }}][t106f]" class="form-control" value="{{$member->t106f}}" disabled>
                            </td>
                            @endif
                            
                            
                        @elseif( $a->setuju_opd == 0)
                        
                         @if(is_numeric($member->t106a))
                            <td>
                                <input type="text" id="t106a" name="members[{{ $i }}][t106a]" class="form-control" value="{{number_format(($member->t106a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106a" name="members[{{ $i }}][t106a]" class="form-control" value="{{$member->t106a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t106b))
                            <td>
                                <input type="text" id="t106b" name="members[{{ $i }}][t106b]" class="form-control" value="{{number_format(($member->t106b),0, '.','')}}" >
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106b" name="members[{{ $i }}][t106b]" class="form-control" value="{{$member->t106b}}" >
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t106c))
                            <td>
                                <input type="text" id="t106c" name="members[{{ $i }}][t106c]" class="form-control" value="{{number_format(($member->t106c),0, '.','')}}" >
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106c" name="members[{{ $i }}][t106c]" class="form-control" value="{{$member->t106c}}" >
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t106d))
                            <td>
                                <input type="text" id="t106d" name="members[{{ $i }}][t106d]" class="form-control" value="{{number_format(($member->t106d),0, '.','')}}" >
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106d" name="members[{{ $i }}][t106d]" class="form-control" value="{{$member->t106d}}" >
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106e))
                            <td>
                                <input type="text" id="t106e" name="members[{{ $i }}][t106e]" class="form-control" value="{{number_format(($member->t106e),0, '.','')}}" >
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106e" name="members[{{ $i }}][t106e]" class="form-control" value="{{$member->t106e}}" >
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106f))
                            <td>
                                <input type="text" id="t106f" name="members[{{ $i }}][t106f]" class="form-control" value="{{number_format(($member->t106f),0, '.','')}}" >
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t106f" name="members[{{ $i }}][t106f]" class="form-control" value="{{$member->t106f}}" >
                            </td>
                            @endif
                        
                        @else @endif @endforeach
                            
                            
                       
                      
                    </tr>
                    @endforeach
                    
          
                    
    </table>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Bank Indonesia Perwakilan Sulawesi Tenggara</a></p>

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
