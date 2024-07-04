<!doctype html>
<html lang="en">
<head>
	<title>Data | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/admin/assets/img/favicon.png')}}">
		<!-- DATATABLES -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/syantik/" style="font-size: 12px;"><img src="{{asset('public/admin/assets/img/logo-dark.svg')}}" alt="Syantik Logo" class="img-responsive logo"><span>Sistem Informasi Layanan Statistik</span></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-chevron-left-circle"></i></button>
				</div>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-primary" href="login" title="Login" target="_blank"><i class="fa fa-rocket"></i> <span>Log In</span></a>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/syantik/" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="lihat_dda" class=""><i class="lnr lnr-chart-bars"></i> <span>Data DDA</span></a></li>
						<li><a href="/syantik/lihat_data" class="active"><i class="lnr lnr-chart-bars"></i> <span>Data</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Metadata</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav nav">
									<li><a href="/syantik/view_metadata_kegiatan" class=""><i class="lnr lnr-database"></i>Metadata Kegiatan</a></li>
									<li><a href="/syantik/view_metadata_indikator" class=""><i class="lnr lnr-database"></i>Metadata Indikator</a></li>
									<li><a href="/syantik/view_metadata_variabel" class=""><i class="lnr lnr-database"></i>Metadata Variabel</a></li>
								</ul>
							</div>
						</li>
						<li><a href="/syantik/modul" class=""><i class="lnr lnr-book"></i> <span>Modul Pembelajaran</span></a></li>
						<li><a href="lihat_rekomendasi" class=""><i class="lnr lnr-file-empty"></i> <span>Rekomendasi</span></a></li>
						<li><a href="/syantik/konsultasi" class=""><i class="lnr lnr-bubble"></i> <span>Konsultasi</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
		


							<div class="row">
									<div id="belajar" class="panel-body">	
										<ul  class="nav nav-pills">
												<li class="{{request()->is('lihat_data') ? 'active' : null }}">
												<a class="nav-link {{request()->is('lihat_data') ? 'active' : null }}" href="{{url('lihat_data')}}" role="tab">Data</a>
												</li>
												<li class="{{request()->is('daftar_arc2') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('daftar_arc2') ? 'active' : null }}" href="{{url('daftar_arc2')}}"  role="tab">ARC</a>
												</li>
										
											
										</ul>
									
											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('lihat_data') ? 'active' : null }}" id="{{url('lihat_data')}}" role="tabpanel">
													  <div class="container-fluid">
					<!-- OVERVIEW -->
				<div class="panel panel-headline">
							<div class="panel-body">
							    <h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Data Strategis Provinsi Sulawesi Tenggara</h3><hr>	
								    
								<table id="example" class="table display" style="width: 100%;">
								<thead>
									<tr>
										<th>No.</th>
										<th>Data Statistik Sektoral</th>
										<th>Produsen Data</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($tables as $index => $businesses)
										<tr id="kd=dataid{{ $businesses->tabel_id }}">
										    <td class="text-center">{{++$index}}</td>
											<td><a href="{{ url('business/' . $businesses->tabel_id) }}">{{($businesses->tabel_id) }}, {{($businesses->tahun) }}</a></td>
											<td>{{($businesses->sumber) }}</a></td>
										</tr>
									@endforeach
								</tbody>
							    </table>
                       
						
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
													</div>


										<div class="tab-pane {{request()->is('daftar_arc2') ? 'active' : null }}" id="{{url('daftar_arc2')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar ARC</h3>
					
						</div>
						<div class="panel-body">

					    <table class="table table-bordered" id="example4">
                <thead>
                    <tr>
                        <th rowspan="2"> Organisasi</th>
                        <th rowspan="2"> Data</th>
                        <th colspan="12"><center>Bulan</center></th>
                    </tr>
            
                    
                    <tr>
                        
                        <td>1</td>
					    <td>2</td>
                       <td>3</td>
					    <td>4</td>
					    <td>5</td>
					    <td>6</td>
                       <td>7</td>
					    <td>8</td>
					    <td>9</td>
					    <td>10</td>
                       <td>11</td>
					    <td>12</td>
                    </tr>
                    
                  </thead>  
            
                   
                    <tr>
                    
                    @foreach ($arcs as $post)
                    <td>{{ $post->organisasi }}</td>
                         <td>{{ $post->nama_data }} di {{ $post->wilayah }} Tahun {{ $post->tahun }} </td>
                         
                       @if( substr($post->tanggal_rilis ,5,-3) == '01') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
			           @if( substr($post->tanggal_rilis ,5,-3) == '02') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '03') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '04') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
			           @if( substr($post->tanggal_rilis ,5,-3) == '05') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '06') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '07') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
			           @if( substr($post->tanggal_rilis ,5,-3) == '08') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '09') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '10') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
			           @if( substr($post->tanggal_rilis ,5,-3) == '11') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
					   @if( substr($post->tanggal_rilis ,5,-3) == '12') <td><a href="{{ url('business/' . $post->nama_data) }}">{{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                    </tr>
                    @endforeach
    </table>
					
					
					

						
						</div>
					</div>
					<!-- END OVERVIEW -->
													</div>
													
											</div>
									</div>							
								
								</div>




				
			
				
					
				
				
					
					

					
					
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">2021 © <a href="https://sultra.bps.go.id">BPS Provinsi Sulawesi Tenggara</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true
			});
			
				$('#example4').DataTable({
			
			});
		});
	</script>

	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
	<script>
		$(document).ready(function() {
 		 $("#satuData").on("slide.bs.carousel", function(e) {
   		 var $e = $(e.relatedTarget);
    		var idx = $e.index();
    		var itemsPerSlide = 4;
    		var totalItems = $(".carousel-item").length;

    	if (idx >= totalItems - (itemsPerSlide - 1)) {
     		var it = itemsPerSlide - (totalItems - idx);
     	for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});
	</script>
	<script>
		$(function(){
    	 $('#show').on('click',function(){        
   	     $('.card-reveal').slideToggle('slow');
    });
    
    $('.card-reveal .close').on('click',function(){
        $('.card-reveal').slideToggle('slow');
    });
});
	</script>
</body>

</html>
