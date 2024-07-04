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
						    <p class="page-title text-left"><a href="/syantik/verifikasi_kegiatan"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
							<h3 class="panel-title">Verifikasi Metadata Kegiatan</h3>
						</div>
						<div class="panel-body">
							<form action="{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_kegiatan') }}" method="POST">
								@csrf
								@foreach ($data as $result)
								<input type="hidden" id="id" name="id" value="{{ $result->id }}">
								<input type="hidden" id="user_verifikasi" name="user_verifikasi" value="{{Auth::user()->name}}">
								<div class="form-group">
									<h4 style="margin-top: 0px">Informasi Umum</h4><hr>
								</div>
								<div class="form-group">
									<label for="b0r1">Judul Kegiatan</label>
									<input type="text" class="form-control" id="b0r1" value="{{ $result->b0r1 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b0r2">Tahun</label>
									<input type="text" class="form-control" id="b0r2" value="{{ $result->b0r2 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b0r3">Kode Kegiatan</label>
									<input type="text" class="form-control" id="b0r3" value="{{ $result->b0r3 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b0r4">Cara Pengumpulan Data</label>
									<input type="text" class="form-control" id="b0r4" value="{{ $result->b0r4 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b0r5">Sektor Kegiatan</label>
									<input type="text" class="form-control" id="b0r5" value="{{ $result->b0r5 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b0r6">Apakah Mendapatkan Rekomendasi Statistik</label>
									<input type="text" class="form-control" id="b0r6" value="{{ $result->b0r6 }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok I. Penyelenggara</h4><hr>
								</div>
								<div class="form-group">
									<label for="b1r1">Instansi Penyelenggara</label>
									<input type="text" class="form-control" id="b1r1" value="{{ $result->b1r1 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b1r2a">Telepon</label>
									<input type="text" class="form-control" id="b1r2a" value="{{ $result->b1r2a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b1r2b">E-Mail</label>
									<input type="text" class="form-control" id="b1r2b" value="{{ $result->b1r2b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b1r2c">Faksimile</label>
									<input type="text" class="form-control" id="b1r2c" value="{{ $result->b1r2c }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok II. Penanggung Jawab</h4><hr>
								</div>
								<div class="form-group">
									<label for="b2r1a">Penanggung Jawab Eselon 1</label>
									<input type="text" class="form-control" id="b2r1a" value="{{ $result->b2r1a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r1b">Penanggung Jawab Eselon 2</label>
									<input type="text" class="form-control" id="b2r1b" value="{{ $result->b2r1b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r2a">Penanggung Jawab Eselon 3</label>
									<input type="text" class="form-control" id="b2r2a" value="{{ $result->b2r2a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r2b">Alamat</label>
									<input type="text" class="form-control" id="b2r2b" value="{{ $result->b2r2b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r2c">Telepon</label>
									<input type="text" class="form-control" id="b2r2c" value="{{ $result->b2r2c }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r2d">E-Mail</label>
									<input type="text" class="form-control" id="b2r2d" value="{{ $result->b2r2d }}" readonly >
								</div>
								<div class="form-group">
									<label for="b2r2e">Faksimile</label>
									<input type="text" class="form-control" id="b2r2e" value="{{ $result->b2r2e }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok III. Perencanaan dan Persiapan</h4><hr>
								</div>
								<div class="form-group">
									<label for="b3r1">Latar Belakang Kegiatan</label>
									<textarea class="form-control" id="b3r1" value="{{ $result->b3r1 }}" cols="30" rows="10" readonly>{{ $result->b3r1 }}</textarea>
								</div>
								<div class="form-group">
									<label for="b3r2">Tujuan Kegiatan</label>
									<textarea class="form-control" id="b3r2" value="{{ $result->b3r2 }}" cols="30" rows="3" readonly>{{ $result->b3r2 }}</textarea>
								</div>
								<div class="form-group">
									<label for="b3r3a_awal">Perencanaan Kegiatan (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3a_awal" value="{{ $result->b3r3a_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3a_akhir">Perencanaan Kegiatan (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3a_akhir" value="{{ $result->b3r3a_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3b_awal">Desain (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3b_awal" value="{{ $result->b3r3b_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3b_akhir">Desain (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3b_akhir" value="{{ $result->b3r3b_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3c_awal">Pengumpulan Data (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3c_awal" value="{{ $result->b3r3c_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3c_akhir">Pengumpulan Data (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3c_akhir" value="{{ $result->b3r3c_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3d_awal">Pengolahan Data (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3d_awal" value="{{ $result->b3r3d_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3d_akhir">Pengolahan Data (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3d_akhir" value="{{ $result->b3r3d_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3e_awal">Analisis (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3e_awal" value="{{ $result->b3r3e_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3e_akhir">Analisis (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3e_akhir" value="{{ $result->b3r3e_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3f_awal">Diseminasi Hasil (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3f_awal" value="{{ $result->b3r3f_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3f_akhir">Diseminasi Hasil (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3f_akhir" value="{{ $result->b3r3f_akhir }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3g_awal">Evaluasi (tanggal awal)</label>
									<input type="text" class="form-control" id="b3r3g_awal" value="{{ $result->b3r3g_awal }}" readonly >
								</div>
								<div class="form-group">
									<label for="b3r3g_akhir">Evaluasi (tanggal akhir)</label>
									<input type="text" class="form-control" id="b3r3g_akhir" value="{{ $result->b3r3g_akhir }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok IV. Desain Kegiatan</h4><hr>
								</div>
								<div class="form-group">
									<label for="b4r1">Kegiatan ini dilakukan</label>
									<input type="text" class="form-control" id="b4r1" value="{{ $result->b4r1 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r2">Jika "berulang", Frekuensi Penyelenggaraan</label>
									<input type="text" class="form-control" id="b4r2" value="{{ $result->b4r2 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r3">Tipe Pengumpulan Data</label>
									<input type="text" class="form-control" id="b4r3" value="{{ $result->b4r3 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r4">Cakupan Wilayah Pengumpulan Data</label>
									<input type="text" class="form-control" id="b4r4" value="{{ $result->b4r4 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r5">Jika "sebagian wilayah Indonesia", Wilayah Kegiatan</label>
									<input type="text" class="form-control" id="b4r5" value="{{ $result->b4r5 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r6">Metode Pengumpulan Data</label>
									<input type="text" class="form-control" id="b4r6" value="{{ $result->b4r6 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r7">Sarana Pengumpulan Data</label>
									<input type="text" class="form-control" id="b4r7" value="{{ $result->b4r7 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b4r8">Unit Pengumpulan Data</label>
									<input type="text" class="form-control" id="b4r8" value="{{ $result->b4r8 }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok V. Desain Sampel</h4><hr>
								</div>
								<div class="form-group">
									<label for="b5r1">Jenis Rancangan Sampel</label>
									<input type="text" class="form-control" id="b5r1" value="{{ $result->b5r1 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r2">Metode Pemilihan Sampel Tahap Terakhir</label>
									<input type="text" class="form-control" id="b5r2" value="{{ $result->b5r2 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r3a">Jika "Sampel Probabilitas", Metode yang Digunakan</label>
									<input type="text" class="form-control" id="b5r3a" value="{{ $result->b5r3a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r3b">Jika "Sampel Nonprobabilitas", Metode yang Digunakan</label>
									<input type="text" class="form-control" id="b5r3b" value="{{ $result->b5r3b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r4">Kerangka Sampel Tahap Terakhir</label>
									<input type="text" class="form-control" id="b5r4" value="{{ $result->b5r4 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r5">Fraksi Sampel Keseluruhan</label>
									<input type="text" class="form-control" id="b5r5" value="{{ $result->b5r5 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r6">Nilai Perkiraan Sampling Error Variabel Utama</label>
									<input type="text" class="form-control" id="b5r6" value="{{ $result->b5r6 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r7">Unit Sampel</label>
									<input type="text" class="form-control" id="b5r7" value="{{ $result->b5r7 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b5r8">Unit Observasi</label>
									<input type="text" class="form-control" id="b5r8" value="{{ $result->b5r8 }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok VI. Pengumpulan Data</h4><hr>
								</div>
								<div class="form-group">
									<label for="b6r1">Apakah Melakukan Uji Coba (Pilot Survey)</label>
									<input type="text" class="form-control" id="b6r1" value="{{ $result->b6r1 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r2">Metode Pemeriksaan Kualitas Pengumpulan Data</label>
									<input type="text" class="form-control" id="b6r2" value="{{ $result->b6r2 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r3">Apakah melakukan Penyesuaian Nonrespon</label>
									<input type="text" class="form-control" id="b6r3" value="{{ $result->b6r3 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r4">Petugas Pengumpulan Data</label>
									<input type="text" class="form-control" id="b6r4" value="{{ $result->b6r4 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r5">Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</label>
									<input type="text" class="form-control" id="b6r5" value="{{ $result->b6r5 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r6a">Jumlah Supervisor/Penyelia/Pengawas (orang)</label>
									<input type="text" class="form-control" id="b6r6a" value="{{ $result->b6r6a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r6b">Jumlah Pengumpul Data/Enumerator (orang)</label>
									<input type="text" class="form-control" id="b6r6b" value="{{ $result->b6r6b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b6r7">Apakah Melakukan Pelatihan Petugas</label>
									<input type="text" class="form-control" id="b6r7" value="{{ $result->b6r7 }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok VII. Pengolahan dan Analisis</h4><hr>
								</div>
								<div class="form-group">
									<label for="b7r1a">Penyuntingan (Editing)</label>
									<input type="text" class="form-control" id="b7r1a" value="{{ $result->b7r1a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r1b">Penyandian (Coding)</label>
									<input type="text" class="form-control" id="b7r1b" value="{{ $result->b7r1b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r1c">Data Entry</label>
									<input type="text" class="form-control" id="b7r1c" value="{{ $result->b7r1c }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r1d">Penyahihan (Validasi)</label>
									<input type="text" class="form-control" id="b7r1d" value="{{ $result->b7r1d }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r2">Metode Analisis</label>
									<input type="text" class="form-control" id="b7r2" value="{{ $result->b7r2 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r3">Unit Analisis</label>
									<input type="text" class="form-control" id="b7r3" value="{{ $result->b7r3 }}" readonly >
								</div>
								<div class="form-group">
									<label for="b7r4">Tingkat Penyajian Hasil Analisis</label>
									<input type="text" class="form-control" id="b7r4" value="{{ $result->b7r4 }}" readonly >
								</div>
								<div class="form-group">
									<h4 style="margin-top: 0px">Blok VIII. Diseminasi Hasil</h4><hr>
								</div>
								<div class="form-group">
									<label for="b8r1a">Produk Kegiatan Tersedia Tercetak</label>
									<input type="text" class="form-control" id="b8r1a" value="{{ $result->b8r1a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b8r1b">Produk Kegiatan Tersedia Digital</label>
									<input type="text" class="form-control" id="b8r1b" value="{{ $result->b8r1b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b8r1c">Produk Kegiatan Tersedia Data Mikro</label>
									<input type="text" class="form-control" id="b8r1c" value="{{ $result->b8r1c }}" readonly >
								</div>
								<div class="form-group">
									<label for="b8r2a">Rencana Rilis Produk Kegiatan Tercetak</label>
									<input type="text" class="form-control" id="b8r2a" value="{{ $result->b8r2a }}" readonly >
								</div>
								<div class="form-group">
									<label for="b8r2b">Rencana Rilis Produk Kegiatan Digital</label>
									<input type="text" class="form-control" id="b8r2b" value="{{ $result->b8r2b }}" readonly >
								</div>
								<div class="form-group">
									<label for="b8r2c">Rencana Rilis Produk Kegiatan Data Mikro</label>
									<input type="text" class="form-control" id="b8r2c" value="{{ $result->b8r2c }}" readonly >
								</div>
								
								<div class="form-group">
									<label for="">Apakah metadata akan ditampilkan?</label><br>
									<input type="radio" name="status_tampil" id="status_tampil" value="Tampil" required>
									<label for="tampil">Tampil</label><br>
									<input type="radio" name="status_tampil" id="status_tampil" value="Tidak Tampil" required>
									<label for="tidak_tampil">Tidak Tampil</label>
								</div>
								<div class="form-group">
									<label for="alasan_tampil">Alasan jika tidak tampil</label>
									<input class="form-control" type="text" name="alasan_tampil" id="alasan_tampil" value="{{ $result->alasan_tampil }}" />
								</div>
								<button onclick="window.location='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_kegiatan') }}'" type="button" class="btn btn-danger float-left">Kembali</button>
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
