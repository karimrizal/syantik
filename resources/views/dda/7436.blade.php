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
                           <a href="{{ url('/ekspor_7436') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah Desa Menurut Status Desa Berdasarkan Indeks Desa Membangun (IDM) Kabupaten Provinsi Sulawesi Tenggara, Tahun {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
           
                        <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Desa
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Sangat Tertinggal
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Tertinggal
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Berkembang
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Maju
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Mandiri
(Desa)</center></th>
<th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total</center></th>
                    
                  
       
                      
                    </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7436 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7436') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7436a))
                            <td>
                                <input type="text" id="t7436a" name="members[{{ $i }}][t7436a]" class="form-control" value="{{number_format(($member->t7436a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436a" name="members[{{ $i }}][t7436a]" class="form-control" value="{{$member->t7436a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7436b))
                            <td>
                                <input type="text" id="t7436b" name="members[{{ $i }}][t7436b]" class="form-control" value="{{number_format(($member->t7436b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436b" name="members[{{ $i }}][t7436b]" class="form-control" value="{{$member->t7436b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7436c))
                            <td>
                                <input type="text" id="t7436c" name="members[{{ $i }}][t7436c]" class="form-control" value="{{number_format(($member->t7436c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436c" name="members[{{ $i }}][t7436c]" class="form-control" value="{{$member->t7436c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7436d))
                            <td>
                                <input type="text" id="t7436d" name="members[{{ $i }}][t7436d]" class="form-control" value="{{number_format(($member->t7436d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436d" name="members[{{ $i }}][t7436d]" class="form-control" value="{{$member->t7436d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7436e))
                            <td>
                                <input type="text" id="t7436e" name="members[{{ $i }}][t7436e]" class="form-control" value="{{number_format(($member->t7436e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436e" name="members[{{ $i }}][t7436e]" class="form-control" value="{{$member->t7436e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7436f))
                            <td>
                                <input type="text" id="t7436f" name="members[{{ $i }}][t7436f]" class="form-control" value="{{number_format(($member->t7436f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436f" name="members[{{ $i }}][t7436f]" class="form-control" value="{{$member->t7436f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7436g))
                            <td>
                                <input type="text" id="t7436g" name="members[{{ $i }}][t7436g]" class="form-control" value="{{number_format(($member->t7436g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7436g" name="members[{{ $i }}][t7436g]" class="form-control" value="{{$member->t7436g}}">
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
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: BPMD Kabupaten/Kota Provinsi Sulawesi Tenggara</a></p>

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

