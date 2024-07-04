<!doctype html>
<html lang="en">

<head>
	<title>Rekomendasi | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/paneltab.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
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
						<li><a href="lihat_dda" class=""><i class="lnr lnr-chart-bars"></i> <span>Data</span></a></li>
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
						<li><a href="modul" class=""><i class="lnr lnr-book"></i> <span>Modul Pembelajaran</span></a></li>
						<li><a href="lihat_rekomendasi" class="active"><i class="lnr lnr-file-empty"></i> <span>Rekomendasi</span></a></li>
						<li><a href="konsultasi" class=""><i class="lnr lnr-bubble"></i> <span>Konsultasi</span></a></li>
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
							<li class="active">
								<a  href="#1a" data-toggle="tab">Panduan Rekomendasi</a>
							</li>
							<li><a href="#2a" data-toggle="tab">Daftar Rekomendasi</a>
							</li>
											
										</ul>
									
				<div class="tab-content clearfix">
						<div class="tab-pane active" id="1a">
						    <div class="container-fluid">
					<!-- OVERVIEW -->
						<div class="panel-body">
           	                
           	                <section id="hero" class="d-flex align-items-center">
           	                <div class="row">
								<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                    <hr><h1 style="font-weight: 700; color: #006fcc;">Instansi Anda akan Melakukan Kegiatan Survei/Kompilasi Produk Administrasi?</h1>
                                    <h3>Konsultasikan kegiatan survei/Kompilasi Produk Administrasi Anda, Kemudian Rekomendasikan ke BPS. Gratis Tanpa Repot!</h3><br>
                                    <h3>Bagaimana Caranya?</h3>
                                 <div class="d-flex">
                                
                                 </div>
                                </div>
                                
                                <div class="col-lg-2"><br></div>
                                
                                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                    <img class= "card-img img-fluid" src="{{asset('public/admin/assets/img/card0.svg')}}" class="img-fluid animated" alt="">
                                </div>
							</div>
							</section>
							
							<main id="main"><hr>
							
							<section id="mulai" class="d-flex align-items-center">
							    <div class="row">

                                <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2 d-flex flex-column justify-content-center">
                                    <img class= "card-img img-fluid" src="{{asset('public/admin/assets/img/card5.svg')}}" class="img-fluid animated" alt="">
                                </div>
                                
                                <div class="col-lg-2"><br></div>
                                
                                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                    <ol style="font-size: 28px; font-weight: 700; color: #006fcc;">
                                        <li><h4 style="padding: 0px 0px 8px 8px;">Tuangkan rancangan survei Anda melalui dokumen FS3 (Formulir Survei Statistik Sektoral) untuk survei atau melalui dokumen FPKPA (Formulir Pemberitahuan Kompilasi Produk Administrasi) untuk kompilasi produk administrasi</h4></li>
                                        <li><h4 style="padding: 0px 0px 8px 8px;">Konsultasikan rancangan survei atau kompilasi produk administrasi Anda ke BPS melalui menu Konsultasi, atau bisa dengan datang langsung ke kantor BPS atau melalui email BPS</h4></li>
                                        <li><h4 style="padding: 0px 0px 8px 8px;">Tunggu perbaikan rancangan survei dari BPS paling lambat 1 minggu dari rancangan diterima.</h4></li>
                                    </ol> 
                                 <div class="d-flex">
                                 <a  target="blank" href="{{ url('public/admin/assets/sample/Formulir_FS3.pdf') }}"><button type="button" class="btn btn-primary btn-lg" style="margin-left: 12px;">Unduh Dokumen FS3</button></a>
                                   <a  target="blank" href="{{ url('public/admin/assets/sample/Formulir_FP-KPA.pdf') }}"><button type="button" class="btn btn-primary btn-lg" style="margin-left: 12px;">Unduh Dokumen FPKPA</button></a>
                                 </div>
                                 <br>
                                 <div class="d-flex">
                                
                             <a  target="blank" href="{{ url('public/admin/assets/sample/Rekomendasi Kegiatan Statistik dalam Infografis.pdf') }}"><button type="button" class="btn btn-primary btn-lg" style="margin-left: 12px;">Unduh Panduan Rekomendasi</button></a>
                                 </div>
                                </div>
							</div>
							</section>
						
						</div>

					<!-- END OVERVIEW -->
			            </div>
					</div>

					<div class="tab-pane" id="2a">


		<table class="table table-striped display" id="example3" style="width:100%;">
                <thead>
                    <tr>
                        <th style="width: fit-content;" class="text-center"> No</th>
                        <th> Nama Kegiatan Statistik</th>
                        <th> Tahun</th>
                        <th> Dinas</th>
						<th> Surat Pengantar</th>
						<th> Form FS3/FPKPA</th>
						<th> File Pendukung </th>
						<th> Surat Rekomendasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekomendasis as $post)
                
                    <tr>
                        <td style="width: fit-content;" class="text-center">{{ ++$k }}</td>
                        <td>{{ $post->nama_kegiatan }}</td>
                        <td> {{ $post->tahun }} </td>
                        <td>{{ $post->dinas }}</td>
						
						
                        @if(is_null($post->surat_pengantar))
                        <td> </td>
                        @else
                        <td> <center> <a href="{{ url('public/documents/'. $post->surat_pengantar) }}" class="lnr lnr-download"></a> </center>
                        </td> @endif
                        
                        @if(is_null($post->formulir))
                        <td> </td>
                        @else
                        <td> <center> <a href="{{ url('public/documents/'. $post->formulir) }}" class="lnr lnr-download"></a> </center>
                        </td> @endif
                      
                      
                      
                       	 @if(is_null($post->instrumen))
                    <td>  </td>
                        @else
                      <td>  <center> <a href="{{ url('public/documents/'. $post->instrumen) }}" class="lnr lnr-download"></a> </center>  </td> 
                        @endif
                        
                        @if(is_null($post->rekomendasi))
                    <td>  </td>
                        @else
                      <td>  <center> <a href="{{ url('public/documents/'. $post->rekomendasi) }}" class="lnr lnr-download"></a> </center>  </td> 
                        @endif
                    </tr>
                
                    @endforeach
                </tbody>
    </table>
					
					
						
						</div>
					</div>
					<!-- END OVERVIEW -->
                        						
								
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
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example3').DataTable({

			});
		});
	</script>
	
	<script>
	    // Smooth scroll for the navigation menu and links with .scrollto classes
    $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;
        var scrolled = 20;

        if ($('#header').length) {
          scrollto -= $('#header').outerHeight()

          if (!$('#header').hasClass('header-scrolled')) {
            scrollto += scrolled;
          }
        }

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });
	</script>
	
</body>

</html>
