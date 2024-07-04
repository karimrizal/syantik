<!doctype html>
<html lang="en">
<head>
	<title>Kelola Metadata Indikator | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
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
                    	@if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )    <li><a href="rekap" class=""><i class="lnr lnr-chart-bars"></i> <span>Periksa Data DDA</span></a></li>
                       @else	@endif
                        
                        <li>
							<a href="#subPages" data-toggle="collapse" class="active" aria-expanded="false"><i class="lnr lnr-database"></i><span>Kelola Metadata</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages" class="collapse in" aria-expanded="false" style="">
								<ul class="nav">
									<li><a href="metadata_kegiatan" class="">Metadata Kegiatan</a></li>
									<li><a href="metadata_indikator" class="active">Metadata Indikator</a></li>
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
							<h3 class="panel-title">Upload Metadata Indikator</h3>
						</div>
						<div class="panel-body">
							<form action="{{ route('metaIndikator.store') }}" method="post" enctype="multipart/form-data">
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
								<a href="{{ url('public/admin/assets/sample/Form Metadata Indikator.xlsx') }}">Download Template</a>
							</form>
						</div>
					</div>
					<!-- DAFTAR METADATA -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Metadata Indikator</h3>
						</div>
						<div class="panel-body">
							<table id="example" class="table table-striped display" style="width: 100%">
								<thead>
									<tr role="row">
										<th>Nama Indikator</th>
										<th>Kegiatan Penghasil</th>
										<th>Instansi Penyelenggara Kegiatan</th>
										<th>Diupload Oleh</th>
										<th>Diupload Pada</th>
										<th>Status Verifikasi</th>
										<th style="width: 80px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_indikator as $result)
										<tr id="iid{{ $result->id }}">
											<td>{{ $result->ind_b1k2 }}</td>
											<td>{{ $result->ind_b1k13 }}</td>
											<td>{{ $result->organisasi }}</td>
											<td>{{$result->petugas_upload}}</td>
											<td>{{ date("d M Y", strtotime($result->created_at)) }}</td>
											<td>{{ $result->status_tampil }}</td>
											<td>
												<a href="" onclick="viewMetaIndikator({{ $result->id }})" class="lnr lnr-eye" style="margin:2px;" data-toggle="modal" title="Lihat" data-target="#viewMetadata"></a>
												<a href="{{ url('edit_metadata_indikator/' . $result->id) }}" class="lnr lnr-pencil" id="editMetadata"></a>
												<a href="" onclick="hapusMetaIndikator({{ $result->id }})" class="lnr lnr-trash" style="margin:2px;" title="Hapus"></a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<!-- MODAL VIEW -->
					<div class="modal fade" id="viewMetadata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form id="viewMetadataForm">
										@csrf
										<input type="hidden" id="id" name="id">
										<div class="form-group">
											<label for="ind_b1k2">Nama Indikator</label>
											<input type="text" class="form-control" id="ind_b1k2" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k3">Konsep</label>
											<input type="text" class="form-control" id="ind_b1k3" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k4">Definisi</label>
											<input type="text" class="form-control" id="ind_b1k4" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k5">Interpretasi</label>
											<input type="text" class="form-control" id="ind_b1k5" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k6">Metode/Rumus Penghitungan</label>
											<input type="text" class="form-control" id="ind_b1k6" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k7">Ukuran</label>
											<input type="text" class="form-control" id="ind_b1k7" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k8">Satuan</label>
											<input type="text" class="form-control" id="ind_b1k8" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k9">Klasifikasi Penyajian</label>
											<input type="text" class="form-control" id="ind_b1k9" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k10">Apakah Merupakan Indikator Komposit</label>
											<input type="text" class="form-control" id="ind_b1k10" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k11">Jika Merupakan Indikator Komposit, Publikasi Ketersediaan:</label>
											<input type="text" class="form-control" id="ind_b1k11" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k12">Jika Merupakan Indikator Komposit, Nama Indikator Pembangun:</label>
											<input type="text" class="form-control" id="ind_b1k12" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k13">Jika Bukan Merupakan Indikator Komposit, Kegiatan Penghasil:</label>
											<input type="text" class="form-control" id="ind_b1k13" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k14">Jika Bukan Merupakan Indikator Komposit, Kode Kediatan:</label>
											<input type="text" class="form-control" id="ind_b1k14" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k15">Jika Bukan Merupakan Indikator Komposit, Nama Variabel Pembangun:</label>
											<input type="text" class="form-control" id="ind_b1k15" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k16">Level Estimasi</label>
											<input type="text" class="form-control" id="ind_b1k16" readonly/>
										</div>
										<div class="form-group">
											<label for="ind_b1k17">Apakah Indikator Dapat Diakses Umum</label>
											<input type="text" class="form-control" id="ind_b1k17" readonly/>
										</div>
									</form>
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
	<script>
	    function viewMetaIndikator(id) {
			$.get('metadata_indikator/'+id, function(indikator){
				$("#id").val(indikator.id);
				$("#ind_b1k2").val(indikator.ind_b1k2);
				$("#ind_b1k3").val(indikator.ind_b1k3);
				$("#ind_b1k4").val(indikator.ind_b1k4);
				$("#ind_b1k5").val(indikator.ind_b1k5);
				$("#ind_b1k6").val(indikator.ind_b1k6);
				$("#ind_b1k7").val(indikator.ind_b1k7);
				$("#ind_b1k8").val(indikator.ind_b1k8);
				$("#ind_b1k9").val(indikator.ind_b1k9);
				$("#ind_b1k10").val(indikator.ind_b1k10);
				$("#ind_b1k11").val(indikator.ind_b1k11);
				$("#ind_b1k12").val(indikator.ind_b1k12);
				$("#ind_b1k13").val(indikator.ind_b1k13);
				$("#ind_b1k14").val(indikator.ind_b1k14);
				$("#ind_b1k15").val(indikator.ind_b1k15);
				$("#ind_b1k16").val(indikator.ind_b1k16);
				$("#ind_b1k17").val(indikator.ind_b1k17);
			});
		}
	</script>
	<script>
		function hapusMetaIndikator(id) {
			if(confirm('Apakah anda yakin?')){
				$.ajax({
					url:'metadata_indikator/'+id,
					type: 'DELETE',
					data:{
						_token: $("input[name=_token]").val()
					},
					success: function(response){
						$("#iid"+id).remove();
						window.location.reload(true);
					}
				});
			}
		}
	</script>
</body>
</html>
