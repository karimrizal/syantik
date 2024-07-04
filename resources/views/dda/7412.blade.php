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
                       
                            <a href="{{ url('/ekspor_7412') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)	
					@if( (Auth::user()->idkab == '7400') )
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> Jumlah Kekerasan Terhadap Anak Laki-laki dan Perempuan Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara Tahun {{$year}} </h3>
@else
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}</h3>
@endif
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    
                
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Kabupaten/Kota</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "3" ><center>Kekerasan Terhadap Anak (Jiwa)</center></th>
        
                  
       
                      
                    </tr>
                     <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Total </th>
				
					
                      
                    </tr>
          
          
                    
                   
            </thead>
            
                     @foreach ($tabel_7412 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store7412') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                             @if(is_numeric($member->t7412a))
                            <td>
                                <input type="text" id="t7412a" name="members[{{ $i }}][t7412a]" class="form-control" value="{{number_format(($member->t7412a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7412a" name="members[{{ $i }}][t7412a]" class="form-control" value="{{$member->t7412a}}">
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t7412b))
                            <td>
                                <input type="text" id="t7412b" name="members[{{ $i }}][t7412b]" class="form-control" value="{{number_format(($member->t7412b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7412b" name="members[{{ $i }}][t7412b]" class="form-control" value="{{$member->t7412b}}">
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7412c))
                            <td>
                                <input type="text" id="t7412c" name="members[{{ $i }}][t7412c]" class="form-control" value="{{number_format(($member->t7412c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t7412c" name="members[{{ $i }}][t7412c]" class="form-control" value="{{$member->t7412c}}">
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
              
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Simfoni PPPA</a></p>

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

