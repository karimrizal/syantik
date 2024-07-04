<!doctype html>
<html lang="en">
<head>
	<title>Metadata Variabel | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
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
					<a class="btn btn-primary" href="/syantik/login" title="Login" target="_blank"><i class="fa fa-rocket"></i> <span>Log In</span></a>
				</div>
			</div>
		</nav>
	    	<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/syantik/" class="a"><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="/syantik/lihat_dda" class=""><i class="lnr lnr-chart-bars"></i> <span>Data</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="active"><i class="lnr lnr-database"></i> <span>Metadata</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav nav">
									<li><a href="/syantik/view_metadata_kegiatan" class=""><i class="lnr lnr-database"></i>Metadata Kegiatan</a></li>
									<li><a href="/syantik/view_metadata_indikator" class=""><i class="lnr lnr-database"></i>Metadata Indikator</a></li>
									<li><a href="/syantik/view_metadata_variabel" class=""><i class="lnr lnr-database"></i>Metadata Variabel</a></li>
								</ul>
							</div>
						</li>
						<li><a href="/syantik/modul" class=""><i class="lnr lnr-book"></i> <span>Modul Pembelajaran</span></a></li>
						<li><a href="/syantik/lihat_rekomendasi" class=""><i class="lnr lnr-file-empty"></i> <span>Rekomendasi</span></a></li>
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
				<div class="container-fluid">
					<!-- DAFTAR METADATA -->
					<div class="panel panel-headline">
						<div class="panel-heading">
						    <p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
							<h3 class="panel-title">
                                @foreach ($data->slice(0, 1) as $result)
                                {{ $result->var_b1k2 }}
                                <br><br><a href="{{ url('/export_variabel/' . $result->id) }}" class="btn btn-sm">Download</a>
                                @endforeach
                            </h3>
						</div>
						
						<div class="panel-body">
                            @foreach ($data->slice(0, 1) as $result)
                            <h4 style="font-weight:700; ">Konsep Variabel</h4>
                            {{ $result->var_b1k4 }}<hr>
                            <h4 style="font-weight:700; ">Definisi Variabel</h4>
                            {{ $result->var_b1k5 }}<hr>
                            <h4 style="font-weight:700; ">Referensi Pemilihan</h4>
                            {{ $result->var_b1k6 }}<hr>
                            <h4 style="font-weight:700; ">Referensi Waktu</h4>
                            {{ $result->var_b1k7 }}<hr>
                            <h4 style="font-weight:700; ">Tipe Data</h4>
                            {{ $result->var_b1k8 }}<hr>
                            <h4 style="font-weight:700; ">Klasifikasi Isian</h4>
                            {{ $result->var_b1k9 }}<hr>
                            <h4 style="font-weight:700; ">Aturan Validasi</h4>
                            {{ $result->var_b1k10 }}<hr>
                            <h4 style="font-weight:700; ">Kalimat Pertanyaan</h4>
                            {{ $result->var_b1k11 }}<hr>
                            <h4 style="font-weight:700; ">Dapat Diakses Umum</h4>
                            {{ $result->var_b1k12 }}<hr>
                            @endforeach
                            
                            <h4 style="font-weight:700; ">Variabel ini membentuk Indikator:</h4>
                            @foreach ($data2 as $kolom)
                            
										<li><a  href="{{ url('indikator/' . $kolom->ind_b1k2) }}"> {{ $kolom->ind_b1k2 }}
										</a></li> @endforeach  
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
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</body>
</html>
