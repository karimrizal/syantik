@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                         <a href="{{ url('/ekspor_dda_542') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Produksi Kayu Hutan Menurut Jenis Produksi (m3) di {{ $a->kab }}, 2018 - 2021</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Bulat</center></th>
                        <th colspan = "5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Olahan</center></th>
           
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HT</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perum Perhutani</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Gergajian</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Lapis</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bubur Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Serpih Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Veneer</center></th>
                
                      
                    </tr>
                    
            
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_542 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                        
                            
                              
                             @if(is_numeric($member->t542a))
                            <td>
                                <center> {{number_format(($member->t542a),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t542a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t542b))
                            <td>
                                <center> {{number_format(($member->t542b),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542c))
                            <td>
                                <center> {{number_format(($member->t542c),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t542d))
                            <td>
                                <center> {{number_format(($member->t542d),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542e))
                            <td>
                                <center> {{number_format(($member->t542e),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t542f))
                            <td>
                                <center> {{number_format(($member->t542f),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542f}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542g))
                            <td>
                                <center> {{number_format(($member->t542g),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542g}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542h))
                            <td>
                                <center> {{number_format(($member->t542h),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t542h}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t542i))
                            <td>
                               <center> {{number_format(($member->t542i),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t542i}} </center>
                            </td>
                            @endif
                       
                            
                       
                      
                    </tr>
                    @endforeach
                  
    </table>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Kehutanan Provinsi Sulawesi Tenggara</a></p>

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


