@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                            <a href="{{ url('/ekspor_dda_4215') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>          
					@foreach($kab as $a)
					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Pasangan Usia Subur dan Peserta KB Aktif Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}</h3>

@endforeach				
<br>

<table class="table table-bordered" id="">
                <thead>
                  
                    <tr>
                        
                      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah PUS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="8"> <center>Peserta KB Aktif</center></th>
                   
       
                      
                    </tr>
                    
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">IUD</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">MOW</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">MOP</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Kondom</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Implan</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Suntikan</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Pil</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                    </tr>
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_4215 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                            
                            
                                @if(is_numeric($member->t4215a))
                            <td>
                                <center> {{number_format(($member->t4215a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t4215a}} </center>
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t4215b))
                            <td>
                                <center> {{number_format(($member->t4215b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4215c))
                            <td>
                                <center> {{number_format(($member->t4215c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215c}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t4215d))
                            <td>
                                <center> {{number_format(($member->t4215d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215d}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t4215e))
                            <td>
                                <center> {{number_format(($member->t4215e),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215e}} </center>
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t4215f))
                            <td>
                                <center> {{number_format(($member->t4215f),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215f}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4215g))
                            <td>
                                <center> {{number_format(($member->t4215g),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215g}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4215h))
                            <td>
                                <center> {{number_format(($member->t4215h),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t4215h}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t4215i))
                            <td>
                               <center> {{number_format(($member->t4215i),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t4215i}} </center>
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
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_g),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                           <center> {{number_format(($a->sum_h),0, '.',' ')}} </center>
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_i),0, '.',' ')}} </center>
                            </th>
                        
            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
   
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Kependudukan dan Keluargan Berencana Nasional</a></p>

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