<!doctype html>
<html lang="en">
<head>
	<title>Syantik</title>
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
					<a class="btn btn-success update-pro" href="{{ route('logout') }}" title="Upgrade to Pro"><i class="fa fa-rocket"></i> <span>Log Out</span></a>
				</div>
			</div>
		</nav>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
			<nav>
					<ul class="nav">
						
						<li><a href="home" class=""><i class="lnr lnr-code"></i> <span>Input Data</span></a></li>
                      
                        <li><a href="bahan" class=""><i class="lnr lnr-code"></i> <span>Kelola Bahan Ajar</span></a></li>
                        
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-book"></i><span>Metadata</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages" class="collapse" aria-expanded="false" style="">
								<ul class="nav">
									<li><a href="metadata_kegiatan" class="">Metadata Kegiatan</a></li>
									<li><a href="metadata_indikator" class="">Metadata Indikator</a></li>
									<li><a href="metadata_indikator" class="">Metadata indikator</a></li>
								</ul>
							</div>
						</li>
						
						<li><a href="rekomendasi" class=""><i class="lnr lnr-code"></i> <span>Kelola Rekomendasi</span></a></li>
						
						 <li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-book"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse" aria-expanded="false" style="">
								<ul class="nav">
									<li><a href="verifikasi_rekomendasi" class="">Verifikasi Rekomendasi</a></li>
									<li><a href="verifikasi_data" class="">Verifikasi Data</a></li>
									<li><a href="verifikasi_indikator" class="">Verifikasi indikator</a></li>
								</ul>
							</div>
						</li>
					
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
							<h3 class="panel-title">Edit Metadata Indikator</h3>
						</div>
						<div class="panel-body">
							<form action="{{ url('https://webapps.bps.go.id/sultra/syantik/edit_metadata_indikator') }}" method="POST">
								@csrf
								@foreach ($data as $result)
								<input type="hidden" name="id" value="{{ $result->id }}">
								<div class="form-group">
									<label for="ind_b1k2">Nama Indikator</label>
									<input type="text" class="form-control" name="ind_b1k2" value="{{ $result->ind_b1k2 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k3">Konsep</label>
									<input type="text" class="form-control" name="ind_b1k3" value="{{ $result->ind_b1k3 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k4">Definisi</label>
									<input type="text" class="form-control" name="ind_b1k4" value="{{ $result->ind_b1k4 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k5">Interpretasi</label>
									<input type="text" class="form-control" name="ind_b1k5" value="{{ $result->ind_b1k5 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k6">Metode/Rumus Penghitungan</label>
									<input type="text" class="form-control" name="ind_b1k6" value="{{ $result->ind_b1k6 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k7">Ukuran</label>
									<input type="text" class="form-control" name="ind_b1k7" value="{{ $result->ind_b1k7 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k8">Satuan</label>
									<input type="text" class="form-control" name="ind_b1k8" value="{{ $result->ind_b1k8 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k9">Klasifikasi Penyajian</label>
									<input type="text" class="form-control" name="ind_b1k9" value="{{ $result->ind_b1k9 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k10">Apakah Merupakan Indikator Komposit</label>
									<input type="text" class="form-control" name="ind_b1k10" value="{{ $result->ind_b1k10 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k11">Jika Merupakan Indikator Komposit, Publikasi Ketersediaan:</label>
									<input type="text" class="form-control" name="ind_b1k11" value="{{ $result->ind_b1k11 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k12">Jika Merupakan Indikator Komposit, Nama Indikator Pembangun:</label>
									<input type="text" class="form-control" name="ind_b1k12" value="{{ $result->ind_b1k12 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k13">Jika Bukan Merupakan Indikator Komposit, Kegiatan Penghasil:</label>
									<input type="text" class="form-control" name="ind_b1k13" value="{{ $result->ind_b1k13 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k14">Jika Bukan Merupakan Indikator Komposit, Kode Kediatan:</label>
									<input type="text" class="form-control" name="ind_b1k14" value="{{ $result->ind_b1k14 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k15">Jika Bukan Merupakan Indikator Komposit, Nama Variabel Pembangun:</label>
									<input type="text" class="form-control" name="ind_b1k15" value="{{ $result->ind_b1k15 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k16">Level Estimasi</label>
									<input type="text" class="form-control" name="ind_b1k16" value="{{ $result->ind_b1k16 }}" >
								</div>
								<div class="form-group">
									<label for="ind_b1k17">Apakah Indikator Dapat Diakses Umum</label>
									<input type="text" class="form-control" name="ind_b1k17" value="{{ $result->ind_b1k17 }}" >
								</div>
								<button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/metadata_indikator') }}'" type="button" class="btn btn-danger float-left">Kembali</button>
								<button type="submit" class="btn btn-primary float-right">Kirim</button>
								@endforeach
							</form>
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
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need hello hello</a>. All Rights Reserved.</p>
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
		});
	</script>
</body>
</html>
