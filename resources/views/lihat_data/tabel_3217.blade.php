@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
                            <a href="{{ url('/ekspor_dda_3217') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>          
					@foreach($kab as $a)
					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Pencari Kerja Terdaftar, Lowongan Kerja Terdaftar, dan Penempatan/Pemenuhan Tenaga Kerja Menurut Kabupaten/Kota dan Jenis Kelamin di {{ $a->kab }}, {{$year}}</h3>

@endforeach				
<br>


<table class="table table-bordered" id="">
                <thead>
                  
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                       
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Pencari Kerja Terdaftar</center></th>
                       <th  bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Lowongan Kerja Terdaftar</center></th>
                      <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Penempatan/Pemenuhan Tenaga Kerja</center></th>
                    </tr>
                    
                    <tr>
                  
                        <th  bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
            </thead>
                    @foreach ($tabel_3217 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                            
                            
                          
                              @if(is_numeric($member->t3217a_lk))
                            <td>
                                <center> {{number_format(($member->t3217a_lk),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217a_lk}} </center>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217a_pr))
                            <td>
                               <center> {{number_format(($member->t3217a_pr),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217a_pr}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217a))
                            <td>
                                <center> {{number_format(($member->t3217a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217a}} </center>
                            </td>
                            @endif    
                            
                            
                            @if(is_numeric($member->t3217b_lk))
                            <td>
                                <center> {{number_format(($member->t3217b_lk),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217b_lk}} </center>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217b_pr))
                            <td>
                               <center> {{number_format(($member->t3217b_pr),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217b_pr}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217b))
                            <td>
                                <center> {{number_format(($member->t3217b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217b}} </center>
                            </td>
                            @endif
                               
                            
                            
                              @if(is_numeric($member->t3217c_lk))
                            <td>
                                <center> {{number_format(($member->t3217c_lk),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217c_lk}} </center>
                            </td>
                            @endif    
                           @if(is_numeric($member->t3217c_pr))
                            <td>
                               <center> {{number_format(($member->t3217c_pr),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217c_pr}} </center>
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t3217c))
                            <td>
                                <center> {{number_format(($member->t3217c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                                <center> {{$member->t3217c}} </center>
                            </td>
                            @endif
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{ number_format(($a->sum_lka),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{ number_format(($a->sum_pra),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                               <center> {{number_format(($a->sum_lkpra),0, '.',' ')}} </center>
                            </th>
                            
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_lkb),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_prb),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <center> {{number_format(($a->sum_lkprb),0, '.',' ')}} </center>
                            </th>
                            
                            
                             <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_lkc),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <center> {{number_format(($a->sum_prc),0, '.',' ')}} </center>
                            </th>
                            
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                                <center> {{number_format(($a->sum_lkprc),0, '.',' ')}} </center>
                            </th>
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
    
    <br>
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Tenaga Kerja dan Transmigrasi</a></p>

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