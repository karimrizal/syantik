<!doctype html>
<html lang="en">
<head>
	<title>Kelola Rekomendasi | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<!-- END NAVBAR -->
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
                       
                        <li><a href="rekap" class=""><i class="lnr lnr-chart-bars"></i> <span>Periksa Data DDA</span></a></li>
                      
                       
                        
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="lnr lnr-database"></i><span>Kelola Metadata</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages" class="collapse" aria-expanded="false" style="">
								<ul class="nav">
									<li><a href="metadata_kegiatan" class="">Metadata Kegiatan</a></li>
									<li><a href="metadata_indikator" class="">Metadata Indikator</a></li>
									<li><a href="metadata_variabel" class="">Metadata Variabel</a></li>
								</ul>
							</div>
						</li>
						
						
						 @if(Auth::user()->role == 'Admin BPS' ) <li><a href="bahan" class=""><i class="lnr lnr-book"></i> <span>Kelola Bahan Ajar</span></a></li> @else @endif
						  @if(Auth::user()->role == 'Admin BPS' ) <li><a href="kelola_pembinaan" class=""><i class="lnr lnr-book"></i> <span>Kelola Pembinaan</span></a></li> @else @endif
						  	@if( (Auth::user()->role == 'Admin BPS') )  <li><a href="user" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
                        @if( (Auth::user()->role == 'Admin OPD')|| (Auth::user()->role == 'Admin BPS Kabupaten') )  <li><a href="user_opd" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
						
						  @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Walidata') || (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Operator OPD') || (Auth::user()->role == 'Admin BPS Kabupaten') ) <li>
							<a href="#subPages2" data-toggle="collapse" class="active" aria-expanded="false"><i class="lnr lnr-bubble"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse in" aria-expanded="false" style="">
								<ul class="nav">
								 
									@if( (Auth::user()->role == 'Operator OPD') )<li><a href="verifikasi_data_opd" class=""> Hasil Verifikasi Data</a></li> 
									<li><a href="verifikasi_kegiatan" class="">Hasil Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator" class="">Hasil Verifikasi Indikator</a></li>
								    <li><a href="verifikasi_variabel" class="">Hasil Verifikasi Variabel</a></li>
								    
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
				<div class="row">
					<div id="belajar" class="panel-body">	
						<ul  class="nav nav-pills">
						    
						    
						    <li class="{{request()->is('verifikasi_rekomendasi_bps') ? 'active' : null }}">
							<a class="nav-link {{request()->is('verifikasi_rekomendasi_bps') ? 'active' : null }}" href="{{url('verifikasi_rekomendasi_bps')}}" role="tab">Verifikasi Rekomendasi Survei</a>
							</li>
							
							<li class="{{request()->is('verifikasi_kompromin_bps') ? 'active' : null }}">
							<a class="nav-link {{request()->is('verifikasi_kompromin_bps') ? 'active' : null }}" href="{{url('verifikasi_kompromin_bps')}}" role="tab">Verifikasi Rekomendasi Kompromin</a>
							</li>
						
											
										</ul>
									
				<div class="tab-content clearfix">
						<div class="tab-pane {{request()->is('verifikasi_rekomendasi_bps') ? 'active' : null }}" id="{{url('verifikasi_rekomendasi_bps')}}" role="tabpanel">
						    <div class="container-fluid">
					<!-- OVERVIEW -->
			
					
					 <div class="panel panel-headline"><div class="panel-heading">
        <h3 class="panel-title">Verifikasi Rekomendasi Survei</h3><hr>
        
  
  
  @if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten'))
	<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th> Dinas</th>
                        <th> Judul Kegiatan</th>
                        <th> Waktu Pengajuan</th>
                        <th>Surat Pengantar</th>
						<th>Instrumen</th>
						<th> <center>Verifikasi Tahap 1 <br> Walidata</center></th>
						<th> <center>Verifikasi Tahap 2 <br> BPS</center></th>
                        <th> Surat Rekomendasi</th>
                        <th>Detail</th>
                       
                
                        
                    </tr>
            </thead>
                    @foreach ($rekomendasis as $post)
                    <tr>
                        <td class="text-center">{{ ++$k }}</td>
                        <td>{{ $post->b1r2 }}</td>
                        <td>{{ $post->b1r1 }}</td>
                        <td>{{ substr($post->created_at ,0,-8) }}</td>
                        @if(is_null($post->surat_pengantar)) <td> </td> @else
                        <td><a href="{{ url('public/documents/'. $post->surat_pengantar) }}" class="lnr lnr-download"></a></td>@endif
                        
                         @if(is_null($post->instrumen)) <td> </td> @else
                        <td><a href="{{ url('public/documents/'. $post->instrumen) }}" class="lnr lnr-download"></a></td> @endif
                        
                        <td> @if($post->status == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif @if($post->status == '2' )<a href="" id="editCompany2" data-toggle="modal" data-target='#modal_catatanWali' data-id="{{ $post->id }}">lihat catatan</a>	
                     @elseif(is_null($post->status)) Belum Diverifikasi @else</td> @endif 
                        
                        
                        <td> 
                        @if( ($post->status_bps) == 2)
                        <center> <i class="fa fa-close" style="color:red"></i></center>  <a href="#perbaikanlModal_{{ $post->id }}" data-toggle="modal">Lihat Perbaikan OPD</a>
                        
                        <div class="modal fade" id="perbaikanlModal_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata4">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id4" name="color_id4" value="">
                               
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Perbaikan OPD:</label>
                                    <input type="text" name="perbaikan_opd" id="perbaikan_opd" value="{{ $post->perbaikan_opd }}" class="form-control" readonly>
                                
                                </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan" id="catatan_perbaikan" value="{{ $post->catatan_perbaikan }}" class="form-control" readonly>
                                
                                </div>
                               </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>

                        @elseif( ($post->status_bps) == 1)  <center> <i class="fa fa-check" style="color:green"></i></center>
                        @elseif(is_null($post->status_bps) && ($post->status == 1) ) Belum Diverifikasi
                        @endif
                        
                        @if( ($post->status) == 1)
                        <a href="" class="btn btn-primary btn-sm" id="editCompany3" data-toggle="modal" data-target='#practice_modal3' data-id="{{ $post->id }}">Verifikasi</a>
                        @else Menunggu Verifikasi Walidata @endif
                        </td>
                        
                        
                        <td>
                            @if( ($post->status_bps) == 1)
                            <a href="#rekomendasiModal_{{ $post->id }}" data-toggle="modal" class="lnr lnr-upload"></a>
                            
                            <div class="modal fade" id="rekomendasiModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Upload Surat Rekomendasi</h3>
														</div>
                            
                                <div class="modal-body">
							
									 <form enctype="multipart/form-data" action="{{ route('customers.upload_surat') }}" method="POST">
                                <input type="file" name="surat">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
                    
                    @if(is_null($post->surat_rekomendasi))
                            @else
                          &nbsp &nbsp  <a href="{{ url('public/documents/'. $post->surat_rekomendasi) }}" class="lnr lnr-download"></a> @endif
   
                           
                            @else 
                            
                            
                            @endif
                            
                            
                        </td>
                        
                        
                        <td>
                        <a href="#detailModal_{{ $post->id }}" data-toggle="modal" class="lnr lnr-magnifier"></a>
                        
                            <div class="modal fade" id="detailModal_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="{{ $post->id }}">
                               
                               <div class="modal-body">
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal" id="tanggal" value="{{ $post->tanggal }}" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_bps" id="tanggal_bps" value="{{ $post->tanggal_bps }}" class="form-control" readonly>
                                    </div>
                                    
                                    
                                    
                                
                                
                                </div>
                                
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                  
                        
                        </td>
                        
                       
                        
                      
                    </tr>
                    @endforeach
    </table>
    
@else
@endif
    
    
    <div class="modal fade" id="modal_catatanWali">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="catatanWali_id" name="catatanWali_id" value="">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar" id="komentar" value="" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>

  
    
    

	<div class="modal fade" id="practice_modal3" >
                        <div class="modal-dialog" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Rekomendasi</h3>
														</div>
                                <input type="hidden" id="color_id3" name="color_id3" value="">
                                <div class="modal-body">
							
									
								<!-- BLOK I -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK I</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Judul:</label>
                                    <input type="text" name="b1r1" id="b1r1" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Instansi Pemerintah Penyelenggara:</label>
										<input type="text" name="b1r2" id="b1r2" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Alamat Lenkgap Instansi Penyelenggara:</label>
										<input type="text" name="b1r3a" id="b1r3a" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Provinsi</label>
										<input type="text" name="b1r3b" id="b1r3b" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Kabupaten</label>
										<input type="text" name="b1r3c" id="b1r3c" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK I -->

									<!-- BLOK II -->
									<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK II</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Penanggungjawab di Instansi:</label>
                                    <input type="text" name="b2r1a" id="b2r1a" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jabatan:</label>
										<input type="text" name="b2r1b" id="b2r1b" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Telepon:</label>
										<input type="text" name="b2r1c" id="b2r1c" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Fax</label>
										<input type="text" name="b2r1d" id="b2r1d" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail</label>
										<input type="text" name="b2r1e" id="b2r1e" value="" class="form-control" readonly>
									</div>


									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Manajer Survei:</label>
                                    <input type="text" name="b2r2a" id="b2r2a" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jabatan:</label>
										<input type="text" name="b2r2b" id="b2r2b" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Alamat:</label>
										<input type="text" name="b2r2c" id="b2r2c" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Telepon:</label>
										<input type="text" name="b2r2d" id="b2r2d" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Fax</label>
										<input type="text" name="b2r2e" id="b2r2e" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail</label>
										<input type="text" name="b2r2f" id="b2r2f" value="" class="form-control" readonly>
									</div>


									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Unit Kerja Walidata</label>
										<input type="text" name="b2r3a" id="b2r3a" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail Walidata</label>
										<input type="text" name="b2r3b" id="b2r3b" value="" class="form-control" readonly>
									</div>
									
									<!-- AKHIR BLOK II -->

								<!-- BLOK III -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK III</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Survei ini dilakukan</label>
                                    <input type="text" name="b3r1" id="b3r1" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jika "berulang", Frekuensi Penyelenggaraan</label>
										<input type="text" name="b3r2" id="b3r2" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Tipe Pengumpulan Data</label>
										<input type="text" name="b3r3" id="b3r3" value="" class="form-control" readonly>
									</div>
							
							
									<!-- AKHIR BLOK III -->


									<!-- BLOK IV -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK IV</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Tujuan Survei</label>
                                    <input type="text" name="b4r1" id="b4r1" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Peubah (variabel) yang dikumpulkan pada survei ini dan periode enumerasi (referensi waktu)</label>
										<input type="text" name="b4r2" id="b4r2" value="" class="form-control" readonly>
									</div>

									<!-- AKHIR BLOK IV -->


								<!-- BLOK V -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK V</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Cara Pengumpulan Data</label>
                                    <input type="text" name="b5r1" id="b5r1" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Cakupan Wilayah Pengumpulan Data</label>
										<input type="text" name="b5r2" id="b5r2" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Jika "sebagian wilayah Indonesia", Wilayah Kegiatan</label>
                                    <input type="text" name="b5r3" id="b5r3" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengumpulan Data</label>
										<input type="text" name="b5r4" id="b5r4" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Metode Penelitian</label>
                                    <input type="text" name="b5r5" id="b5r5" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">a. Jika "Sampel Probabilitas", Metode yang Digunakan</label>
										<input type="text" name="b5r6a" id="b5r6a" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">b. Jika "Sampel Nonprobabilitas", Metode yang Digunakan</label>
                                    <input type="text" name="b5r6b" id="b5r6b" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Apakah Melakukan Uji Coba (Pilot Survey)</label>
										<input type="text" name="b5r7" id="b5r7" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Petugas Pengumpulan Data</label>
										<input type="text" name="b5r8" id="b5r8" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</label>
                                    <input type="text" name="b5r9" id="b5r9" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Apakah Melakukan Pelatihan Petugas</label>
										<input type="text" name="b5r10" id="b5r10" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Jumlah Petugas Supervisor/Penyelia/Pengawas (orang)</label>
                                    <input type="text" name="b5r11a" id="b5r11a" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jumlah Petugas Pengumpul Data/Enumerator (orang)</label>
										<input type="text" name="b5r11b" id="b5r11b" value="" class="form-control" readonly>
									</div>

									<!-- AKHIR BLOK V -->


									<!-- BLOK VI -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK VI</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Jenis Rancangan Sampel</label>
                                    <input type="text" name="b6r1" id="b6r1" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Kerangka Sampel</label>
										<input type="text" name="b6r2" id="b6r2" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pemilihan Sampel</label>
										<input type="text" name="b6r3" id="b6r3" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Keseluruhan fraksi sampel (overall sampling fraction)</label>
                                    <input type="text" name="b6r4" id="b6r4" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Unit Sampel</label>
										<input type="text" name="b6r5" id="b6r5" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Perkiraan sampling error</label>
										<input type="text" name="b6r6" id="b6r6" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Responden</label>
										<input type="text" name="b6r7" id="b6r7" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK VI -->
                               


									<!-- BLOK VII -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK VII</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Metode Pengolahan Penyuntingan (Editing)</label>
                                    <input type="text" name="b7r1a" id="b7r1a" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengolahan Penyandian (Coding)</label>
										<input type="text" name="b7r1b" id="b7r1b" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengolahan  Penyahihan (Validasi)</label>
										<input type="text" name="b7r1c" id="b7r1c" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Tingkat Estimasi yang diharapkan</label>
                                    <input type="text" name="b7r2" id="b7r2" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Analisis</label>
										<input type="text" name="b7r3" id="b7r3" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Publikasi dalam media cetak</label>
										<input type="text" name="b7r4a" id="b7r4a" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Publikasi dalam media elektronik</label>
										<input type="text" name="b7r4b" id="b7r4b" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Macro Data</label>
										<input type="text" name="b7r4c" id="b7r4c" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Micro Data</label>
										<input type="text" name="b7r4d" id="b7r4d" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label"> Lainnya</label>
										<input type="text" name="b7r4e" id="b7r4e" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Perencanaan/Persiapan</label>
										<input type="text" name="b7r5a" id="b7r5a" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Pelaksanaan Lapangan</label>
										<input type="text" name="b7r5b" id="b7r5b" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Pengolahan</label>
										<input type="text" name="b7r5c" id="b7r5c" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Analisis</label>
										<input type="text" name="b7r5d" id="b7r5d" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Penyajian</label>
										<input type="text" name="b7r5e" id="b7r5e" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Waktu Ketersediaan hasil survei secara umum</label>
										<input type="text" name="b7r6" id="b7r6" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK VII -->
									
									<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Verifikasi</h3>
														</div>
														
													<div class="form-group">
                        <label for=""><strong>Verifikasi</strong></label>
                        <select name="status_bps" class="form-control" id="status_bps" >
				

						<option value ="2">Tidak Layak</option>
						<option value ="1">Layak</option>
					

						</select>
                    </div>
                                                        
                                                        <div class="form-group">
                                                         <textarea class="form-control" style="height:150px" name="komentar_bps" id="komentar_bps" placeholder="Masukkan Komentar"></textarea>
							                        	</div>
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-dismiss="modal"> Kembali</a>
                                      <button type="submit" value="Submit3" id="submit3"  class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding: 7px 24px;">Simpan</button>
                              
                                   
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>

    
    
    
    </div>
    </div>
					<!-- END OVERVIEW -->
			            </div>
					</div>

					<div class="tab-pane {{request()->is('verifikasi_kompromin_bps') ? 'active' : null }}" id="{{url('verifikasi_kompromin_bps')}}" role="tabpanel">


		<div class="container-fluid">
					<!-- OVERVIEW -->
						
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Verifikasi Rekomendasi Kompromin</h3>
						</div>
						<div class="panel-body">
<table class="table table-bordered" id="example4">
                <thead>
                    <tr>
					<th width="20px" class="text-center">No</th>
                        <th> Dinas</th>
                        <th> Judul Kegiatan</th>
                        <th> Waktu Pengajuan</th>
                        <th>Surat Pengantar</th>
						<th>Instrumen</th>
						<th> <center>Verifikasi Tahap 1 <br> Walidata</center></th>
						<th> <center>Verifikasi Tahap 2 <br> BPS</center></th>
                        <th> Surat Rekomendasi</th>
                        <th>Detail</th>
                    </tr>
            </thead>
                    @foreach ($kompromins as $post)
                    <tr>
					<td class="text-center">{{ ++$l }}</td>
                        <td>{{ $post->organisasi }}</td>
                        <td>{{ $post->b1r1_k }}</td>
                        <td>{{ substr($post->created_at ,0,-8) }}</td>
                        @if(is_null($post->surat_pengantar)) <td> </td> @else
                        <td><a href="{{ url('public/documents/'. $post->surat_pengantar) }}" class="lnr lnr-download"></a></td>@endif
                        
                         @if(is_null($post->instrumen)) <td> </td> @else
                        <td><a href="{{ url('public/documents/'. $post->instrumen) }}" class="lnr lnr-download"></a></td> @endif



						<td> @if($post->status_k == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status_k == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif @if($post->status_k == '2' )<a href="#catatanWali_{{ $post->id }}" data-toggle="modal">Lihat Catatan</a>		
                     @elseif(is_null($post->status_k)) Belum Diverifikasi @else</td> @endif 
                   
					
					 <div class="modal fade" id="catatanWali_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata4">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id4" name="color_id4" value="">
                               
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar_k" id="komentar_k" value="{{ $post->komentar_k }}" class="form-control" readonly>
                                
                                </div>
                                </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>


				<td> 
                        @if( ($post->status_k_bps) == 2)
                        <center> <i class="fa fa-close" style="color:red"></i></center>  <a href="#perbaikanlModalK_{{ $post->id }}" data-toggle="modal">Lihat Perbaikan OPD</a>
                        
                        <div class="modal fade" id="perbaikanlModalK_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata4">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id4" name="color_id4" value="">
                               
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Perbaikan OPD:</label>
                                    <input type="text" name="perbaikan_opd_k" id="perbaikan_opd_k" value="{{ $post->perbaikan_opd_k }}" class="form-control" readonly>
                                
                                </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan_k" id="catatan_perbaikan_k" value="{{ $post->catatan_perbaikan_k }}" class="form-control" readonly>
                                
                                </div>
                               </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>

                        @elseif( ($post->status_k_bps) == 1)  <center> <i class="fa fa-check" style="color:green"></i></center>
                        @elseif(is_null($post->status_k_bps) && ($post->status_k == 1) ) Belum Diverifikasi
                        @endif
                        
                        @if( ($post->status_k) == 1)
                        <a href="" class="btn btn-primary btn-sm" id="editCompany4" data-toggle="modal" data-target='#practice_modal4' data-id="{{ $post->id }}">Verifikasi</a>
                        @else Menunggu Verifikasi Walidata @endif
                        </td>


						<td>
                            @if( ($post->status_k_bps) == 1)
                            <a href="#rekomendasiModal_{{ $post->id }}" data-toggle="modal" class="lnr lnr-upload"></a>
                            
                            <div class="modal fade" id="rekomendasiModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Upload Surat Rekomendasi</h3>
														</div>
                            
                                <div class="modal-body">
							
								<form enctype="multipart/form-data" action="{{ route('customers2.upload_surat_kompromin') }}" method="POST">
                                <input type="file" name="surat">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
                    
                    @if(is_null($post->surat_rekomendasi))
                            @else
                          &nbsp &nbsp  <a href="{{ url('public/documents/'. $post->surat_rekomendasi) }}" class="lnr lnr-download"></a> @endif
   
                           
                            @else 
                            
                            
                            @endif
                            
                            
                        </td>

						<td>
                        <a href="#detailModalK_{{ $post->id }}" data-toggle="modal" class="lnr lnr-magnifier"></a>
                        
                            <div class="modal fade" id="detailModalK_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="{{ $post->id }}">
                               
                               <div class="modal-body">
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal_k" id="tanggal_k" value="{{ $post->tanggal_k }}" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_k_bps" id="tanggal_k_bps" value="{{ $post->tanggal_k_bps }}" class="form-control" readonly>
                                    </div>
                                    
                                    
                                    
                                
                                
                                </div>
                                
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                  
                        
                        </td>

					
					</tr>
                    @endforeach
    </table>
    
    <div class="modal fade" id="practice_modal4" >
                        <div class="modal-dialog" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Rekomendasi</h3>
														</div>
                                <input type="hidden" id="color_id4" name="color_id4" value="">
                                <div class="modal-body">
							
									
								<!-- BLOK I -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK I</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Judul:</label>
                                    <input type="text" name="b1r1_k" id="b1r1_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Instansi Pemerintah Penyelenggara:</label>
										<input type="text" name="b1r2_k" id="b1r2_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Alamat Lenkgap Instansi Penyelenggara:</label>
										<input type="text" name="b1r3a_k" id="b1r3a_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Provinsi</label>
										<input type="text" name="b1r3b_k" id="b1r3b_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Kabupaten</label>
										<input type="text" name="b1r3c_k" id="b1r3c_k" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK I -->

									<!-- BLOK II -->
									<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK II</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Penanggungjawab di Instansi:</label>
                                    <input type="text" name="b2r1a_k" id="b2r1a_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jabatan:</label>
										<input type="text" name="b2r1b_k" id="b2r1b_k" value="" class="form-control" readonly>
									</div>
									
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Alamat:</label>
										<input type="text" name="b2r1c_k" id="b2r1c_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Telepon:</label>
										<input type="text" name="b2r1d_k" id="b2r1d_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Fax</label>
										<input type="text" name="b2r1e_k" id="b2r1e_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail</label>
										<input type="text" name="b2r1f_k" id="b2r1f_k" value="" class="form-control" readonly>
									</div>


									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Penanggungjawab teknis kegiatan:</label>
                                    <input type="text" name="b2r2a_k" id="b2r2a_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jabatan:</label>
										<input type="text" name="b2r2b_k" id="b2r2b_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Alamat:</label>
										<input type="text" name="b2r2c_k" id="b2r2c_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Telepon:</label>
										<input type="text" name="b2r2d_k" id="b2r2d_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Fax</label>
										<input type="text" name="b2r2e_k" id="b2r2e_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail</label>
										<input type="text" name="b2r2f_k" id="b2r2f_k" value="" class="form-control" readonly>
									</div>


									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Unit Kerja Walidata</label>
										<input type="text" name="b2r3a_k" id="b2r3a_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">E-Mail Walidata</label>
										<input type="text" name="b2r3b_k" id="b2r3b_k" value="" class="form-control" readonly>
									</div>
									
									<!-- AKHIR BLOK II -->

								<!-- BLOK III -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK III</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Tujuan dan Manfaat Kegiatan</label>
                                    <input type="text" name="b3r1_k" id="b3r1_k" value="" class="form-control" readonly>
                                
                                	</div>
                                	<label for="tagpdf" class="col-form-label">Jadwal Kegiatan</label>
                                	
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Perencanaan/Persiapan</label>
										<input type="text" name="b3r2a_k" id="b3r2a_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Pengumpulan Data</label>
										<input type="text" name="b3r2b_k" id="b3r2b_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Pengolahan</label>
										<input type="text" name="b3r2c_k" id="b3r2c_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Analisis</label>
										<input type="text" name="b3r2d_k" id="b3r2d_k" value="" class="form-control" readonly>
									</div>
									
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Diseminasi</label>
										<input type="text" name="b3r2e_k" id="b3r2e_k" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK III -->


									<!-- BLOK IV -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK IV</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Variabel</label>
                                    <input type="text" name="b4r1_k" id="b4r1_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Referensi Waktu</label>
										<input type="text" name="b4r2_k" id="b4r2_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Sumber</label>
										<input type="text" name="b4r3_k" id="b4r3_k" value="" class="form-control" readonly>
									</div>

									<!-- AKHIR BLOK IV -->


								<!-- BLOK V -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK V</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Kegiatan ini dilakukan</label>
                                    <input type="text" name="b5r1_k" id="b5r1_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jika "berulang", Frekuensi Penyelenggaraan</label>
										<input type="text" name="b5r2_k" id="b5r2_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Jenis Data</label>
                                    <input type="text" name="b5r3_k" id="b5r3_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengumpulan Data</label>
										<input type="text" name="b5r4_k" id="b5r4_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Cakupan Wilayah Pengumpulan Data</label>
                                    <input type="text" name="b5r5_k" id="b5r5_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Jika 5.5 = "sebagian wilayah Indonesia", Wilayah Kegiatan</label>
										<input type="text" name="b5r6_k" id="b5r6_k" value="" class="form-control" readonly>
									</div>
									

									<!-- AKHIR BLOK V -->


									<!-- BLOK VI -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK VI</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Petugas Pengumpulan Data</label>
                                    <input type="text" name="b6r1_k" id="b6r1_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</label>
										<input type="text" name="b6r2_k" id="b6r2_k" value="" class="form-control" readonly>
									</div>
                                    
                                    <label for="tagpdf" class="col-form-label">Jumlah Petugas</label>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Supervisor/Penyelia/Pengawas (orang)</label>
										<input type="text" name="b6r3a_k" id="b6r3a_k" value="" class="form-control" readonly>
									</div>
									
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Pengumpul Data/Enumerator (orang)</label>
										<input type="text" name="b6r3b_k" id="b6r3b_k" value="" class="form-control" readonly>
									</div>
									
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Apakah Melakukan Pelatihan Petugas</label>
                                    <input type="text" name="b6r4_k" id="b6r4_k" value="" class="form-control" readonly>
                                
                                	</div>
								
									<!-- AKHIR BLOK VI -->
                               


									<!-- BLOK VII -->
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">BLOK VII</h3>
														</div>
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Metode Pengolahan Penyuntingan (Editing)</label>
                                    <input type="text" name="b7r1a_k" id="b7r1a_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengolahan Input Data (Data Entry)</label>
										<input type="text" name="b7r1b_k" id="b7r1b_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengolahan Penyandian (Coding)</label>
										<input type="text" name="b7r1c_k" id="b7r1c_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Metode Pengolahan  Penyajihan (Validasi)</label>
										<input type="text" name="b7r1d_k" id="b7r1d_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Metode Analisis</label>
                                    <input type="text" name="b7r2_k" id="b7r2_k" value="" class="form-control" readonly>
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Unit Analisis</label>
										<input type="text" name="b7r3_k" id="b7r3_k" value="" class="form-control" readonly>
									</div>
									
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Tingkat Penyajian Data</label>
										<input type="text" name="b7r4_k" id="b7r4_k" value="" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Publikasi dalam media cetak</label>
										<input type="text" name="b7r5a_k" id="b7r5a_k" value="" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Publikasi dalam media elektronik</label>
										<input type="text" name="b7r5b_k" id="b7r5b_k" value="" class="form-control" readonly>
									</div>
								
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Waktu Ketersediaan hasil kegiatan secara umum</label>
										<input type="text" name="b7r6_k" id="b7r6_k" value="" class="form-control" readonly>
									</div>

							
									<!-- AKHIR BLOK VII -->
								
								</div>
								
									<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Verifikasi</h3>
														</div>
														
													<div class="form-group">
                        <label for=""><strong>Verifikasi</strong></label>
                        <select name="status_k_bps" class="form-control" id="status_k_bps" >
				

						<option value ="2">Tidak Layak</option>
						<option value ="1">Layak</option>
					

						</select>
                    </div>
                                                        
                                                        <div class="form-group">
                                                         <textarea class="form-control" style="height:150px" name="komentar_k_bps" id="komentar_k_bps" placeholder="Masukkan Komentar"></textarea>
							                        	</div>
								</div>
								
								
								 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit4" id="submit4"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
								
                           
								 
                            </div>
                           </form>
                        </div>
                    </div>
    
    
    
    </div>
    </div>
					<!-- END OVERVIEW -->
			            </div>			
					
						
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
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    

<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
		
$('#example3').DataTable({
				
			});
			
$('body').on('click', '#editCompany2', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('catatan_walidata/' + id + '/edit_catatanWali', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#modal_catatanWali').modal('show');
         $('#catatanWali_id').val(data.data.id);
         $('#komentar').val(data.data.komentar);

     })
});




