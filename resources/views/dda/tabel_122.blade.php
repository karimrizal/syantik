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
                           	
                           <a href="{{ url('/ekspor_dda_122') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Rata-rata Suhu Udara Menurut Bulan dan Stasiun di {{ $a->kab }} (C), {{$year}}</h3>
@endforeach				
<br>


<div class="row">
    <div class="col-md-9">
        <form id="simpan" action="{{ route('dda.store122') }}" method="POST">
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
                    @foreach ($tabel_122 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                            
                          
                                
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                                                      @if(is_numeric($member->t122a))
                            <td>
                                <input type="text" id="t122a" name="members[{{ $i }}][t122a]" class="form-control" value="{{number_format(($member->t122a),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122a" name="members[{{ $i }}][t122a]" class="form-control" value="{{$member->t122a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t122b))
                            <td>
                                <input type="text" id="t122b" name="members[{{ $i }}][t122b]" class="form-control" value="{{number_format(($member->t122b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122b" name="members[{{ $i }}][t122b]" class="form-control" value="{{$member->t122b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122c))
                            <td>
                                <input type="text" id="t122c" name="members[{{ $i }}][t122c]" class="form-control" value="{{number_format(($member->t122c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122c" name="members[{{ $i }}][t122c]" class="form-control" value="{{$member->t122c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t122d))
                            <td>
                                <input type="text" id="t122d" name="members[{{ $i }}][t122d]" class="form-control" value="{{number_format(($member->t122d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122d" name="members[{{ $i }}][t122d]" class="form-control" value="{{$member->t122d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122e))
                            <td>
                                <input type="text" id="t122e" name="members[{{ $i }}][t122e]" class="form-control" value="{{number_format(($member->t122e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122e" name="members[{{ $i }}][t122e]" class="form-control" value="{{$member->t122e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122f))
                            <td>
                                <input type="text" id="t122f" name="members[{{ $i }}][t122f]" class="form-control" value="{{number_format(($member->t122f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122f" name="members[{{ $i }}][t122f]" class="form-control" value="{{$member->t122f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122g))
                            <td>
                                <input type="text" id="t122g" name="members[{{ $i }}][t122g]" class="form-control" value="{{number_format(($member->t122g),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122g" name="members[{{ $i }}][t122g]" class="form-control" value="{{$member->t122g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122h))
                            <td>
                                <input type="text" id="t122h" name="members[{{ $i }}][t122h]" class="form-control" value="{{number_format(($member->t122h),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122h" name="members[{{ $i }}][t122h]" class="form-control" value="{{$member->t122h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122i))
                            <td>
                                <input type="text" id="t122i" name="members[{{ $i }}][t122i]" class="form-control" value="{{number_format(($member->t122i),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122i" name="members[{{ $i }}][t122i]" class="form-control" value="{{$member->t122i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122j))
                            <td>
                                <input type="text" id="t122j" name="members[{{ $i }}][t122j]" class="form-control" value="{{number_format(($member->t122j),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122j" name="members[{{ $i }}][t122j]" class="form-control" value="{{$member->t122j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122k))
                            <td>
                                <input type="text" id="t122k" name="members[{{ $i }}][t122k]" class="form-control" value="{{number_format(($member->t122k),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122k" name="members[{{ $i }}][t122k]" class="form-control" value="{{$member->t122k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122l))
                            <td>
                                <input type="text" id="t122l" name="members[{{ $i }}][t122l]" class="form-control" value="{{number_format(($member->t122l),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122l" name="members[{{ $i }}][t122l]" class="form-control" value="{{$member->t122l}}" disabled>
                            </td>
                            @endif
                 
                  
                            
                    @elseif( $a->setuju_opd == 0)      
                    
                                            @if(is_numeric($member->t122a))
                            <td>
                                <input type="text" id="t122a" name="members[{{ $i }}][t122a]" class="form-control" value="{{number_format(($member->t122a),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122a" name="members[{{ $i }}][t122a]" class="form-control" value="{{$member->t122a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t122b))
                            <td>
                                <input type="text" id="t122b" name="members[{{ $i }}][t122b]" class="form-control" value="{{number_format(($member->t122b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122b" name="members[{{ $i }}][t122b]" class="form-control" value="{{$member->t122b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122c))
                            <td>
                                <input type="text" id="t122c" name="members[{{ $i }}][t122c]" class="form-control" value="{{number_format(($member->t122c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122c" name="members[{{ $i }}][t122c]" class="form-control" value="{{$member->t122c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t122d))
                            <td>
                                <input type="text" id="t122d" name="members[{{ $i }}][t122d]" class="form-control" value="{{number_format(($member->t122d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122d" name="members[{{ $i }}][t122d]" class="form-control" value="{{$member->t122d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122e))
                            <td>
                                <input type="text" id="t122e" name="members[{{ $i }}][t122e]" class="form-control" value="{{number_format(($member->t122e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122e" name="members[{{ $i }}][t122e]" class="form-control" value="{{$member->t122e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122f))
                            <td>
                                <input type="text" id="t122f" name="members[{{ $i }}][t122f]" class="form-control" value="{{number_format(($member->t122f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122f" name="members[{{ $i }}][t122f]" class="form-control" value="{{$member->t122f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122g))
                            <td>
                                <input type="text" id="t122g" name="members[{{ $i }}][t122g]" class="form-control" value="{{number_format(($member->t122g),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122g" name="members[{{ $i }}][t122g]" class="form-control" value="{{$member->t122g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122h))
                            <td>
                                <input type="text" id="t122h" name="members[{{ $i }}][t122h]" class="form-control" value="{{number_format(($member->t122h),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122h" name="members[{{ $i }}][t122h]" class="form-control" value="{{$member->t122h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122i))
                            <td>
                                <input type="text" id="t122i" name="members[{{ $i }}][t122i]" class="form-control" value="{{number_format(($member->t122i),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122i" name="members[{{ $i }}][t122i]" class="form-control" value="{{$member->t122i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122j))
                            <td>
                                <input type="text" id="t122j" name="members[{{ $i }}][t122j]" class="form-control" value="{{number_format(($member->t122j),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122j" name="members[{{ $i }}][t122j]" class="form-control" value="{{$member->t122j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122k))
                            <td>
                                <input type="text" id="t122k" name="members[{{ $i }}][t122k]" class="form-control" value="{{number_format(($member->t122k),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122k" name="members[{{ $i }}][t122k]" class="form-control" value="{{$member->t122k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122l))
                            <td>
                                <input type="text" id="t122l" name="members[{{ $i }}][t122l]" class="form-control" value="{{number_format(($member->t122l),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t122l" name="members[{{ $i }}][t122l]" class="form-control" value="{{$member->t122l}}">
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
                                                             @if(is_numeric($member->t122a))     
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t122b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t122d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122l}}">
                            </td>
                            @endif
                 
                        @elseif( (Auth::user()->idkab == '7471')  )
                            
                             @if(is_numeric($member->t122a))     
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122a),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t122b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122c}}">
                            </td>
                            @endif    
                            
                        @elseif( (Auth::user()->idkab == '7472')  )    
                           
                            
                             @if(is_numeric($member->t122d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t122f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122f}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7405')  )
                        
                            @if(is_numeric($member->t122g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122i}}">
                            </td>
                            @endif
                            
                        @elseif( (Auth::user()->idkab == '7404')  )
                        
                        
                              @if(is_numeric($member->t122j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t122l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t122l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t122l}}">
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