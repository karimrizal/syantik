@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                           <a href="{{ url('/ekspor_dda_85') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Destinasi Wisata Menurut Jenis Wisata dan Kabupaten/Kota di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>


                             
<table class="table table-bordered" id="example">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="18"> <center>{{$year}}</center></th> </tr>
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jenis Wisata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Timur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Kepulauan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna Barat</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Tengah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baubau</center></th>
                    
			
                    </tr>
                    
                   
                    
                    
            </thead>
                    @foreach ($tabel_85 as $i => $member)
                    <tr>
                       
                        <th>{{ $member->kec }}</th>
                        
                        
                         
                             
                              @if(is_numeric($member->t85a))
                            <td>
                                <center> {{number_format(($member->t85a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t85a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t85b))
                            <td>
                                <center> {{number_format(($member->t85b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85c))
                            <td>
                                <center> {{number_format(($member->t85c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t85d))
                            <td>
                                <center> {{number_format(($member->t85d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85e))
                            <td>
                                <center> {{number_format(($member->t85e),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t85f))
                            <td>
                                <center> {{number_format(($member->t85f),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85f}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85g))
                            <td>
                                <center> {{number_format(($member->t85g),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85g}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85h))
                            <td>
                                <center> {{number_format(($member->t85h),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t85h}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85i))
                            <td>
                               <center> {{number_format(($member->t85i),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85i}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85j))
                            <td>
                                <center> {{number_format(($member->t85j),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85j}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85k))
                            <td>
                                <center> {{number_format(($member->t85k),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85k}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85l))
                            <td>
                                <center> {{number_format(($member->t85l),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85l}} </center>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t85m))
                            <td>
                                <center> {{number_format(($member->t85m),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85m}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85n))
                            <td>
                                <center> {{number_format(($member->t85n),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85n}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85o))
                            <td>
                                <center> {{number_format(($member->t85o),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85o}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85p))
                            <td>
                                <center> {{number_format(($member->t85p),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85p}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t85q))
                            <td>
                                <center> {{number_format(($member->t85q),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t85q}} </center>
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
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_g),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_h),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_i),0, '.',' ')}} </center>
                            </th>
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_j),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_k),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_l),0, '.',' ')}} </center>
                            </th>
                               <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_m),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_n),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_o),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_p),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_q),0, '.',' ')}} </center>
                            </th>
                 
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    
     
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Pariwisata Provinsi Sulawesi Tenggara</a></p>

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