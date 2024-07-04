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
						    <p class="page-title text-left"><a href="/syantik/verifikasi_variabel"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
							<h3 class="panel-title">Verifikasi Metadata Variabel</h3>
						</div>
						<div class="panel-body">
							<form action="{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_variabel_opd') }}" method="POST">
								@csrf
								@foreach ($data as $result)
								<input type="hidden" id="id" name="id" value="{{ $result->id }}">
								<input type="hidden" id="petugas_opd" name="petugas_opd" value="{{Auth::user()->name}}">
								<div class="form-group">
									<label for="var_b1k2">Nama Variabel</label>
									<input type="text" class="form-control" id="var_b1k2" value="{{ $result->var_b1k2 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k3">Alias</label>
									<input type="text" class="form-control" id="var_b1k3" value="{{ $result->var_b1k3 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k4">Konsep</label>
									<input type="text" class="form-control" id="var_b1k4" value="{{ $result->var_b1k4 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k5">Definisi</label>
									<input type="text" class="form-control" id="var_b1k5" value="{{ $result->var_b1k5 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k6">Referensi Pemilihan</label>
									<input type="text" class="form-control" id="var_b1k6" value="{{ $result->var_b1k6 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k7">Referensi Waktu</label>
									<input type="text" class="form-control" id="var_b1k7" value="{{ $result->var_b1k7 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k8">Tipe Data</label>
									<input type="text" class="form-control" id="var_b1k8" value="{{ $result->var_b1k8 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k9">Klasifikasi Isian</label>
									<input type="text" class="form-control" id="var_b1k9" value="{{ $result->var_b1k9 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k10">Aturan Validasi</label>
									<input type="text" class="form-control" id="var_b1k10" value="{{ $result->var_b1k10 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k11">Kalimat Pertanyaan</label>
									<input type="text" class="form-control" id="var_b1k11" value="{{ $result->var_b1k11 }}" readonly/>
								</div>
								<div class="form-group">
									<label for="var_b1k12">Apakah Variabel Dapat Diakses Umum</label>
									<input type="text" class="form-control" id="var_b1k12" value="{{ $result->var_b1k12 }}" readonly/>
								</div>
							
								<div class="form-group">
									<label for="">Apakah metadata akan ditampilkan?</label><br>
									<input type="radio" name="status_opd" id="status_opd" value="Tampil" required>
									<label for="tampil">Tampil</label><br>
									<input type="radio" name="status_opd" id="status_opd" value="Tidak Tampil" required>
									<label for="tidak_tampil">Tidak Tampil</label>
								</div>
								<div class="form-group">
									<label for="alasan_tampil">Alasan jika tidak tampil</label>
									<input class="form-control" type="text" name="alasan_tampil_opd" id="alasan_tampil_opd" value="{{ $result->alasan_tampil_opd }}" />
								</div>
								<button onclick="window.location='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_variabel') }}'" type="button" class="btn btn-danger float-left">Kembali</button>
								<button type="submit" class="btn btn-primary float-right">Kirim</button>
							</form>
							@endforeach
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
