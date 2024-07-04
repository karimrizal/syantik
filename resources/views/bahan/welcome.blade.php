<!doctype html>
<html lang="en">
<head>
	<title>Beranda | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/carousel.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/admin/assets/img/favicon.png')}}">
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
					    
					    <a  href="/syantik/konsultasi" title="Konsultasi" target="_blank"> <span style="font-size:20px;">Konsultasi</span></a>
				 &nbsp &nbsp &nbsp
					    <a  href="https://romantik.bps.go.id/" title="Ajukan Rekomendasi" target="_blank"> <span style="font-size:20px;">Ajukan Rekomendasi</span></a>
				 &nbsp &nbsp &nbsp
					    <a  href="/syantik/modul" title="Modul Pembelajaran" target="_blank"> <spa style="font-size:20px;"n>Modul Pembelajaran</span></a>
				 &nbsp &nbsp &nbsp
						<a  href="/syantik/login" title="Login" target="_blank"> <span style="font-size:20px;">Log In</span> <i class="fa fa-sign-in"></i></a>
				
				</div> 
				
			
			
		
				
					<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<ul class="dropdown-menu">
						    
								<li><a href="{{ route('logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
						<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					    
					    	@foreach ($opd as $businesses)
						  
							
										   <li><a href="{{ url('data_opd/' . $businesses->nama_opd) }}">{{($businesses->nama_opd) }}</a></li>
									
									@endforeach
					    
				
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

						<div class="panel panel-headline">
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-video img-fluid"></div>
											<div class="embed-responsive embed-responsive-16by9" style="border-radius: 15px;">
           										 <iframe width="280" height="157" src="https://www.youtube.com/embed/XuovTBMVpMU?autoplay=1" frameborder="0" allowfullscreen></iframe>
											</div>
											</div>
										</div>
										<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h4 class="card-title" style="font-size: 24px;">Apa itu Syantik?</h4><br/>
												<p class="card-text" style="text-align: justify;">Syantik merupakan aplikasi berbasis web yang dibangun dalam rangka mempermudah koordinasi implementasi Satu data Indonesia di Provinsi Sulawesi tenggara.
													<br/><br/><p class="card-text" style="text-align: justify;">Melalui menu <a href="modul"><b>Modul Pembelajaran</b></a> yang dikemas dalam bentuk video maupun tertulis, OPD dapat mempelajari dasar-dasar ilmu statistik praktis yang dapat diaplikasikan pada kegiatan statistik OPD.</p>
													<br/><p class="card-text" style="text-align: justify;">Dengan fitur <a href="rekomendasi"><b>Rekomendasi</b></a>, aplikasi Syantik akan memfasilitasi OPD dalam mengajukan rancangan kegiatan statistik yang akan mereka lakukan. </p>
													<br/><p class="card-text" style="text-align: justify;">Selain itu, sistem ini juga dilengkapi dengan integrasi data statistik sektoral bagi semua OPD secara terpadu, di mana data yang disajikan dilengkapi dengan informasi metadata sesuai dengan Prinsip Satu Data Indonesia.</p>
												</p>
											</div>
										</div>
									    </div>
									</div>
									<hr>
									<div id="satuData" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner row w-100 mx-auto">
										  <div class="carousel-item col-sm-3 active">
											<div class="card">
												<a href="https://drive.google.com/file/d/1SP3vTDD148LGEwoQkOUvFUoW51emOKqo/view?usp=sharing" target="_blank"><img class="card-img-top img-fluid" src="{{asset('public/admin/assets/img/card1.svg')}}" alt="Card image cap"></a>
											  <div class="card-body">
												<h4 class="card-title"  style="padding-bottom: 5px;">Peraturan Presiden No. 39 Tahun 2019 Tentang Satu Data Indonesia</h4>
												<a href="https://drive.google.com/file/d/1SP3vTDD148LGEwoQkOUvFUoW51emOKqo/view?usp=sharing" target="_blank"><button type="button" class="btn btn-primary" style="font-size: 16px; border-radius: 5px;">Unduh PDF</button></a>
											  </div>
											</div>
										  </div>
										  <div class="carousel-item col-sm-3">
											<div class="card">
												<a href="https://drive.google.com/file/d/12ExFHH5ZBBJkwLkmJiQZd8muNvsMQTwk/view?usp=sharing" target="_blank"><img class="card-img-top img-fluid" src="{{asset('public/admin/assets/img/card2.svg')}}" alt="Card image cap"></a>
											  <div class="card-body">
												<h4 class="card-title"  style="padding-bottom: 5px;">Peraturan Gubernur Sulawesi Tenggara No. 10 Tahun 2021 Tentang Satu Data Provinsi Sulawesi Tenggara</h4>
												<a href="https://drive.google.com/file/d/12ExFHH5ZBBJkwLkmJiQZd8muNvsMQTwk/view?usp=sharing" target="_blank"><button type="button" class="btn btn-primary" style="font-size: 16px; border-radius: 5px;">Unduh PDF</button></a>
											  </div>
											</div>
										  </div>
										  <div class="carousel-item col-sm-3">
											<div class="card">
												<a href="https://drive.google.com/file/d/1ae3JC33alGuIlTGZBzLpCY_D2Vafo5xW/view?usp=sharing" target="_blank"><img class="card-img-top img-fluid" src="{{asset('public/admin/assets/img/card3.svg')}}" alt="Card image cap"></a>
											  <div class="card-body">
												<h4 class="card-title"  style="padding-bottom: 5px;">Peraturan Pemerintah No. 51 Tahun 1999 Tentang Penyelenggaraan Statistik</h4>
												<a href="https://drive.google.com/file/d/1ae3JC33alGuIlTGZBzLpCY_D2Vafo5xW/view?usp=sharing" target="_blank"><button type="button" class="btn btn-primary" style="font-size: 16px; border-radius: 5px;">Unduh PDF</button></a>
											  </div>
											</div>
										  </div>
										  <div class="carousel-item col-sm-3">
											<div class="card">
												<a href="https://drive.google.com/file/d/1wIJFLGBwLiX01pz28haubSDYmJJK9s1I/view?usp=sharing" target="_blank"><img class="card-img-top img-fluid" src="{{asset('public/admin/assets/img/card4.svg')}}" alt="Card image cap"></a>
											  <div class="card-body">
												<h4 class="card-title"  style="padding-bottom: 5px;">Undang-Undang No. 16 Tahun 1997 Tentang Statistik</h4>
												<a href="https://drive.google.com/file/d/1wIJFLGBwLiX01pz28haubSDYmJJK9s1I/view?usp=sharing" target="_blank"><button type="button" class="btn btn-primary" style="font-size: 16px; border-radius: 5px;">Unduh PDF</button></a>
											  </div>
											</div>
										  </div>
										 
										<a class="carousel-control-prev" href="#satuData" role="button" data-slide="prev">
										  <span class="carousel-control-prev-icon" style="background-image: url({{URL('/')}}/public/img/prev.svg);" aria-hidden="true"></span>
										  <span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#satuData" role="button" data-slide="next">
										  <span class="carousel-control-next-icon" style="background-image: url({{URL('/')}}/public/img/next.svg);" href="{{asset('public/admin/assets/img/apple-icon.png')}}" aria-hidden="true"></span>
										  <span class="sr-only">Next</span>
										</a>
										
									  </div>
								</div>
								<div class="row">
									<div class="col-md-12">
										
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
				<p class="copyright">2021 © <a href="https://sultra.bps.go.id">BPS Provinsi Sulawesi Tenggara</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/carousel.js')}}"></script>


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
