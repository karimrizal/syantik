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
                           <a href="{{ url('/ekspor_7454') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> HASIL PENCATATAN KEPENDUDUKAN DAN PENCATATAN PENCATATN SIPIL PROV. SULTRA, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
          
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>KABUPATEN/KOTA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PENDUDUK USIA > 17 YANG BER-KTP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PENDUDUK USIA > 17 ATAU SUDAH MENIKAH</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH BAYI BERAKTA KELAHIRAN</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH BAYI</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PASANGAN  NIKAH YANG BERAKTA NIKAH </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH KESELURUHAN PASANGAN NIKAH</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH KTP BER-NIK YANG DITERBITKAN</center></th>
             
                        </tr>
                  
                    
                   
            </thead>
            
                     @foreach ($tabel_7454 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7454') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7454a))
                            <td>
                                <input type="text" id="t7454a" name="members[{{ $i }}][t7454a]" class="form-control" value="{{number_format(($member->t7454a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454a" name="members[{{ $i }}][t7454a]" class="form-control" value="{{$member->t7454a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7454b))
                            <td>
                                <input type="text" id="t7454b" name="members[{{ $i }}][t7454b]" class="form-control" value="{{number_format(($member->t7454b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454b" name="members[{{ $i }}][t7454b]" class="form-control" value="{{$member->t7454b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7454c))
                            <td>
                                <input type="text" id="t7454c" name="members[{{ $i }}][t7454c]" class="form-control" value="{{number_format(($member->t7454c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454c" name="members[{{ $i }}][t7454c]" class="form-control" value="{{$member->t7454c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7454d))
                            <td>
                                <input type="text" id="t7454d" name="members[{{ $i }}][t7454d]" class="form-control" value="{{number_format(($member->t7454d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454d" name="members[{{ $i }}][t7454d]" class="form-control" value="{{$member->t7454d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7454e))
                            <td>
                                <input type="text" id="t7454e" name="members[{{ $i }}][t7454e]" class="form-control" value="{{number_format(($member->t7454e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454e" name="members[{{ $i }}][t7454e]" class="form-control" value="{{$member->t7454e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7454f))
                            <td>
                                <input type="text" id="t7454f" name="members[{{ $i }}][t7454f]" class="form-control" value="{{number_format(($member->t7454f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454f" name="members[{{ $i }}][t7454f]" class="form-control" value="{{$member->t7454f}}">
                            </td>
                            @endif
                            
                            
                            @if(is_numeric($member->t7454g))
                            <td>
                                <input type="text" id="t7454g" name="members[{{ $i }}][t7454g]" class="form-control" value="{{number_format(($member->t7454g),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7454g" name="members[{{ $i }}][t7454g]" class="form-control" value="{{$member->t7454g}}">
                            </td>
                            @endif
                            
                   
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sulawesi Tenggara</center></th>
                        
                         
                            
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
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Data Konsolidasi Bersih (DKB) Smester II Tahun {{$year}}</a></p>

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

