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
           
                           <a href="{{ url('/ekspor_dda_3217') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>          
					@foreach($kab as $a)
@if( (Auth::user()->idkab == '7400') )					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Pencari Kerja Terdaftar, Lowongan Kerja Terpenuhir, dan Penempatan/Pemenuhan Tenaga Kerja Menurut Kabupaten/Kota dan Jenis Kelamin di {{ $a->kab }}, {{$year}}</h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Pencari Kerja Terdaftar, Lowongan Kerja Terpenuhir, dan Penempatan/Pemenuhan Tenaga Kerja Menurut Kecamatan dan Jenis Kelamin di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>

<div class="row">
    <div class="col-md-7">
<form id="simpan" action="{{ route('dda.store3217') }}" method="POST">
                             @csrf
<table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="10"><center>{{$year}}</center></th>
                        
                    </tr>
                    <tr>
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Pencari Kerja Terdaftar</center></th>
                       <th  bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Lowongan Kerja Terpenuhir</center></th>
                      <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Penempatan/Pemenuhan Tenaga Kerja</center></th>
                    </tr>
                    
                    <tr>
                  
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
            </thead>
                    @foreach ($tabel_3217 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           
                            @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                          
                              @if(is_numeric($member->t3217a_lk))
                            <td>
                                <input type="text" id="t3217a_lk" name="members[{{ $i }}][t3217a_lk]" class="form-control" value="{{number_format(($member->t3217a_lk),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a_lk" name="members[{{ $i }}][t3217a_lk]" class="form-control" value="{{$member->t3217a_lk}}" disabled>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217a_pr))
                            <td>
                                <input type="text" id="t3217a_pr" name="members[{{ $i }}][t3217a_pr]" class="form-control" value="{{number_format(($member->t3217a_pr),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a_pr" name="members[{{ $i }}][t3217a_pr]" class="form-control" value="{{$member->t3217a_pr}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217a))
                            <td>
                                <input type="text" id="t3217a" name="members[{{ $i }}][t3217a]" class="form-control" value="{{number_format(($member->t3217a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a" name="members[{{ $i }}][t3217a]" class="form-control" value="{{$member->t3217a}}" disabled>
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t3217b_lk))
                            <td>
                                <input type="text" id="t3217b_lk" name="members[{{ $i }}][t3217b_lk]" class="form-control" value="{{number_format(($member->t3217b_lk),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b_lk" name="members[{{ $i }}][t3217b_lk]" class="form-control" value="{{$member->t3217b_lk}}" disabled>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217b_pr))
                            <td>
                                <input type="text" id="t3217b_pr" name="members[{{ $i }}][t3217b_pr]" class="form-control" value="{{number_format(($member->t3217b_pr),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b_pr" name="members[{{ $i }}][t3217b_pr]" class="form-control" value="{{$member->t3217b_pr}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217b))
                            <td>
                                <input type="text" id="t3217b" name="members[{{ $i }}][t3217b]" class="form-control" value="{{number_format(($member->t3217b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b" name="members[{{ $i }}][t3217b]" class="form-control" value="{{$member->t3217b}}" disabled>
                            </td>
                            @endif    
                            
                            
                              @if(is_numeric($member->t3217c_lk))
                            <td>
                                <input type="text" id="t3217c_lk" name="members[{{ $i }}][t3217c_lk]" class="form-control" value="{{number_format(($member->t3217c_lk),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c_lk" name="members[{{ $i }}][t3217c_lk]" class="form-control" value="{{$member->t3217c_lk}}" disabled>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217c_pr))
                            <td>
                                <input type="text" id="t3217c_pr" name="members[{{ $i }}][t3217c_pr]" class="form-control" value="{{number_format(($member->t3217c_pr),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c_pr" name="members[{{ $i }}][t3217c_pr]" class="form-control" value="{{$member->t3217c_pr}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217c))
                            <td>
                                <input type="text" id="t3217c" name="members[{{ $i }}][t3217c]" class="form-control" value="{{number_format(($member->t3217c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c" name="members[{{ $i }}][t3217c]" class="form-control" value="{{$member->t3217c}}" disabled>
                            </td>
                            @endif    
                      
                      
                      @elseif( $a->setuju_opd == 0)
                      
                      @if(is_numeric($member->t3217a_lk))
                            <td>
                                <input type="text" id="t3217a_lk" name="members[{{ $i }}][t3217a_lk]" class="form-control" value="{{number_format(($member->t3217a_lk),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a_lk" name="members[{{ $i }}][t3217a_lk]" class="form-control" value="{{$member->t3217a_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217a_pr))
                            <td>
                                <input type="text" id="t3217a_pr" name="members[{{ $i }}][t3217a_pr]" class="form-control" value="{{number_format(($member->t3217a_pr),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a_pr" name="members[{{ $i }}][t3217a_pr]" class="form-control" value="{{$member->t3217a_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217a))
                            <td>
                                <input type="text" id="t3217a" name="members[{{ $i }}][t3217a]" class="form-control" value="{{number_format(($member->t3217a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217a" name="members[{{ $i }}][t3217a]" class="form-control" value="{{$member->t3217a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t3217b_lk))
                            <td>
                                <input type="text" id="t3217b_lk" name="members[{{ $i }}][t3217b_lk]" class="form-control" value="{{number_format(($member->t3217b_lk),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b_lk" name="members[{{ $i }}][t3217b_lk]" class="form-control" value="{{$member->t3217b_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217b_pr))
                            <td>
                                <input type="text" id="t3217b_pr" name="members[{{ $i }}][t3217b_pr]" class="form-control" value="{{number_format(($member->t3217b_pr),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b_pr" name="members[{{ $i }}][t3217b_pr]" class="form-control" value="{{$member->t3217b_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217b))
                            <td>
                                <input type="text" id="t3217b" name="members[{{ $i }}][t3217b]" class="form-control" value="{{number_format(($member->t3217b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217b" name="members[{{ $i }}][t3217b]" class="form-control" value="{{$member->t3217b}}">
                            </td>
                            @endif    
                            
                            
                              @if(is_numeric($member->t3217c_lk))
                            <td>
                                <input type="text" id="t3217c_lk" name="members[{{ $i }}][t3217c_lk]" class="form-control" value="{{number_format(($member->t3217c_lk),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c_lk" name="members[{{ $i }}][t3217c_lk]" class="form-control" value="{{$member->t3217c_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217c_pr))
                            <td>
                                <input type="text" id="t3217c_pr" name="members[{{ $i }}][t3217c_pr]" class="form-control" value="{{number_format(($member->t3217c_pr),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c_pr" name="members[{{ $i }}][t3217c_pr]" class="form-control" value="{{$member->t3217c_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217c))
                            <td>
                                <input type="text" id="t3217c" name="members[{{ $i }}][t3217c]" class="form-control" value="{{number_format(($member->t3217c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t3217c" name="members[{{ $i }}][t3217c]" class="form-control" value="{{$member->t3217c}}">
                            </td>
                            @endif  
                      
                      @else @endif @endforeach
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lka),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_pra),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkpra),0, '.',' ')}}">
                            </th>
                            
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkb),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_prb),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkprb),0, '.',' ')}}">
                            </th>
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkc),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_prc),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkprc),0, '.',' ')}}">
                            </th>
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    </div>
    
    <div class="col-md-5">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                  
       <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="10"><center>2021</center></th>
                        
                    </tr>
                    <tr>
                        
                                                @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Pencari Kerja Terdaftar</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Lowongan Kerja Terpenuhir</center></th>
                      <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Penempatan/Pemenuhan Tenaga Kerja</center></th>
                    </tr>
                    
                    <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                             @if(is_numeric($member->t3217a_lk))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217a_lk),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217a_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217a_pr))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217a_pr),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217a_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217a))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217a}}">
                            </td>
                            @endif    
                            
                            
                             @if(is_numeric($member->t3217b_lk))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217b_lk),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217b_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217b_pr))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217b_pr),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217b_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217b))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217b}}">
                            </td>
                            @endif    
                            
                            
                               @if(is_numeric($member->t3217c_lk))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217c_lk),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217c_lk}}">
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217c_pr))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217c_pr),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217c_pr}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217c))
                            <td>
                                <input type="text" readonly="ture" class="form-control" value="{{number_format(($member->t3217c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="ture" class="form-control" value="{{$member->t3217c}}">
                            </td>
                            @endif    
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_lka),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_pra),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkpra),0, '.',' ')}}">
                            </th>
                            
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkb),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_prb),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkprb),0, '.',' ')}}">
                            </th>
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkc),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_prc),0, '.',' ')}}">
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_lkprc),0, '.',' ')}}">
                            </th>
                            @endforeach
                      
                       
                      
                    </tr>
                    
                        
                              
                 
                   
                          
                          
             
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Tenaga Kerja dan Transmigrasi</a></p>

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