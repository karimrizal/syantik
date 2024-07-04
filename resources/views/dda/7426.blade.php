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
                           <a href="{{ url('/ekspor_7426') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah Kejadian Bencana Alam Menurut Kabupaten/ Kota di Sulawesi Tenggara, Tahun {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
     
                        <tr>
                            
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Gempa Bumi</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tsunami</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Banjir</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tanah Longsor</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kekeringan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kebakaran</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Puting Beliung</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Gelombang Pasang</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total</center></th>

                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7426 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7426') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7426a))
                            <td>
                                <input type="text" id="t7426a" name="members[{{ $i }}][t7426a]" class="form-control" value="{{number_format(($member->t7426a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426a" name="members[{{ $i }}][t7426a]" class="form-control" value="{{$member->t7426a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7426b))
                            <td>
                                <input type="text" id="t7426b" name="members[{{ $i }}][t7426b]" class="form-control" value="{{number_format(($member->t7426b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426b" name="members[{{ $i }}][t7426b]" class="form-control" value="{{$member->t7426b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7426c))
                            <td>
                                <input type="text" id="t7426c" name="members[{{ $i }}][t7426c]" class="form-control" value="{{number_format(($member->t7426c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426c" name="members[{{ $i }}][t7426c]" class="form-control" value="{{$member->t7426c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7426d))
                            <td>
                                <input type="text" id="t7426d" name="members[{{ $i }}][t7426d]" class="form-control" value="{{number_format(($member->t7426d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426d" name="members[{{ $i }}][t7426d]" class="form-control" value="{{$member->t7426d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7426e))
                            <td>
                                <input type="text" id="t7426e" name="members[{{ $i }}][t7426e]" class="form-control" value="{{number_format(($member->t7426e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426e" name="members[{{ $i }}][t7426e]" class="form-control" value="{{$member->t7426e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7426f))
                            <td>
                                <input type="text" id="t7426f" name="members[{{ $i }}][t7426f]" class="form-control" value="{{number_format(($member->t7426f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426f" name="members[{{ $i }}][t7426f]" class="form-control" value="{{$member->t7426f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7426g))
                            <td>
                                <input type="text" id="t7426g" name="members[{{ $i }}][t7426g]" class="form-control" value="{{number_format(($member->t7426g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426g" name="members[{{ $i }}][t7426g]" class="form-control" value="{{$member->t7426g}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7426h))
                            <td>
                                <input type="text" id="t7426h" name="members[{{ $i }}][t7426h]" class="form-control" value="{{number_format(($member->t7426h),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426h" name="members[{{ $i }}][t7426h]" class="form-control" value="{{$member->t7426h}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7426i))
                            <td>
                                <input type="text" id="t7426i" name="members[{{ $i }}][t7426i]" class="form-control" value="{{number_format(($member->t7426i),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7426i" name="members[{{ $i }}][t7426i]" class="form-control" value="{{$member->t7426i}}">
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
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_h),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_i),0, '.',' ')}}">
                            </th>
              
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: BADAN PENANGGULANGAN BENCANA DAERAH</a></p>

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

