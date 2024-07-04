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
                       
                      @if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )  <li><a href="rekap" class=""><i class="lnr lnr-chart-bars"></i> <span>Periksa Data DDA</span></a></li>
                      @else	@endif
                       
                        
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
						
						<li><a href="metadata_data" class=""><i class="lnr lnr-chart-bars"></i> <span>Input Metadata ke Data</span></a></li>
						 @if(Auth::user()->role == 'Admin BPS' ) <li><a href="bahan" class=""><i class="lnr lnr-book"></i> <span>Kelola Bahan Ajar</span></a></li> @else @endif
						  @if(Auth::user()->role == 'Admin BPS' ) <li><a href="kelola_pembinaan" class=""><i class="lnr lnr-book"></i> <span>Kelola Pembinaan</span></a></li> @else @endif
						  	@if( (Auth::user()->role == 'Admin BPS') )  <li><a href="user" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
                        @if( (Auth::user()->role == 'Admin OPD')|| (Auth::user()->role == 'Admin BPS Kabupaten') )  <li><a href="user_opd" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
						
						  @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Walidata') || (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Operator OPD')|| (Auth::user()->role == 'Admin BPS Kabupaten') ) <li>
							<a href="#subPages2" data-toggle="collapse" class="active" aria-expanded="false"><i class="lnr lnr-bubble"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse in" aria-expanded="false" style="">
								<ul class="nav">
								 
									@if( (Auth::user()->role == 'Operator OPD') )<li><a href="verifikasi_data_opd" class=""> Hasil Verifikasi Data</a></li> 
									<li><a href="verifikasi_kegiatan" class="">Hasil Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator" class="active">Hasil Verifikasi Indikator</a></li>
								    <li><a href="verifikasi_variabel" class="">Hasil Verifikasi Variabel</a></li>
								    
									@else<li><a href="verifikasi_data" class="">Verifikasi Data</a></li>
									<li><a href="verifikasi_kegiatan" class="">Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator" class="active">Verifikasi Indikator</a></li>
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
					<!-- DAFTAR METADATA -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Metadata Indikator</h3>
						</div>
						<div class="panel-body">
						    
						    
						    @if(Auth::user()->role == 'Admin BPS' ||Auth::user()->role == 'Admin BPS Kabupaten' )
							<table id="example" class="table table-striped" style="width: 100%">
								<thead>
									<tr role="row">
									    <th>Dinas</th>
										<th>Nama Indikator</th>
										<th><center>Verifikasi Tahap 1<br>OPD</center></th>
                                        <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
                                        <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                                        <th>Status Tampil Web</th>
                                        <th>Detail</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_indikator as $result)
										<tr id="iid{{ $result->id }}">
										    <td>{{ $result->organisasi }}</td>
											<td>{{ $result->ind_b1k2 }}</td>
											
											<td> @if($result->status_opd =='Tampil')<center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_opd =='Tidak Tampil')<center>  <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($result->status_opd == 'Tidak Tampil' )<a href="#catatanOPD_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanOPD_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil_opd" id="alasan_tampil_opd" value="{{ $result->alasan_tampil_opd }}" class="form-control" readonly>
                                                        
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
                                              
                                              
                                              @elseif(is_null($result->status_opd)) Menunggu Verifikasi Pimpinan @else </td> @endif </td>
                                              
                                              <td> @if($result->status_wali =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_wali =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($result->status_wali == 'Tidak Tampil' )<a href="#catatanWali_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanWali_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil_wali" id="alasan_tampil_wali" value="{{ $result->alasan_tampil_wali }}" class="form-control" readonly>
                                                        
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
                                              @elseif(is_null($result->status_wali) && $result->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($result->status_opd)) Menunggu Verifikasi OPD @else</td> @endif </td>
                                              
                                              
                                              
                                               @if($result->status_opd == 'Tidak Tampil' || $result->status_wali == 'Tidak Tampil'  )
                                                <td></td>
                                              @elseif(is_null($result->status_wali) || $result->status_wali == 'Tidak Tampil'  )
                                                <td> Menunggu Verifikasi Walidata</td>
                                                
                                               
                                                
                                                @elseif (is_null($result->status_tampil) && $result->status_wali == 'Tampil' )
                                                 <td> <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator/' . $result->id) }}'" class="btn btn-primary btn-sm">Verifikasi</button>
                                                  </td>
                                                  
                                                  @elseif ($result->status_tampil == 'Tidak Tampil' )
                                                 <td> 
                                                <center> <i class="fa fa-close" style="color:red"></i></center> <br><a href="#perbaikanlModal_{{ $result->id }}" data-toggle="modal">Lihat Perbaikan OPD</a>
                        
                        <div class="modal fade" id="perbaikanlModal_{{ $result->id }}">
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
                                    <input type="text" name="perbaikan_opd" id="perbaikan_opd" value="{{ $result->perbaikan_opd }}" class="form-control" readonly>
                                
                                </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan" id="catatan_perbaikan" value="{{ $result->catatan_perbaikan }}" class="form-control" readonly>
                                
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
                                                 <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator/' . $result->id) }}'" class="btn btn-primary btn-sm">Ubah Verifikasi</button>	
                                                
                                                
                                                  </td>
                        											
								                 @else <td> 
                                              <center> <i class="fa fa-check" style="color:green"></i></center> 
                                             <br>
                                             <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator/' . $result->id) }}'" class="btn btn-primary btn-sm">Ubah Verifikasi</button>	
                                            
                                             
                                              </td>
                                             @endif
                                          
                                           
                                            <td> @if($result->status_tampil == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
                                             <td>
                        <a href="#detailModal_{{ $result->id }}" data-toggle="modal" class="lnr lnr-magnifier"></a>
                        
                            <div class="modal fade" id="detailModal_{{ $result->id }}">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="{{ $result->id }}">
                               
                               <div class="modal-body">
                                   
                                   <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi OPD</label>
                                    <input type="text" name="tanggal_opd" id="tanggal_opd" value="{{ $result->tanggal_opd }}" class="form-control" readonly>
                                    </div>
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal_wali" id="tanggal_wali" value="{{ $result->tanggal_wali }}" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_verifikasi" id="tanggal_verifikasi" value="{{ $result->tanggal_verifikasi }}" class="form-control" readonly>
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
								</tbody>
							</table>
							
							@else
							@endif
							
							
							
							@if(Auth::user()->role == 'Walidata' )
							<table id="example" class="table table-striped" style="width: 100%">
								<thead>
									<tr role="row">
									    <th>Dinas</th>
										<th>Nama Indikator</th>
										<th><center>Verifikasi Tahap 1<br>OPD</center></th>
                                        <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
                                        <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                                        <th>Status Tampil Web</th>
                                        <th>Detail</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_indikator as $result)
										<tr id="iid{{ $result->id }}">
										    <td>{{ $result->organisasi }}</td>
											<td>{{ $result->ind_b1k2 }}</td>
											
											<td> @if($result->status_opd =='Tampil')<center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_opd =='Tidak Tampil')<center>  <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($result->status_opd == 'Tidak Tampil' )<a href="#catatanOPD_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanOPD_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil_opd" id="alasan_tampil_opd" value="{{ $result->alasan_tampil_opd }}" class="form-control" readonly>
                                                        
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
                                              @elseif(is_null($result->status_opd)) Menunggu Verifikasi Pimpinan @else </td> @endif </td>
                                              
                                     
                                              
                                              @if(is_null($result->status_opd))
                                                <td> Menunggu Verifikasi OPD</td>
                                                
                                                @elseif($result->status_opd == 'Tidak Tampil' )
                                                <td></td>
                                                
                                                @elseif (is_null($result->status_wali) && $result->status_opd == 'Tampil' )
                                                 <td> <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator_wali/' . $result->id) }}'" class="btn btn-primary btn-sm">Verifikasi</button>
                                                  </td>
                                                  
                                                  @elseif ($result->status_wali == 'Tidak Tampil' )
                                                 <td> 
                                                <center> <i class="fa fa-close" style="color:red"></i></center> <br><a href="#perbaikanlModal_{{ $result->id }}" data-toggle="modal">Lihat Perbaikan OPD</a>
                        
                        <div class="modal fade" id="perbaikanlModal_{{ $result->id }}">
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
                                    <input type="text" name="perbaikan_opd" id="perbaikan_opd" value="{{ $result->perbaikan_opd }}" class="form-control" readonly>
                                
                                </div>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Catatan:</label>
                                    <input type="text" name="catatan_perbaikan" id="catatan_perbaikan" value="{{ $result->catatan_perbaikan }}" class="form-control" readonly>
                                
                                </div>
                               </div>
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                                                 <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator_wali/' . $result->id) }}'" class="btn btn-primary btn-sm">Ubah Verifikasi</button>	
                                                
                                                
                                                  </td>
                        											
								                 @else <td> 
                                              <center> <i class="fa fa-check" style="color:green"></i></center> 
                                             <br>
                                             <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator_wali/' . $result->id) }}'" class="btn btn-primary btn-sm">Ubah Verifikasi</button>	
                                            
                                             
                                              </td>
                                             @endif
                                             
                                             
                                              <td>  @if($result->status_tampil =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_tampil =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br> @if($result->status_opd == 'Tidak Tampil' )  @elseif($result->status_tampil == 'Tidak Tampil' )<a href="#catatanBPS_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanBPS_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil" id="alasan_tampil" value="{{ $result->alasan_tampil }}" class="form-control" readonly>
                                                        
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
                                              @elseif(is_null($result->status_tampil) && $result->status_wali == 'Tampil')Belum Diverifikasi @elseif(is_null($result->status_wali)) Menunggu Verifikasi Walidata @else</td> @endif 
                                           
                                          
                                           
                                            <td> @if($result->status_tampil == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
                                            <td>
                        <a href="#detailModal_{{ $result->id }}" data-toggle="modal" class="lnr lnr-magnifier"></a>
                        
                            <div class="modal fade" id="detailModal_{{ $result->id }}">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="{{ $result->id }}">
                               
                               <div class="modal-body">
                                   
                                   <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi OPD</label>
                                    <input type="text" name="tanggal_opd" id="tanggal_opd" value="{{ $result->tanggal_opd }}" class="form-control" readonly>
                                    </div>
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal_wali" id="tanggal_wali" value="{{ $result->tanggal_wali }}" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_verifikasi" id="tanggal_verifikasi" value="{{ $result->tanggal_verifikasi }}" class="form-control" readonly>
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
								</tbody>
							</table>
							
							@else
							@endif
							
							
							
							
							@if(Auth::user()->role == 'Admin OPD' )
							<table id="example" class="table table-striped" style="width: 100%">
								<thead>
									<tr role="row">
									    <th>Dinas</th>
										<th>Nama Indikator</th>
										<th><center>Verifikasi Tahap 1<br>OPD</center></th>
                                        <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
                                        <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                                        <th>Status Tampil Web</th>
                                        <th>Detail</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list_meta_indikator_opd as $result)
										<tr id="iid{{ $result->id }}">
										    <td>{{ $result->organisasi }}</td>
											<td>{{ $result->ind_b1k2 }}</td>
											
                                              
                                            
                                                @if (is_null($result->status_opd)  )
                                                 <td> <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator_opd/' . $result->id) }}'" class="btn btn-primary btn-sm">Verifikasi</button>
                                                  </td>
                                          				
								             @else <td> 
								             @if($result->status_opd =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
								             @elseif($result->status_opd =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif 
                                               
                                             <br>
                                             <button onclick="location.href='{{ url('https://webapps.bps.go.id/sultra/syantik/verifikasi_indikator_opd/' . $result->id) }}'" class="btn btn-primary btn-sm">Ubah Verifikasi</button>	
                                            
                                             
                                              </td>
                                             @endif
                                             
                                             
                                              <td> @if($result->status_wali =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_wali =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($result->status_wali == 'Tidak Tampil' )<a href="#catatanWali_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanWali_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil_wali" id="alasan_tampil_wali" value="{{ $result->alasan_tampil_wali }}" class="form-control" readonly>
                                                        
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
                                              @elseif(is_null($result->status_wali) && $result->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($result->status_opd)) Menunggu Verifikasi OPD @else</td> @endif </td>
                                              
                                             
                                              <td> @if($result->status_tampil =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                                              @elseif($result->status_tampil =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($result->status_opd == 'Tidak Tampil' ) @elseif($result->status_tampil == 'Tidak Tampil' )<a href="#catatanBPS_{{ $result->id }}" data-toggle="modal">Lihat Catatan</a>
                                              
                                              <div class="modal fade" id="catatanBPS_{{ $result->id }}">
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
                                                            <input type="text" name="alasan_tampil" id="alasan_tampil" value="{{ $result->alasan_tampil }}" class="form-control" readonly>
                                                        
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
                                              @elseif(is_null($result->status_tampil) && $result->status_opd == 'Tampil' && $result->status_wali == 'Tampil') Belum Diverifikasi  @elseif(is_null($result->status_opd) || is_null($result->status_wali) ) Menunggu Verifikasi Walidata  @else </td> @endif 
                                           
                                          
                                           
                                            <td> @if($result->status_tampil == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
                                             <td>
                        <a href="#detailModal_{{ $result->id }}" data-toggle="modal" class="lnr lnr-magnifier"></a>
                        
                            <div class="modal fade" id="detailModal_{{ $result->id }}">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="{{ $result->id }}">
                               
                               <div class="modal-body">
                                   
                                   <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi OPD</label>
                                    <input type="text" name="tanggal_opd" id="tanggal_opd" value="{{ $result->tanggal_opd }}" class="form-control" readonly>
                                    </div>
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal_wali" id="tanggal_wali" value="{{ $result->tanggal_wali }}" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_verifikasi" id="tanggal_verifikasi" value="{{ $result->tanggal_verifikasi }}" class="form-control" readonly>
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
								</tbody>
							</table>
							
							@else
							@endif
							
							
							
							
							
							
							
							
							
							
							
							
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

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				
			});
		});
	</script>
</body>
</html>
