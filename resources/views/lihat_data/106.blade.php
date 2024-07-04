@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
        
                <a href="{{ url('/ekspor_dda_106') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>                            
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Perkembangan Giro, Deposito, dan Tabungan Keadaan 31 Desember di {{ $a->kab }}, 2018-2021</h3>
@endforeach				
<br>



<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                       
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Giro</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tabungan</center></th>
                        <th colspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Deposito</center></th>
                    
                    </tr>
                     <tr>
                     
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                    
                    </tr>
                    
                   
                    
                    
            </thead>
                   @foreach ($tabel_106 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                 
                                         @if(is_numeric($member->t106a))
                            <td>
                                <center> {{number_format(($member->t106a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t106a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t106b))
                            <td>
                                <center> {{number_format(($member->t106b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t106b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t106c))
                            <td>
                                <center> {{number_format(($member->t106c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t106c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t106d))
                            <td>
                                <center> {{number_format(($member->t106d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t106d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106e))
                            <td>
                                <center> {{number_format(($member->t106e),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t106e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t106f))
                            <td>
                                <center> {{number_format(($member->t106f),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t106f}} </center>
                            </td>
                            @endif 
                   
                      
                    </tr>
                    @endforeach
                    
          
                    
    </table>
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Bank Indonesia Perwakilan Sulawesi Tenggara</a></p>

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
