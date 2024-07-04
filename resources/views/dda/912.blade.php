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
                   	
                            <a href="{{ url('/ekspor_dda_912') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kendaraan Bermotor Menurut Kabupaten/Kota dan Jenis Kendaraan (unit) di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="6"> <center>{{$year}}</center></th> </tr>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                    
			
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_912 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store912') }}" method="POST">
                             @csrf
                             
                         
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t912a))
                            <td>
                                <input type="text" id="t912a" name="members[{{ $i }}][t912a]" class="form-control" value="{{number_format(($member->t912a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912a" name="members[{{ $i }}][t912a]" class="form-control" value="{{$member->t912a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t912b))
                            <td>
                                <input type="text" id="t912b" name="members[{{ $i }}][t912b]" class="form-control" value="{{number_format(($member->t912b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912b" name="members[{{ $i }}][t912b]" class="form-control" value="{{$member->t912b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t912c))
                            <td>
                                <input type="text" id="t912c" name="members[{{ $i }}][t912c]" class="form-control" value="{{number_format(($member->t912c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912c" name="members[{{ $i }}][t912c]" class="form-control" value="{{$member->t912c}}" disabled>
                            </td>
                            @endif    
                             @if(is_numeric($member->t912d))
                            <td>
                                <input type="text" id="t912d" name="members[{{ $i }}][t912d]" class="form-control" value="{{number_format(($member->t912d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912d" name="members[{{ $i }}][t912d]" class="form-control" value="{{$member->t912d}}" disabled>
                            </td>
                            @endif   
                            
                             @if(is_numeric($member->t912e))
                            <td>
                                <input type="text" id="t912e" name="members[{{ $i }}][t912e]" class="form-control" value="{{number_format(($member->t912e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912e" name="members[{{ $i }}][t912e]" class="form-control" value="{{$member->t912e}}" disabled>
                            </td>
                            @endif
                            
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t912a))
                            <td>
                                <input type="text" id="t912a" name="members[{{ $i }}][t912a]" class="form-control" value="{{number_format(($member->t912a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912a" name="members[{{ $i }}][t912a]" class="form-control" value="{{$member->t912a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t912b))
                            <td>
                                <input type="text" id="t912b" name="members[{{ $i }}][t912b]" class="form-control" value="{{number_format(($member->t912b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912b" name="members[{{ $i }}][t912b]" class="form-control" value="{{$member->t912b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t912c))
                            <td>
                                <input type="text" id="t912c" name="members[{{ $i }}][t912c]" class="form-control" value="{{number_format(($member->t912c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912c" name="members[{{ $i }}][t912c]" class="form-control" value="{{$member->t912c}}">
                            </td>
                            @endif    
                             @if(is_numeric($member->t912d))
                            <td>
                                <input type="text" id="t912d" name="members[{{ $i }}][t912d]" class="form-control" value="{{number_format(($member->t912d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912d" name="members[{{ $i }}][t912d]" class="form-control" value="{{$member->t912d}}">
                            </td>
                            @endif   
                            
                             @if(is_numeric($member->t912e))
                            <td>
                                <input type="text" id="t912e" name="members[{{ $i }}][t912e]" class="form-control" value="{{number_format(($member->t912e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t912e" name="members[{{ $i }}][t912e]" class="form-control" value="{{$member->t912e}}">
                            </td>
                            @endif
                        
                        @else @endif @endforeach
        
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lk as $a)
                         
                      
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),0, '.',' ')}}">
                            </th>
                            
                 
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
               
               
                  
  <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="6"> <center>2021</center></th> </tr>
                    <tr>
                       
                         <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                    
			
                    </tr>
          
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                             @if(is_numeric($member->t912a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t912a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t912a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t912b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t912b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t912b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t912c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t912c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t912c}}">
                            </td>
                            @endif    
                            @if(is_numeric($member->t912d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t912d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t912d}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t912e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t912e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t912e}}">
                            </td>
                            @endif
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),0, '.',' ')}}">
                            </th>
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Pendapatan Daerah</a></p>

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
 
 