$('body').on('click', '#submit3', function (event) {
    event.preventDefault()
    var id = $("#color_id3").val();
    var b1r1 = $("#b1r1").val();
	var b1r2 = $("#b1r2").val();
	var b1r3a = $("#b1r3a").val();
	var b1r3b = $("#b1r3b").val();
	var b1r3c = $("#b1r3c").val();

	var b2r1a = $("#b2r1a").val();
	var b2r1b = $("#b2r1b").val();
	var b2r1c = $("#b2r1c").val();
	var b2r1d = $("#b2r1d").val();
	var b2r1e = $("#b2r1e").val();
	var b2r2a = $("#b2r2a").val();
	var b2r2b = $("#b2r2b").val();
	var b2r2c = $("#b2r2c").val();
	var b2r2d = $("#b2r2d").val();
	var b2r2e = $("#b2r2e").val();
	var b2r2f = $("#b2r2f").val();
	var b2r3a = $("#b2r3a").val();
	var b2r3b = $("#b2r3b").val();

	var b3r1 = $("#b3r1").val();
	var b3r2 = $("#b3r2").val();
	var b3r3 = $("#b3r3").val();

	var b4r1 = $("#b4r1").val();
	var b4r2 = $("#b4r2").val();

	var b5r1 = $("#b5r1").val();
	var b5r2 = $("#b5r2").val();
	var b5r3 = $("#b5r3").val();
	var b5r4 = $("#b5r4").val();
	var b5r5 = $("#b5r5").val();
	var b5r6a = $("#b5r6a").val();
	var b5r6b = $("#b5r6b").val();
	var b5r7 = $("#b5r7").val();
	var b5r8 = $("#b5r8").val();
	var b5r9 = $("#b5r9").val();
	var b5r10 = $("#b5r10").val();
	var b5r11a = $("#b5r11a").val();
	var b5r11b = $("#b5r11b").val();

	var b6r1 = $("#b6r1").val();
	var b6r2 = $("#b6r2").val();
	var b6r3 = $("#b6r3").val();
	var b6r4 = $("#b6r4").val();
	var b6r5 = $("#b6r5").val();
	var b6r6 = $("#b6r6").val();
	var b6r7 = $("#b6r7").val();

	var b7r1a = $("#b7r1a").val();
	var b7r1b = $("#b7r1b").val();
	var b7r1c = $("#b7r1c").val();
	var b7r2 = $("#b7r2").val();
	var b7r3 = $("#b7r3").val();
	var b7r4a = $("#b7r4a").val();
	var b7r4b = $("#b7r4b").val();
	var b7r4c = $("#b7r4c").val();
	var b7r4d = $("#b7r4d").val();
	var b7r4e = $("#b7r4e").val();
	var b7r5a = $("#b7r5a").val();
	var b7r5b = $("#b7r5b").val();
	var b7r5c = $("#b7r5c").val();
	var b7r5d = $("#b7r5d").val();
	var b7r5e = $("#b7r5e").val();
	var b7r6 = $("#b7r6").val();
	
	var status_bps = $("#status_bps").val();
	var komentar_bps = $("#komentar_bps").val();
	var petugas_bps = '{{Auth::user()->name}}'; 

    $.ajax({
      url: 'verif_rekomendasi_bps/' + id,
      type: "POST",
      data: {
        id: id,
        b1r1: b1r1,
		b1r2: b1r2,
		b1r3a: b1r3a,
		b1r3b: b1r3b,
		b1r3c: b1r3c,

		b2r1a: b2r1a,
		b2r1b: b2r1b,
		b2r1c: b2r1c,
		b2r1d: b2r1d,
		b2r1e: b2r1e,
		b2r2a: b2r2a,
		b2r2b: b2r2b,
		b2r2c: b2r2c,
		b2r2d: b2r2d,
		b2r2e: b2r2e,
		b2r2f: b2r2f,
		b2r3a: b2r3a,
		b2r3b: b2r3b,

		b3r1: b3r1,
		b3r2: b3r2,
		b3r3: b3r3,

		b4r1: b4r1,
		b4r2: b4r2,

		b5r1: b5r1,
		b5r2: b5r2,
		b5r3: b5r3,
		b5r4: b5r4,
		b5r5: b5r5,
		b5r6a: b5r6a,
		b5r6b: b5r6b,
		b5r7: b5r7,
		b5r8: b5r8,
		b5r9: b5r9,
		b5r10: b5r10,
		b5r11a: b5r11a,
		b5r11b: b5r11b,

		b6r1: b6r1,
		b6r2: b6r2,
		b6r3: b6r3,
		b6r4: b6r4,
		b6r5: b6r5,
		b6r6: b6r6,
		b6r7: b6r7,

		b7r1a: b7r1a,
		b7r1b: b7r1b,
		b7r1c: b7r1c,
		b7r2: b7r2,
		b7r3: b7r3,
		b7r4a: b7r4a,
		b7r4b: b7r4b,
		b7r4c: b7r4c,
		b7r4d: b7r4d,
		b7r4e: b7r4e,
		b7r5a: b7r5a,
		b7r5b: b7r5b,
		b7r5c: b7r5c,
		b7r5d: b7r5d,
		b7r5e: b7r5e,
		b7r6: b7r6,
		
		status_bps: status_bps,
		komentar_bps: komentar_bps,
		petugas_bps : petugas_bps
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata3').trigger("reset");
          $('#practice_modal3').modal('hide');
          window.location.reload(true);
      }
  });
});




