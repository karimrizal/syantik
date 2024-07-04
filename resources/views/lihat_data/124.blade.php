@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                           <a href="{{ url('/ekspor_dda_124') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Rata-rata Tekanan Udara Menurut Bulan dan Stasiun di {{ $a->kab }} (Milibar), {{$year}}</h3>
@endforeach				
<br>


<table class="table table-bordered" id="example">
                <thead>
           
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2"> <center>Bulan</center></th>
                      
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                      
                    </tr>
                    
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
           
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_124 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                           
                          
                               @if(is_numeric($member->t124a))
                            <td>
                                <center> {{number_format(($member->t124a),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124a}} <center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t124b))
                            <td>
                                <center> {{number_format(($member->t124b),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124b}} <center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124c))
                            <td>
                               <center> {{number_format(($member->t124c),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t124d))
                            <td>
                                <center> {{number_format(($member->t124d),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124e))
                            <td>
                               <center> {{number_format(($member->t124e),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t124f))
                            <td>
                                <center> {{number_format(($member->t124f),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124f}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124g))
                            <td>
                                <center> {{number_format(($member->t124g),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124g}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124h))
                            <td>
                                <center> {{number_format(($member->t124h),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t124h}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124i))
                            <td>
                                <center> {{number_format(($member->t124i),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124i}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124j))
                            <td>
                               <center> {{number_format(($member->t124j),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124j}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124k))
                            <td>
                                <center> {{number_format(($member->t124k),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124k}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t124l))
                            <td>
                                <center> {{number_format(($member->t124l),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t124l}} </center>
                            </td>
                            @endif
                            
                           
                            
                            
                            
                 
                  
                    </tr>
                    @endforeach
             
    </table>
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Meteorologi, Klimatologi, dan Geofisika</a></p>

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
