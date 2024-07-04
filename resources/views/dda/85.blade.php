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
        
                           <a href="{{ url('/ekspor_dda_85') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Destinasi Wisata Menurut Jenis Wisata dan Kabupaten/Kota di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-9">
 <form id="simpan" action="{{ route('dda.store85') }}" method="POST">
                             @csrf
                             
<table class="table table-bordered" id="example">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="18"> <center>{{$year}}</center></th> </tr>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jenis Wisata</center></th>
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
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Timur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Kepulauan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna Barat</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Tengah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baubau</center></th>
                    
			
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_85 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                        
                         
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                           
                           
                           @foreach($catatan as $a)
                      
                          @if( $a->setuju_opd == 1)
                          
                              @if(is_numeric($member->t85a))
                            <td>
                                <input type="text" id="t85a" name="members[{{ $i }}][t85a]" class="form-control" value="{{number_format(($member->t85a),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85a" name="members[{{ $i }}][t85a]" class="form-control" value="{{$member->t85a}}" disabled>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t85b))
                            <td>
                                <input type="text" id="t85b" name="members[{{ $i }}][t85b]" class="form-control" value="{{number_format(($member->t85b),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85b" name="members[{{ $i }}][t85b]" class="form-control" value="{{$member->t85b}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85c))
                            <td>
                                <input type="text" id="t85c" name="members[{{ $i }}][t85c]" class="form-control" value="{{number_format(($member->t85c),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85c" name="members[{{ $i }}][t85c]" class="form-control" value="{{$member->t85c}}" disabled>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t85d))
                            <td>
                                <input type="text" id="t85d" name="members[{{ $i }}][t85d]" class="form-control" value="{{number_format(($member->t85d),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85d" name="members[{{ $i }}][t85d]" class="form-control" value="{{$member->t85d}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85e))
                            <td>
                                <input type="text" id="t85e" name="members[{{ $i }}][t85e]" class="form-control" value="{{number_format(($member->t85e),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85e" name="members[{{ $i }}][t85e]" class="form-control" value="{{$member->t85e}}" disabled>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85f))
                            <td>
                                <input type="text" id="t85f" name="members[{{ $i }}][t85f]" class="form-control" value="{{number_format(($member->t85f),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85f" name="members[{{ $i }}][t85f]" class="form-control" value="{{$member->t85f}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85g))
                            <td>
                                <input type="text" id="t85g" name="members[{{ $i }}][t85g]" class="form-control" value="{{number_format(($member->t85g),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85g" name="members[{{ $i }}][t85g]" class="form-control" value="{{$member->t85g}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85h))
                            <td>
                                <input type="text" id="t85h" name="members[{{ $i }}][t85h]" class="form-control" value="{{number_format(($member->t85h),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85h" name="members[{{ $i }}][t85h]" class="form-control" value="{{$member->t85h}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85i))
                            <td>
                                <input type="text" id="t85i" name="members[{{ $i }}][t85i]" class="form-control" value="{{number_format(($member->t85i),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85i" name="members[{{ $i }}][t85i]" class="form-control" value="{{$member->t85i}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85j))
                            <td>
                                <input type="text" id="t85j" name="members[{{ $i }}][t85j]" class="form-control" value="{{number_format(($member->t85j),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85j" name="members[{{ $i }}][t85j]" class="form-control" value="{{$member->t85j}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85k))
                            <td>
                                <input type="text" id="t85k" name="members[{{ $i }}][t85k]" class="form-control" value="{{number_format(($member->t85k),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85k" name="members[{{ $i }}][t85k]" class="form-control" value="{{$member->t85k}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85l))
                            <td>
                                <input type="text" id="t85l" name="members[{{ $i }}][t85l]" class="form-control" value="{{number_format(($member->t85l),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85l" name="members[{{ $i }}][t85l]" class="form-control" value="{{$member->t85l}}" disabled>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85m))
                            <td>
                                <input type="text" id="t85m" name="members[{{ $i }}][t85m]" class="form-control" value="{{number_format(($member->t85m),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85m" name="members[{{ $i }}][t85m]" class="form-control" value="{{$member->t85m}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85n))
                            <td>
                                <input type="text" id="t85n" name="members[{{ $i }}][t85n]" class="form-control" value="{{number_format(($member->t85n),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85n" name="members[{{ $i }}][t85n]" class="form-control" value="{{$member->t85n}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85o))
                            <td>
                                <input type="text" id="t85o" name="members[{{ $i }}][t85o]" class="form-control" value="{{number_format(($member->t85o),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85o" name="members[{{ $i }}][t85o]" class="form-control" value="{{$member->t85o}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85p))
                            <td>
                                <input type="text" id="t85p" name="members[{{ $i }}][t85p]" class="form-control" value="{{number_format(($member->t85p),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85p" name="members[{{ $i }}][t85p]" class="form-control" value="{{$member->t85p}}" disabled>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85q))
                            <td>
                                <input type="text" id="t85q" name="members[{{ $i }}][t85q]" class="form-control" value="{{number_format(($member->t85q),0, '.','')}}" disabled>
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85q" name="members[{{ $i }}][t85q]" class="form-control" value="{{$member->t85q}}" disabled>
                            </td>
                            @endif
                            
                        
                        @elseif( $a->setuju_opd == 0)
                        
                          @if(is_numeric($member->t85a))
                            <td>
                                <input type="text" id="t85a" name="members[{{ $i }}][t85a]" class="form-control" value="{{number_format(($member->t85a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85a" name="members[{{ $i }}][t85a]" class="form-control" value="{{$member->t85a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t85b))
                            <td>
                                <input type="text" id="t85b" name="members[{{ $i }}][t85b]" class="form-control" value="{{number_format(($member->t85b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85b" name="members[{{ $i }}][t85b]" class="form-control" value="{{$member->t85b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85c))
                            <td>
                                <input type="text" id="t85c" name="members[{{ $i }}][t85c]" class="form-control" value="{{number_format(($member->t85c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85c" name="members[{{ $i }}][t85c]" class="form-control" value="{{$member->t85c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t85d))
                            <td>
                                <input type="text" id="t85d" name="members[{{ $i }}][t85d]" class="form-control" value="{{number_format(($member->t85d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85d" name="members[{{ $i }}][t85d]" class="form-control" value="{{$member->t85d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85e))
                            <td>
                                <input type="text" id="t85e" name="members[{{ $i }}][t85e]" class="form-control" value="{{number_format(($member->t85e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85e" name="members[{{ $i }}][t85e]" class="form-control" value="{{$member->t85e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85f))
                            <td>
                                <input type="text" id="t85f" name="members[{{ $i }}][t85f]" class="form-control" value="{{number_format(($member->t85f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85f" name="members[{{ $i }}][t85f]" class="form-control" value="{{$member->t85f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85g))
                            <td>
                                <input type="text" id="t85g" name="members[{{ $i }}][t85g]" class="form-control" value="{{number_format(($member->t85g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85g" name="members[{{ $i }}][t85g]" class="form-control" value="{{$member->t85g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85h))
                            <td>
                                <input type="text" id="t85h" name="members[{{ $i }}][t85h]" class="form-control" value="{{number_format(($member->t85h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85h" name="members[{{ $i }}][t85h]" class="form-control" value="{{$member->t85h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85i))
                            <td>
                                <input type="text" id="t85i" name="members[{{ $i }}][t85i]" class="form-control" value="{{number_format(($member->t85i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85i" name="members[{{ $i }}][t85i]" class="form-control" value="{{$member->t85i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85j))
                            <td>
                                <input type="text" id="t85j" name="members[{{ $i }}][t85j]" class="form-control" value="{{number_format(($member->t85j),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85j" name="members[{{ $i }}][t85j]" class="form-control" value="{{$member->t85j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85k))
                            <td>
                                <input type="text" id="t85k" name="members[{{ $i }}][t85k]" class="form-control" value="{{number_format(($member->t85k),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85k" name="members[{{ $i }}][t85k]" class="form-control" value="{{$member->t85k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85l))
                            <td>
                                <input type="text" id="t85l" name="members[{{ $i }}][t85l]" class="form-control" value="{{number_format(($member->t85l),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85l" name="members[{{ $i }}][t85l]" class="form-control" value="{{$member->t85l}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85m))
                            <td>
                                <input type="text" id="t85m" name="members[{{ $i }}][t85m]" class="form-control" value="{{number_format(($member->t85m),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85m" name="members[{{ $i }}][t85m]" class="form-control" value="{{$member->t85m}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85n))
                            <td>
                                <input type="text" id="t85n" name="members[{{ $i }}][t85n]" class="form-control" value="{{number_format(($member->t85n),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85n" name="members[{{ $i }}][t85n]" class="form-control" value="{{$member->t85n}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85o))
                            <td>
                                <input type="text" id="t85o" name="members[{{ $i }}][t85o]" class="form-control" value="{{number_format(($member->t85o),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85o" name="members[{{ $i }}][t85o]" class="form-control" value="{{$member->t85o}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85p))
                            <td>
                                <input type="text" id="t85p" name="members[{{ $i }}][t85p]" class="form-control" value="{{number_format(($member->t85p),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85p" name="members[{{ $i }}][t85p]" class="form-control" value="{{$member->t85p}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85q))
                            <td>
                                <input type="text" id="t85q" name="members[{{ $i }}][t85q]" class="form-control" value="{{number_format(($member->t85q),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t85q" name="members[{{ $i }}][t85q]" class="form-control" value="{{$member->t85q}}">
                            </td>
                            @endif
                        
                        @else @endif @endforeach
        
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lk as $a)
                         
                      
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
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_m),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_n),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_o),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_p),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_q),0, '.',' ')}}">
                            </th>
                 
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    
     </div>
    
    <div class="col-md-3">
        
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                  
   <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="18"> <center>2021</center></th> </tr>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jenis Wisata</center></th>
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
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Timur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Kepulauan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna Barat</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Tengah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baubau</center></th>
                    
			
                    </tr>
          
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                              @if(is_numeric($member->t85a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t85b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85c}}">
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t85d))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85d),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85d}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85e))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85e),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85e}}">
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85f))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85f),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85f}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85g))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85g),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85g}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85h))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85h),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85h}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85i))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85i),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85i}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85j))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85j),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85j}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85k))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85k),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85k}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85l))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85l),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85l}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85m))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85m),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85m}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85n))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85n),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85n}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85o))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85o),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85o}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85p))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85p),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85p}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85q))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t85q),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t85q}}">
                            </td>
                            @endif
                           
                      
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
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
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_m),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_n),0, '.',' ')}}">
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_o),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_p),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_q),0, '.',' ')}}">
                            </th>
                           
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Pariwisata Provinsi Sulawesi Tenggara</a></p>

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

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


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
