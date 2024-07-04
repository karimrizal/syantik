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
    
                            <a href="{{ url('/ekspor_dda_423') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>          
					@foreach($kab as $a)
@if( (Auth::user()->idkab == '7400') ) 					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Tenaga Kesehatan Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Tenaga Kesehatan Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>

<div class="row">
    <div class="col-md-8">
   
                         <form id="simpan" action="{{ route('dda.store423') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                    
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="10"><center>{{$year}}</center></th></tr>
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perawat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bidan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kefarmasian</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Masyarakat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Lingkungan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Gizi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ahli Teknologi Laboratorium</center></th>
                      
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_423 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                     
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t423a))
                            <td>
                                <input type="text" id="t423a" name="members[{{ $i }}][t423a]" class="form-control" value="{{number_format(($member->t423a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423a" name="members[{{ $i }}][t423a]" class="form-control" value="{{$member->t423a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t423b))
                            <td>
                                <input type="text" id="t423b" name="members[{{ $i }}][t423b]" class="form-control" value="{{number_format(($member->t423b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423b" name="members[{{ $i }}][t423b]" class="form-control" value="{{$member->t423b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423c))
                            <td>
                                <input type="text" id="t423c" name="members[{{ $i }}][t423c]" class="form-control" value="{{number_format(($member->t423c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423c" name="members[{{ $i }}][t423c]" class="form-control" value="{{$member->t423c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t423d))
                            <td>
                                <input type="text" id="t423d" name="members[{{ $i }}][t423d]" class="form-control" value="{{number_format(($member->t423d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423d" name="members[{{ $i }}][t423d]" class="form-control" value="{{$member->t423d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423e))
                            <td>
                                <input type="text" id="t423e" name="members[{{ $i }}][t423e]" class="form-control" value="{{number_format(($member->t423e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423e" name="members[{{ $i }}][t423e]" class="form-control" value="{{$member->t423e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423f))
                            <td>
                                <input type="text" id="t423f" name="members[{{ $i }}][t423f]" class="form-control" value="{{number_format(($member->t423f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423f" name="members[{{ $i }}][t423f]" class="form-control" value="{{$member->t423f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423g))
                            <td>
                                <input type="text" id="t423g" name="members[{{ $i }}][t423g]" class="form-control" value="{{number_format(($member->t423g),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423g" name="members[{{ $i }}][t423g]" class="form-control" value="{{$member->t423g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423h))
                            <td>
                                <input type="text" id="t423h" name="members[{{ $i }}][t423h]" class="form-control" value="{{number_format(($member->t423h),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423h" name="members[{{ $i }}][t423h]" class="form-control" value="{{$member->t423h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423i))
                            <td>
                                <input type="text" id="t423i" name="members[{{ $i }}][t423i]" class="form-control" value="{{number_format(($member->t423i),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423i" name="members[{{ $i }}][t423i]" class="form-control" value="{{$member->t423i}}" disabled>
                            </td>
                            @endif
                    
                            
                      @elseif( $a->setuju_opd == 0)
                      
                        @if(is_numeric($member->t423a))
                            <td>
                                <input type="text" id="t423a" name="members[{{ $i }}][t423a]" class="form-control" value="{{number_format(($member->t423a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423a" name="members[{{ $i }}][t423a]" class="form-control" value="{{$member->t423a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t423b))
                            <td>
                                <input type="text" id="t423b" name="members[{{ $i }}][t423b]" class="form-control" value="{{number_format(($member->t423b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423b" name="members[{{ $i }}][t423b]" class="form-control" value="{{$member->t423b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423c))
                            <td>
                                <input type="text" id="t423c" name="members[{{ $i }}][t423c]" class="form-control" value="{{number_format(($member->t423c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423c" name="members[{{ $i }}][t423c]" class="form-control" value="{{$member->t423c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t423d))
                            <td>
                                <input type="text" id="t423d" name="members[{{ $i }}][t423d]" class="form-control" value="{{number_format(($member->t423d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423d" name="members[{{ $i }}][t423d]" class="form-control" value="{{$member->t423d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423e))
                            <td>
                                <input type="text" id="t423e" name="members[{{ $i }}][t423e]" class="form-control" value="{{number_format(($member->t423e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423e" name="members[{{ $i }}][t423e]" class="form-control" value="{{$member->t423e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423f))
                            <td>
                                <input type="text" id="t423f" name="members[{{ $i }}][t423f]" class="form-control" value="{{number_format(($member->t423f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423f" name="members[{{ $i }}][t423f]" class="form-control" value="{{$member->t423f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423g))
                            <td>
                                <input type="text" id="t423g" name="members[{{ $i }}][t423g]" class="form-control" value="{{number_format(($member->t423g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423g" name="members[{{ $i }}][t423g]" class="form-control" value="{{$member->t423g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423h))
                            <td>
                                <input type="text" id="t423h" name="members[{{ $i }}][t423h]" class="form-control" value="{{number_format(($member->t423h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423h" name="members[{{ $i }}][t423h]" class="form-control" value="{{$member->t423h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423i))
                            <td>
                                <input type="text" id="t423i" name="members[{{ $i }}][t423i]" class="form-control" value="{{number_format(($member->t423i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t423i" name="members[{{ $i }}][t423i]" class="form-control" value="{{$member->t423i}}">
                            </td>
                            @endif
                      
                      @else @endif @endforeach
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_f),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_g),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_h),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_i),0, '.',' ')}}">
                            </th>
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    </div>
    
    <div class="col-md-4">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                  
      <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="10"> <center>2021</center></th> 
                    </tr>
                    <tr>
                        
                      @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perawat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bidan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kefarmasian</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Masyarakat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Lingkungan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Gizi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ahli Teknologi Laboratorium</center></th>
                      
                    </tr>
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                             @if(is_numeric($member->t423a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t423b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t423d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t423f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t423i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t423i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t423i}}">
                            </td>
                            @endif
                          
                    
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_f),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_g),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_h),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_i),0, '.',' ')}}">
                            </th>
                         
                             
                        
            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Kesehatan</a></p>

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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
		    
			});
			
				$('#example4').DataTable({
			"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
			
			});
		});
	</script>  