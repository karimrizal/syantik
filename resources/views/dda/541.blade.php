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
                        
                           <a href="{{ url('/ekspor_dda_541') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Luas Kawasan Hutan dan Hutan Konservasi Menurut kabupaten/Kota (ha) di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-10">
 <form id="simpan" action="{{ route('dda.store541') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example2">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="14"> <center>{{$year}}</center></th> </tr>
                    
                    <tr>
                        
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun SK</center></th>
                        <th colspan="7" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan Konservasi (Daratan dan Perairan)</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan (Daratan)</center></th>
                         <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    <tr>
                        
                    
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perairan</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Suaka Margasatwa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cagar Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Hutan Raya</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi Tetap </center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi yang Dapat Dikonversi</center></th>
                   
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_541 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                        
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                          @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              <td>
                                <input type="text" id="t541a" name="members[{{ $i }}][t541a]" class="form-control" value="{{ $member->t541a}}" disabled>
                            </td>
                            @if(is_numeric($member->t541b))
                            <td>
                                <input type="text" id="t541b" name="members[{{ $i }}][t541b]" class="form-control" value="{{number_format(($member->t541b),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541b" name="members[{{ $i }}][t541b]" class="form-control" value="{{$member->t541b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541c))
                            <td>
                                <input type="text" id="t541c" name="members[{{ $i }}][t541c]" class="form-control" value="{{number_format(($member->t541c),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541c" name="members[{{ $i }}][t541c]" class="form-control" value="{{$member->t541c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t541d))
                            <td>
                                <input type="text" id="t541d" name="members[{{ $i }}][t541d]" class="form-control" value="{{number_format(($member->t541d),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541d" name="members[{{ $i }}][t541d]" class="form-control" value="{{$member->t541d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541e))
                            <td>
                                <input type="text" id="t541e" name="members[{{ $i }}][t541e]" class="form-control" value="{{number_format(($member->t541e),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541e" name="members[{{ $i }}][t541e]" class="form-control" value="{{$member->t541e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541f))
                            <td>
                                <input type="text" id="t541f" name="members[{{ $i }}][t541f]" class="form-control" value="{{number_format(($member->t541f),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541f" name="members[{{ $i }}][t541f]" class="form-control" value="{{$member->t541f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541g))
                            <td>
                                <input type="text" id="t541g" name="members[{{ $i }}][t541g]" class="form-control" value="{{number_format(($member->t541g),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541g" name="members[{{ $i }}][t541g]" class="form-control" value="{{$member->t541g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541h))
                            <td>
                                <input type="text" id="t541h" name="members[{{ $i }}][t541h]" class="form-control" value="{{number_format(($member->t541h),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541h" name="members[{{ $i }}][t541h]" class="form-control" value="{{$member->t541h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541i))
                            <td>
                                <input type="text" id="t541i" name="members[{{ $i }}][t541i]" class="form-control" value="{{number_format(($member->t541i),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541i" name="members[{{ $i }}][t541i]" class="form-control" value="{{$member->t541i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541j))
                            <td>
                                <input type="text" id="t541j" name="members[{{ $i }}][t541j]" class="form-control" value="{{number_format(($member->t541j),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541j" name="members[{{ $i }}][t541j]" class="form-control" value="{{$member->t541j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541k))
                            <td>
                                <input type="text" id="t541k" name="members[{{ $i }}][t541k]" class="form-control" value="{{number_format(($member->t541k),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541k" name="members[{{ $i }}][t541k]" class="form-control" value="{{$member->t541k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541l))
                            <td>
                                <input type="text" id="t541l" name="members[{{ $i }}][t541l]" class="form-control" value="{{number_format(($member->t541l),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541l" name="members[{{ $i }}][t541l]" class="form-control" value="{{$member->t541l}}" disabled>
                            </td>
                            @endif
                            
                           @if(is_numeric($member->t541m))
                            <td>
                                <input type="text" id="t541m" name="members[{{ $i }}][t541m]" class="form-control" value="{{number_format(($member->t541m),2, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541m" name="members[{{ $i }}][t541m]" class="form-control" value="{{$member->t541m}}" disabled>
                            </td>
                            @endif
                            
                      
                      
                        @elseif( $a->setuju_opd == 0)
                        
                         <td>
                                <input type="text" id="t541a" name="members[{{ $i }}][t541a]" class="form-control" value="{{ $member->t541a}}">
                            </td>
                            @if(is_numeric($member->t541b))
                            <td>
                                <input type="text" id="t541b" name="members[{{ $i }}][t541b]" class="form-control" value="{{number_format(($member->t541b),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541b" name="members[{{ $i }}][t541b]" class="form-control" value="{{$member->t541b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541c))
                            <td>
                                <input type="text" id="t541c" name="members[{{ $i }}][t541c]" class="form-control" value="{{number_format(($member->t541c),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541c" name="members[{{ $i }}][t541c]" class="form-control" value="{{$member->t541c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t541d))
                            <td>
                                <input type="text" id="t541d" name="members[{{ $i }}][t541d]" class="form-control" value="{{number_format(($member->t541d),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541d" name="members[{{ $i }}][t541d]" class="form-control" value="{{$member->t541d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541e))
                            <td>
                                <input type="text" id="t541e" name="members[{{ $i }}][t541e]" class="form-control" value="{{number_format(($member->t541e),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541e" name="members[{{ $i }}][t541e]" class="form-control" value="{{$member->t541e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541f))
                            <td>
                                <input type="text" id="t541f" name="members[{{ $i }}][t541f]" class="form-control" value="{{number_format(($member->t541f),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541f" name="members[{{ $i }}][t541f]" class="form-control" value="{{$member->t541f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541g))
                            <td>
                                <input type="text" id="t541g" name="members[{{ $i }}][t541g]" class="form-control" value="{{number_format(($member->t541g),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541g" name="members[{{ $i }}][t541g]" class="form-control" value="{{$member->t541g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541h))
                            <td>
                                <input type="text" id="t541h" name="members[{{ $i }}][t541h]" class="form-control" value="{{number_format(($member->t541h),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541h" name="members[{{ $i }}][t541h]" class="form-control" value="{{$member->t541h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541i))
                            <td>
                                <input type="text" id="t541i" name="members[{{ $i }}][t541i]" class="form-control" value="{{number_format(($member->t541i),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541i" name="members[{{ $i }}][t541i]" class="form-control" value="{{$member->t541i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541j))
                            <td>
                                <input type="text" id="t541j" name="members[{{ $i }}][t541j]" class="form-control" value="{{number_format(($member->t541j),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541j" name="members[{{ $i }}][t541j]" class="form-control" value="{{$member->t541j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541k))
                            <td>
                                <input type="text" id="t541k" name="members[{{ $i }}][t541k]" class="form-control" value="{{number_format(($member->t541k),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541k" name="members[{{ $i }}][t541k]" class="form-control" value="{{$member->t541k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541l))
                            <td>
                                <input type="text" id="t541l" name="members[{{ $i }}][t541l]" class="form-control" value="{{number_format(($member->t541l),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541l" name="members[{{ $i }}][t541l]" class="form-control" value="{{$member->t541l}}">
                            </td>
                            @endif
                            
                           @if(is_numeric($member->t541m))
                            <td>
                                <input type="text" id="t541m" name="members[{{ $i }}][t541m]" class="form-control" value="{{number_format(($member->t541m),2, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t541m" name="members[{{ $i }}][t541m]" class="form-control" value="{{$member->t541m}}">
                            </td>
                            @endif
                        
                        @else @endif @endforeach
                            
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="2"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                       
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
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_a + $a->sum_b + $a->sum_c + $a->sum_d + $a->sum_e + $a->sum_f + $a->sum_g + $a->sum_h + $a->sum_i + $a->sum_j + $a->sum_k + $a->sum_l),2, '.',' ')}}">
                            </th>
                            
                       
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
     </div>
    
    <div class="col-md-2">
        
        
        
        	<table class="table table-bordered" id="example2">
                <thead>
               
               
                  
   <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="14"> <center>2021</center></th> </tr>
                   <tr>
                        
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun SK</center></th>
                        <th colspan="7" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan Konservasi (Daratan dan Perairan)</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan (Daratan)</center></th>
                         <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    <tr>
                        
                    
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perairan</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Suaka Margasatwa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cagar Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Hutan Raya</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi Tetap </center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi yang Dapat Dikonversi</center></th>
                   
                    </tr>
                    
          
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                             <td>
                                <input type="text" readonly="ture" class="form-control" value="{{ $member->t541a}}">
                            </td>
                             @if(is_numeric($member->t541b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541b),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541c),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t541d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541d),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541e),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541f),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541g),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541h),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541i),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541j),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541k),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541l),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541l}}">
                            </td>
                            @endif
                             @if(is_numeric($member->t541m))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t541m),2, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t541m}}">
                            </td>
                            @endif
                           
                      
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
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
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_a + $a->sum_b + $a->sum_c + $a->sum_d + $a->sum_e + $a->sum_f + $a->sum_g + $a->sum_h + $a->sum_i + $a->sum_j + $a->sum_k + $a->sum_l),2, '.',' ')}}">
                            </th>
                           
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Balai Pemantapan Kawasan Hutan Wilayah XXII Kendari</a></p>

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