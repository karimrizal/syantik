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
                         
                           <a href="{{ url('/ekspor_dda_227') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)
@if (Auth::user()->idkab == '7400')					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Pemilih Berkelanjutan Tingkat Provinsi Sulawesi Tenggara, {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Pemilih dan Penggunaan Hak Pilih dalam Pemilihan Anggota Legislatif Menurut Kecamatan dan Jenis Kelamin di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="7"> <center>{{$year}}</center></th>
                        
                    </tr>
                    <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Daftar Pemilih Berkelanjutan</center></th>
    		
				    
				    @else 
				     <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Jumlah Pemilih</center></th>
    				    <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Penggunaan Hak Pilih</center></th>
    				@endif
                    </tr>
                    
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
      
                 
                    </tr>
                    
                    
            </thead>
                    @foreach ($tabel_227 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store227') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                               @if(is_numeric($member->t227a))
                            <td>
                                <input type="text" id="t227a" name="members[{{ $i }}][t227a]" class="form-control" value="{{number_format(($member->t227a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227a" name="members[{{ $i }}][t227a]" class="form-control" value="{{$member->t227a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t227b))
                            <td>
                                <input type="text" id="t227b" name="members[{{ $i }}][t227b]" class="form-control" value="{{number_format(($member->t227b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227b" name="members[{{ $i }}][t227b]" class="form-control" value="{{$member->t227b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t227c))
                            <td>
                                <input type="text" id="t227c" name="members[{{ $i }}][t227c]" class="form-control" value="{{number_format(($member->t227c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227c" name="members[{{ $i }}][t227c]" class="form-control" value="{{$member->t227c}}" disabled>
                            </td>
                            @endif    
                            
                    
                     
                      
                      @elseif( $a->setuju_opd == 0) 
                      
                         @if(is_numeric($member->t227a))
                            <td>
                                <input type="text" id="t227a" name="members[{{ $i }}][t227a]" class="form-control" value="{{number_format(($member->t227a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227a" name="members[{{ $i }}][t227a]" class="form-control" value="{{$member->t227a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t227b))
                            <td>
                                <input type="text" id="t227b" name="members[{{ $i }}][t227b]" class="form-control" value="{{number_format(($member->t227b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227b" name="members[{{ $i }}][t227b]" class="form-control" value="{{$member->t227b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t227c))
                            <td>
                                <input type="text" id="t227c" name="members[{{ $i }}][t227c]" class="form-control" value="{{number_format(($member->t227c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t227c" name="members[{{ $i }}][t227c]" class="form-control" value="{{$member->t227c}}">
                            </td>
                            @endif    
                            
              
                      
                      @else @endif @endforeach
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
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
                  
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
               
                   <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="7"> <center>2021</center></th>
                        
                    </tr>
                    <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Daftar Pemilih Berkelanjutan</center></th>
    		
				    
				    @else 
				     <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Jumlah Pemilih</center></th>
    				    <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Penggunaan Hak Pilih</center></th>
    				@endif
                    </tr>
                    
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
           
                    </tr>
                  
                   
            </thead>
                     @foreach ($tes as $member )
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                  
                            
                             
                               @if(is_numeric($member->t227a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t227a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t227a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t227b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t227b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t227b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t227c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t227c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t227c}}">
                            </td>
                            @endif    
                  
                     
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
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
                  
                            @endforeach
                      
                       
                      
                    </tr>
 
                   
                    
                        
                              
                 
                   
                          
                          
             
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: KPU</a></p>

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
 
