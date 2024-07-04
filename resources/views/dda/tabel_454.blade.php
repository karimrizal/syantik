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
                      
                           <a href="{{ url('/ekspor_dda_454') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)
@if( (Auth::user()->idkab == '7400') ) 					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Persentase Penduduk Menurut Kabupaten/Kota dan Agama yang Dianut di {{ $a->kab }}, {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Persentase Penduduk Menurut Kecamatan dan Agama yang Dianut di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="7"> <center>{{$year}}</center></th> </tr>
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Islam</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Protestan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Katolik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Hindu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Budha</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Lainnya</center></th>
                
                      
                    </tr>
                    
            
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_454 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store454') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t454a))
                            <td>
                                <input type="text" id="t454a" name="members[{{ $i }}][t454a]" class="form-control" value="{{number_format(($member->t454a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454a" name="members[{{ $i }}][t454a]" class="form-control" value="{{$member->t454a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t454b))
                            <td>
                                <input type="text" id="t454b" name="members[{{ $i }}][t454b]" class="form-control" value="{{number_format(($member->t454b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454b" name="members[{{ $i }}][t454b]" class="form-control" value="{{$member->t454b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t454c))
                            <td>
                                <input type="text" id="t454c" name="members[{{ $i }}][t454c]" class="form-control" value="{{number_format(($member->t454c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454c" name="members[{{ $i }}][t454c]" class="form-control" value="{{$member->t454c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t454d))
                            <td>
                                <input type="text" id="t454d" name="members[{{ $i }}][t454d]" class="form-control" value="{{number_format(($member->t454d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454d" name="members[{{ $i }}][t454d]" class="form-control" value="{{$member->t454d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454e))
                            <td>
                                <input type="text" id="t454e" name="members[{{ $i }}][t454e]" class="form-control" value="{{number_format(($member->t454e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454e" name="members[{{ $i }}][t454e]" class="form-control" value="{{$member->t454e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454f))
                            <td>
                                <input type="text" id="t454f" name="members[{{ $i }}][t454f]" class="form-control" value="{{number_format(($member->t454f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454f" name="members[{{ $i }}][t454f]" class="form-control" value="{{$member->t454f}}" disabled>
                            </td>
                            @endif
                       
                           @elseif( $a->setuju_opd == 0)
                           
                            @if(is_numeric($member->t454a))
                            <td>
                                <input type="text" id="t454a" name="members[{{ $i }}][t454a]" class="form-control" value="{{number_format(($member->t454a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454a" name="members[{{ $i }}][t454a]" class="form-control" value="{{$member->t454a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t454b))
                            <td>
                                <input type="text" id="t454b" name="members[{{ $i }}][t454b]" class="form-control" value="{{number_format(($member->t454b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454b" name="members[{{ $i }}][t454b]" class="form-control" value="{{$member->t454b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t454c))
                            <td>
                                <input type="text" id="t454c" name="members[{{ $i }}][t454c]" class="form-control" value="{{number_format(($member->t454c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454c" name="members[{{ $i }}][t454c]" class="form-control" value="{{$member->t454c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t454d))
                            <td>
                                <input type="text" id="t454d" name="members[{{ $i }}][t454d]" class="form-control" value="{{number_format(($member->t454d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454d" name="members[{{ $i }}][t454d]" class="form-control" value="{{$member->t454d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454e))
                            <td>
                                <input type="text" id="t454e" name="members[{{ $i }}][t454e]" class="form-control" value="{{number_format(($member->t454e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454e" name="members[{{ $i }}][t454e]" class="form-control" value="{{$member->t454e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454f))
                            <td>
                                <input type="text" id="t454f" name="members[{{ $i }}][t454f]" class="form-control" value="{{number_format(($member->t454f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t454f" name="members[{{ $i }}][t454f]" class="form-control" value="{{$member->t454f}}">
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
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_f),2, '.',' ')}}">
                            </th>
                 
                       
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
               
               
                  
  <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="7"> <center>2021</center></th> </tr>
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Islam</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Protestan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Katolik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Hindu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Budha</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Lainnya</center></th>
                
                      
                    </tr>
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                              @if(is_numeric($member->t454a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t454b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t454c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t454d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t454f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t454f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t454f}}">
                            </td>
                            @endif
                      
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_a}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_b}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_c}}">
                            </th> <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_d}}">
                            </th> <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_e}}">
                            </th> <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{$a->sum_f}}">
                            </th>
                  
            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Kementerian Agama</a></p>

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

