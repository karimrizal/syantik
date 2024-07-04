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
                   
                            <a href="{{ url('/ekspor_dda_222') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)
@if( (Auth::user()->idkab == '7400') )					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Anggota Dewan Rakyat Daerah Menurut Kabupaten/Kota dan Jenis Kelamin di {{ $a->kab }}, Desember {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Anggota Dewan Rakyat Daerah Menurut Kecamatan dan Jenis Kelamin di {{ $a->kab }}, Desember {{$year}}</h3>
@endif
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    
                    <tr>
                
                       <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                
           
                    </tr>
                    <tr>
                       
                         @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                    <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                    
                    
            </thead>
                    @foreach ($tabel_222 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store222') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             @if(is_numeric($member->t222a))
                            <td>
                                <input type="text" id="t222a" name="members[{{ $i }}][t222a]" class="form-control" value="{{number_format(($member->t222a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222a" name="members[{{ $i }}][t222a]" class="form-control" value="{{$member->t222a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t222b))
                            <td>
                                <input type="text" id="t222b" name="members[{{ $i }}][t222b]" class="form-control" value="{{number_format(($member->t222b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222b" name="members[{{ $i }}][t222b]" class="form-control" value="{{$member->t222b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t222c))
                            <td>
                                <input type="text" id="t222c" name="members[{{ $i }}][t222c]" class="form-control" value="{{number_format(($member->t222c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222c" name="members[{{ $i }}][t222c]" class="form-control" value="{{$member->t222c}}" disabled>
                            </td>
                            @endif    
                       
                      
                        @elseif( $a->setuju_opd == 0)
                        
                            @if(is_numeric($member->t222a))
                            <td>
                                <input type="text" id="t222a" name="members[{{ $i }}][t222a]" class="form-control" value="{{number_format(($member->t222a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222a" name="members[{{ $i }}][t222a]" class="form-control" value="{{$member->t222a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t222b))
                            <td>
                                <input type="text" id="t222b" name="members[{{ $i }}][t222b]" class="form-control" value="{{number_format(($member->t222b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222b" name="members[{{ $i }}][t222b]" class="form-control" value="{{$member->t222b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t222c))
                            <td>
                                <input type="text" id="t222c" name="members[{{ $i }}][t222c]" class="form-control" value="{{number_format(($member->t222c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t222c" name="members[{{ $i }}][t222c]" class="form-control" value="{{$member->t222c}}">
                            </td>
                            @endif  
                        
                        @else @endif
                        @endforeach
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                         
                         <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lk),0, '.',' ')}}">
                            </th>
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_pr),0, '.',' ')}}">
                            </th>
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lkpr),0, '.',' ')}}">
                            </th>
                            
                
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                
                       <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"><center>2021</center></th>
                
           
                    </tr>
                    <tr>
                       
                   @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                    <th  bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                  
                   
            </thead>
                    @foreach ($tes as $member)
                    
                    <tr>
                        <th>{{ $member->kec }}</th>
            
                         @if(is_numeric($member->t222a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t222a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t222a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t222b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t222b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t222b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t222c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t222c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t222c}}">
                            </td>
                            @endif    
                       
                      
                    </tr>
                
                         @endforeach
                    <tr>
                        
                  
                            
                         @foreach ($sum_lalu as $a)
                          <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                         <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lk),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_pr),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lkpr),0, '.',' ')}}">
                            </th>
                       
                            @endforeach
                      
                       
                      
                    </tr>
                   
                    
                        
                              
                 
                   
                          
                          
             
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Sekretariat DPRD</a></p>

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