$('body').on('click', '#editCompany3', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('verif_rekomendasi_bps/' + id + '/edit_bps', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit3').val("Edit PDF");
	 $('#practice_modal3').modal('show');
	 $('#color_id3').val(data.data.id);
	 $('#b1r1').val(data.data.b1r1);
	 $('#b1r2').val(data.data.b1r2);
	 $('#b1r3a').val(data.data.b1r3a);
	 $('#b1r3b').val(data.data.b1r3b);
	 $('#b1r3c').val(data.data.b1r3c);

	 $('#b2r1a').val(data.data.b2r1a);
	 $('#b2r1b').val(data.data.b2r1b);
	 $('#b2r1c').val(data.data.b2r1c);
	 $('#b2r1d').val(data.data.b2r1d);
	 $('#b2r1e').val(data.data.b2r1e);
	 $('#b2r2a').val(data.data.b2r2a);
	 $('#b2r2b').val(data.data.b2r2b);
	 $('#b2r2c').val(data.data.b2r2c);
	 $('#b2r2d').val(data.data.b2r2d);
	 $('#b2r2e').val(data.data.b2r2e);
	 $('#b2r2f').val(data.data.b2r2f);
	 $('#b2r3a').val(data.data.b2r3a);
	 $('#b2r3b').val(data.data.b2r3b);

	 $('#b3r1').val(data.data.b3r1);
	 $('#b3r2').val(data.data.b3r2);
	 $('#b3r3').val(data.data.b3r3);

	 $('#b4r1').val(data.data.b4r1);
	 $('#b4r2').val(data.data.b4r2);

	 $('#b5r1').val(data.data.b5r1);
	 $('#b5r2').val(data.data.b5r2);
	 $('#b5r3').val(data.data.b5r3);
	 $('#b5r4').val(data.data.b5r4);
	 $('#b5r5').val(data.data.b5r5);
	 $('#b5r6a').val(data.data.b5r6a);
	 $('#b5r6b').val(data.data.b5r6b);
	 $('#b5r7').val(data.data.b5r7);
	 $('#b5r8').val(data.data.b5r8);
	 $('#b5r9').val(data.data.b5r9);
	 $('#b5r10').val(data.data.b5r10);
	 $('#b5r11a').val(data.data.b5r11a);
	 $('#b5r11b').val(data.data.b5r11b);

	 $('#b6r1').val(data.data.b6r1);
	 $('#b6r2').val(data.data.b6r2);
	 $('#b6r3').val(data.data.b6r3);
	 $('#b6r4').val(data.data.b6r4);
	 $('#b6r5').val(data.data.b6r5);
	 $('#b6r6').val(data.data.b6r6);
	 $('#b6r7').val(data.data.b6r7);

	 $('#b7r1a').val(data.data.b7r1a);
	 $('#b7r1b').val(data.data.b7r1b);
	 $('#b7r1c').val(data.data.b7r1c);
	 $('#b7r2').val(data.data.b7r2);
	 $('#b7r3').val(data.data.b7r3);
	 $('#b7r4a').val(data.data.b7r4a);
	 $('#b7r4b').val(data.data.b7r4b);
	 $('#b7r4c').val(data.data.b7r4c);
	 $('#b7r4d').val(data.data.b7r4d);
	 $('#b7r4e').val(data.data.b7r4e);
	 $('#b7r5a').val(data.data.b7r5a);
	 $('#b7r5b').val(data.data.b7r5b);
	 $('#b7r5c').val(data.data.b7r5c);
	 $('#b7r5d').val(data.data.b7r5d);
	 $('#b7r5e').val(data.data.b7r5e);
	 $('#b7r6').val(data.data.b7r6);
	 
	 	 $('#status_bps').val(data.data.status_bps);
	 $('#komentar_bps').val(data.data.komentar_bps);
 })
});



}); 


