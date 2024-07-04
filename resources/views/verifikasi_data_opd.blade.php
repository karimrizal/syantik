<!doctype html>
<html lang="en">

<head>
	<title>Verifikasi Data | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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

    
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

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
                        @if( (Auth::user()->role == 'Admin OPD') )  <li><a href="user_opd" class=""><i class="lnr lnr-user"></i> <span>Kelola Pengguna</span></a></li> @else @endif
						
						  @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Walidata') || (Auth::user()->role == 'Admin OPD') || (Auth::user()->role == 'Operator OPD') ) <li>
							<a href="#subPages2" data-toggle="collapse" class="active" aria-expanded="false"><i class="lnr lnr-bubble"></i><span>Verifikasi</span><i class="icon-submenu lnr lnr-chevron-right"></i></a>
							<div id="subPages2" class="collapse in" aria-expanded="false" style="">
								<ul class="nav">
								@if(Auth::user()->role == 'Admin BPS')	<li><a href="verifikasi_rekomendasi_bps" class="">Verifikasi Rekomendasi</a></li>
								@elseif(Auth::user()->role == 'Walidata') <li><a href="verifikasi_rekomendasi" class="">Verifikasi Rekomendasi</a></li>  @else @endif
									@if( (Auth::user()->role == 'Operator OPD') )
									<li><a href="verifikasi_rekomendasi_opd" class="">Lihat Rekomendasi</a></li>
									<li><a href="verifikasi_data_opd" class="active"> Hasil Verifikasi Data</a></li> 
									<li><a href="verifikasi_kegiatan_opd" class="">Hasil Verifikasi Kegiatan</a></li>
									<li><a href="verifikasi_indikator_opd" class="">Hasil Verifikasi Indikator</a></li>
								    <li><a href="verifikasi_variabel_opd" class="">Hasil Verifikasi Variabel</a></li>
								    
									@else<li><a href="verifikasi_data" class="active">Verifikasi Data</a></li>
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
                <div class="panel panel-headline"><div class="panel-heading">
        <h3 class="panel-title">Verifikasi Data</h3><hr>
        
        
        @if(Auth::user()->role == 'Admin OPD' )
        
        
        <table class="table table-bordered" id="example3">
            
            <thead>
               <tr>
                   
                  
                  <th>Data</th>
                  <th><center>Verifikasi Tahap 1<br>OPD</center></th>
            
                
              
                  <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
               
                 <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                  <th>Status Tampil Web</th>
                 
               
               </tr> 
            </thead>
            
            
               @foreach($tabels_opd as $user)
                  <tr>
                      
                 
                     <td>{{ $user->nama }}</td>
                    @if(is_null($user->status_opd))
                     <td> <form action = "{{ route('postsss.show4',$user->id) }}" method="GET">
                        
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Verifikasi</button>	
                    
                     </form>
                      </td>
                  @else <td> <form action = "{{ route('postsss.show4',$user->id) }}" method="GET">
                      @if($user->status_opd =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_opd =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif 
                     <br>
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #F7CE76; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Ubah Verifikasi</button>	
                    
                     </form>
                      </td>
                     @endif
                  
                    
                   
                     <td> @if($user->status =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($user->status == 'Tidak Tampil' )<a href="" id="editCompany" data-toggle="modal" data-target='#practice_modal' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif </td>
                   
                   <td> @if($user->status_bps =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_bps =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($user->status_bps == 'Tidak Tampil' )<a href="" id="editCompany2" data-toggle="modal" data-target='#practice_modal2' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_bps) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif 
                   
                    <td> @if($user->status_bps == 'Tampil' && $user->status == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
               
                  </tr>
               @endforeach
               
          
        </table>
        
         @else
        @endif
        
        
        @if(Auth::user()->role == 'Walidata' )
        
        
        <table class="table table-bordered" id="example3">
            
            <thead>
               <tr>
                   
                  <th>Dinas</th>
                  <th>Data</th>
                  <th><center>Verifikasi Tahap 1<br>OPD</center></th>
            
                
              
                  <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
               
                 <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                  <th>Status Tampil Web</th>
                 
               
               </tr> 
            </thead>
            
            
               @foreach($tabels as $user)
                  <tr>
                      
                <td> {{ $user->organisasi }}</td>
                     <td>{{ $user->nama }}</td>
                     
                     
                      <td> @if($user->status_opd =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_opd =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($user->status_opd == 'Tidak Tampil' )<a href="" id="editCompany3" data-toggle="modal" data-target='#practice_modal3' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_opd)) Menunggu Verifikasi Pimpinan @else </td> @endif </td>
                     
                     
                    @if(is_null($user->status_opd)  )
                    <td> Menunggu Verifikasi OPD</td>
                    
                    @elseif($user->status_opd == 'Tidak Tampil' )
                    <td></td>
                    
                    @elseif (is_null($user->status) && $user->status_opd == 'Tampil' )
                     <td> <form action = "{{ route('postsss.show',$user->id) }}" method="GET">
                        
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Verifikasi</button>	
                    
                     </form>
                      </td>
                      
                      @elseif ($user->status == 'Tidak Tampil' )
                     <td> <form action = "{{ route('postsss.show',$user->id) }}" method="GET">
                    <center> <i class="fa fa-close" style="color:red"></i></center> <br><a href="" id="editCompany4" data-toggle="modal" data-target='#practice_modal4' data-id="{{ $user->id }}">lihat perbaikan OPD</a><br>     
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #F7CE76; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Ubah Verifikasi</button>	
                    
                     </form>
                      </td>
                      
                  @else <td> <form action = "{{ route('postsss.show',$user->id) }}" method="GET">
                      <center> <i class="fa fa-check" style="color:green"></i></center> 
                     <br>
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #F7CE76; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Ubah Verifikasi</button>	
                    
                     </form>
                      </td>
                     @endif
                  
                    
                   
                    
                   
                   <td> @if($user->status_bps =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_bps =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($user->status_bps == 'Tidak Tampil' )<a href="" id="editCompany2" data-toggle="modal" data-target='#practice_modal2' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_bps) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif 
                   
                     <td> @if($user->status_bps == 'Tampil' && $user->status == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
               
                  </tr>
               @endforeach
               
          
        </table>
        
         @else
        @endif
        
        
        @if(Auth::user()->role == 'Admin BPS' )
        
        
        <table class="table table-bordered" id="example3">
            
            <thead>
               <tr>
                   
                  <th>Dinas</th>
                  <th>Data</th>
                  <th><center>Verifikasi Tahap 1<br>OPD</center></th>
            
                
              
                  <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
               
                 <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                  <th>Status Tampil Web</th>
                 
               
               </tr> 
            </thead>
            
            
               @foreach($tabels as $user)
                  <tr>
                      
                <td> {{ $user->organisasi }}</td>
                     <td>{{ $user->nama }}</td>
                     
                     
                      <td> @if($user->status_opd =='Tampil')<center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_opd =='Tidak Tampil')<center>  <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($user->status_opd == 'Tidak Tampil' )<a href="" id="editCompany3" data-toggle="modal" data-target='#practice_modal3' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_opd)) Menunggu Verifikasi Pimpinan @else </td> @endif </td>
                     
                  
                  <td> @if($user->status =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif<br>  @if($user->status == 'Tidak Tampil' )<a href="" id="editCompany" data-toggle="modal" data-target='#practice_modal' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif </td>
                     
                     
                     @if(is_null($user->status_opd)  )
                    <td> Menunggu Verifikasi OPD</td>
                    
                    @elseif($user->status_opd == 'Tidak Tampil' )
                    <td></td>
                    
                    @elseif (is_null($user->status_bps) && $user->status_opd == 'Tampil' )
                     <td> <form action = "{{ route('postsss.show2',$user->id) }}" method="GET">
                        
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Verifikasi</button>	
                    
                     </form>
                      </td>
                      
                      @elseif ($user->status_bps == 'Tidak Tampil' )
                     <td> <form action = "{{ route('postsss.show2',$user->id) }}" method="GET">
                    <center> <i class="fa fa-close" style="color:red"></i></center> <br><a href="" id="editCompany4" data-toggle="modal" data-target='#practice_modal4' data-id="{{ $user->id }}">lihat perbaikan OPD</a><br>     
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #F7CE76; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Ubah Verifikasi</button>	
                    
                     </form>
                      </td>
                      
                  @else <td> <form action = "{{ route('postsss.show2',$user->id) }}" method="GET">
                      <center> <i class="fa fa-check" style="color:green"></i></center> 
                     <br>
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #F7CE76; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $user->nama }}">Ubah Verifikasi</button>	
                    
                     </form>
                      </td>
                     @endif
                  
                   
                    <td> @if($user->status_bps == 'Tampil' && $user->status == 'Tampil') <center> <i class="fa fa-check" style="color:green"></i></center> @else                     <center> <i class="fa fa-close" style="color:red"></i></center>  </td> @endif
               
                  </tr>
               @endforeach
               
          
        </table>
        
         @else
        @endif
        
        
        @if(Auth::user()->role == 'Operator OPD' )
        
        
        <table class="table table-bordered" id="example3">
            
            <thead>
               <tr>
                   
                  
                  <th>Data</th>
                  <th><center>Verifikasi Tahap 1<br>OPD</center></th>
            
                
              
                  <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
               
                 <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                  <th>Status Tampil Web</th>
                  <th>Detail</th>
                  <th>Status Perbaikan</th>
                 
               
               </tr> 
            </thead>
            
            
               @foreach($tabels_opd as $user)
                  <tr>
                      
               
                     <td>{{ $user->nama }}</td>
                     
                     
                      <td> @if($user->status_opd =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_opd =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($user->status_opd == 'Tidak Tampil' )<a href="" id="editCompany3" data-toggle="modal" data-target='#practice_modal3' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_opd)) Menunggu Verifikasi Pimpinan @else </td> @endif </td>
                     
                  
                  <td> @if($user->status =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($user->status == 'Tidak Tampil' )<a href="" id="editCompany" data-toggle="modal" data-target='#practice_modal' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif </td>
                     
                     
                     <td> @if($user->status_bps =='Tampil') <center> <i class="fa fa-check" style="color:green"></i></center>
                      @elseif($user->status_bps =='Tidak Tampil')<center> <i class="fa fa-close" style="color:red"></i></center>@else @endif <br>  @if($user->status_bps == 'Tidak Tampil' )<a href="" id="editCompany2" data-toggle="modal" data-target='#practice_modal2' data-id="{{ $user->id }}">lihat catatan</a>	
                     @elseif(is_null($user->status_bps) && $user->status_opd == 'Tampil')Belum Diverifikasi @elseif(is_null($user->status_opd)) Menunggu Verifikasi OPD @else</td> @endif 
                   
                    <td> @if($user->status_bps == 'Tampil' && $user->status == 'Tampil') Tampil @else Tidak Tampil </td> @endif
                    <td><a href="" id="editCompany6" data-toggle="modal" data-target='#practice_modal6' data-id="{{ $user->id }}">Detail</a>  </td>
                    <td> @if($user->status_bps == 'Tidak Tampil' || $user->status == 'Tidak Tampil' || $user->status_opd == 'Tidak Tampil') <a href="" id="editCompany5" data-toggle="modal" data-target='#practice_modal5' data-id="{{ $user->id }}">Input Perbaikan</a><br> @else  </td> @endif
               
                  </tr>
               @endforeach
               
          
        </table>
        
         @else
        @endif
    
       
    </div>

    <div class="modal fade" id="practice_modal">
                        <div class="modal-dialog">
                           <form id="companydata">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id" name="color_id" value="">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Tampil:</label>
                                    <input type="text" name="alasan_tampil_walidata" id="alasan_tampil_walidata" value="" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                
                
            <div class="modal fade" id="practice_modal2">
                        <div class="modal-dialog">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id2" name="color_id2" value="">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Tampil:</label>
                                    <input type="text" name="alasan_tampil_bps" id="alasan_tampil_bps" value="" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade" id="practice_modal3">
                        <div class="modal-dialog">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id3" name="color_id3" value="">
                               <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Alasan Tidak Tampil:</label>
                                    <input type="text" name="alasan_tampil_opd" id="alasan_tampil_opd" value="" class="form-control" readonly>
                                
                                </div>
                               
                               
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                              
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                
                
                
                
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
                                     <button type="submit" value="Submit5" id="submit5"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                                 
                                 
                            </div>
                           </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="modal fade" id="practice_modal6">
                        <div class="modal-dialog">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel"></h3>
														</div>
                               <input type="hidden" id="color_id6" name="color_id6" value="">
                               
                               <div class="modal-body">
                                   
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Admin OPD</label>
                                    <input type="text" name="tanggal_verifikasi_opd" id="tanggal_verifikasi_opd" value="" class="form-control" readonly>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi Walidata</label>
                                    <input type="text" name="tanggal_verifikasi_walidata" id="tanggal_verifikasi_walidata" value="" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label for="Judulvid" class="col-form-label">Verifikasi BPS</label>
                                    <input type="text" name="tanggal_verifikasi_bps" id="tanggal_verifikasi_bps" value="" class="form-control" readonly>
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
                
                
                </div>
            </div>
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

  
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <script>
  $(function() {
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
    $('#example3').DataTable({
			
			});
			


$('body').on('click', '#submit5', function (event) {
    event.preventDefault()
    var id = $("#color_id5").val();
    var perbaikan_opd = $("#perbaikan_opd").val();
	var catatan_perbaikan = $("#catatan_perbaikan").val();



    $.ajax({
      url: 'perbaikan_opd/' + id,
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
$.get('perbaikan_opd/' + id + '/edit_perbaikan_opd', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit5').val("Edit PDF");
	 $('#practice_modal5').modal('show');
	 $('#color_id5').val(data.data.id);
	 $('#perbaikan_opd').val(data.data.perbaikan_opd);
	 $('#catatan_perbaikan').val(data.data.catatan_perbaikan);
	
  


 })
});

$('body').on('click', '#editCompany6', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('ket_detail/' + id + '/edit_detail', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#practice_modal6').modal('show');
         $('#color_id6').val(data.data.id);
         $('#tanggal_verifikasi_opd').val(data.data.tanggal_verifikasi_opd);
         $('#tanggal_verifikasi_walidata').val(data.data.tanggal_verifikasi_walidata);
         $('#tanggal_verifikasi_bps').val(data.data.tanggal_verifikasi_bps);

     })
});


    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        var petugas = '{{Auth::user()->name}}'; 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeStatus',
            data: {'status': status, 'user_id': user_id, 'petugas' : petugas},
            success: function(data){
              console.log(data.success)
            }
        });
    })
    
    
    $('.toggle-class2').change(function() {
        var status_bps = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
        var petugas_bps = '{{Auth::user()->name}}'; 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeStatus2',
            data: {'status_bps': status_bps, 'user_id': user_id, 'petugas_bps' : petugas_bps},
            success: function(data){
              console.log(data.success)
            }
        });
    })



  })
</script>

<script>
  $(function() {
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
    $('#example4').DataTable({
				"scrollX": true
			});






  })
</script>

</body>


</html>
