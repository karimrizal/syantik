@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                          <a href="{{ url('/ekspor_dda_916') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>                     
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Kendaraan Bermotor Menurut Satwil/Samsat dan Jenis Kendaraan di {{ $a->kab }}, Desember {{$year}}</h3>
@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>SATWIL / SAMSAT</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="5"><center>Jumlah Kendaraan Bermotor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                     
       
                      
                    </tr>
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Penumpang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Barang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sepeda Motor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kendaraan Khusus</center></th>
                      
                      
                    </tr>
                    
                   
            </thead>
            
                    @foreach ($tabel_916 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                        
                             
                        
                             @if(is_numeric($member->t916a))
                            <td>
                                <center> {{number_format(($member->t916a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t916a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t916b))
                            <td>
                                <center> {{number_format(($member->t916b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t916b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t916c))
                            <td>
                                <center> {{number_format(($member->t916c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t916c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t916d))
                            <td>
                                <center> {{number_format(($member->t916d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t916d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t916e))
                            <td>
                                <center> {{number_format(($member->t916e),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t916e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t916f))
                            <td>
                                <center> {{number_format(($member->t916f),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t916f}} </center>
                            </td>
                            @endif
                            
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{ number_format(($a->sum_a),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_b),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_c),0, '.',' ')}} </center>
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_d),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_e),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_f),0, '.',' ')}} </center>
                            </th>
                            
                   
            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
   
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Kepolisian Daerah</a></p>

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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
		    
			});
			
				$('#example4').DataTable({
			"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
			
			});
		});
	</script> 

    
