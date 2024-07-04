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
                     
                           <a href="{{ url('/ekspor_dda_124') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Rata-rata Tekanan Udara Menurut Bulan dan Stasiun di {{ $a->kab }} (Milibar), {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-9">
<form id="simpan" action="{{ route('dda.store124') }}" method="POST">
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
                    @foreach ($tabel_124 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                                
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           
                          @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                               @if(is_numeric($member->t124a))
                            <td>
                                <input type="text" id="t124a" name="members[{{ $i }}][t124a]" class="form-control" value="{{number_format(($member->t124a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124a" name="members[{{ $i }}][t124a]" class="form-control" value="{{$member->t124a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t124b))
                            <td>
                                <input type="text" id="t124b" name="members[{{ $i }}][t124b]" class="form-control" value="{{number_format(($member->t124b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124b" name="members[{{ $i }}][t124b]" class="form-control" value="{{$member->t124b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124c))
                            <td>
                                <input type="text" id="t124c" name="members[{{ $i }}][t124c]" class="form-control" value="{{number_format(($member->t124c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124c" name="members[{{ $i }}][t124c]" class="form-control" value="{{$member->t124c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t124d))
                            <td>
                                <input type="text" id="t124d" name="members[{{ $i }}][t124d]" class="form-control" value="{{number_format(($member->t124d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124d" name="members[{{ $i }}][t124d]" class="form-control" value="{{$member->t124d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124e))
                            <td>
                                <input type="text" id="t124e" name="members[{{ $i }}][t124e]" class="form-control" value="{{number_format(($member->t124e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124e" name="members[{{ $i }}][t124e]" class="form-control" value="{{$member->t124e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124f))
                            <td>
                                <input type="text" id="t124f" name="members[{{ $i }}][t124f]" class="form-control" value="{{number_format(($member->t124f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124f" name="members[{{ $i }}][t124f]" class="form-control" value="{{$member->t124f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124g))
                            <td>
                                <input type="text" id="t124g" name="members[{{ $i }}][t124g]" class="form-control" value="{{number_format(($member->t124g),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124g" name="members[{{ $i }}][t124g]" class="form-control" value="{{$member->t124g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124h))
                            <td>
                                <input type="text" id="t124h" name="members[{{ $i }}][t124h]" class="form-control" value="{{number_format(($member->t124h),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124h" name="members[{{ $i }}][t124h]" class="form-control" value="{{$member->t124h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124i))
                            <td>
                                <input type="text" id="t124i" name="members[{{ $i }}][t124i]" class="form-control" value="{{number_format(($member->t124i),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124i" name="members[{{ $i }}][t124i]" class="form-control" value="{{$member->t124i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124j))
                            <td>
                                <input type="text" id="t124j" name="members[{{ $i }}][t124j]" class="form-control" value="{{number_format(($member->t124j),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124j" name="members[{{ $i }}][t124j]" class="form-control" value="{{$member->t124j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124k))
                            <td>
                                <input type="text" id="t124k" name="members[{{ $i }}][t124k]" class="form-control" value="{{number_format(($member->t124k),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124k" name="members[{{ $i }}][t124k]" class="form-control" value="{{$member->t124k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124l))
                            <td>
                                <input type="text" id="t124l" name="members[{{ $i }}][t124l]" class="form-control" value="{{number_format(($member->t124l),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124l" name="members[{{ $i }}][t124l]" class="form-control" value="{{$member->t124l}}" disabled>
                            </td>
                            @endif
                            
                           
                            
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t124a))
                            <td>
                                <input type="text" id="t124a" name="members[{{ $i }}][t124a]" class="form-control" value="{{number_format(($member->t124a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124a" name="members[{{ $i }}][t124a]" class="form-control" value="{{$member->t124a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t124b))
                            <td>
                                <input type="text" id="t124b" name="members[{{ $i }}][t124b]" class="form-control" value="{{number_format(($member->t124b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124b" name="members[{{ $i }}][t124b]" class="form-control" value="{{$member->t124b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124c))
                            <td>
                                <input type="text" id="t124c" name="members[{{ $i }}][t124c]" class="form-control" value="{{number_format(($member->t124c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124c" name="members[{{ $i }}][t124c]" class="form-control" value="{{$member->t124c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t124d))
                            <td>
                                <input type="text" id="t124d" name="members[{{ $i }}][t124d]" class="form-control" value="{{number_format(($member->t124d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124d" name="members[{{ $i }}][t124d]" class="form-control" value="{{$member->t124d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124e))
                            <td>
                                <input type="text" id="t124e" name="members[{{ $i }}][t124e]" class="form-control" value="{{number_format(($member->t124e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124e" name="members[{{ $i }}][t124e]" class="form-control" value="{{$member->t124e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124f))
                            <td>
                                <input type="text" id="t124f" name="members[{{ $i }}][t124f]" class="form-control" value="{{number_format(($member->t124f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124f" name="members[{{ $i }}][t124f]" class="form-control" value="{{$member->t124f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124g))
                            <td>
                                <input type="text" id="t124g" name="members[{{ $i }}][t124g]" class="form-control" value="{{number_format(($member->t124g),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124g" name="members[{{ $i }}][t124g]" class="form-control" value="{{$member->t124g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124h))
                            <td>
                                <input type="text" id="t124h" name="members[{{ $i }}][t124h]" class="form-control" value="{{number_format(($member->t124h),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124h" name="members[{{ $i }}][t124h]" class="form-control" value="{{$member->t124h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124i))
                            <td>
                                <input type="text" id="t124i" name="members[{{ $i }}][t124i]" class="form-control" value="{{number_format(($member->t124i),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124i" name="members[{{ $i }}][t124i]" class="form-control" value="{{$member->t124i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124j))
                            <td>
                                <input type="text" id="t124j" name="members[{{ $i }}][t124j]" class="form-control" value="{{number_format(($member->t124j),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124j" name="members[{{ $i }}][t124j]" class="form-control" value="{{$member->t124j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124k))
                            <td>
                                <input type="text" id="t124k" name="members[{{ $i }}][t124k]" class="form-control" value="{{number_format(($member->t124k),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124k" name="members[{{ $i }}][t124k]" class="form-control" value="{{$member->t124k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124l))
                            <td>
                                <input type="text" id="t124l" name="members[{{ $i }}][t124l]" class="form-control" value="{{number_format(($member->t124l),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t124l" name="members[{{ $i }}][t124l]" class="form-control" value="{{$member->t124l}}">
                            </td>
                            @endif
                        
                        @else
                        @endif
                        
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
                          
                                     @if(is_numeric($member->t124a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t124b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t124d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124l}}">
                            </td>
                            @endif
                 
                        @elseif( (Auth::user()->idkab == '7471')  )
                            
                            @if(is_numeric($member->t124a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t124b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124c}}">
                            </td>
                            @endif    
                            
                        @elseif( (Auth::user()->idkab == '7472')  )    
                           
                            
                            @if(is_numeric($member->t124d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124f}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7405')  )
                        
                             @if(is_numeric($member->t124g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124i}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7404')  )
                        
                        
                            @if(is_numeric($member->t124j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t124l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t124l}}">
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
