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
                        @if( (Auth::user()->role == 'Admin OPD') )  <li><a href="user_opd" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
						
						  @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Walidata') || (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Operator OPD') ) <li>
							<a href="#subPages2" data-toggle="collapse" class="active" aria-expanded="false"><i class="lnr lnr-bubble"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse in" aria-expanded="false" style="">
								<ul class="nav">
								@if(Auth::user()->role == 'Admin BPS')	<li><a href="verifikasi_rekomendasi_bps" class="">Verifikasi Rekomendasi</a></li>
								@elseif(Auth::user()->role == 'Walidata') <li><a href="verifikasi_rekomendasi" class="">Verifikasi Rekomendasi</a></li>  @else @endif
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
				<div class="row">
					<div id="belajar" class="panel-body">	
						<ul  class="nav nav-pills">
						    
						    <li class="{{request()->is('verifikasi_rekomendasi_opd') ? 'active' : null }}">
							<a class="nav-link {{request()->is('verifikasi_rekomendasi_opd') ? 'active' : null }}" href="{{url('verifikasi_rekomendasi_opd')}}" role="tab">Verifikasi Rekomendasi Survei</a>
							</li>
							
							<li class="{{request()->is('verifikasi_kompromin_opd') ? 'active' : null }}">
							<a class="nav-link {{request()->is('verifikasi_kompromin_opd') ? 'active' : null }}" href="{{url('verifikasi_kompromin_opd')}}" role="tab">Verifikasi Rekomendasi Kompromin</a>
							</li>
							
											
										</ul>
									
				<div class="tab-content clearfix">
						<div class="tab-pane {{request()->is('verifikasi_rekomendasi_opd') ? 'active' : null }}" id="{{url('verifikasi_rekomendasi_opd')}}" role="tabpanel">
						    <div class="container-fluid">
					<!-- OVERVIEW -->
			
					
					 <div class="panel panel-headline"><div class="panel-heading">
        <h3 class="panel-title">Verifikasi Rekomendasi Survei</h3><hr>
        
  
	<table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        
                        <th> Judul Kegiatan</th>
                        <th> Waktu Pengajuan</th>
					
						<th> <center>Verifikasi Tahap 1 <br> Walidata</center></th>
						<th> <center>Verifikasi Tahap 2 <br> BPS</center></th>
	                    <th>Detail</th>
                        <th>Status Perbaikan</th>
                        <th> Surat Rekomendasi</th>
                       
                    </tr>
            </thead>
                    @foreach ($rekomendasis as $post)
                    <tr>
                        <td class="text-center">{{ ++$k }}</td>
                        
                        <td>{{ $post->b1r1 }}</td>
                        <td>{{ $post->created_at }}</td>
						
                        
                     
                       
                       
                       <td> @if($post->status == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif @if($post->status == '2' )<a href="#waliModal_{{ $post->id }}" data-toggle="modal" >lihat catatan</a>	
                     @elseif(is_null($post->status)) Belum Diverifikasi @else</td> @endif 
                     
                     
                     <div class="modal fade" id="waliModal_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="catatanWali_id" name="catatanWali_id" value="{{ $post->id }}">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar" id="komentar" value="{{ $post->komentar }}" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                       
                       
                       <td> @if($post->status_bps == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status_bps == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($post->status_bps == '2' )<a href="#bpsModal_{{ $post->id }}" data-toggle="modal" >lihat catatan</a>	
                      @elseif(is_null($post->status_bps) && $post->status == '1') Belum Diverifikasi @elseif(is_null($post->status)) Menunggu Verifikasi Walidata @else</td> @endif 
                       
                       
                       <div class="modal fade" id="bpsModal_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="catatanBps_id" name="catatanBps_id" value="{{ $post->id }}">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar_bps" id="komentar_bps" value="{{ $post->komentar_bps }}" class="form-control" readonly>
                                
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
                        
                         <td> @if($post->status == 2 || $post->status_bps == 2 ) <a href="" id="editCompany5" data-toggle="modal" data-target='#practice_modal5' data-id="{{ $post->id }}">Input Perbaikan</a><br> @else  </td> @endif
                       
                       <td> @if(!is_null($post->surat_rekomendasi) && $post->status_bps == 1 )
                         &nbsp &nbsp  <a href="{{ url('public/documents/'. $post->surat_rekomendasi) }}" class="lnr lnr-download"></a>
                            @else
                           @endif</td>
                    </tr>
                    @endforeach
    </table>
    
    
    
    <div class="modal fade" id="practice_modal5">
                        <div class="modal-dialog">
                           <form id="companydata5">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id5" name="color_id5" value="">
                               
                               <div class="modal-body">
                                    <div class="form-group">
                        <label for=""><strong>Status Perbaikan</strong></label>
                        <select name="role" id="perbaikan_opd" class="form-control" value="" >
						<option value>Pilih Status</option>

							<option value ="Sudah Diperbaiki">Sudah Diperbaiki</option>
						<option value ="Belum Diperbaiki">Belum Diperbaiki</option>
					
						</select>
                    </div>
                                
                               
                               
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan" id="catatan_perbaikan" value="" class="form-control">
                                
                                    </div>
                                    
                                  
                                    
                                
                                
                               </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                     <button type="submit" value="Submit5" id="submit5" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;"   class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
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

					<<div class="tab-pane {{request()->is('verifikasi_kompromin_opd') ? 'active' : null }}" id="{{url('verifikasi_kompromin_opd')}}" role="tabpanel">


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
                        <<th width="20px" class="text-center">No</th>
                        
                        <th> Judul Kegiatan</th>
                        <th> Waktu Pengajuan</th>
					
						<th> <center>Verifikasi Tahap 1 <br> Walidata</center></th>
						<th> <center>Verifikasi Tahap 2 <br> BPS</center></th>
	                    <th>Detail</th>
                        <th>Status Perbaikan</th>
                        <th>Surat Rekomendasi</th>
                    </tr>
            </thead>
                    @foreach ($kompromins as $post)
                    <tr>
                        <td class="text-center">{{ ++$l }}</td>
                        <td>{{ $post->b1r1_k }}</td>
                        <td>{{ substr($post->created_at ,0,-8) }}</td>
                        
						<td> @if($post->status_k == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status_k == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif @if($post->status_k == '2' )<a href="#waliModalK_{{ $post->id }}" data-toggle="modal" >lihat catatan</a>	
                     @elseif(is_null($post->status_k)) Belum Diverifikasi @else</td> @endif 
                     
                     
                     <div class="modal fade" id="waliModalK_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="catatanWaliK_id" name="catatanWaliK_id" value="{{ $post->id }}">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar_k" id="komentar_k" value="{{ $post->komentar_k }}" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>



				<td> @if($post->status_k_bps == 1) <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($post->status_k_bps == 2)<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($post->status_k_bps == '2' )<a href="#bpsModalK_{{ $post->id }}" data-toggle="modal" >lihat catatan</a>	
                      @elseif(is_null($post->status_k_bps) && $post->status_k == '1') Belum Diverifikasi @elseif(is_null($post->status_k)) Menunggu Verifikasi Walidata @else</td> @endif 
                       
                       
                       <div class="modal fade" id="bpsModalK_{{ $post->id }}">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="catatanBpsK_id" name="catatanBpsK_id" value="{{ $post->id }}">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Layak:</label>
                                    <input type="text" name="komentar_k_bps" id="komentar_k_bps" value="{{ $post->komentar_k_bps }}" class="form-control" readonly>
                                
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
                        
                         <td> @if($post->status_k == 2 || $post->status_k_bps == 2 ) <a href="" id="editCompanyK" data-toggle="modal" data-target='#practice_modalK' data-id="{{ $post->id }}">Input Perbaikan</a><br> @else  </td> @endif
                       
<td> @if(!is_null($post->surat_rekomendasi) && $post->status_k_bps == 1 )
                         &nbsp &nbsp  <a href="{{ url('public/documents/'. $post->surat_rekomendasi) }}" class="lnr lnr-download"></a>
                            @else
                           @endif</td>

                    </tr>
                    @endforeach
    </table>
    
    <div class="modal fade" id="practice_modalK">
                        <div class="modal-dialog">
                           <form id="companydataK">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_idK" name="color_idK" value="">
                               
                               <div class="modal-body">
                                    <div class="form-group">
                        <label for=""><strong>Status Perbaikan</strong></label>
                        <select name="role" id="perbaikan_opd_k" class="form-control" value="" >
						<option value>Pilih Status</option>

							<option value ="Sudah Diperbaiki">Sudah Diperbaiki</option>
						<option value ="Belum Diperbaiki">Belum Diperbaiki</option>
					
						</select>
                    </div>
                                
                               
                               
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan_k" id="catatan_perbaikan_k" value="" class="form-control">
                                
                                    </div>
                                    
                                  
                                    
                                
                                
                               </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                     <button type="submit" value="SubmitK" id="submitK"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                                 
                                 
                            </div>
                           </form>
                        </div>
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


$('body').on('click', '#submit5', function (event) {
    event.preventDefault()
    var id = $("#color_id5").val();
    var perbaikan_opd = $("#perbaikan_opd").val();
	var catatan_perbaikan = $("#catatan_perbaikan").val();



    $.ajax({
      url: 'perbaikanRekomendasi_opd/' + id,
      type: "POST",
      data: {
        id: id,
        perbaikan_opd: perbaikan_opd,
		catatan_perbaikan: catatan_perbaikan,
	
     

	
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata5').trigger("reset");
          $('#practice_modal5').modal('hide');
          window.location.reload(true);
      }
  });
});




$('body').on('click', '#editCompany5', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('perbaikanRekomendasi_opd/' + id + '/edit_perbaikanRekomendasi_opd', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit5').val("Edit PDF");
	 $('#practice_modal5').modal('show');
	 $('#color_id5').val(data.data.id);
	 $('#perbaikan_opd').val(data.data.perbaikan_opd);
	 $('#catatan_perbaikan').val(data.data.catatan_perbaikan);
	
  


 })
});



$('body').on('click', '#submitK', function (event) {
    event.preventDefault()
    var id = $("#color_idK").val();
    var perbaikan_opd_k = $("#perbaikan_opd_k").val();
	var catatan_perbaikan_k = $("#catatan_perbaikan_k").val();



    $.ajax({
      url: 'perbaikanRekomendasi_opd_k/' + id,
      type: "POST",
      data: {
        id: id,
        perbaikan_opd_k: perbaikan_opd_k,
		catatan_perbaikan_k: catatan_perbaikan_k,
	
     

	
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydataK').trigger("reset");
          $('#practice_modalK').modal('hide');
          window.location.reload(true);
      }
  });
});




$('body').on('click', '#editCompanyK', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('perbaikanRekomendasi_opd_k/' + id + '/edit_perbaikanRekomendasi_opd_k', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submitK').val("Edit PDF");
	 $('#practice_modalK').modal('show');
	 $('#color_idK').val(data.data.id);
	 $('#perbaikan_opd_k').val(data.data.perbaikan_opd_k);
	 $('#catatan_perbaikan_k').val(data.data.catatan_perbaikan_k);
	
  


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
	
		var status_k = $("#status_k").val();
	var komentar_k = $("#komentar_k").val();
	var petugas = '{{Auth::user()->name}}'; 

    $.ajax({
      url: 'color_kompromin_v/' + id,
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
			status_k: status_k,
		komentar_k: komentar_k,
		petugas : petugas
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
$.get('color_kompromin_v/' + id + '/edit_kompromin_v', function (data) {
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
	 $('#status_k').val(data.data.status_k);
	 $('#komentar_k').val(data.data.komentar_k);
 })
});

}); 


</script>

</body>
</html>
