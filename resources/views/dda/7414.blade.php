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
                            <a href="{{ url('/ekspor_7414') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> JUMLAH PENGUNJUNG PERPUSTAKAAN PER BULAN MENURUT PROFESI DAN JENIS KELAMIN, Tahun {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Bulan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Pelajar/Mahasiswa</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Pegawai</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Dosen</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Umum</center></th>
                       
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>

                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7414 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7414') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7414a))
                            <td>
                                <input type="text" id="t7414a" name="members[{{ $i }}][t7414a]" class="form-control" value="{{number_format(($member->t7414a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414a" name="members[{{ $i }}][t7414a]" class="form-control" value="{{$member->t7414a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7414b))
                            <td>
                                <input type="text" id="t7414b" name="members[{{ $i }}][t7414b]" class="form-control" value="{{number_format(($member->t7414b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414b" name="members[{{ $i }}][t7414b]" class="form-control" value="{{$member->t7414b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7414c))
                            <td>
                                <input type="text" id="t7414c" name="members[{{ $i }}][t7414c]" class="form-control" value="{{number_format(($member->t7414c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414c" name="members[{{ $i }}][t7414c]" class="form-control" value="{{$member->t7414c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7414d))
                            <td>
                                <input type="text" id="t7414d" name="members[{{ $i }}][t7414d]" class="form-control" value="{{number_format(($member->t7414d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414d" name="members[{{ $i }}][t7414d]" class="form-control" value="{{$member->t7414d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7414e))
                            <td>
                                <input type="text" id="t7414e" name="members[{{ $i }}][t7414e]" class="form-control" value="{{number_format(($member->t7414e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414e" name="members[{{ $i }}][t7414e]" class="form-control" value="{{$member->t7414e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7414f))
                            <td>
                                <input type="text" id="t7414f" name="members[{{ $i }}][t7414f]" class="form-control" value="{{number_format(($member->t7414f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414f" name="members[{{ $i }}][t7414f]" class="form-control" value="{{$member->t7414f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7414g))
                            <td>
                                <input type="text" id="t7414g" name="members[{{ $i }}][t7414g]" class="form-control" value="{{number_format(($member->t7414g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414g" name="members[{{ $i }}][t7414g]" class="form-control" value="{{$member->t7414g}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7414h))
                            <td>
                                <input type="text" id="t7414h" name="members[{{ $i }}][t7414h]" class="form-control" value="{{number_format(($member->t7414h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7414h" name="members[{{ $i }}][t7414h]" class="form-control" value="{{$member->t7414h}}">
                            </td>
                            @endif
          
                      
                    </tr>
                    @endforeach
              
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Perpustakaan dan Kearsipan</a></p>

     <br>
     
     <div class="form-group">
         @foreach($catatan as $a)
            <label for ="catatan"><b> Catatan</b> </label>
             	 		
          <textarea name="catatan" id="catatan" >
              {!! $a->catatan !!}
                 @endforeach
            </textarea>
            </div>
                    <button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>




						
	</div>
</div>
					<!-- END OVERVIEW -->
		


    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

