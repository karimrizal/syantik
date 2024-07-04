@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                            <a href="{{ url('/ekspor_dda_541') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Luas Kawasan Hutan dan Hutan Konservasi Menurut kabupaten/Kota (ha) di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>


<table class="table table-bordered" id="example2">
                <thead>
                        
                    <tr>
                        
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun SK</center></th>
                        <th colspan="7" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan Konservasi (Daratan dan Perairan)</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan (Daratan)</center></th>
                         <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    <tr>
                        
                    
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perairan</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Suaka Margasatwa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cagar Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Hutan Raya</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi Tetap </center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi yang Dapat Dikonversi</center></th>
                   
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_541 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                        
                             
                            
                             
                              <td>
                                {{ $member->t541a}}
                            </td>
                            @if(is_numeric($member->t541b))
                            <td>
                                <center> {{number_format(($member->t541b),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541c))
                            <td>
                                <center> {{number_format(($member->t541c),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t541d))
                            <td>
                                <center> {{number_format(($member->t541d),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541e))
                            <td>
                                <center> {{number_format(($member->t541e),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t541f))
                            <td>
                                <center> {{number_format(($member->t541f),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541f}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541g))
                            <td>
                                <center> {{number_format(($member->t541g),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541g}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541h))
                            <td>
                                <center> {{number_format(($member->t541h),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t541h}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541i))
                            <td>
                               <center> {{number_format(($member->t541i),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541i}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541j))
                            <td>
                                <center> {{number_format(($member->t541j),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541j}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541k))
                            <td>
                                <center> {{number_format(($member->t541k),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541k}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t541l))
                            <td>
                                <center> {{number_format(($member->t541l),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541l}} </center>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t541m))
                            <td>
                                <center> {{number_format(($member->t541m),2, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t541m}} </center>
                            </td>
                            @endif
                            
                      
                      
                    
                            
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="2"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                       
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_b),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_c),2, '.',' ')}} </center>
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_d),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_e),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_f),2, '.',' ')}} </center>
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_g),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_h),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_i),2, '.',' ')}} </center>
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_j),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_k),2, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_l),2, '.',' ')}} </center>
                            </th>
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_m),2, '.',' ')}} </center>
                            </th>
                            
                       
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Balai Pemantapan Kawasan Hutan Wilayah XXII Kendari</a></p>

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
			$('#example2').DataTable({
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

