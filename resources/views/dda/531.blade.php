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
                        
                           <a href="{{ url('/ekspor_dda_531') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Luas Areal Tanaman Perkebunan Menurut Kabupaten/Kota dan Jenis Tanaman (ha) di {{ $a->kab }}, {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Luas Areal Tanaman Perkebunan Menurut Kecamatan dan Jenis Tanaman (ha) di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<div class="row">
    <div class="col-md-9">
        <form id="simpan" action="{{ route('dda.store531') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                    <tr><th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="14"><center>{{$year}}</center></th> </tr>
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa Sawit</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Karet</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kopi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kakao</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tebu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Teh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tembakau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cengkeh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Lada</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sagu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jambu Mete</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Enau</center></th>
                      
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_531 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                               @if(is_numeric($member->t531a))
                            <td>
                                <input type="text" id="t531a" name="members[{{ $i }}][t531a]" class="form-control" value="{{number_format(($member->t531a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531a" name="members[{{ $i }}][t531a]" class="form-control" value="{{$member->t531a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t531b))
                            <td>
                                <input type="text" id="t531b" name="members[{{ $i }}][t531b]" class="form-control" value="{{number_format(($member->t531b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531b" name="members[{{ $i }}][t531b]" class="form-control" value="{{$member->t531b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531c))
                            <td>
                                <input type="text" id="t531c" name="members[{{ $i }}][t531c]" class="form-control" value="{{number_format(($member->t531c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531c" name="members[{{ $i }}][t531c]" class="form-control" value="{{$member->t531c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t531d))
                            <td>
                                <input type="text" id="t531d" name="members[{{ $i }}][t531d]" class="form-control" value="{{number_format(($member->t531d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531d" name="members[{{ $i }}][t531d]" class="form-control" value="{{$member->t531d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531e))
                            <td>
                                <input type="text" id="t531e" name="members[{{ $i }}][t531e]" class="form-control" value="{{number_format(($member->t531e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531e" name="members[{{ $i }}][t531e]" class="form-control" value="{{$member->t531e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531f))
                            <td>
                                <input type="text" id="t531f" name="members[{{ $i }}][t531f]" class="form-control" value="{{number_format(($member->t531f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531f" name="members[{{ $i }}][t531f]" class="form-control" value="{{$member->t531f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531g))
                            <td>
                                <input type="text" id="t531g" name="members[{{ $i }}][t531g]" class="form-control" value="{{number_format(($member->t531g),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531g" name="members[{{ $i }}][t531g]" class="form-control" value="{{$member->t531g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531h))
                            <td>
                                <input type="text" id="t531h" name="members[{{ $i }}][t531h]" class="form-control" value="{{number_format(($member->t531h),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531h" name="members[{{ $i }}][t531h]" class="form-control" value="{{$member->t531h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531i))
                            <td>
                                <input type="text" id="t531i" name="members[{{ $i }}][t531i]" class="form-control" value="{{number_format(($member->t531i),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531i" name="members[{{ $i }}][t531i]" class="form-control" value="{{$member->t531i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531j))
                            <td>
                                <input type="text" id="t531j" name="members[{{ $i }}][t531j]" class="form-control" value="{{number_format(($member->t531j),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531j" name="members[{{ $i }}][t531j]" class="form-control" value="{{$member->t531j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531k))
                            <td>
                                <input type="text" id="t531k" name="members[{{ $i }}][t531k]" class="form-control" value="{{number_format(($member->t531k),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531k" name="members[{{ $i }}][t531k]" class="form-control" value="{{$member->t531k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531l))
                            <td>
                                <input type="text" id="t531l" name="members[{{ $i }}][t531l]" class="form-control" value="{{number_format(($member->t531l),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531l" name="members[{{ $i }}][t531l]" class="form-control" value="{{$member->t531l}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t531m))
                            <td>
                                <input type="text" id="t531m" name="members[{{ $i }}][t531m]" class="form-control" value="{{number_format(($member->t531m),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531m" name="members[{{ $i }}][t531m]" class="form-control" value="{{$member->t531m}}" disabled>
                            </td>
                            @endif
               
                    
                            
                      @elseif( $a->setuju_opd == 0)
                      
                       @if(is_numeric($member->t531a))
                            <td>
                                <input type="text" id="t531a" name="members[{{ $i }}][t531a]" class="form-control" value="{{number_format(($member->t531a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531a" name="members[{{ $i }}][t531a]" class="form-control" value="{{$member->t531a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t531b))
                            <td>
                                <input type="text" id="t531b" name="members[{{ $i }}][t531b]" class="form-control" value="{{number_format(($member->t531b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531b" name="members[{{ $i }}][t531b]" class="form-control" value="{{$member->t531b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531c))
                            <td>
                                <input type="text" id="t531c" name="members[{{ $i }}][t531c]" class="form-control" value="{{number_format(($member->t531c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531c" name="members[{{ $i }}][t531c]" class="form-control" value="{{$member->t531c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t531d))
                            <td>
                                <input type="text" id="t531d" name="members[{{ $i }}][t531d]" class="form-control" value="{{number_format(($member->t531d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531d" name="members[{{ $i }}][t531d]" class="form-control" value="{{$member->t531d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531e))
                            <td>
                                <input type="text" id="t531e" name="members[{{ $i }}][t531e]" class="form-control" value="{{number_format(($member->t531e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531e" name="members[{{ $i }}][t531e]" class="form-control" value="{{$member->t531e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531f))
                            <td>
                                <input type="text" id="t531f" name="members[{{ $i }}][t531f]" class="form-control" value="{{number_format(($member->t531f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531f" name="members[{{ $i }}][t531f]" class="form-control" value="{{$member->t531f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531g))
                            <td>
                                <input type="text" id="t531g" name="members[{{ $i }}][t531g]" class="form-control" value="{{number_format(($member->t531g),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531g" name="members[{{ $i }}][t531g]" class="form-control" value="{{$member->t531g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531h))
                            <td>
                                <input type="text" id="t531h" name="members[{{ $i }}][t531h]" class="form-control" value="{{number_format(($member->t531h),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531h" name="members[{{ $i }}][t531h]" class="form-control" value="{{$member->t531h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531i))
                            <td>
                                <input type="text" id="t531i" name="members[{{ $i }}][t531i]" class="form-control" value="{{number_format(($member->t531i),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531i" name="members[{{ $i }}][t531i]" class="form-control" value="{{$member->t531i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531j))
                            <td>
                                <input type="text" id="t531j" name="members[{{ $i }}][t531j]" class="form-control" value="{{number_format(($member->t531j),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531j" name="members[{{ $i }}][t531j]" class="form-control" value="{{$member->t531j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531k))
                            <td>
                                <input type="text" id="t531k" name="members[{{ $i }}][t531k]" class="form-control" value="{{number_format(($member->t531k),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531k" name="members[{{ $i }}][t531k]" class="form-control" value="{{$member->t531k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531l))
                            <td>
                                <input type="text" id="t531l" name="members[{{ $i }}][t531l]" class="form-control" value="{{number_format(($member->t531l),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531l" name="members[{{ $i }}][t531l]" class="form-control" value="{{$member->t531l}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t531m))
                            <td>
                                <input type="text" id="t531m" name="members[{{ $i }}][t531m]" class="form-control" value="{{number_format(($member->t531m),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t531m" name="members[{{ $i }}][t531m]" class="form-control" value="{{$member->t531m}}">
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
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_f),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_g),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_h),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_i),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_j),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_k),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_l),2, '.',' ')}}">
                            </th>
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_m),2, '.',' ')}}">
                            </th>
                            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    </div>
    
    <div class="col-md-3">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                  
   <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="14"> <center>2021</center></th> </tr>
                    <tr>
                       
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa Sawit</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Karet</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kopi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kakao</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tebu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Teh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tembakau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cengkeh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Lada</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sagu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jambu Mete</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Enau</center></th>
                    
			
                    </tr>
          
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                              @if(is_numeric($member->t531a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t531b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t531d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t531f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t531l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531l}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t531m))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t531m),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t531m}}">
                            </td>
                            @endif
                           
                      
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_e),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_f),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_g),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_h),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_i),2, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_j),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_k),2, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_l),2, '.',' ')}}">
                            </th>
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_m),2, '.',' ')}}">
                            </th>
                           
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Perkebunan dan Hortikultura</a></p>

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