@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
    
                <a href="{{ url('/ekspor_dda_105') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>                                  
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Banyaknya Kantor Bank Swasta Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>


<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KC</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KCP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KK</center></th>
                    
			
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_105 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                       
                             
                         
                             
                          
                              @if(is_numeric($member->t105a))
                            <td>
                             <center>   {{number_format(($member->t105a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                            <center>   {{$member->t105a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t105b))
                            <td>
                             <center>   {{number_format(($member->t105b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                             <center>  {{$member->t105b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t105c))
                            <td>
                            <center>   {{number_format(($member->t105c),0, '.',' ')}}  </center>
                            </td>
                           
                           @else
                              <td>
                             <center>   {{$member->t105c}}  </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t105d))
                            <td>
                            <center>   {{number_format(($member->t105d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                            <center>   {{$member->t105d}}  </center>
                            </td>
                            @endif 
                            
                   
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                         @foreach ($sum_lk as $a)
                         
                      
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{ number_format(($a->sum_a),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{ number_format(($a->sum_b),0, '.',' ')}} </center>
                            </th>
                           <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{ number_format(($a->sum_c),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{ number_format(($a->sum_d),0, '.',' ')}} </center>
                            </th>
                 
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    
        
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Otoritas Jasa Keuangan</a></p>

     <br>
     
 <!-- Metadata -->
     <hr><div class="demo-button">
												<p style="font-size: 14px;color: #8D99A8;">Lihat Metadata:</a></p>
												<p>
													<a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataKegiatan" role="button" aria-expanded="false" aria-controls="MetadataKegiatan">
													  Metadata Kegiatan
													</a>
												</p>
												 
												  <div class="collapse" id="MetadataKegiatan">
													<div class="col-md-0">
													<div class="card card-body">
                                        <ul class="notification-item">
													@foreach ($metadatas as $kolom)
										<li><a  href="{{ url('kegiatan/' . $kolom->b0r1) }}"> {{ $kolom->b0r1 }}
										</a></li> @endforeach  
										</ul>

													</div>
													</div>
												  </div><hr>

                                            <p>
                                                <a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataIndikator" role="button" aria-expanded="false" aria-controls="MetadataIndikator">
														Metadata Indikator
												</a>
                                            </p>
												  <div class="collapse" id="MetadataIndikator">
													<div class="col-md-0">
													<div class="card card-body">

													<ul class="notification-item">
													@foreach ($metadatas_ind as $kolom)
										<li><a  href="{{ url('indikator/' . $kolom->ind_nama) }}"> {{ $kolom->ind_nama }}
										</a></li> @endforeach  
										</ul>
												
													</div>
													</div>
												  </div><hr>
												  
										<p>
										    <a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataVariabel" role="button" aria-expanded="false" aria-controls="MetadataVariabel">
														Metadata Variabel
											</a>
										</p>
												  <div class="collapse" id="MetadataVariabel">
													<div class="col-md-0">
													<div class="card card-body">

													<ul class="notification-item">
													@foreach ($metadatas_var as $kolom)
										<li><a  href="{{ url('variabel/' . $kolom->var_nama) }}"> {{ $kolom->var_nama }}
										</a></li> @endforeach  
										</ul>
											    
													</div>
												  </div>
												  </div>
												  
</div>
   
<!-- Akhir Metadata -->




						
	</div>
</div>
					<!-- END OVERVIEW -->
		


    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>