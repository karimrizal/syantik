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
                          
                            <a href="{{ url('/ekspor_7413') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah kecamatan yang rentan terhadap kerawanan pangan (perioritas 1,2,3,4,5, dan 6) di Provinsi Sulawesi Tenggara menurut Kabupaten/Kota, Tahun {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Perioritas</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Total</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>1</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>2</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>3</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>4</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>5</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>6</center></th>
                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7413 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7413') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7413a))
                            <td>
                                <input type="text" id="t7413a" name="members[{{ $i }}][t7413a]" class="form-control" value="{{number_format(($member->t7413a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413a" name="members[{{ $i }}][t7413a]" class="form-control" value="{{$member->t7413a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7413b))
                            <td>
                                <input type="text" id="t7413b" name="members[{{ $i }}][t7413b]" class="form-control" value="{{number_format(($member->t7413b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413b" name="members[{{ $i }}][t7413b]" class="form-control" value="{{$member->t7413b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7413c))
                            <td>
                                <input type="text" id="t7413c" name="members[{{ $i }}][t7413c]" class="form-control" value="{{number_format(($member->t7413c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413c" name="members[{{ $i }}][t7413c]" class="form-control" value="{{$member->t7413c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7413d))
                            <td>
                                <input type="text" id="t7413d" name="members[{{ $i }}][t7413d]" class="form-control" value="{{number_format(($member->t7413d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413d" name="members[{{ $i }}][t7413d]" class="form-control" value="{{$member->t7413d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7413e))
                            <td>
                                <input type="text" id="t7413e" name="members[{{ $i }}][t7413e]" class="form-control" value="{{number_format(($member->t7413e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413e" name="members[{{ $i }}][t7413e]" class="form-control" value="{{$member->t7413e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7413f))
                            <td>
                                <input type="text" id="t7413f" name="members[{{ $i }}][t7413f]" class="form-control" value="{{number_format(($member->t7413f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413f" name="members[{{ $i }}][t7413f]" class="form-control" value="{{$member->t7413f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7413g))
                            <td>
                                <input type="text" id="t7413g" name="members[{{ $i }}][t7413g]" class="form-control" value="{{number_format(($member->t7413g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7413g" name="members[{{ $i }}][t7413g]" class="form-control" value="{{$member->t7413g}}">
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
              
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Ketahanan Pangan Provinsi Sulawesi Tenggara</a></p>

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

