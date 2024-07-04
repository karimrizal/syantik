@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
				<form >
					<select  type="hidden" name="tahun">
					
					<option value>Pilih Tahun</option>
								
			
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
								</select>
					
								
							<input type="submit" value="Pilih">
                </form >
                          <br>  
					@if($year == '2020')
				<center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Tahun 2020</h3> <br>     </center>
				@elseif($year == '2021') <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Tahun 2021</h3> <br>     </center>
				@elseif($year == '2022') <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Tahun 2022</h3> <br>     </center>
				@elseif($year == '2023') <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Tahun 2023</h3> <br>     </center>
				@else @endif


				@if( (Auth::user()->role == 'Admin BPS') || (Auth::user()->role == 'Admin BPS Kabupaten') || (Auth::user()->role == 'Sekretariat Forum'))        
         
         
		 <table class="table table-bordered" id="datatablesSimple"  style="width: 100%;">
								 <thead>
									 <tr>
									   
										 <th>Kode</th>
										 <th>Judul Tabel</th>
										 <th>Instansi</th>
										 <th>Progress</th>
										 <th>Status</th>
									 </tr>
								 </thead>
								 <tbody>
									 @foreach ($master_tabel as $businesses)
										 <tr >
										   
											<td>{{($businesses->kode) }}</a></td>
											 <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
											 <td>{{($businesses->dinas) }}</a></td>
											 <td>
												 @if( ($businesses->status) == '0')
												 
											  <div class="progress progress-striped active">             
											   <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
												<span  style=" color: #ff0000;"> <center>0% </center> </span>
												</div>        </div>
																						@else
																						<div class="progress progress-striped active">             
																						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
												100%
												</div>        </div>
											  @endif
											  </td>
											  @if( ($businesses->setuju_opd) == '0')
											  <td>Belum disetujui Admin OPD</td>
											  @elseif( ($businesses->setuju_opd) == '1' && ($businesses->setuju_bps) == '0')
											  <td>Sudah disetujui Admin OPD</td>
											  @elseif( ($businesses->setuju_bps) == '1')
											  <td>Sudah disetujui Admin BPS</td>
											  @else @endif
										 </tr>
									 @endforeach
								 </tbody>
								 </table>                    
		  @else
		  
		  	<table class="table table-bordered" id="example"  style="width: 100%;">
								 <thead>
									 <tr>
									   
										 <th>Kode</th>
										 <th>Judul Tabel</th>
										 <th>Instansi</th>
										 <th>Progress</th>
										 <th>Status</th>
									 </tr>
								 </thead>
								 <tbody>
																	@foreach ($master_tabel_opd as $businesses)
																		<tr >
																		
																			<td>{{($businesses->kode) }}</a></td>
																			<td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
																			<td>{{($businesses->dinas) }}</a></td>
																			<td>
																				@if( ($businesses->status) == '0')
																				
																			<div class="progress progress-striped active">             
																			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
									<span  style=" color: #ff0000;"> <center>0% </center> </span>
									</div>        </div>
																			@else
																			<div class="progress progress-striped active">             
																			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
									100%
									</div>        </div>
																			@endif
																			</td>
																			@if( ($businesses->setuju_opd) == '0')
																			<td>Belum disetujui Admin OPD</td>
																			@elseif( ($businesses->setuju_opd) == '1' && ($businesses->setuju_bps) == '0')
																			<td>Sudah disetujui Admin OPD</td>
																			@elseif( ($businesses->setuju_bps) == '1')
																			<td>Sudah disetujui Admin BPS</td>
																			@else @endif
																		</tr>
																	@endforeach
								 </tbody>
								 </table>    
		  @endif
	

	</div>
	</div>






    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
	