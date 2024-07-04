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
                        
                            <a href="{{ url('/ekspor_74107') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Data Kerusakan Kawasan Hutan di Provinsi Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    

                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Illegal Logging</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kebakaran Hutan</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kegiatan Non Kehutanan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perambahan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Konflik Tenurial</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah</center></th>
                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_74107 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store74107') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             @if(is_numeric($member->t74107a))
                            <td>
                                <input type="text" id="t74107a" name="members[{{ $i }}][t74107a]" class="form-control" value="{{number_format(($member->t74107a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107a" name="members[{{ $i }}][t74107a]" class="form-control" value="{{$member->t74107a}}" disabled>
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74107b))
                            <td>
                                <input type="text" id="t74107b" name="members[{{ $i }}][t74107b]" class="form-control" value="{{number_format(($member->t74107b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107b" name="members[{{ $i }}][t74107b]" class="form-control" value="{{$member->t74107b}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107c))
                            <td>
                                <input type="text" id="t74107c" name="members[{{ $i }}][t74107c]" class="form-control" value="{{number_format(($member->t74107c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107c" name="members[{{ $i }}][t74107c]" class="form-control" value="{{$member->t74107c}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107d))
                            <td>
                                <input type="text" id="t74107d" name="members[{{ $i }}][t74107d]" class="form-control" value="{{number_format(($member->t74107d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107d" name="members[{{ $i }}][t74107d]" class="form-control" value="{{$member->t74107d}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107e))
                            <td>
                                <input type="text" id="t74107e" name="members[{{ $i }}][t74107e]" class="form-control" value="{{number_format(($member->t74107e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107e" name="members[{{ $i }}][t74107e]" class="form-control" value="{{$member->t74107e}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107f))
                            <td>
                                <input type="text" id="t74107f" name="members[{{ $i }}][t74107f]" class="form-control" value="{{number_format(($member->t74107f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107f" name="members[{{ $i }}][t74107f]" class="form-control" value="{{$member->t74107f}}" disabled>
                            </td>
                            @endif
                            
              
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t74107a))
                            <td>
                                <input type="text" id="t74107a" name="members[{{ $i }}][t74107a]" class="form-control" value="{{number_format(($member->t74107a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107a" name="members[{{ $i }}][t74107a]" class="form-control" value="{{$member->t74107a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74107b))
                            <td>
                                <input type="text" id="t74107b" name="members[{{ $i }}][t74107b]" class="form-control" value="{{number_format(($member->t74107b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107b" name="members[{{ $i }}][t74107b]" class="form-control" value="{{$member->t74107b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107c))
                            <td>
                                <input type="text" id="t74107c" name="members[{{ $i }}][t74107c]" class="form-control" value="{{number_format(($member->t74107c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107c" name="members[{{ $i }}][t74107c]" class="form-control" value="{{$member->t74107c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107d))
                            <td>
                                <input type="text" id="t74107d" name="members[{{ $i }}][t74107d]" class="form-control" value="{{number_format(($member->t74107d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107d" name="members[{{ $i }}][t74107d]" class="form-control" value="{{$member->t74107d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107e))
                            <td>
                                <input type="text" id="t74107e" name="members[{{ $i }}][t74107e]" class="form-control" value="{{number_format(($member->t74107e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107e" name="members[{{ $i }}][t74107e]" class="form-control" value="{{$member->t74107e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74107f))
                            <td>
                                <input type="text" id="t74107f" name="members[{{ $i }}][t74107f]" class="form-control" value="{{number_format(($member->t74107f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74107f" name="members[{{ $i }}][t74107f]" class="form-control" value="{{$member->t74107f}}">
                            </td>
                            @endif
                        
                        @else @endif @endforeach
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_b),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_c),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_d),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_e),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_f),2, '.',' ')}}">
                            </th>
               
              
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Kehutanan Provinsi Sulawesi Tenggara</a></p>

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

