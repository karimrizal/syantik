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
                            <a href="{{ url('/ekspor_7453') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah dan Presentase Kepemilikan Akte Kelahiran Berdasarkan Umur Provinsi Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "3" > <center>Kelompok Umur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" colspan = "3" > <center>Jumlah Penduduk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Kepemilikan Akte Kelahiran</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "3" > <center>% Kepemilikan Akta Lahir</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"colspan = "3" > <center>Ada</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"colspan = "3" > <center>Belum Ada</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7453 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7453') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7453a))
                            <td>
                                <input type="text" id="t7453a" name="members[{{ $i }}][t7453a]" class="form-control" value="{{number_format(($member->t7453a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453a" name="members[{{ $i }}][t7453a]" class="form-control" value="{{$member->t7453a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7453b))
                            <td>
                                <input type="text" id="t7453b" name="members[{{ $i }}][t7453b]" class="form-control" value="{{number_format(($member->t7453b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453b" name="members[{{ $i }}][t7453b]" class="form-control" value="{{$member->t7453b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7453c))
                            <td>
                                <input type="text" id="t7453c" name="members[{{ $i }}][t7453c]" class="form-control" value="{{number_format(($member->t7453c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453c" name="members[{{ $i }}][t7453c]" class="form-control" value="{{$member->t7453c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7453d))
                            <td>
                                <input type="text" id="t7453d" name="members[{{ $i }}][t7453d]" class="form-control" value="{{number_format(($member->t7453d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453d" name="members[{{ $i }}][t7453d]" class="form-control" value="{{$member->t7453d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7453e))
                            <td>
                                <input type="text" id="t7453e" name="members[{{ $i }}][t7453e]" class="form-control" value="{{number_format(($member->t7453e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453e" name="members[{{ $i }}][t7453e]" class="form-control" value="{{$member->t7453e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7453f))
                            <td>
                                <input type="text" id="t7453f" name="members[{{ $i }}][t7453f]" class="form-control" value="{{number_format(($member->t7453f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453f" name="members[{{ $i }}][t7453f]" class="form-control" value="{{$member->t7453f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7453g))
                            <td>
                                <input type="text" id="t7453g" name="members[{{ $i }}][t7453g]" class="form-control" value="{{number_format(($member->t7453g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453g" name="members[{{ $i }}][t7453g]" class="form-control" value="{{$member->t7453g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t7453h))
                            <td>
                                <input type="text" id="t7453h" name="members[{{ $i }}][t7453h]" class="form-control" value="{{number_format(($member->t7453h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453h" name="members[{{ $i }}][t7453h]" class="form-control" value="{{$member->t7453h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t7453i))
                            <td>
                                <input type="text" id="t7453i" name="members[{{ $i }}][t7453i]" class="form-control" value="{{number_format(($member->t7453i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453i" name="members[{{ $i }}][t7453i]" class="form-control" value="{{$member->t7453i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t7453j))
                            <td>
                                <input type="text" id="t7453j" name="members[{{ $i }}][t7453j]" class="form-control" value="{{number_format(($member->t7453j),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7453j" name="members[{{ $i }}][t7453j]" class="form-control" value="{{$member->t7453j}}">
                            </td>
                            @endif
          
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_d),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_e),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_f),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_g),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_h),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_i),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_j),2, '.',' ')}}">
                            </th>
              
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Data Konsolidasi Bersih (DKB) Smester II Tahun {{$year}}</a></p>

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

