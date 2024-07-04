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
                   	
                            <a href="{{ url('/ekspor_dda_9121') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kendaraan Bermotor Menurut Kabupaten/Kota dan Jenis Kendaraan (unit) di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">
    <form id="simpan" action="{{ route('dda.store9121') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="13"> <center>{{$year}}</center></th> </tr>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"> <center>Mobil Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>Mobil Barang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                    
			
                    </tr>
                    
                    
                       <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sedan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jeep</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minibus</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Micro Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Pick Up</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Blind Van</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Light Truck</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Motor Roda Dua</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Motor Roda Tiga</center></th>
      
                    
			
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_9121 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                     
                             
                         
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t9121a))
                            <td>
                                <input type="text" id="t9121a" name="members[{{ $i }}][t9121a]" class="form-control" value="{{number_format(($member->t9121a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121a" name="members[{{ $i }}][t9121a]" class="form-control" value="{{$member->t9121a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t9121b))
                            <td>
                                <input type="text" id="t9121b" name="members[{{ $i }}][t9121b]" class="form-control" value="{{number_format(($member->t9121b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121b" name="members[{{ $i }}][t9121b]" class="form-control" value="{{$member->t9121b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121c))
                            <td>
                                <input type="text" id="t9121c" name="members[{{ $i }}][t9121c]" class="form-control" value="{{number_format(($member->t9121c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121c" name="members[{{ $i }}][t9121c]" class="form-control" value="{{$member->t9121c}}" disabled>
                            </td>
                            @endif    
                             @if(is_numeric($member->t9121d))
                            <td>
                                <input type="text" id="t9121d" name="members[{{ $i }}][t9121d]" class="form-control" value="{{number_format(($member->t9121d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121d" name="members[{{ $i }}][t9121d]" class="form-control" value="{{$member->t9121d}}" disabled>
                            </td>
                            @endif   
                            
                             @if(is_numeric($member->t9121e))
                            <td>
                                <input type="text" id="t9121e" name="members[{{ $i }}][t9121e]" class="form-control" value="{{number_format(($member->t9121e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121e" name="members[{{ $i }}][t9121e]" class="form-control" value="{{$member->t9121e}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121f))
                            <td>
                                <input type="text" id="t9121f" name="members[{{ $i }}][t9121f]" class="form-control" value="{{number_format(($member->t9121f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121f" name="members[{{ $i }}][t9121f]" class="form-control" value="{{$member->t9121f}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121g))
                            <td>
                                <input type="text" id="t9121g" name="members[{{ $i }}][t9121g]" class="form-control" value="{{number_format(($member->t9121g),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121g" name="members[{{ $i }}][t9121g]" class="form-control" value="{{$member->t9121g}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121h))
                            <td>
                                <input type="text" id="t9121h" name="members[{{ $i }}][t9121h]" class="form-control" value="{{number_format(($member->t9121h),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121h" name="members[{{ $i }}][t9121h]" class="form-control" value="{{$member->t9121h}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121i))
                            <td>
                                <input type="text" id="t9121i" name="members[{{ $i }}][t9121i]" class="form-control" value="{{number_format(($member->t9121i),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121i" name="members[{{ $i }}][t9121i]" class="form-control" value="{{$member->t9121i}}" disabled>
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t9121j))
                            <td>
                                <input type="text" id="t9121j" name="members[{{ $i }}][t9121j]" class="form-control" value="{{number_format(($member->t9121j),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121j" name="members[{{ $i }}][t9121j]" class="form-control" value="{{$member->t9121j}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121k))
                            <td>
                                <input type="text" id="t9121k" name="members[{{ $i }}][t9121k]" class="form-control" value="{{number_format(($member->t9121k),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121k" name="members[{{ $i }}][t9121k]" class="form-control" value="{{$member->t9121k}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121l))
                            <td>
                                <input type="text" id="t9121l" name="members[{{ $i }}][t9121l]" class="form-control" value="{{number_format(($member->t9121l),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121l" name="members[{{ $i }}][t9121l]" class="form-control" value="{{$member->t9121l}}" disabled>
                            </td>
                            @endif
                            
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t9121a))
                            <td>
                                <input type="text" id="t9121a" name="members[{{ $i }}][t9121a]" class="form-control" value="{{number_format(($member->t9121a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121a" name="members[{{ $i }}][t9121a]" class="form-control" value="{{$member->t9121a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t9121b))
                            <td>
                                <input type="text" id="t9121b" name="members[{{ $i }}][t9121b]" class="form-control" value="{{number_format(($member->t9121b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121b" name="members[{{ $i }}][t9121b]" class="form-control" value="{{$member->t9121b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121c))
                            <td>
                                <input type="text" id="t9121c" name="members[{{ $i }}][t9121c]" class="form-control" value="{{number_format(($member->t9121c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121c" name="members[{{ $i }}][t9121c]" class="form-control" value="{{$member->t9121c}}">
                            </td>
                            @endif    
                             @if(is_numeric($member->t9121d))
                            <td>
                                <input type="text" id="t9121d" name="members[{{ $i }}][t9121d]" class="form-control" value="{{number_format(($member->t9121d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121d" name="members[{{ $i }}][t9121d]" class="form-control" value="{{$member->t9121d}}">
                            </td>
                            @endif   
                            
                             @if(is_numeric($member->t9121e))
                            <td>
                                <input type="text" id="t9121e" name="members[{{ $i }}][t9121e]" class="form-control" value="{{number_format(($member->t9121e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121e" name="members[{{ $i }}][t9121e]" class="form-control" value="{{$member->t9121e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121f))
                            <td>
                                <input type="text" id="t9121f" name="members[{{ $i }}][t9121f]" class="form-control" value="{{number_format(($member->t9121f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121f" name="members[{{ $i }}][t9121f]" class="form-control" value="{{$member->t9121f}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121g))
                            <td>
                                <input type="text" id="t9121g" name="members[{{ $i }}][t9121g]" class="form-control" value="{{number_format(($member->t9121g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121g" name="members[{{ $i }}][t9121g]" class="form-control" value="{{$member->t9121g}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121h))
                            <td>
                                <input type="text" id="t9121h" name="members[{{ $i }}][t9121h]" class="form-control" value="{{number_format(($member->t9121h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121h" name="members[{{ $i }}][t9121h]" class="form-control" value="{{$member->t9121h}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121i))
                            <td>
                                <input type="text" id="t9121i" name="members[{{ $i }}][t9121i]" class="form-control" value="{{number_format(($member->t9121i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121i" name="members[{{ $i }}][t9121i]" class="form-control" value="{{$member->t9121i}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121j))
                            <td>
                                <input type="text" id="t9121j" name="members[{{ $i }}][t9121j]" class="form-control" value="{{number_format(($member->t9121j),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121j" name="members[{{ $i }}][t9121j]" class="form-control" value="{{$member->t9121j}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121k))
                            <td>
                                <input type="text" id="t9121k" name="members[{{ $i }}][t9121k]" class="form-control" value="{{number_format(($member->t9121k),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121k" name="members[{{ $i }}][t9121k]" class="form-control" value="{{$member->t9121k}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t9121l))
                            <td>
                                <input type="text" id="t9121l" name="members[{{ $i }}][t9121l]" class="form-control" value="{{number_format(($member->t9121l),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t9121l" name="members[{{ $i }}][t9121l]" class="form-control" value="{{$member->t9121l}}">
                            </td>
                            @endif
                        
                        @else @endif @endforeach
        
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lk as $a)
                         
                      
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th >
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
                            
                 
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                  
  <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="13"> <center>2021</center></th> </tr>
                   <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"> <center>Mobil Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>Mobil Barang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                    
			
                    </tr>
          
                     <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sedan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jeep</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minibus</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Micro Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Pick Up</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Blind Van</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Light Truck</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Motor Roda Dua</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Motor Roda Tiga</center></th>
      
                    
			
                    </tr>
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                             @if(is_numeric($member->t9121a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t9121b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121c}}">
                            </td>
                            @endif    
                            @if(is_numeric($member->t9121d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121d}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121e}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121i}}">
                            </td>
                            @endif
                            
                            
                             @if(is_numeric($member->t9121j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t9121l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t9121l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t9121l}}">
                            </td>
                            @endif
                            
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th >
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_d),0, '.',' ')}}">
                            </th >
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
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Pendapatan Daerah</a></p>

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