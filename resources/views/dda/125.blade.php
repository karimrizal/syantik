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
                           
                          
                           <a href="{{ url('/ekspor_dda_125') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Curah Hujan Menurut Bulan dan Stasiun di {{ $a->kab }} (mm), {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                    </tr>
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bulan</center></th>
                        @if( (Auth::user()->idkab == '7400')  )
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
            
                    
                   
            </thead>
                    @foreach ($tabel_125 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store125') }}" method="POST">
                             @csrf
                             
                          
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                          @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             @if(is_numeric($member->t125a))
                            <td>
                                <input type="text" id="t125a" name="members[{{ $i }}][t125a]" class="form-control" value="{{number_format(($member->t125a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125a" name="members[{{ $i }}][t125a]" class="form-control" value="{{$member->t125a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t125b))
                            <td>
                                <input type="text" id="t125b" name="members[{{ $i }}][t125b]" class="form-control" value="{{number_format(($member->t125b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125b" name="members[{{ $i }}][t125b]" class="form-control" value="{{$member->t125b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t125c))
                            <td>
                                <input type="text" id="t125c" name="members[{{ $i }}][t125c]" class="form-control" value="{{number_format(($member->t125c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125c" name="members[{{ $i }}][t125c]" class="form-control" value="{{$member->t125c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t125d))
                            <td>
                                <input type="text" id="t125d" name="members[{{ $i }}][t125d]" class="form-control" value="{{number_format(($member->t125d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125d" name="members[{{ $i }}][t125d]" class="form-control" value="{{$member->t125d}}" disabled>
                            </td>
                            @endif 
                           
                       @elseif( $a->setuju_opd == 0)  
                       
                        @if(is_numeric($member->t125a))
                            <td>
                                <input type="text" id="t125a" name="members[{{ $i }}][t125a]" class="form-control" value="{{number_format(($member->t125a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125a" name="members[{{ $i }}][t125a]" class="form-control" value="{{$member->t125a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t125b))
                            <td>
                                <input type="text" id="t125b" name="members[{{ $i }}][t125b]" class="form-control" value="{{number_format(($member->t125b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125b" name="members[{{ $i }}][t125b]" class="form-control" value="{{$member->t125b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t125c))
                            <td>
                                <input type="text" id="t125c" name="members[{{ $i }}][t125c]" class="form-control" value="{{number_format(($member->t125c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125c" name="members[{{ $i }}][t125c]" class="form-control" value="{{$member->t125c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t125d))
                            <td>
                                <input type="text" id="t125d" name="members[{{ $i }}][t125d]" class="form-control" value="{{number_format(($member->t125d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t125d" name="members[{{ $i }}][t125d]" class="form-control" value="{{$member->t125d}}">
                            </td>
                            @endif 
                       
                       @else @endif @endforeach
                 
                 
                      
                    </tr>
                    @endforeach
             
    </table>
    
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                
                       <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"><center>2021</center></th>
                
           
                    </tr>
                    <tr>
                  @if( (Auth::user()->idkab == '7400')  )
                       <th width="20%" bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
                  
                   
            </thead>
                    @foreach ($tes as $member)
                    
                    <tr>
            
                          @if( (Auth::user()->idkab == '7400')  )
                                    @if(is_numeric($member->t125a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t125b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t125c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t125d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125d),2, '.',' ')}}">
                            </td>
                           
                           @else
                           <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125d}}">
                            </td>
                            @endif 
                 
                        @elseif( (Auth::user()->idkab == '7471')  )
                            
                             @if(is_numeric($member->t125a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125a}}">
                            </td>
                            @endif    
                           
                          
                            
                        @elseif( (Auth::user()->idkab == '7472')  )    
                           
                             @if(is_numeric($member->t125b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125b}}">
                            </td>
                            @endif
                            
                            
                        @elseif( (Auth::user()->idkab == '7405')  )
                        
                            @if(is_numeric($member->t125c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125c}}">
                            </td>
                            @endif    
                            
                        @elseif( (Auth::user()->idkab == '7404')  )
                        
                        
                            @if(is_numeric($member->t125d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t125d),2, '.',' ')}}">
                            </td>
                           
                           @else
                           <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t125d}}">
                            </td>
                            @endif 
                           
                            
                        @else @endif    
                       
                      
                    </tr>
                
                         @endforeach
                    
                   
                    
                        
                              
                 
                   
                          
                          
             
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Meteorologi, Klimatologi, dan Geofisika</a></p>

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

 
