@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                          <a href="{{ url('/ekspor_dda_68') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Produksi Hasil Pertambangan Nikel dan Aspal di {{ $a->kab }}, 2018 - 2021</h3>
@endforeach				
<br>



<table class="table table-bordered" id="">
                <thead>
                    <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Produksi</center></th>
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Fero Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Aspal <br> Ton</center></th>

                    </tr>
                    
            
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_68 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         
                              @if(is_numeric($member->t68a))
                            <td>
                                <center> {{number_format(($member->t68a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t68a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t68b))
                            <td>
                                <center> {{number_format(($member->t68b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t68b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t68c))
                            <td>
                                <center> {{number_format(($member->t68c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t68c}} </center>
                            </td>
                            @endif    
                           
                            
                       
                      
                    </tr>
                    @endforeach
                  
    </table>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Energi dan Sumber Daya Mineral Provinsi Sulawesi Tenggara</a></p>

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

