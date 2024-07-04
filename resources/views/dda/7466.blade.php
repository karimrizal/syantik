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
               <a href="{{ url('/ekspor_7466') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    

					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">  JUMLAH PEMINJAM BUKU PER BULAN MENURUT PROFESI DAN JENIS KELAMIN di Provinsi Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="">
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
          
                      @foreach ($tabel_7466 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7466') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7466a))
                            <td>
                                <input type="text" id="t7466a" name="members[{{ $i }}][t7466a]" class="form-control" value="{{number_format(($member->t7466a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466a" name="members[{{ $i }}][t7466a]" class="form-control" value="{{$member->t7466a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7466b))
                            <td>
                                <input type="text" id="t7466b" name="members[{{ $i }}][t7466b]" class="form-control" value="{{number_format(($member->t7466b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466b" name="members[{{ $i }}][t7466b]" class="form-control" value="{{$member->t7466b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7466c))
                            <td>
                                <input type="text" id="t7466c" name="members[{{ $i }}][t7466c]" class="form-control" value="{{number_format(($member->t7466c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466c" name="members[{{ $i }}][t7466c]" class="form-control" value="{{$member->t7466c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7466d))
                            <td>
                                <input type="text" id="t7466d" name="members[{{ $i }}][t7466d]" class="form-control" value="{{number_format(($member->t7466d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466d" name="members[{{ $i }}][t7466d]" class="form-control" value="{{$member->t7466d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7466e))
                            <td>
                                <input type="text" id="t7466e" name="members[{{ $i }}][t7466e]" class="form-control" value="{{number_format(($member->t7466e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466e" name="members[{{ $i }}][t7466e]" class="form-control" value="{{$member->t7466e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7466f))
                            <td>
                                <input type="text" id="t7466f" name="members[{{ $i }}][t7466f]" class="form-control" value="{{number_format(($member->t7466f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466f" name="members[{{ $i }}][t7466f]" class="form-control" value="{{$member->t7466f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7466g))
                            <td>
                                <input type="text" id="t7466g" name="members[{{ $i }}][t7466g]" class="form-control" value="{{number_format(($member->t7466g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466g" name="members[{{ $i }}][t7466g]" class="form-control" value="{{$member->t7466g}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7466h))
                            <td>
                                <input type="text" id="t7466h" name="members[{{ $i }}][t7466h]" class="form-control" value="{{number_format(($member->t7466h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7466h" name="members[{{ $i }}][t7466h]" class="form-control" value="{{$member->t7466h}}">
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

