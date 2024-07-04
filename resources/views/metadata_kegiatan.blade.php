<!doctype html>
<html lang="en">
<head>
	<title>Kelola Metadata Kegiatan | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
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
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>Hi, {{ Auth::user()->name }} <br> {{ Auth::user()->organisasi }}</span><i class="icon-submenu lnr lnr-chevron-down"></i> </a>
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
			<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
			<nav>
					<ul class="nav">
					    
					     <li><a href="dashboard" class=""><i class="lnr lnr-book"></i> <span>Dashboard</span></a></li>
						@if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') ) <li><a href="forum" class=""><i class="lnr lnr-book"></i> <span>Forum</span></a></li>
					    @else <li><a href="daftar_forum" class=""><i class="lnr lnr-book"></i> <span>Forum</span></a></li>
					    @endif
					    
					    	@if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )<li><a href="rekomendasi" class=""><i class="lnr lnr-file-empty"></i> <span>Kelola Rekomendasi</span></a></li>
				@else	@endif
					
						<li><a href="home" class=""><i class="lnr lnr-chart-bars"></i> <span>Kelola Data</span></a></li>
                      <li><a href="data_dda" class=""><i class="lnr lnr-chart-bars"></i> <span>Input Data Prioritas</span></a></li>
                     @if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )   <li><a href="rekap" class=""><i class="lnr lnr-chart-bars"></i> <span>Periksa Data DDA</span></a></li>
                      	@else	@endif
                     
                       
                        
                        <li>
							<a href="#subPages" data-toggle="collapse" class="active" ><i class="lnr lnr-database"></i><span>Kelola Metadata</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages" class="collapse in" >
								<ul class="nav">
									<li><a href="metadata_kegiatan" class="active">Metadata Kegiatan</a></li>
									<li><a href="metadata_indikator" class="">Metadata Indikator</a></li>
									<li><a href="metadata_variabel" class="">Metadata Variabel</a></li>
								</ul>
							</div>
						</li>
						
					<li><a href="metadata_data" class=""><i class="lnr lnr-chart-bars"></i> <span>Input Metadata ke Data</span></a></li>
						 @if(Auth::user()->role == 'Admin BPS' ) <li><a href="bahan" class=""><i class="lnr lnr-book"></i> <span>Kelola Bahan Ajar</span></a></li> @else @endif
						 @if(Auth::user()->role == 'Admin BPS' ) <li><a href="kelola_pembinaan" class=""><i class="lnr lnr-book"></i> <span>Kelola Pembinaan</span></a></li> @else @endif
						 	@if( (Auth::user()->role == 'Admin BPS') )  <li><a href="user" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
                         @if( (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Admin BPS Kabupaten') )  <li><a href="user_opd" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
						
						  @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Walidata') || (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Operator OPD')|| (Auth::user()->role == 'Admin BPS Kabupaten') ) <li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-bubble"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse" aria-expanded="false" style="">
								<ul class="nav">
								 
									@if( (Auth::user()->role == 'Operator OPD') )
									<li><a href="verifikasi_rekomendasi_opd" class="">Lihat Rekomendasi</a></li>
									<li><a href="verifikasi_data_opd" class=""> Hasil Verifikasi Data</a></li> 
									<li><a href="verifikasi_kegiatan_opd" class="">Hasil Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator_opd" class="">Hasil Verifikasi Indikator</a></li>
								    <li><a href="verifikasi_variabel_opd" class="">Hasil Verifikasi Variabel</a></li>
								    
									@else<li><a href="verifikasi_data" class="">Verifikasi Data</a></li>
									<li><a href="verifikasi_kegiatan" class="">Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator" class="">Verifikasi Indikator</a></li>
								    <li><a href="verifikasi_variabel" class="">Verifikasi Variabel</a></li>@endif
								</ul>
							</div>
						</li> @else @endif
						 
						
                         
					
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
					<!-- UPLOAD METADATA -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Upload Metadata Kegiatan</h3>
						</div>
						<div class="panel-body">
							<form action="{{ route('metaKegiatan.store') }}" method="post" enctype="multipart/form-data">
								@csrf

								@if (session('success'))
									<div class="alert alert-success col-sm">
										{{ session('success') }}
									</div>
								@elseif (session('error'))
									<div class="alert alert-danger">
										{{ session('error') }}
									</div>
								@endif

								<div class="form-group">
									Pilih file excel untuk diupload
									<input type="file" name="file" id="file" class="form-control">
								</div>

								<button type="submit" class="btn btn-primary">Upload File</button>
								<a href="{{ url('public/admin/assets/sample/Form Metadata Kegiatan.xlsx') }}">Download Template</a>
							</form>
						</div>
					</div>
					<!-- DAFTAR METADATA -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Metadata Kegiatan</h3>
						</div>
						<div class="panel-body">
							<table id="example" class="table table-striped display" style="width: 100%">
								<thead>
									<tr>
										<th>Judul Kegiatan</th>
										<th>Tahun Kegiatan</th>
										<th>Instansi Penyelenggara</th>
										<th>Diupload Oleh</th>
										<th>Diupload Pada</th>
										<th>Status Verifikasi</th>
										<th style="width: 80px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_kegiatan as $result)
										<tr id="kid{{ $result->id }}">
											<td>{{ $result->b0r1 }}</td>
											<td>{{ $result->b0r2 }}</td>
											<td>{{ $result->b1r1 }}</td>
											<td>{{$result->petugas_upload}}</td>
											<td>{{ date("d M Y", strtotime($result->created_at)) }}</td>
											<td>{{ $result->status_tampil }}</td>
											<td>
												<a href="" onclick="viewMetaKegiatan({{ $result->id }})" class="lnr lnr-eye" style="margin:2px;" data-toggle="modal" data-target="#viewMetadataModal"></a>
												<a href="{{ url('edit_metadata_kegiatan/' . $result->id) }}" class="lnr lnr-pencil" id="editMetadata"></a>
												<a href="" onclick="hapusMetaKegiatan({{ $result->id }})" class="lnr lnr-trash" style="margin:2px;"title="Hapus"></a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<!-- MODAL VIEW -->
					<div class="modal fade" id="viewMetadataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div role="tabpanel">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#umumTab" aria-controls="umumTab" role="tab" data-toggle="tab">Umum</a></li>
											<li role="presentation"><a href="#blok1Tab" aria-controls="blok1Tab" role="tab" data-toggle="tab">Blok I</a></li>
											<li role="presentation"><a href="#blok2Tab" aria-controls="blok2Tab" role="tab" data-toggle="tab">Blok II</a></li>
											<li role="presentation"><a href="#blok3Tab" aria-controls="blok3Tab" role="tab" data-toggle="tab">Blok III</a></li>
											<li role="presentation"><a href="#blok4Tab" aria-controls="blok4Tab" role="tab" data-toggle="tab">Blok IV</a></li>
											<li role="presentation"><a href="#blok5Tab" aria-controls="blok5Tab" role="tab" data-toggle="tab">Blok V</a></li>
											<li role="presentation"><a href="#blok6Tab" aria-controls="blok6Tab" role="tab" data-toggle="tab">Blok VI</a></li>
											<li role="presentation"><a href="#blok7Tab" aria-controls="blok7Tab" role="tab" data-toggle="tab">Blok VII</a></li>
											<li role="presentation"><a href="#blok8Tab" aria-controls="blok8Tab" role="tab" data-toggle="tab">Blok VIII</a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="umumTab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Informasi Umum</h4><hr>
													</div>
													<div class="form-group">
														<label for="b0r1">Judul Kegiatan</label>
														<input type="text" class="form-control" id="b0r1" readonly />
													</div>
													<div class="form-group">
														<label for="b0r2">Tahun</label>
														<input type="text" class="form-control" id="b0r2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r3">Kode Kegiatan</label>
														<input type="text" class="form-control" id="b0r3" readonly />
													</div>
													<div class="form-group">
														<label for="b0r4">Cara Pengumpulan Data</label>
														<input type="text" class="form-control" id="b0r4" readonly />
													</div>
													<div class="form-group">
														<label for="b0r5">Sektor Kegiatan</label>
														<input type="text" class="form-control" id="b0r5" readonly />
													</div>
													<div class="form-group">
														<label for="b0r6">Apakah Mendapatkan Rekomendasi Statistik</label>
														<input type="text" class="form-control" id="b0r6" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok1Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok I. Penyelenggara</h4><hr>
													</div>
													<div class="form-group">
														<label for="b1r1">Instansi Penyelenggara</label>
														<input type="text" class="form-control" id="b1r1" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2">Alamat Lengkap Instansi Penyelenggara</label>
														<input type="text" class="form-control" id="b1r2" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2a">Telepon</label>
														<input type="text" class="form-control" id="b1r2a" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2b">E-Mail</label>
														<input type="text" class="form-control" id="b1r2b" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2c">Faksimile</label>
														<input type="text" class="form-control" id="b1r2c" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok2Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok II. Penanggung Jawab</h4><hr>
													</div>
													<div class="form-group">
														<label for="b2r1a">Penanggung Jawab Eselon 1</label>
														<input type="text" class="form-control" id="b2r1a" readonly />
													</div>
													<div class="form-group">
														<label for="b2r1b">Penanggung Jawab Eselon 2</label>
														<input type="text" class="form-control" id="b2r1b" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2a">Penanggung Jawab Eselon 3</label>
														<input type="text" class="form-control" id="b2r2a" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2b">Alamat</label>
														<input type="text" class="form-control" id="b2r2b" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2c">Telepon</label>
														<input type="text" class="form-control" id="b2r2c" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2d">E-Mail</label>
														<input type="text" class="form-control" id="b2r2d" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2e">Faksimile</label>
														<input type="text" class="form-control" id="b2r2e" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok3Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok III. Perencanaan dan Persiapan</h4><hr>
													</div>
													<div class="form-group">
														<label for="b3r1">Latar Belakang Kegiatan</label>
														<textarea class="form-control" name="" id="b3r1" cols="30" rows="10" readonly></textarea>
													</div>
													<div class="form-group">
														<label for="b3r2">Tujuan Kegiatan</label>
														<textarea class="form-control" name="" id="b3r2" cols="30" rows="3" readonly></textarea>
													</div>
													<div class="form-group">
														<label for="b3r3a_awal">Perencanaan Kegiatan (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3a_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3a_akhir">Perencanaan Kegiatan (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3a_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3b_awal">Desain (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3b_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3b_akhir">Desain (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3b_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3c_awal">Pengumpulan Data (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3c_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3c_akhir">Pengumpulan Data (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3c_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3d_awal">Pengolahan Data (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3d_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3d_akhir">Pengolahan Data (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3d_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3e_awal">Analisis (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3e_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3e_akhir">Analisis (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3e_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3f_awal">Diseminasi Hasil (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3f_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3f_akhir">Diseminasi Hasil (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3f_akhir" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3g_awal">Evaluasi (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3g_awal" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3g_akhir">Evaluasi (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3g_akhir" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok4Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok IV. Desain Kegiatan</h4><hr>
													</div>
													<div class="form-group">
														<label for="b4r1">Kegiatan ini dilakukan</label>
														<input type="text" class="form-control" id="b4r1" readonly />
													</div>
													<div class="form-group">
														<label for="b4r2">Jika "berulang", Frekuensi Penyelenggaraan</label>
														<input type="text" class="form-control" id="b4r2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r3">Tipe Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r3" readonly />
													</div>
													<div class="form-group">
														<label for="b4r4">Cakupan Wilayah Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r4" readonly />
													</div>
													<div class="form-group">
														<label for="b4r5">Jika "sebagian wilayah Indonesia", Wilayah Kegiatan</label>
														<input type="text" class="form-control" id="b4r5" readonly />
													</div>
													<div class="form-group">
														<label for="b4r6">Metode Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r6" readonly />
													</div>
													<div class="form-group">
														<label for="b4r7">Sarana Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r7" readonly />
													</div>
													<div class="form-group">
														<label for="b4r8">Unit Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r8" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok5Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok V. Desain Sampel</h4><hr>
													</div>
													<div class="form-group">
														<label for="b5r1">Jenis Rancangan Sampel</label>
														<input type="text" class="form-control" id="b5r1" readonly />
													</div>
													<div class="form-group">
														<label for="b5r2">Metode Pemilihan Sampel Tahap Terakhir</label>
														<input type="text" class="form-control" id="b5r2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r3a">Jika "Sampel Probabilitas", Metode yang Digunakan</label>
														<input type="text" class="form-control" id="b5r3a" readonly />
													</div>
													<div class="form-group">
														<label for="b5r3b">Jika "Sampel Nonprobabilitas", Metode yang Digunakan</label>
														<input type="text" class="form-control" id="b5r3b" readonly />
													</div>
													<div class="form-group">
														<label for="b5r4">Kerangka Sampel Tahap Terakhir</label>
														<input type="text" class="form-control" id="b5r4" readonly />
													</div>
													<div class="form-group">
														<label for="b5r5">Fraksi Sampel Keseluruhan</label>
														<input type="text" class="form-control" id="b5r5" readonly />
													</div>
													<div class="form-group">
														<label for="b5r6">Nilai Perkiraan Sampling Error Variabel Utama</label>
														<input type="text" class="form-control" id="b5r6" readonly />
													</div>
													<div class="form-group">
														<label for="b5r7">Unit Sampel</label>
														<input type="text" class="form-control" id="b5r7" readonly />
													</div>
													<div class="form-group">
														<label for="b5r8">Unit Observasi</label>
														<input type="text" class="form-control" id="b5r8" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok6Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VI. Pengumpulan Data</h4><hr>
													</div>
													<div class="form-group">
														<label for="b6r1">Apakah Melakukan Uji Coba (Pilot Survey)</label>
														<input type="text" class="form-control" id="b6r1" readonly />
													</div>
													<div class="form-group">
														<label for="b6r2">Metode Pemeriksaan Kualitas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r3">Apakah melakukan Penyesuaian Nonrespon</label>
														<input type="text" class="form-control" id="b6r3" readonly />
													</div>
													<div class="form-group">
														<label for="b6r4">Petugas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r4" readonly />
													</div>
													<div class="form-group">
														<label for="b6r5">Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r5" readonly />
													</div>
													<div class="form-group">
														<label for="b6r6a">Jumlah Supervisor/Penyelia/Pengawas (orang)</label>
														<input type="text" class="form-control" id="b6r6a" readonly />
													</div>
													<div class="form-group">
														<label for="b6r6b">Jumlah Pengumpul Data/Enumerator (orang)</label>
														<input type="text" class="form-control" id="b6r6b" readonly />
													</div>
													<div class="form-group">
														<label for="b6r7">Apakah Melakukan Pelatihan Petugas</label>
														<input type="text" class="form-control" id="b6r7" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok7Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VII. Pengolahan dan Analisis</h4><hr>
													</div>
													<div class="form-group">
														<label for="b7r1a">Penyuntingan (Editing)</label>
														<input type="text" class="form-control" id="b7r1a" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1b">Penyandian (Coding)</label>
														<input type="text" class="form-control" id="b7r1b" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1c">Data Entry</label>
														<input type="text" class="form-control" id="b7r1c" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1d">Penyahihan (Validasi)</label>
														<input type="text" class="form-control" id="b7r1d" readonly />
													</div>
													<div class="form-group">
														<label for="b7r2">Metode Analisis</label>
														<input type="text" class="form-control" id="b7r2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r3">Unit Analisis</label>
														<input type="text" class="form-control" id="b7r3" readonly />
													</div>
													<div class="form-group">
														<label for="b7r4">Tingkat Penyajian Hasil Analisis</label>
														<input type="text" class="form-control" id="b7r4" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok8Tab">
												<form id="viewMetadataForm">
													@csrf
													<input type="hidden" id="id" name="id">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VIII. 	Diseminasi Hasil</h4><hr>
													</div>
													<div class="form-group">
														<label for="b8r1a">Produk Kegiatan Tersedia Tercetak</label>
														<input type="text" class="form-control" id="b8r1a" readonly />
													</div>
													<div class="form-group">
														<label for="b8r1b">Produk Kegiatan Tersedia Digital</label>
														<input type="text" class="form-control" id="b8r1b" readonly />
													</div>
													<div class="form-group">
														<label for="b8r1c">Produk Kegiatan Tersedia Data Mikro</label>
														<input type="text" class="form-control" id="b8r1c" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2a">Rencana Rilis Produk Kegiatan Tercetak</label>
														<input type="text" class="form-control" id="b8r2a" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2b">Rencana Rilis Produk Kegiatan Digital</label>
														<input type="text" class="form-control" id="b8r2b" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2c">Rencana Rilis Produk Kegiatan Data Mikro</label>
														<input type="text" class="form-control" id="b8r2c" readonly />
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- MODAL EDIT -->
					<div class="modal fade" id="editMetadata" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div role="tabpanel">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#umumTab" aria-controls="umumTab" role="tab" data-toggle="tab">Umum</a></li>
											<li role="presentation"><a href="#blok1Tab" aria-controls="blok1Tab" role="tab" data-toggle="tab">Blok I</a></li>
											<li role="presentation"><a href="#blok2Tab" aria-controls="blok2Tab" role="tab" data-toggle="tab">Blok II</a></li>
											<li role="presentation"><a href="#blok3Tab" aria-controls="blok3Tab" role="tab" data-toggle="tab">Blok III</a></li>
											<li role="presentation"><a href="#blok4Tab" aria-controls="blok4Tab" role="tab" data-toggle="tab">Blok IV</a></li>
											<li role="presentation"><a href="#blok5Tab" aria-controls="blok5Tab" role="tab" data-toggle="tab">Blok V</a></li>
											<li role="presentation"><a href="#blok6Tab" aria-controls="blok6Tab" role="tab" data-toggle="tab">Blok VI</a></li>
											<li role="presentation"><a href="#blok7Tab" aria-controls="blok7Tab" role="tab" data-toggle="tab">Blok VII</a></li>
											<li role="presentation"><a href="#blok8Tab" aria-controls="blok8Tab" role="tab" data-toggle="tab">Blok VIII</a></li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="umumTab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Informasi Umum</h4><hr>
													</div>
													<div class="form-group">
														<label for="b0r1">Judul Kegiatan</label>
														<input type="text" class="form-control" id="b0r1_2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r2">Tahun</label>
														<input type="text" class="form-control" id="b0r2_2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r3">Kode Kegiatan</label>
														<input type="text" class="form-control" id="b0r3_2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r4">Cara Pengumpulan Data</label>
														<input type="text" class="form-control" id="b0r4_2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r5">Sektor Kegiatan</label>
														<input type="text" class="form-control" id="b0r5_2" readonly />
													</div>
													<div class="form-group">
														<label for="b0r6">Apakah Mendapatkan Rekomendasi Statistik</label>
														<input type="text" class="form-control" id="b0r6_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok1Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok I. Penyelenggara</h4><hr>
													</div>
													<div class="form-group">
														<label for="b1r1">Instansi Penyelenggara</label>
														<input type="text" class="form-control" id="b1r1_2" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2a">Telepon</label>
														<input type="text" class="form-control" id="b1r2a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2b">E-Mail</label>
														<input type="text" class="form-control" id="b1r2b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b1r2c">Faksimile</label>
														<input type="text" class="form-control" id="b1r2c_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok2Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok II. Penanggung Jawab</h4><hr>
													</div>
													<div class="form-group">
														<label for="b2r1a">Penanggung Jawab Eselon 1</label>
														<input type="text" class="form-control" id="b2r1a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r1b">Penanggung Jawab Eselon 2</label>
														<input type="text" class="form-control" id="b2r1b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2a">Penanggung Jawab Eselon 3</label>
														<input type="text" class="form-control" id="b2r2a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2b">Alamat</label>
														<input type="text" class="form-control" id="b2r2b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2c">Telepon</label>
														<input type="text" class="form-control" id="b2r2c_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2d">E-Mail</label>
														<input type="text" class="form-control" id="b2r2d_2" readonly />
													</div>
													<div class="form-group">
														<label for="b2r2e">Faksimile</label>
														<input type="text" class="form-control" id="b2r2e_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok3Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok III. Perencanaan dan Persiapan</h4><hr>
													</div>
													<div class="form-group">
														<label for="b3r1">Latar Belakang Kegiatan</label>
														<textarea class="form-control" name="" id="b3r1_2" cols="30" rows="10" readonly></textarea>
													</div>
													<div class="form-group">
														<label for="b3r2">Tujuan Kegiatan</label>
														<textarea class="form-control" name="" id="b3r2_2" cols="30" rows="3" readonly></textarea>
													</div>
													<div class="form-group">
														<label for="b3r3a_awal">Perencanaan Kegiatan (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3a_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3a_akhir">Perencanaan Kegiatan (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3a_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3b_awal">Desain (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3b_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3b_akhir">Desain (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3b_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3c_awal">Pengumpulan Data (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3c_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3c_akhir">Pengumpulan Data (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3c_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3d_awal">Pengolahan Data (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3d_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3d_akhir">Pengolahan Data (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3d_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3e_awal">Analisis (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3e_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3e_akhir">Analisis (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3e_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3f_awal">Diseminasi Hasil (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3f_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3f_akhir">Diseminasi Hasil (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3f_akhir_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3g_awal">Evaluasi (tanggal awal)</label>
														<input type="text" class="form-control" id="b3r3g_awal_2" readonly />
													</div>
													<div class="form-group">
														<label for="b3r3g_akhir">Evaluasi (tanggal akhir)</label>
														<input type="text" class="form-control" id="b3r3g_akhir_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok4Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok IV. Desain Kegiatan</h4><hr>
													</div>
													<div class="form-group">
														<label for="b4r1">Kegiatan ini dilakukan</label>
														<input type="text" class="form-control" id="b4r1_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r2">Jika "berulang", Frekuensi Penyelenggaraan</label>
														<input type="text" class="form-control" id="b4r2_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r3">Tipe Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r3_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r4">Cakupan Wilayah Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r4_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r5">Jika "sebagian wilayah Indonesia", Wilayah Kegiatan</label>
														<input type="text" class="form-control" id="b4r5_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r6">Metode Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r6_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r7">Sarana Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r7_2" readonly />
													</div>
													<div class="form-group">
														<label for="b4r8">Unit Pengumpulan Data</label>
														<input type="text" class="form-control" id="b4r8_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok5Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok V. Desain Sampel</h4><hr>
													</div>
													<div class="form-group">
														<label for="b5r1">Jenis Rancangan Sampel</label>
														<input type="text" class="form-control" id="b5r1_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r2">Metode Pemilihan Sampel Tahap Terakhir</label>
														<input type="text" class="form-control" id="b5r2_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r3a">Jika "Sampel Probabilitas", Metode yang Digunakan</label>
														<input type="text" class="form-control" id="b5r3a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r3b">Jika "Sampel Nonprobabilitas", Metode yang Digunakan</label>
														<input type="text" class="form-control" id="b5r3b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r4">Kerangka Sampel Tahap Terakhir</label>
														<input type="text" class="form-control" id="b5r4_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r5">Fraksi Sampel Keseluruhan</label>
														<input type="text" class="form-control" id="b5r5_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r6">Nilai Perkiraan Sampling Error Variabel Utama</label>
														<input type="text" class="form-control" id="b5r6_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r7">Unit Sampel</label>
														<input type="text" class="form-control" id="b5r7_2" readonly />
													</div>
													<div class="form-group">
														<label for="b5r8">Unit Observasi</label>
														<input type="text" class="form-control" id="b5r8_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok6Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VI. Pengumpulan Data</h4><hr>
													</div>
													<div class="form-group">
														<label for="b6r1">Apakah Melakukan Uji Coba (Pilot Survey)</label>
														<input type="text" class="form-control" id="b6r1_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r2">Metode Pemeriksaan Kualitas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r2_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r3">Apakah melakukan Penyesuaian Nonrespon</label>
														<input type="text" class="form-control" id="b6r3_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r4">Petugas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r4_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r5">Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</label>
														<input type="text" class="form-control" id="b6r5_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r6a">Jumlah Supervisor/Penyelia/Pengawas (orang)</label>
														<input type="text" class="form-control" id="b6r6a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r6b">Jumlah Pengumpul Data/Enumerator (orang)</label>
														<input type="text" class="form-control" id="b6r6b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b6r7">Apakah Melakukan Pelatihan Petugas</label>
														<input type="text" class="form-control" id="b6r7_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok7Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VII. Pengolahan dan Analisis</h4><hr>
													</div>
													<div class="form-group">
														<label for="b7r1a">Penyuntingan (Editing)</label>
														<input type="text" class="form-control" id="b7r1a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1b">Penyandian (Coding)</label>
														<input type="text" class="form-control" id="b7r1b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1c">Data Entry</label>
														<input type="text" class="form-control" id="b7r1c_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r1d">Penyahihan (Validasi)</label>
														<input type="text" class="form-control" id="b7r1d_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r2">Metode Analisis</label>
														<input type="text" class="form-control" id="b7r2_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r3">Unit Analisis</label>
														<input type="text" class="form-control" id="b7r3_2" readonly />
													</div>
													<div class="form-group">
														<label for="b7r4">Tingkat Penyajian Hasil Analisis</label>
														<input type="text" class="form-control" id="b7r4_2" readonly />
													</div>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="blok8Tab">
												<form id="editMetadataForm">
													@csrf
													<input type="hidden" id="id_2" name="id_2">
													<div class="form-group">
														<h4 style="margin-top: 0px">Blok VIII. 	Diseminasi Hasil</h4><hr>
													</div>
													<div class="form-group">
														<label for="b8r1a">Produk Kegiatan Tersedia Tercetak</label>
														<input type="text" class="form-control" id="b8r1a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b8r1b">Produk Kegiatan Tersedia Digital</label>
														<input type="text" class="form-control" id="b8r1b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b8r1c">Produk Kegiatan Tersedia Data Mikro</label>
														<input type="text" class="form-control" id="b8r1c_2" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2a">Rencana Rilis Produk Kegiatan Tercetak</label>
														<input type="text" class="form-control" id="b8r2a_2" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2b">Rencana Rilis Produk Kegiatan Digital</label>
														<input type="text" class="form-control" id="b8r2b_2" readonly />
													</div>
													<div class="form-group">
														<label for="b8r2c">Rencana Rilis Produk Kegiatan Data Mikro</label>
														<input type="text" class="form-control" id="b8r2c_2" readonly />
													</div>
												</form>
											</div>
										</div>
									</div>
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
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true
			});
		});
	</script>
	<script type="text/javascript">
		function viewMetaKegiatan(id) {
			$.get('metadata_kegiatan/'+id, function(kegiatan){
				$("#id").val(kegiatan.id);
				$("#b0r1").val(kegiatan.b0r1);
				$("#b0r2").val(kegiatan.b0r2);
				$("#b0r3").val(kegiatan.b0r3);
				$("#b0r4").val(kegiatan.b0r4);
				$("#b0r5").val(kegiatan.b0r5);
				$("#b0r6").val(kegiatan.b0r6);
				$("#b1r1").val(kegiatan.b1r1);
				$("#b1r2").val(kegiatan.b1r2);
				$("#b1r2a").val(kegiatan.b1r2a);
				$("#b1r2b").val(kegiatan.b1r2b);
				$("#b1r2c").val(kegiatan.b1r2c);
				$("#b2r1a").val(kegiatan.b2r1a);
				$("#b2r1b").val(kegiatan.b2r1b);
				$("#b2r2a").val(kegiatan.b2r2a);
				$("#b2r2b").val(kegiatan.b2r2b);
				$("#b2r2c").val(kegiatan.b2r2c);
				$("#b2r2d").val(kegiatan.b2r2d);
				$("#b2r2e").val(kegiatan.b2r2e);
				$("#b3r1").val(kegiatan.b3r1);
				$("#b3r2").val(kegiatan.b3r2);
				$("#b3r3a_awal").val(kegiatan.b3r3a_awal);
				$("#b3r3a_akhir").val(kegiatan.b3r3a_akhir);
				$("#b3r3b_awal").val(kegiatan.b3r3b_awal);
				$("#b3r3b_akhir").val(kegiatan.b3r3b_akhir);
				$("#b3r3c_awal").val(kegiatan.b3r3c_awal);
				$("#b3r3c_akhir").val(kegiatan.b3r3c_akhir);
				$("#b3r3d_awal").val(kegiatan.b3r3d_awal);
				$("#b3r3d_akhir").val(kegiatan.b3r3d_akhir);
				$("#b3r3e_awal").val(kegiatan.b3r3e_awal);
				$("#b3r3e_akhir").val(kegiatan.b3r3e_akhir);
				$("#b3r3f_awal").val(kegiatan.b3r3f_awal);
				$("#b3r3f_akhir").val(kegiatan.b3r3f_akhir);
				$("#b3r3g_awal").val(kegiatan.b3r3g_awal);
				$("#b3r3g_akhir").val(kegiatan.b3r3g_akhir);
				$("#b4r1").val(kegiatan.b4r1);
				$("#b4r2").val(kegiatan.b4r2);
				$("#b4r3").val(kegiatan.b4r3);
				$("#b4r4").val(kegiatan.b4r4);
				$("#b4r5").val(kegiatan.b4r5);
				$("#b4r6").val(kegiatan.b4r6);
				$("#b4r7").val(kegiatan.b4r7);
				$("#b4r8").val(kegiatan.b4r8);
				$("#b5r1").val(kegiatan.b5r1);
				$("#b5r2").val(kegiatan.b5r2);
				$("#b5r3a").val(kegiatan.b5r3a);
				$("#b5r3b").val(kegiatan.b5r3b);
				$("#b5r4").val(kegiatan.b5r4);
				$("#b5r5").val(kegiatan.b5r5);
				$("#b5r6").val(kegiatan.b5r6);
				$("#b5r7").val(kegiatan.b5r7);
				$("#b5r8").val(kegiatan.b5r8);
				$("#b6r1").val(kegiatan.b6r1);
				$("#b6r2").val(kegiatan.b6r2);
				$("#b6r3").val(kegiatan.b6r3);
				$("#b6r4").val(kegiatan.b6r4);
				$("#b6r5").val(kegiatan.b6r5);
				$("#b6r6a").val(kegiatan.b6r6a);
				$("#b6r6b").val(kegiatan.b6r6b);
				$("#b6r7").val(kegiatan.b6r7);
				$("#b7r1a").val(kegiatan.b7r1a);
				$("#b7r1b").val(kegiatan.b7r1b);
				$("#b7r1c").val(kegiatan.b7r1c);
				$("#b7r1d").val(kegiatan.b7r1d);
				$("#b7r2").val(kegiatan.b7r2);
				$("#b7r3").val(kegiatan.b7r3);
				$("#b7r4").val(kegiatan.b7r4);
				$("#b8r1a").val(kegiatan.b8r1a);
				$("#b8r1b").val(kegiatan.b8r1b);
				$("#b8r1c").val(kegiatan.b8r1c);
				$("#b8r2a").val(kegiatan.b8r2a);
				$("#b8r2b").val(kegiatan.b8r2b);
				$("#b8r2c").val(kegiatan.b8r2c);
			});
		}
	</script>
	<script>
		function hapusMetaKegiatan(id) {
			if(confirm('Apakah anda yakin?')){
				$.ajax({
					url:'metadata_kegiatan/'+id,
					type: 'DELETE',
					data:{
						_token: $("input[name=_token]").val()
					},
					success: function(response){
						$("#kid"+id).remove();
						window.location.reload(true);
					}
				});
			}
		}
	</script>
</body>
</html>
