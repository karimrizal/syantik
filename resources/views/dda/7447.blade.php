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
                           <a href="{{ url('/ekspor_7447') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah Kebutuhan Konsumsi Pangan Menurut Angka Kecukupan Gizi (AKG) di Provinsi Sulawesi Tenggara, {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kelompok Pangan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Wilayah Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Wilayah Desa</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Total Wilayah</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
        
                    </tr>
                  
                    
                   
            </thead>
            
                       @foreach ($tabel_7447 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7447') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7447a))
                            <td>
                                <input type="text" id="t7447a" name="members[{{ $i }}][t7447a]" class="form-control" value="{{number_format(($member->t7447a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447a" name="members[{{ $i }}][t7447a]" class="form-control" value="{{$member->t7447a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7447b))
                            <td>
                                <input type="text" id="t7447b" name="members[{{ $i }}][t7447b]" class="form-control" value="{{number_format(($member->t7447b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447b" name="members[{{ $i }}][t7447b]" class="form-control" value="{{$member->t7447b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7447c))
                            <td>
                                <input type="text" id="t7447c" name="members[{{ $i }}][t7447c]" class="form-control" value="{{number_format(($member->t7447c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447c" name="members[{{ $i }}][t7447c]" class="form-control" value="{{$member->t7447c}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7447d))
                            <td>
                                <input type="text" id="t7447d" name="members[{{ $i }}][t7447d]" class="form-control" value="{{number_format(($member->t7447d),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447d" name="members[{{ $i }}][t7447d]" class="form-control" value="{{$member->t7447d}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7447e))
                            <td>
                                <input type="text" id="t7447e" name="members[{{ $i }}][t7447e]" class="form-control" value="{{number_format(($member->t7447e),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447e" name="members[{{ $i }}][t7447e]" class="form-control" value="{{$member->t7447e}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7447f))
                            <td>
                                <input type="text" id="t7447f" name="members[{{ $i }}][t7447f]" class="form-control" value="{{number_format(($member->t7447f),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7447f" name="members[{{ $i }}][t7447f]" class="form-control" value="{{$member->t7447f}}">
                            </td>
                            @endif
                            
                            
                       
          
                      
                    </tr>
                    @endforeach
              
                    
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

