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
                   
                           <a href="{{ url('/ekspor_dda_123') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Rata-rata Kelembaban Udara Menurut Bulan dan Stasiun di {{ $a->kab }} (Persen), {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-9">
<form id="simpan" action="{{ route('dda.store123') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                     <tr>
                
                       <th colspan="13" bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                
           
                    </tr>
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2"> <center>Bulan</center></th>
                        @if( (Auth::user()->idkab == '7400')  )
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
                    <tr>
                        @if( (Auth::user()->idkab == '7400')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                         @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          @elseif( (Auth::user()->idkab == '7472')  )
                          <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '7405')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '74704')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          
                          @else @endif
           
                    </tr>
                    
                   
            </thead>
                     @foreach ($tabel_123 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                                
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} > 
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                                                      @if(is_numeric($member->t123a))
                            <td>
                                <input type="text" id="t123a" name="members[{{ $i }}][t123a]" class="form-control" value="{{number_format(($member->t123a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123a" name="members[{{ $i }}][t123a]" class="form-control" value="{{$member->t123a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t123b))
                            <td>
                                <input type="text" id="t123b" name="members[{{ $i }}][t123b]" class="form-control" value="{{number_format(($member->t123b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123b" name="members[{{ $i }}][t123b]" class="form-control" value="{{$member->t123b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123c))
                            <td>
                                <input type="text" id="t123c" name="members[{{ $i }}][t123c]" class="form-control" value="{{number_format(($member->t123c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123c" name="members[{{ $i }}][t123c]" class="form-control" value="{{$member->t123c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t123d))
                            <td>
                                <input type="text" id="t123d" name="members[{{ $i }}][t123d]" class="form-control" value="{{number_format(($member->t123d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123d" name="members[{{ $i }}][t123d]" class="form-control" value="{{$member->t123d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123e))
                            <td>
                                <input type="text" id="t123e" name="members[{{ $i }}][t123e]" class="form-control" value="{{number_format(($member->t123e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123e" name="members[{{ $i }}][t123e]" class="form-control" value="{{$member->t123e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123f))
                            <td>
                                <input type="text" id="t123f" name="members[{{ $i }}][t123f]" class="form-control" value="{{number_format(($member->t123f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123f" name="members[{{ $i }}][t123f]" class="form-control" value="{{$member->t123f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123g))
                            <td>
                                <input type="text" id="t123g" name="members[{{ $i }}][t123g]" class="form-control" value="{{number_format(($member->t123g),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123g" name="members[{{ $i }}][t123g]" class="form-control" value="{{$member->t123g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123h))
                            <td>
                                <input type="text" id="t123h" name="members[{{ $i }}][t123h]" class="form-control" value="{{number_format(($member->t123h),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123h" name="members[{{ $i }}][t123h]" class="form-control" value="{{$member->t123h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123i))
                            <td>
                                <input type="text" id="t123i" name="members[{{ $i }}][t123i]" class="form-control" value="{{number_format(($member->t123i),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123i" name="members[{{ $i }}][t123i]" class="form-control" value="{{$member->t123i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123j))
                            <td>
                                <input type="text" id="t123j" name="members[{{ $i }}][t123j]" class="form-control" value="{{number_format(($member->t123j),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123j" name="members[{{ $i }}][t123j]" class="form-control" value="{{$member->t123j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123k))
                            <td>
                                <input type="text" id="t123k" name="members[{{ $i }}][t123k]" class="form-control" value="{{number_format(($member->t123k),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123k" name="members[{{ $i }}][t123k]" class="form-control" value="{{$member->t123k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123l))
                            <td>
                                <input type="text" id="t123l" name="members[{{ $i }}][t123l]" class="form-control" value="{{number_format(($member->t123l),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123l" name="members[{{ $i }}][t123l]" class="form-control" value="{{$member->t123l}}" disabled>
                            </td>
                            @endif
                 
                  @elseif( $a->setuju_opd == 0)
                                             @if(is_numeric($member->t123a))
                            <td>
                                <input type="text" id="t123a" name="members[{{ $i }}][t123a]" class="form-control" value="{{number_format(($member->t123a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123a" name="members[{{ $i }}][t123a]" class="form-control" value="{{$member->t123a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t123b))
                            <td>
                                <input type="text" id="t123b" name="members[{{ $i }}][t123b]" class="form-control" value="{{number_format(($member->t123b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123b" name="members[{{ $i }}][t123b]" class="form-control" value="{{$member->t123b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123c))
                            <td>
                                <input type="text" id="t123c" name="members[{{ $i }}][t123c]" class="form-control" value="{{number_format(($member->t123c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123c" name="members[{{ $i }}][t123c]" class="form-control" value="{{$member->t123c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t123d))
                            <td>
                                <input type="text" id="t123d" name="members[{{ $i }}][t123d]" class="form-control" value="{{number_format(($member->t123d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123d" name="members[{{ $i }}][t123d]" class="form-control" value="{{$member->t123d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123e))
                            <td>
                                <input type="text" id="t123e" name="members[{{ $i }}][t123e]" class="form-control" value="{{number_format(($member->t123e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123e" name="members[{{ $i }}][t123e]" class="form-control" value="{{$member->t123e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123f))
                            <td>
                                <input type="text" id="t123f" name="members[{{ $i }}][t123f]" class="form-control" value="{{number_format(($member->t123f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123f" name="members[{{ $i }}][t123f]" class="form-control" value="{{$member->t123f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123g))
                            <td>
                                <input type="text" id="t123g" name="members[{{ $i }}][t123g]" class="form-control" value="{{number_format(($member->t123g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123g" name="members[{{ $i }}][t123g]" class="form-control" value="{{$member->t123g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123h))
                            <td>
                                <input type="text" id="t123h" name="members[{{ $i }}][t123h]" class="form-control" value="{{number_format(($member->t123h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123h" name="members[{{ $i }}][t123h]" class="form-control" value="{{$member->t123h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123i))
                            <td>
                                <input type="text" id="t123i" name="members[{{ $i }}][t123i]" class="form-control" value="{{number_format(($member->t123i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123i" name="members[{{ $i }}][t123i]" class="form-control" value="{{$member->t123i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123j))
                            <td>
                                <input type="text" id="t123j" name="members[{{ $i }}][t123j]" class="form-control" value="{{number_format(($member->t123j),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123j" name="members[{{ $i }}][t123j]" class="form-control" value="{{$member->t123j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123k))
                            <td>
                                <input type="text" id="t123k" name="members[{{ $i }}][t123k]" class="form-control" value="{{number_format(($member->t123k),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123k" name="members[{{ $i }}][t123k]" class="form-control" value="{{$member->t123k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123l))
                            <td>
                                <input type="text" id="t123l" name="members[{{ $i }}][t123l]" class="form-control" value="{{number_format(($member->t123l),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t123l" name="members[{{ $i }}][t123l]" class="form-control" value="{{$member->t123l}}">
                            </td>
                            @endif
                  
                  @else @endif
                  
                  @endforeach
                      
                    </tr>
                    @endforeach
             
    </table>
    
     </div>
    
    <div class="col-md-3">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
                    <tr>
                
                       <th colspan="12" bgcolor="#5cb85c" style="vertical-align: middle;"><center>2021</center></th>
                
           
                    </tr>
                    <tr>
                  @if( (Auth::user()->idkab == '7400')  )
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
                    <tr>
                        @if( (Auth::user()->idkab == '7400')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                         @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          @elseif( (Auth::user()->idkab == '7472')  )
                          <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '7405')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '74704')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          
                          @else @endif
           
                    </tr>
                   
            </thead>
                    @foreach ($tes as $member)
                    
                    <tr>
            
                           @if( (Auth::user()->idkab == '7400')  )
                                                             @if(is_numeric($member->t123a))     
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t123b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t123d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123l}}">
                            </td>
                            @endif
                 
                        @elseif( (Auth::user()->idkab == '7471')  )
                            
                             @if(is_numeric($member->t123a))     
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t123b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123c}}">
                            </td>
                            @endif    
                            
                        @elseif( (Auth::user()->idkab == '7472')  )    
                           
                            
                             @if(is_numeric($member->t123d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t123f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123f}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7405')  )
                        
                            @if(is_numeric($member->t123g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123i}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7404')  )
                        
                        
                              @if(is_numeric($member->t123j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t123l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t123l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t123l}}">
                            </td>
                            @endif
                            
                        @else @endif    
                       
                      
                    </tr>
                
                         @endforeach
                    
                   
                    
                        
                              
                 
                   
                          
                          
             
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Meteorologi, Klimatologi, dan Geofisika</a></p>

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