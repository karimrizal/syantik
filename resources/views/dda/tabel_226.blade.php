@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	@if (session('success4'))
                            <div class="alert alert-success">
                                {{ session('success4') }}
                            </div>
                            @endif
         
               <br>
               <p class="page-title text-left"><a href="data_dda"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                          
                           <a href="{{ url('/ekspor_dda_226') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Hasil Penghitungan Suara Untuk Keanggotaan DPRD Dapil {{ $a->kab }} Menurut Partai dan Kabupaten/Kota , {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-9">
 <form id="simpan" action="{{ route('dda.store226') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="13"> <center>{{$year}}</center></th>
                        
                    </tr>
                    <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
                    
				     @elseif (Auth::user()->idkab == '7401')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        
                        @elseif (Auth::user()->idkab == '7402')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        
                        @elseif (Auth::user()->idkab == '7403')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        
                        @elseif (Auth::user()->idkab == '7404')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        
                        @elseif (Auth::user()->idkab == '7405')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        
                        @elseif (Auth::user()->idkab == '7406')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        
                        @elseif (Auth::user()->idkab == '7407')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        
                        @elseif (Auth::user()->idkab == '7408')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7409')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7410')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7471')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        
                        @elseif (Auth::user()->idkab == '7472')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
				     
    			@else	@endif
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_226 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                        
                             
                           
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                                                      @if(is_numeric($member->t226a))     
                            <td>
                                <input type="text" id="t226a" name="members[{{ $i }}][t226a]" class="form-control" value="{{number_format(($member->t226a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226a" name="members[{{ $i }}][t226a]" class="form-control" value="{{$member->t226a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t226b))
                            <td>
                                <input type="text" id="t226b" name="members[{{ $i }}][t226b]" class="form-control" value="{{number_format(($member->t226b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226b" name="members[{{ $i }}][t226b]" class="form-control" value="{{$member->t226b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226c))
                            <td>
                                <input type="text" id="t226c" name="members[{{ $i }}][t226c]" class="form-control" value="{{number_format(($member->t226c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226c" name="members[{{ $i }}][t226c]" class="form-control" value="{{$member->t226c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t226d))
                            <td>
                                <input type="text" id="t226d" name="members[{{ $i }}][t226d]" class="form-control" value="{{number_format(($member->t226d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226d" name="members[{{ $i }}][t226d]" class="form-control" value="{{$member->t226d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226e))
                            <td>
                                <input type="text" id="t226e" name="members[{{ $i }}][t226e]" class="form-control" value="{{number_format(($member->t226e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226e" name="members[{{ $i }}][t226e]" class="form-control" value="{{$member->t226e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226f))
                            <td>
                                <input type="text" id="t226f" name="members[{{ $i }}][t226f]" class="form-control" value="{{number_format(($member->t226f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226f" name="members[{{ $i }}][t226f]" class="form-control" value="{{$member->t226f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226g))
                            <td>
                                <input type="text" id="t226g" name="members[{{ $i }}][t226g]" class="form-control" value="{{number_format(($member->t226g),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226g" name="members[{{ $i }}][t226g]" class="form-control" value="{{$member->t226g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226h))
                            <td>
                                <input type="text" id="t226h" name="members[{{ $i }}][t226h]" class="form-control" value="{{number_format(($member->t226h),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226h" name="members[{{ $i }}][t226h]" class="form-control" value="{{$member->t226h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226i))
                            <td>
                                <input type="text" id="t226i" name="members[{{ $i }}][t226i]" class="form-control" value="{{number_format(($member->t226i),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226i" name="members[{{ $i }}][t226i]" class="form-control" value="{{$member->t226i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226j))
                            <td>
                                <input type="text" id="t226j" name="members[{{ $i }}][t226j]" class="form-control" value="{{number_format(($member->t226j),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226j" name="members[{{ $i }}][t226j]" class="form-control" value="{{$member->t226j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226k))
                            <td>
                                <input type="text" id="t226k" name="members[{{ $i }}][t226k]" class="form-control" value="{{number_format(($member->t226k),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226k" name="members[{{ $i }}][t226k]" class="form-control" value="{{$member->t226k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226l))
                            <td>
                                <input type="text" id="t226l" name="members[{{ $i }}][t226l]" class="form-control" value="{{number_format(($member->t226l),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226l" name="members[{{ $i }}][t226l]" class="form-control" value="{{$member->t226l}}" disabled>
                            </td>
                            @endif
                     
                    @elseif( $a->setuju_opd == 0)
                    
                                               @if(is_numeric($member->t226a))     
                            <td>
                                <input type="text" id="t226a" name="members[{{ $i }}][t226a]" class="form-control" value="{{number_format(($member->t226a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226a" name="members[{{ $i }}][t226a]" class="form-control" value="{{$member->t226a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t226b))
                            <td>
                                <input type="text" id="t226b" name="members[{{ $i }}][t226b]" class="form-control" value="{{number_format(($member->t226b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226b" name="members[{{ $i }}][t226b]" class="form-control" value="{{$member->t226b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226c))
                            <td>
                                <input type="text" id="t226c" name="members[{{ $i }}][t226c]" class="form-control" value="{{number_format(($member->t226c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226c" name="members[{{ $i }}][t226c]" class="form-control" value="{{$member->t226c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t226d))
                            <td>
                                <input type="text" id="t226d" name="members[{{ $i }}][t226d]" class="form-control" value="{{number_format(($member->t226d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226d" name="members[{{ $i }}][t226d]" class="form-control" value="{{$member->t226d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226e))
                            <td>
                                <input type="text" id="t226e" name="members[{{ $i }}][t226e]" class="form-control" value="{{number_format(($member->t226e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226e" name="members[{{ $i }}][t226e]" class="form-control" value="{{$member->t226e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226f))
                            <td>
                                <input type="text" id="t226f" name="members[{{ $i }}][t226f]" class="form-control" value="{{number_format(($member->t226f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226f" name="members[{{ $i }}][t226f]" class="form-control" value="{{$member->t226f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226g))
                            <td>
                                <input type="text" id="t226g" name="members[{{ $i }}][t226g]" class="form-control" value="{{number_format(($member->t226g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226g" name="members[{{ $i }}][t226g]" class="form-control" value="{{$member->t226g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226h))
                            <td>
                                <input type="text" id="t226h" name="members[{{ $i }}][t226h]" class="form-control" value="{{number_format(($member->t226h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226h" name="members[{{ $i }}][t226h]" class="form-control" value="{{$member->t226h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226i))
                            <td>
                                <input type="text" id="t226i" name="members[{{ $i }}][t226i]" class="form-control" value="{{number_format(($member->t226i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226i" name="members[{{ $i }}][t226i]" class="form-control" value="{{$member->t226i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226j))
                            <td>
                                <input type="text" id="t226j" name="members[{{ $i }}][t226j]" class="form-control" value="{{number_format(($member->t226j),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226j" name="members[{{ $i }}][t226j]" class="form-control" value="{{$member->t226j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226k))
                            <td>
                                <input type="text" id="t226k" name="members[{{ $i }}][t226k]" class="form-control" value="{{number_format(($member->t226k),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226k" name="members[{{ $i }}][t226k]" class="form-control" value="{{$member->t226k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226l))
                            <td>
                                <input type="text" id="t226l" name="members[{{ $i }}][t226l]" class="form-control" value="{{number_format(($member->t226l),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t226l" name="members[{{ $i }}][t226l]" class="form-control" value="{{$member->t226l}}">
                            </td>
                            @endif
                    
                    @else @endif @endforeach
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lk as $a)
                         
                         @if (Auth::user()->idkab == '7400')
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
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_j),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_k),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_l),0, '.',' ')}}">
                            </th>
                            
                        @elseif (Auth::user()->idkab == '7401')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7402')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7403')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7404')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_d),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7405')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_e),0, '.',' ')}}">
                            </th>   
                        @elseif (Auth::user()->idkab == '7406')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_f),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7407')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_g),0, '.',' ')}}">
                            </th>    
                        @elseif (Auth::user()->idkab == '7408')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_h),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7409')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_i),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7410')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_j),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7471')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_k),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7472')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_l),0, '.',' ')}}">
                            </th>   
                        @else @endif    
                            
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
     </div>
    
    <div class="col-md-3">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
                   <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="13"> <center>2021</center></th>
                        
                    </tr>
                   <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
                    
				     @elseif (Auth::user()->idkab == '7401')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        
                        @elseif (Auth::user()->idkab == '7402')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        
                        @elseif (Auth::user()->idkab == '7403')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        
                        @elseif (Auth::user()->idkab == '7404')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        
                        @elseif (Auth::user()->idkab == '7405')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        
                        @elseif (Auth::user()->idkab == '7406')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        
                        @elseif (Auth::user()->idkab == '7407')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        
                        @elseif (Auth::user()->idkab == '7408')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7409')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7410')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7471')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        
                        @elseif (Auth::user()->idkab == '7472')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
				     
    			@else	@endif
                    </tr>
                  
                   
            </thead>
                     @foreach ($tes as $a )
                    <tr>
                       
                        <th >{{ $a->kec }}</th>
                        
           
                            @if (Auth::user()->idkab == '7400')
             
                                                      @if(is_numeric($member->t226a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t226b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t226d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t226f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t226l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226l}}">
                            </td>
                            @endif
                     
                    @elseif (Auth::user()->idkab == '7401')  
                
                               @if(is_numeric($member->t226a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226a}}">
                            </td>
                            @endif    
                     @elseif (Auth::user()->idkab == '7402')  
                
                               @if(is_numeric($member->t226b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226b}}">
                            </td>
                            @endif   
                    
                    @elseif (Auth::user()->idkab == '7403')  
                 
                              @if(is_numeric($member->t226c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226c}}">
                            </td>
                            @endif    
                    @elseif (Auth::user()->idkab == '7404')  
             
                              @if(is_numeric($member->t226d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226d}}">
                            </td>
                            @endif 
                    @elseif (Auth::user()->idkab == '7405')  
               
                             @if(is_numeric($member->t226e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226e}}">
                            </td>
                            @endif        
                    @elseif (Auth::user()->idkab == '7406')  
                 
                             @if(is_numeric($member->t226f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226f}}">
                            </td>
                            @endif      
                   @elseif (Auth::user()->idkab == '7407')  
                
                               @if(is_numeric($member->t226g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226g}}">
                            </td>
                            @endif              
                    @elseif (Auth::user()->idkab == '7408')  
                 
                              @if(is_numeric($member->t226h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226h}}">
                            </td>
                            @endif           
                    @elseif (Auth::user()->idkab == '7409')  
                 
                               @if(is_numeric($member->t226i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226i}}">
                            </td>
                            @endif         
                            
                    @elseif (Auth::user()->idkab == '7410')  
                
                              @if(is_numeric($member->t226j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226j}}">
                            </td>
                            @endif
                    @elseif (Auth::user()->idkab == '7471')  
                
                              @if(is_numeric($member->t226k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226k}}">
                            </td>
                            @endif        
                     @elseif (Auth::user()->idkab == '7472')  
                 
                              @if(is_numeric($member->t226l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t226l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t226l}}">
                            </td>
                            @endif               
                            
                    @else @endif
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lalu as $a)
                         
                         @if (Auth::user()->idkab == '7400')
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
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_j),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_k),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_l),0, '.',' ')}}">
                            </th>
                            
                        @elseif (Auth::user()->idkab == '7401')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7402')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7403')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                        @elseif (Auth::user()->idkab == '7404')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_d),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7405')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_e),0, '.',' ')}}">
                            </th>   
                        @elseif (Auth::user()->idkab == '7406')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_f),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7407')    
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_g),0, '.',' ')}}">
                            </th>    
                        @elseif (Auth::user()->idkab == '7408')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_h),0, '.',' ')}}">
                            </th>     
                        @elseif (Auth::user()->idkab == '7409')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_i),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7410')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_j),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7471')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_k),0, '.',' ')}}">
                            </th>       
                        @elseif (Auth::user()->idkab == '7472')    
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_l),0, '.',' ')}}">
                            </th>   
                        @else @endif    
                            
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
