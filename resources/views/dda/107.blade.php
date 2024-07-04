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
        	
              <a href="{{ url('/ekspor_dda_107') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>                               
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Posisi Pinjaman (Rupiah dan Valuta Asing) yang Diberikan Bank Umum dan BPR Menurut Jenis Penggunaan di {{ $a->kab }} (Juta Rp), 2018-2022</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                       
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Modal Kerja</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Investasi</center></th>
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konsumsi</center></th>
                        
                    
                    </tr>
                   
                    
                    
            </thead>
                    @foreach ($tabel_107 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store107') }}" method="POST">
                             @csrf
                             
                         
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                             
                             @if(is_numeric($member->t107b))
                            <td>
                                <input type="text" id="t107b" name="members[{{ $i }}][t107b]" class="form-control" value="{{number_format(($member->t107b),0, '.',' ')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107b" name="members[{{ $i }}][t107b]" class="form-control" value="{{$member->t107b}}" disabled>
                            </td>
                            @endif
                            
                             
                             
                             @if(is_numeric($member->t107f))
                            <td>
                                <input type="text" id="t107f" name="members[{{ $i }}][t107f]" class="form-control" value="{{number_format(($member->t107f),0, '.',' ')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107f" name="members[{{ $i }}][t107f]" class="form-control" value="{{$member->t107f}}" disabled>
                            </td>
                            @endif
                            
                   
                             
                            @if(is_numeric($member->t107d))
                            <td>
                                <input type="text" id="t107d" name="members[{{ $i }}][t107d]" class="form-control" value="{{number_format(($member->t107d),0, '.',' ')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107d" name="members[{{ $i }}][t107d]" class="form-control" value="{{$member->t107d}}" disabled>
                            </td>
                            @endif 
                            
                            
                        @elseif( $a->setuju_opd == 0)
                        
                         @if(is_numeric($member->t107b))
                            <td>
                                <input type="text" id="t107b" name="members[{{ $i }}][t107b]" class="form-control" value="{{number_format(($member->t107b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107b" name="members[{{ $i }}][t107b]" class="form-control" value="{{$member->t107b}}">
                            </td>
                            @endif
                            
                             
                             
                             @if(is_numeric($member->t107f))
                            <td>
                                <input type="text" id="t107f" name="members[{{ $i }}][t107f]" class="form-control" value="{{number_format(($member->t107f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107f" name="members[{{ $i }}][t107f]" class="form-control" value="{{$member->t107f}}">
                            </td>
                            @endif
                            
                   
                             
                            @if(is_numeric($member->t107d))
                            <td>
                                <input type="text" id="t107d" name="members[{{ $i }}][t107d]" class="form-control" value="{{number_format(($member->t107d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t107d" name="members[{{ $i }}][t107d]" class="form-control" value="{{$member->t107d}}">
                            </td>
                            @endif 
                        
                        @else @endif @endforeach
                            
                             
                      
                    </tr>
                    @endforeach
                    
          
                    
    </table>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Bank Indonesia Perwakilan Sulawesi Tenggara</a></p>

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
