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
                        
                           <a href="{{ url('/ekspor_dda_542') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Produksi Kayu Hutan Menurut Jenis Produksi (m3) di {{ $a->kab }}, 2018 - 2022</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Bulat</center></th>
                        <th colspan = "5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Olahan</center></th>
           
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HT</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perum Perhutani</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Gergajian</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Lapis</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bubur Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Serpih Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Veneer</center></th>
                
                      
                    </tr>
                    
            
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_542 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store542') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t542a))
                            <td>
                                <input type="text" id="t542a" name="members[{{ $i }}][t542a]" class="form-control" value="{{number_format(($member->t542a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542a" name="members[{{ $i }}][t542a]" class="form-control" value="{{$member->t542a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t542b))
                            <td>
                                <input type="text" id="t542b" name="members[{{ $i }}][t542b]" class="form-control" value="{{number_format(($member->t542b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542b" name="members[{{ $i }}][t542b]" class="form-control" value="{{$member->t542b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542c))
                            <td>
                                <input type="text" id="t542c" name="members[{{ $i }}][t542c]" class="form-control" value="{{number_format(($member->t542c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542c" name="members[{{ $i }}][t542c]" class="form-control" value="{{$member->t542c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t542d))
                            <td>
                                <input type="text" id="t542d" name="members[{{ $i }}][t542d]" class="form-control" value="{{number_format(($member->t542d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542d" name="members[{{ $i }}][t542d]" class="form-control" value="{{$member->t542d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542e))
                            <td>
                                <input type="text" id="t542e" name="members[{{ $i }}][t542e]" class="form-control" value="{{number_format(($member->t542e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542e" name="members[{{ $i }}][t542e]" class="form-control" value="{{$member->t542e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542f))
                            <td>
                                <input type="text" id="t542f" name="members[{{ $i }}][t542f]" class="form-control" value="{{number_format(($member->t542f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542f" name="members[{{ $i }}][t542f]" class="form-control" value="{{$member->t542f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542g))
                            <td>
                                <input type="text" id="t542g" name="members[{{ $i }}][t542g]" class="form-control" value="{{number_format(($member->t542g),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542g" name="members[{{ $i }}][t542g]" class="form-control" value="{{$member->t542g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542h))
                            <td>
                                <input type="text" id="t542h" name="members[{{ $i }}][t542h]" class="form-control" value="{{number_format(($member->t542h),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542h" name="members[{{ $i }}][t542h]" class="form-control" value="{{$member->t542h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542i))
                            <td>
                                <input type="text" id="t542i" name="members[{{ $i }}][t542i]" class="form-control" value="{{number_format(($member->t542i),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542i" name="members[{{ $i }}][t542i]" class="form-control" value="{{$member->t542i}}" disabled>
                            </td>
                            @endif
                       
                          @elseif( $a->setuju_opd == 0)
                          
                          @if(is_numeric($member->t542a))
                            <td>
                                <input type="text" id="t542a" name="members[{{ $i }}][t542a]" class="form-control" value="{{number_format(($member->t542a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542a" name="members[{{ $i }}][t542a]" class="form-control" value="{{$member->t542a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t542b))
                            <td>
                                <input type="text" id="t542b" name="members[{{ $i }}][t542b]" class="form-control" value="{{number_format(($member->t542b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542b" name="members[{{ $i }}][t542b]" class="form-control" value="{{$member->t542b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542c))
                            <td>
                                <input type="text" id="t542c" name="members[{{ $i }}][t542c]" class="form-control" value="{{number_format(($member->t542c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542c" name="members[{{ $i }}][t542c]" class="form-control" value="{{$member->t542c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t542d))
                            <td>
                                <input type="text" id="t542d" name="members[{{ $i }}][t542d]" class="form-control" value="{{number_format(($member->t542d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542d" name="members[{{ $i }}][t542d]" class="form-control" value="{{$member->t542d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542e))
                            <td>
                                <input type="text" id="t542e" name="members[{{ $i }}][t542e]" class="form-control" value="{{number_format(($member->t542e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542e" name="members[{{ $i }}][t542e]" class="form-control" value="{{$member->t542e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542f))
                            <td>
                                <input type="text" id="t542f" name="members[{{ $i }}][t542f]" class="form-control" value="{{number_format(($member->t542f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542f" name="members[{{ $i }}][t542f]" class="form-control" value="{{$member->t542f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542g))
                            <td>
                                <input type="text" id="t542g" name="members[{{ $i }}][t542g]" class="form-control" value="{{number_format(($member->t542g),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542g" name="members[{{ $i }}][t542g]" class="form-control" value="{{$member->t542g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542h))
                            <td>
                                <input type="text" id="t542h" name="members[{{ $i }}][t542h]" class="form-control" value="{{number_format(($member->t542h),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542h" name="members[{{ $i }}][t542h]" class="form-control" value="{{$member->t542h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542i))
                            <td>
                                <input type="text" id="t542i" name="members[{{ $i }}][t542i]" class="form-control" value="{{number_format(($member->t542i),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t542i" name="members[{{ $i }}][t542i]" class="form-control" value="{{$member->t542i}}">
                            </td>
                            @endif
                          
                          @else @endif @endforeach
                       
                      
                    </tr>
                    @endforeach
                  
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
