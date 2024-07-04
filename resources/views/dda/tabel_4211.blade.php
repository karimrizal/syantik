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
                         
                           <a href="{{ url('/ekspor_dda_4211') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>          
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Dokter Spesialis, Dokter Umum, dan Dokter Gigi Menurut Sarana Pelayanan Kesehatan di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">

<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>{{$year}}</center></th>
                        
                    </tr>
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sarana Pelayanan Kesehatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Spesialis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                
                      
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_4211 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store4211') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t4211a))
                            <td>
                                <input type="text" id="t4211a" name="members[{{ $i }}][t4211a]" class="form-control" value="{{number_format(($member->t4211a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211a" name="members[{{ $i }}][t4211a]" class="form-control" value="{{$member->t4211a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t4211b))
                            <td>
                                <input type="text" id="t4211b" name="members[{{ $i }}][t4211b]" class="form-control" value="{{number_format(($member->t4211b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211b" name="members[{{ $i }}][t4211b]" class="form-control" value="{{$member->t4211b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4211c))
                            <td>
                                <input type="text" id="t4211c" name="members[{{ $i }}][t4211c]" class="form-control" value="{{number_format(($member->t4211c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211c" name="members[{{ $i }}][t4211c]" class="form-control" value="{{$member->t4211c}}" disabled>
                            </td>
                            @endif    
                               
               
                    
                           @elseif( $a->setuju_opd == 0)
                           
                           @if(is_numeric($member->t4211a))
                            <td>
                                <input type="text" id="t4211a" name="members[{{ $i }}][t4211a]" class="form-control" value="{{number_format(($member->t4211a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211a" name="members[{{ $i }}][t4211a]" class="form-control" value="{{$member->t4211a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t4211b))
                            <td>
                                <input type="text" id="t4211b" name="members[{{ $i }}][t4211b]" class="form-control" value="{{number_format(($member->t4211b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211b" name="members[{{ $i }}][t4211b]" class="form-control" value="{{$member->t4211b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4211c))
                            <td>
                                <input type="text" id="t4211c" name="members[{{ $i }}][t4211c]" class="form-control" value="{{number_format(($member->t4211c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t4211c" name="members[{{ $i }}][t4211c]" class="form-control" value="{{$member->t4211c}}">
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
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"><center>2021</center></th>
                        
                    </tr>
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sarana Pelayanan Kesehatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Spesialis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                
                      
                    </tr>
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                              @if(is_numeric($member->t4211a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t4211a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t4211a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t4211b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t4211b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t4211b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4211c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t4211c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t4211c}}">
                            </td>
                            @endif    
                      
                       
                      
                    </tr>
                    @endforeach
                    
         
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