</script>


 <script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
		
$('#example4').DataTable({
				
			});




$('body').on('click', '#submit4', function (event) {
    event.preventDefault()
    var id = $("#color_id4").val();
    var b1r1_k = $("#b1r1_k").val();
	var b1r2_k = $("#b1r2_k").val();
	var b1r3a_k = $("#b1r3a_k").val();
	var b1r3b_k = $("#b1r3b_k").val();
	var b1r3c_k = $("#b1r3c_k").val();

	var b2r1a_k = $("#b2r1a_k").val();
	var b2r1b_k = $("#b2r1b_k").val();
	var b2r1c_k = $("#b2r1c_k").val();
	var b2r1d_k = $("#b2r1d_k").val();
	var b2r1e_k = $("#b2r1e_k").val();
	var b2r1f_k = $("#b2r1f_k").val();
	var b2r2a_k = $("#b2r2a_k").val();
	var b2r2b_k = $("#b2r2b_k").val();
	var b2r2c_k = $("#b2r2c_k").val();
	var b2r2d_k = $("#b2r2d_k").val();
	var b2r2e_k = $("#b2r2e_k").val();
	var b2r2f_k = $("#b2r2f_k").val();
	var b2r3a_k = $("#b2r3a_k").val();
	var b2r3b_k = $("#b2r3b_k").val();

	var b3r1_k = $("#b3r1_k").val();
	var b3r2a_k = $("#b3r2a_k").val();
	var b3r2b_k = $("#b3r2b_k").val();
	var b3r2c_k = $("#b3r2c_k").val();
	var b3r2d_k = $("#b3r2d_k").val();
	var b3r2e_k = $("#b3r2e_k").val();
	

	var b4r1_k = $("#b4r1_k").val();
	var b4r2_k = $("#b4r2_k").val();
	var b4r3_k = $("#b4r3_k").val();

	var b5r1_k = $("#b5r1_k").val();
	var b5r2_k = $("#b5r2_k").val();
	var b5r3_k = $("#b5r3_k").val();
	var b5r4_k = $("#b5r4_k").val();
	var b5r5_k = $("#b5r5_k").val();
	var b5r6_k = $("#b5r6_k").val();

	var b6r1_k = $("#b6r1_k").val();
	var b6r2_k = $("#b6r2_k").val();
	var b6r3a_k = $("#b6r3a_k").val();
	var b6r3b_k = $("#b6r3b_k").val();
	var b6r4_k = $("#b6r4_k").val();
	

	var b7r1a_k = $("#b7r1a_k").val();
	var b7r1b_k = $("#b7r1b_k").val();
	var b7r1c_k = $("#b7r1c_k").val();
	var b7r1d_k = $("#b7r1d_k").val();
	var b7r2_k = $("#b7r2_k").val();
	var b7r3_k = $("#b7r3_k").val();
	var b7r4_k = $("#b7r4_k").val();

	var b7r5a_k = $("#b7r5a_k").val();
	var b7r5b_k = $("#b7r5b_k").val();

	var b7r6_k = $("#b7r6_k").val();
	
		var status_k_bps = $("#status_k_bps").val();
	var komentar_k_bps = $("#komentar_k_bps").val();
	var petugas_bps = '{{Auth::user()->name}}'; 

    $.ajax({
      url: 'color_kompromin_v_k/' + id,
      type: "POST",
      data: {
        id: id,
        b1r1_k: b1r1_k,
		b1r2_k: b1r2_k,
		b1r3a_k: b1r3a_k,
		b1r3b_k: b1r3b_k,
		b1r3c_k: b1r3c_k,

		b2r1a_k: b2r1a_k,
		b2r1b_k: b2r1b_k,
		b2r1c_k: b2r1c_k,
		b2r1d_k: b2r1d_k,
		b2r1e_k: b2r1e_k,
		b2r1f_k: b2r1f_k,
		b2r2a_k: b2r2a_k,
		b2r2b_k: b2r2b_k,
		b2r2c_k: b2r2c_k,
		b2r2d_k: b2r2d_k,
		b2r2e_k: b2r2e_k,
		b2r2f_k: b2r2f_k,
		b2r3a_k: b2r3a_k,
		b2r3b_k: b2r3b_k,

		b3r1_k: b3r1_k,
		b3r2a_k: b3r2a_k,
		b3r2b_k: b3r2b_k,
		b3r2c_k: b3r2c_k,
		b3r2d_k: b3r2d_k,
		b3r2e_k: b3r2e_k,

		b4r1_k: b4r1_k,
		b4r2_k: b4r2_k,
		b4r3_k: b4r3_k,

		b5r1_k: b5r1_k,
		b5r2_k: b5r2_k,
		b5r3_k_k: b5r3_k,
		b5r4_k: b5r4_k,
		b5r5_k: b5r5_k,
		b5r6_k: b5r6_k,
	

		b6r1_k: b6r1_k,
		b6r2_k: b6r2_k,
		b6r3a_k: b6r3a_k,
		b6r3b_k: b6r3b_k,
		b6r4_k: b6r4_k,
	

		b7r1a_k: b7r1a_k,
		b7r1b_k: b7r1b_k,
		b7r1c_k: b7r1c_k,
		b7r1d_k: b7r1d_k,
		b7r2_k: b7r2_k,
		b7r3_k: b7r3_k,
		b7r4_k: b7r4_k,
	
		b7r5a_k: b7r5a_k,
		b7r5b_k: b7r5b_k,
	
		b7r6_k: b7r6_k,
			status_k_bps: status_k_bps,
		komentar_k_bps: komentar_k_bps,
		petugas_bps : petugas_bps
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata4').trigger("reset");
          $('#practice_modal4').modal('hide');
          window.location.reload(true);
      }
  });
});




