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
                        
                            <a href="{{ url('/ekspor_74110') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Luas Kebakaran Hutan Di Hutan Lindung Dan Hutan Produksi Di Provinsi Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    

                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Hutan Lindung (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Hutan Produksi (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah (Ha)</center></th>

                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_74110 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store74110') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             @if(is_numeric($member->t74110a))
                            <td>
                                <input type="text" id="t74110a" name="members[{{ $i }}][t74110a]" class="form-control" value="{{number_format(($member->t74110a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110a" name="members[{{ $i }}][t74110a]" class="form-control" value="{{$member->t74110a}}" disabled>
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74110b))
                            <td>
                                <input type="text" id="t74110b" name="members[{{ $i }}][t74110b]" class="form-control" value="{{number_format(($member->t74110b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110b" name="members[{{ $i }}][t74110b]" class="form-control" value="{{$member->t74110b}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74110c))
                            <td>
                                <input type="text" id="t74110c" name="members[{{ $i }}][t74110c]" class="form-control" value="{{number_format(($member->t74110c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110c" name="members[{{ $i }}][t74110c]" class="form-control" value="{{$member->t74110c}}" disabled>
                            </td>
                            @endif
                            
              
                            
                         @elseif( $a->setuju_opd == 0)
                         
                           @if(is_numeric($member->t74110a))
                            <td>
                                <input type="text" id="t74110a" name="members[{{ $i }}][t74110a]" class="form-control" value="{{number_format(($member->t74110a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110a" name="members[{{ $i }}][t74110a]" class="form-control" value="{{$member->t74110a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t74110b))
                            <td>
                                <input type="text" id="t74110b" name="members[{{ $i }}][t74110b]" class="form-control" value="{{number_format(($member->t74110b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110b" name="members[{{ $i }}][t74110b]" class="form-control" value="{{$member->t74110b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t74110c))
                            <td>
                                <input type="text" id="t74110c" name="members[{{ $i }}][t74110c]" class="form-control" value="{{number_format(($member->t74110c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t74110c" name="members[{{ $i }}][t74110c]" class="form-control" value="{{$member->t74110c}}">
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

