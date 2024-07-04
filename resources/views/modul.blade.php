@extends('front-end/layouts/main')

@section('container')
                      
                
<div class="card mb-4">

<div class="card-header"></div>

    <div class="card-body">
                                
							<ul  class="nav nav-pills">
												<li class="{{request()->is('modul') ? 'active' : null }}">
												<a class="nav-link {{request()->is('modul') ? 'active' : null }}" href="{{url('modul')}}" role="tab">Video</a>
												</li>
												<li class="{{request()->is('modul_pdf') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('modul_pdf') ? 'active' : null }}" href="{{url('modul_pdf')}}"  role="tab">eBook</a>
												</li>
												
												<li class="{{request()->is('modul_slide') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('modul_slide') ? 'active' : null }}" href="{{url('modul_slide')}}"  role="tab">Slide</a>
												</li>
												<li class="{{request()->is('modul_juknis') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('modul_juknis') ? 'active' : null }}" href="{{url('modul_juknis')}}"  role="tab">Juknis</a>
												</li>
												<li class="{{request()->is('modul_glosarium') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('modul_glosarium') ? 'active' : null }}" href="{{url('modul_glosarium')}}" role="tab">Glosarium Statistik</a>
												</li>						
							</ul>
							<hr>

											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('modul') ? 'active' : null }}" id="{{url('modul')}}" role="tabpanel">
	                                                
	                                                <div class="col-md-6"><p class="page-title text-left" style="font-size: 14px; font-weight: 600;"> <br><a href="/syantik/modul"><i class="fas fa-sync"></i> Tampilkan Semua Video</a></p>
										            <h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Cari Materi</h3>
										            <form class="input-group" action="/syantik/modul" method="GET">
										        	<input class="form-control" name="cari" value="{{ old('cari') }}" type="text" placeholder="Materi video apa yang ingin Anda cari?"><span class="input-group-btn" href="data-search.html"><button class="btn btn-primary" type="submit" value="CARI">Cari</button></span>
									            	</form><hr>
								                	</div>
								                	
													<div class="carousel-inner row w-100 mx-auto">

														@foreach ($videos as $video)
															<div class="card col-sm-4" style="margin-top:10px;">
																<div class="card" style="margin-bottom:20px;">
																	<div class="card-video img-fluid">
																		<div class="ratio ratio-16x9" >
           										 							<iframe  src="{{($video->link_video) }}" frameborder="0" allowfullscreen></iframe>
																		</div>
																	</div>
																<div class="card-body">
																		<h4 class="card-title"><a target="_blank" href="{{($video->link_video) }}">{{($video->nama_video) }}</a></h4>
															    </div>
																</div>
															</div>
														@endforeach
															
													</div>
											</div>


											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('modul_pdf') ? 'active' : null }}" id="{{url('modul_pdf')}}" role="tabpanel">
	                                                
	                                                <div class="col-md-6"><p class="page-title text-left" style="font-size: 14px; font-weight: 600;"> <br><a href="/syantik/modul_pdf"><i class="fas fa-sync"></i> Tampilkan Semua PDF</a></p>
										            <h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Cari Materi</h3>
										            <form class="input-group" action="/syantik/modul_pdf" method="GET">
										        	<input class="form-control" name="caripdf" value="{{ old('caripdf') }}" type="text" placeholder="Materi PDF apa yang ingin Anda cari?"><span class="input-group-btn" href="data-search.html"><button class="btn btn-primary" type="submit" value="caripdf">Cari</button></span>
									            	</form><hr>
								                	</div>
								                	
													<div class="carousel-inner row w-100 mx-auto">

														@foreach ($pdfs as $pdf)
															<div class="card col-sm-4" style="margin-top:10px;">
																<div class="card" style="margin-bottom:20px;">
																	<div class="card-video img-fluid">
																		<div class="ratio ratio-16x9" >
           										 							<iframe  src="{{($pdf->link_pdf) }}" frameborder="0" allowfullscreen></iframe>
																		</div>
																	</div>
																<div class="card-body">
																		<h4 class="card-title"><a target="_blank" href="{{($pdf->link_pdf) }}">{{($pdf->nama_pdf) }}</a></h4>
															    </div>
																</div>
															</div>
														@endforeach
															
													</div>
											</div>

											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('modul_slide') ? 'active' : null }}" id="{{url('modul_slide')}}" role="tabpanel">
	                                                
	                                                <div class="col-md-6"><p class="page-title text-left" style="font-size: 14px; font-weight: 600;"> <br><a href="/syantik/modul_slide"><i class="fas fa-sync"></i> Tampilkan Semua Slide</a></p>
										            <h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Cari Materi</h3>
										            <form class="input-group" action="/syantik/modul_slide" method="GET">
										        	<input class="form-control" name="carislide" value="{{ old('carislide') }}" type="text" placeholder="Slide apa yang ingin Anda cari?"><span class="input-group-btn" href="data-search.html"><button class="btn btn-primary" type="submit" value="carislide">Cari</button></span>
									            	</form><hr>
								                	</div>
								                	
													<div class="carousel-inner row w-100 mx-auto">

														@foreach ($slides as $pdf)
															<div class="card col-sm-4" style="margin-top:10px;">
																<div class="card" style="margin-bottom:20px;">
																	<div class="card-video img-fluid">
																		<div class="ratio ratio-16x9" >
           										 							<iframe  src="{{($pdf->link_slide) }}" frameborder="0" allowfullscreen></iframe>
																		</div>
																	</div>
																<div class="card-body">
																		<h4 class="card-title"><a target="_blank" href="{{($pdf->link_slide) }}">{{($pdf->nama_slide) }}</a></h4>
															    </div>
																</div>
															</div>
														@endforeach
															
													</div>
											</div>

											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('modul_juknis') ? 'active' : null }}" id="{{url('modul_juknis')}}" role="tabpanel">
	                                                
	                                                <div class="col-md-6"><p class="page-title text-left" style="font-size: 14px; font-weight: 600;"> <br><a href="/syantik/modul_juknis"><i class="fas fa-sync"></i> Tampilkan Semua Juknis</a></p>
										            <h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Cari Materi</h3>
										            <form class="input-group" action="/syantik/modul_juknis" method="GET">
										        	<input class="form-control" name="carijuknis" value="{{ old('carijuknis') }}" type="text" placeholder="Juknis apa yang ingin Anda cari?"><span class="input-group-btn" href="data-search.html"><button class="btn btn-primary" type="submit" value="carijuknis">Cari</button></span>
									            	</form><hr>
								                	</div>
								                	
													<div class="carousel-inner row w-100 mx-auto">

														@foreach ($juknis as $pdf)
															<div class="card col-sm-4" style="margin-top:10px;">
																<div class="card" style="margin-bottom:20px;">
																	<div class="card-video img-fluid">
																		<div class="ratio ratio-16x9" >
           										 							<iframe  src="{{($pdf->link_juknis) }}" frameborder="0" allowfullscreen></iframe>
																		</div>
																	</div>
																<div class="card-body">
																		<h4 class="card-title"><a target="_blank" href="{{($pdf->link_juknis) }}">{{($pdf->nama_juknis) }}</a></h4>
															    </div>
																</div>
															</div>
														@endforeach
															
													</div>
											</div>



											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('modul_glosarium') ? 'active' : null }}" id="{{url('modul_glosarium')}}" role="tabpanel">
	                                                
	                                            
								                	
													<div class="card">

													<table id="datatablesSimple" class="table table-striped display">
														<thead>
															<tr >
																<th>Nama</th>
																<th>Penjelasan</th>
															
															</tr>
														</thead>
														<tbody>
															@foreach ($list as $result)
																<tr>
																	<td>{{ $result->name }}</td>
																	<td>{{ $result->detail }}</td>
																	
																</tr>
															@endforeach
														</tbody>
													</table>						
															
													</div>
											</div>




    </div>
</div>
	@endsection 
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {

		
		$('#example').DataTable({
			
		});
	});
</script>				
	