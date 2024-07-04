@extends('back-end/layouts/main')

@section('container')
                      
@if(empty($tahun))               
<div class="card mb-4">
<div class="card-header"> </div>
    
                        
	
	<div class="card-body">
							<div class="position-absolute top-50 end-0 translate-middle-y">
    							
    						   <form >
                                <select  type="hidden" name="tahun">
                				<option value>-- Pilih Tahun --</option>
                                <option value>Keseluruhan</option>
                                <option value="2020">2020</option>
                                <option  value="2021">2021</option>
                                      
                                </select>
                                <input type="submit" value="Pilih">
                              </form >
                            </div>
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle">Tanggal: {{Carbon\Carbon::now()}}</p>
							<br>				
	</div>
	</div>

	<div class="card mb-4">
		<div class="card-body">

					<div class="row">
							<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-user"></i></span>
										@if( (Auth::user()->idkab == '7400'))
											<span class="number">48</span>
											@else
											<span class="number">@foreach ($jumlah_opd as $post) {{$post->jumlah_opd}} @endforeach</span>
											@endif</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah OPD
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										@if( (Auth::user()->idkab == '7400'))
										    <span class="number">8</span>
											
											@else
											<span class="number">@foreach ($jumlah_data_dda as $post) {{$post->total}} @endforeach</span>
											<span class="title">Jumlah Tabel DDA</span>
											@endif</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Rekomendasi
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										
											<span class="number">@foreach ($jumlah_data as $post) {{$post->total}} @endforeach</span></div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Tabel Sektoral
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-database"></i></span>
										
											<span class="number">@foreach ($jumlah_metadata as $post) {{$post->jumlah_metadata}} @endforeach</span></div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Metadata
											
										</div>
									</div>
						</div>

		</div>
	</div>

	<div class="card mb-4">

	<div class="card-header"> 
		
	</div>
		<div class="card-body">


		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Data Sektoral</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-menu1-tab" data-bs-toggle="pill" data-bs-target="#pills-menu1" type="button" role="tab" aria-controls="pills-menu1" aria-selected="false">Data DDA</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-menu2-tab" data-bs-toggle="pill" data-bs-target="#pills-menu2" type="button" role="tab" aria-controls="pills-menu2" aria-selected="false">Monitoring Kabupaten/Kota</button>
			</li>
		</ul>

		<div class="tab-content" id="pills-tabContent">


			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<center> <h3>Jumlah Data Sektoral</h3> </center>
			<hr>
			<div class="row">
                                        <div class="col-md-6">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>
                    									  <th> OPD</th>
                    									  <th><center>Rekomendasi </center></th>
                    									 
                    									
                    									</tr>
                    									<tr><th style="color:white">A </th> <th style="color:white">A </th></tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($rekomendasi_sektoral as $businesses)
            									    	<tr >
            									    	    <td> <a href="{{ url('data_opd/' . $businesses->dinas) }}">  {{($businesses->dinas) }} </a> </td>
                                                           
                											<td>
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)*20 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   
            							    <div class="col-md-1">
            									<table >
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>
	
                    									  <th ><center> Kegiatan</center></th>
															
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr  >
                                                         	@foreach ($meta_kegiatan_sektoral as $businesses)
                											<td style="height:26px;">
                    											<div class="progress">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)*20 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   <div class="col-md-1">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>

                    									  <th ><center> Indikator</center></th>
                    						
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr >
                                                         	@foreach ($meta_indikator_sektoral as $businesses)
                											<td style="height:26px;">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/10*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   
            							   
            							    <div class="col-md-1">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>

                    									  <th ><center> Variabel</center></th>
                    						
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr >
                                                         	@foreach ($meta_variabel_sektoral as $businesses)
                											<td style="height:26px;">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/10*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							        <div class="col-md-3">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>
                    									  
                    									 <th><center>Tabel </center></th>
                    									
                    									</tr>
                    										<tr><th style="color:white">A </th> </tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($master_tabel_sektoral as $businesses)
            									    	<tr >
            									    
                											<td style="height:26px;">   
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: @if(is_null($businesses->kode)) 0 @else {{ (($businesses->progres)/($businesses->total))*100 }}% @endif">
                                                                <span  style="color:black "> @if(is_null($businesses->kode)) NIHIL @else {{$businesses->progres}}/{{  $businesses->total }} @endif</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							        </table>  
            							   </div>
										   </div>   


			</div>

			<div class="tab-pane fade" id="pills-menu1" role="tabpanel" aria-labelledby="pills-menu1-tab">
			
			<center> <h3>Jumlah Data DDA OPD</h3> </center>

			<table class="table table-striped">
            								        <thead>
                    									<tr>
                    									  
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($master_tabel as $businesses)
            									    	<tr >
                                                            <td>{{($businesses->dinas) }}</a></td>
                											<td width="50%">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/($businesses->total)*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}}/{{  $businesses->total }}</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							    </table>  

			</div>

			<div class="tab-pane fade" id="pills-menu2" role="tabpanel" aria-labelledby="pills-menu2-tab">
			
			<center> <h3>Monitoring Data DDA Kab/Kota</h3> </center>

			<table class="table table-striped">
            								        <thead>
                    									<tr>
                    									  
                    									 
                    									
                    									</tr>
            								        </thead>
            								        <tbody>
            								    	@foreach ($monitoring_kabkot as $businesses)
            									    	<tr >
                                                            <td>{{($businesses->idkab) }}</a></td>
                											<td width="50%">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/($businesses->total)*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}}</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							        </table>  

			</div>



		</div>


		</div>
	</div>	

	@else

	<div class="card mb-4">