$('body').on('click', '#editCompany4', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('color_kompromin_v_k/' + id + '/edit_kompromin_v_k', function (data) {
	 $('#userCrudModal4').html("Edit PDF");
	 $('#submit4').val("Edit PDF");
	 $('#practice_modal4').modal('show');
	 $('#color_id4').val(data.data.id);
	 $('#b1r1_k').val(data.data.b1r1_k);
	 $('#b1r2_k').val(data.data.b1r2_k);
	 $('#b1r3a_k').val(data.data.b1r3a_k);
	 $('#b1r3b_k').val(data.data.b1r3b_k);
	 $('#b1r3c_k').val(data.data.b1r3c_k);

	 $('#b2r1a_k').val(data.data.b2r1a_k);
	 $('#b2r1b_k').val(data.data.b2r1b_k);
	 $('#b2r1c_k').val(data.data.b2r1c_k);
	 $('#b2r1d_k').val(data.data.b2r1d_k);
	 $('#b2r1e_k').val(data.data.b2r1e_k);
	 $('#b2r1f_k').val(data.data.b2r1f_k);
	 $('#b2r2a_k').val(data.data.b2r2a_k);
	 $('#b2r2b_k').val(data.data.b2r2b_k);
	 $('#b2r2c_k').val(data.data.b2r2c_k);
	 $('#b2r2d_k').val(data.data.b2r2d_k);
	 $('#b2r2e_k').val(data.data.b2r2e_k);
	 $('#b2r2f_k').val(data.data.b2r2f_k);
	 $('#b2r3a_k').val(data.data.b2r3a_k);
	 $('#b2r3b_k').val(data.data.b2r3b_k);

	 $('#b3r1_k').val(data.data.b3r1_k);
	 $('#b3r2a_k').val(data.data.b3r2a_k);
  	 $('#b3r2b_k').val(data.data.b3r2b_k);
  	 $('#b3r2c_k').val(data.data.b3r2c_k);
  	 $('#b3r2d_k').val(data.data.b3r2d_k);
  	 $('#b3r2e_k').val(data.data.b3r2e_k);

	 $('#b4r1_k').val(data.data.b4r1_k);
	 $('#b4r2_k').val(data.data.b4r2_k);
	 $('#b4r3_k').val(data.data.b4r3_k);

	 $('#b5r1_k').val(data.data.b5r1_k);
	 $('#b5r2_k').val(data.data.b5r2_k);
	 $('#b5r3_k').val(data.data.b5r3_k);
	 $('#b5r4_k').val(data.data.b5r4_k);
	 $('#b5r5_k').val(data.data.b5r5_k);
	 $('#b5r6_k').val(data.data.b5r6_k);
	

	 $('#b6r1_k').val(data.data.b6r1_k);
	 $('#b6r2_k').val(data.data.b6r2_k);
	 $('#b6r3a_k').val(data.data.b6r3a_k);
	 $('#b6r3b_k').val(data.data.b6r3b_k);
	 $('#b6r4_k').val(data.data.b6r4_k);
	

	 $('#b7r1a_k').val(data.data.b7r1a_k);
	 $('#b7r1b_k').val(data.data.b7r1b_k);
	 $('#b7r1c_k').val(data.data.b7r1c_k);
	 $('#b7r1d_k').val(data.data.b7r1d_k);
	 $('#b7r2_k').val(data.data.b7r2_k);
	 $('#b7r3_k').val(data.data.b7r3_k);
	 $('#b7r4_k').val(data.data.b7r4_k);
	
	 $('#b7r5a_k').val(data.data.b7r5a_k);
	 $('#b7r5b_k').val(data.data.b7r5b_k);
	
	 $('#b7r6_k').val(data.data.b7r6_k);
	 $('#status_k_bps').val(data.data.status_k_bps);
	 $('#komentar_k_bps').val(data.data.komentar_k_bps);
 })
});

}); 


</script>

</body>
</html>