<div class="card-header"> </div>
    
                        
	
	<div class="card-body">
							<div class="position-absolute top-50 end-0 translate-middle-y">
    							
    						   <form >
                                <select  type="hidden" name="tahun">
                				<option value>-- Pilih Tahun --</option>
                                <option value>Keseluruhan</option>
                                <option value="2020">2020</option>
                                <option  value="2021">2021</option>
                                      
                                </select>
                                <input type="submit" value="Pilih">
                              </form >
                            </div>
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle">{{$tahun}}</p>
							<br>				
	</div>
	</div>

	<div class="card mb-4">
		<div class="card-body">

					<div class="row">
							<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-user"></i></span>
										@if( (Auth::user()->idkab == '7400'))
											<span class="number">48</span>
											@else
											<span class="number">@foreach ($jumlah_opd_tahun as $post) {{$post->jumlah_opd}} @endforeach</span>
											@endif</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah OPD
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										@if( (Auth::user()->idkab == '7400'))
										    <span class="number">8</span>
											
											@else
											<span class="number">@foreach ($jumlah_data_tahun_dda as $post) {{$post->total}} @endforeach</span>
											<span class="title">Jumlah Tabel DDA</span>
											@endif</div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Rekomendasi
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										
											<span class="number">@foreach ($jumlah_data_tahun as $post) {{$post->total}} @endforeach</span></div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Tabel Sektoral
											
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6">
									<div class="card bg-primary text-white mb-4">
										<div class="card-body">
										<span class="icon"><i class="fa fa-database"></i></span>
										
											<span class="number">@foreach ($jumlah_metadata_tahun as $post) {{$post->jumlah_metadata}} @endforeach</span></div>
										<div class="card-footer d-flex align-items-center justify-content-between">
										Jumlah Metadata
											
										</div>
									</div>
						</div>

		</div>
	</div>

	<div class="card mb-4">

	<div class="card-header"> 
		
	</div>
		<div class="card-body">


		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Data Sektoral</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-menu1-tab" data-bs-toggle="pill" data-bs-target="#pills-menu1" type="button" role="tab" aria-controls="pills-menu1" aria-selected="false">Data DDA</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-menu2-tab" data-bs-toggle="pill" data-bs-target="#pills-menu2" type="button" role="tab" aria-controls="pills-menu2" aria-selected="false">Monitoring Kabupaten/Kota</button>
			</li>
		</ul>

		<div class="tab-content" id="pills-tabContent">


			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<center> <h3>Jumlah Data Sektoral</h3> </center>
			<hr>
			<div class="row">
                                        <div class="col-md-6">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>
                    									  <th> OPD</th>
                    									  <th><center>Rekomendasi </center></th>
                    									 
                    									
                    									</tr>
                    									<tr><th style="color:white">A </th> <th style="color:white">A </th></tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($rekomendasi_sektoral_tahun as $businesses)
            									    	<tr >
            									    	    <td> <a href="{{ url('data_opd/' . $businesses->dinas) }}">  {{($businesses->dinas) }} </a> </td>
                                                           
                											<td>
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)*20 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   
            							    <div class="col-md-1">
            									<table >
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>
	
                    									  <th ><center> Kegiatan</center></th>
															
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr  >
                                                         	@foreach ($meta_kegiatan_sektoral_tahun as $businesses)
                											<td style="height:26px;">
                    											<div class="progress">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)*20 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   <div class="col-md-1">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>

                    									  <th ><center> Indikator</center></th>
                    						
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr >
                                                         	@foreach ($meta_indikator_sektoral as $businesses)
                											<td style="height:26px;">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/10*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							   
            							   
            							    <div class="col-md-1">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>

                    									  <th colspan="3"> <center> Metadata</center></th>
                    									 
                    									
                    									</tr>
                    									<tr>

                    									  <th ><center> Variabel</center></th>
                    						
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    
            									    	<tr >
                                                         	@foreach ($meta_variabel_sektoral as $businesses)
                											<td style="height:26px;">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/10*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}} </span>
                                                                </div>        </div>
                										
                									
            										    </tr>
            									    @endforeach
            									    
            									    
            							    	</tbody>
            							        </table>  
            							   </div>
            							        <div class="col-md-3">
            									<table style="width: 100%;">
            								        <thead>
                    									<tr>
                    									  
                    									 <th><center>Tabel </center></th>
                    									
                    									</tr>
                    										<tr><th style="color:white">A </th> </tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($master_tabel_sektoral_tahun as $businesses)
            									    	<tr >
            									    
                											<td style="height:26px;">   
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: @if(is_null($businesses->kode)) 0 @else {{ (($businesses->progres)/($businesses->total))*100 }}% @endif">
                                                                <span  style="color:black "> @if(is_null($businesses->kode)) NIHIL @else {{$businesses->progres}}/{{  $businesses->total }} @endif</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							        </table>  
            							   </div>
										   </div>   


			</div>

			<div class="tab-pane fade" id="pills-menu1" role="tabpanel" aria-labelledby="pills-menu1-tab">
			
			<center> <h3>Jumlah Data DDA OPD</h3> </center>

			<table class="table table-striped">
            								        <thead>
                    									<tr>
                    									  
                    									 
                    									
                    									</tr>
            								        </thead>
            								        
            								        <tbody>
            								    	@foreach ($master_tabel_tahun as $businesses)
            									    	<tr >
                                                            <td>{{($businesses->dinas) }}</a></td>
                											<td width="50%">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/($businesses->total)*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}}/{{  $businesses->total }}</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							    </table>  

			</div>

			<div class="tab-pane fade" id="pills-menu2" role="tabpanel" aria-labelledby="pills-menu2-tab">
			
			<center> <h3>Monitoring Data DDA Kab/Kota</h3> </center>

			<table class="table table-striped">
            								        <thead>
                    									<tr>
                    									  
                    									 
                    									
                    									</tr>
            								        </thead>
            								        <tbody>
            								    	@foreach ($monitoring_kabkot_tahun as $businesses)
            									    	<tr >
                                                            <td>{{($businesses->idkab) }}</a></td>
                											<td width="50%">
                    											<div class="progress progress-striped active">             
                    											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{($businesses->progres)/($businesses->total)*100 }}%">
                                                                <span  style="color:black "> {{$businesses->progres}}</span>
                                                                </div>        </div>
                										
                											</td>
            										    </tr>
            									    @endforeach
            							    	</tbody>
            							        </table>  

			</div>



		</div>


		</div>
	</div>	




	@endif

    

	@endsection                  