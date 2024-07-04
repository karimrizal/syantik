<!doctype html>
<html lang="en">

<head>
	<title>Kelola Data | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <meta name="csrf-token" content="{{ csrf_token() }}">
  
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/paneltab.css')}}">
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
						<li><a href="/syantik/" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
						<li><a href="lihat_dda" class="active"><i class="lnr lnr-chart-bars"></i> <span>Data</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Metadata</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
							<ul class="nav nav">
									<li><a href="/syantik/view_metadata_kegiatan" class=""><i class="lnr lnr-database"></i>Metadata Kegiatan</a></li>
									<li><a href="/syantik/view_metadata_indikator" class=""><i class="lnr lnr-database"></i>Metadata Indikator</a></li>
									<li><a href="/syantik/view_metadata_variabel" class=""><i class="lnr lnr-database"></i>Metadata Variabel</a></li>
								</ul>
							</div>
						</li>
						<li><a href="modul" class=""><i class="lnr lnr-book"></i> <span>Modul Pembelajaran</span></a></li>
						<li><a href="lihat_rekomendasi" class=""><i class="lnr lnr-file-empty"></i> <span>Rekomendasi</span></a></li>
						<li><a href="konsultasi" class=""><i class="lnr lnr-bubble"></i> <span>Konsultasi</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		
	@if(empty($year))
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
		<!-- OVERVIEW -->
					<div class="panel panel-headline">
					
						<div class="panel-body">


                        <br>
                         <form >
                <select  type="hidden" name="tahun">
				
                <option value>Pilih Tahu</option>
                            
		
                        <option value="2020">2020</option>
                         <option value="2021">2021</option>
                         <option value="2022">2022</option>
                      
                            </select>
                <select  type="hidden" name="idkab">
				
                <option value>Pilih Kab/Kota</option>
                            
		                <option value="7400">Sulawesi Tenggara</option>
                        <option value="7401">Buton</option>
                         <option value="7404">Kolaka</option>
                         <option value="7408">Kolaka Utara</option>
                         <option value="7414">Buton Tengah</option>
                            <option value="7415">Buton Selatan</option>
                            </select>  
							
                         <input type="submit" value="Pilih">
                          </form >
                          <br>  
     
           <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Statistik Sektoral Provinsi Sulawesi Tenggara untuk Perencanaan dan Pembangunan Tahun 2021</h3> <br>     </center>
     
 
         
    	<table class="table table-bordered" id="example"  style="width: 100%;">
								<thead>
									<tr>
									  
									    <th>Kode</th>
										<th>Judul Tabel</th>
										<th>Instansi</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach ($lihats as $businesses)
										<tr >
										  
										   <td>{{($businesses->kode) }}</a></td>
											<td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
											<td>{{($businesses->dinas) }}</a></td>
										
										</tr>
									@endforeach
								</tbody>
							    </table>                    
        
    <br>
				
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
													</div>


				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
	@else
	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
		<!-- OVERVIEW -->
					<div class="panel panel-headline">
					
						<div class="panel-body">


                        <br>
                         <form >
                <select  type="hidden" name="tahun">
				
                <option value>Pilih Tahun</option>
                            
		
                        <option value="2020">2020</option>
                         <option value="2021">2021</option>
                         <option value="2022">2022</option>
                      
                            </select>
                            
                 <select  type="hidden" name="idkab">
				
                <option value>Pilih Kab/Kota</option>
                            
		                <option value="7400">Sulawesi Tenggara</option>
                        <option value="7401">Buton</option>
                         <option value="7404">Kolaka</option>
                         <option value="7408">Kolaka Utara</option>
                         <option value="7414">Buton Tengah</option>
                            <option value="7415">Buton Selatan</option>
                      
                            </select>        
                
							
                         <input type="submit" value="Pilih">
                          </form >
                          <br>  
            @if($year == '2020')
            
             @foreach($kab as $a)
          <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Statistik Sektoral {{ $a->kab }} untuk Perencanaan dan Pembangunan Tahun 2020</h3> <br>     </center>
          @endforeach
          @elseif($year == '2021')
          @foreach($kab as $a)
          <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Statistik Sektoral {{ $a->kab }} untuk Perencanaan dan Pembangunan Tahun 2021</h3> <br>     </center>
          @endforeach
          @else @endif
 
         
    	<table class="table table-bordered" id="example"  style="width: 100%;">
								<thead>
									<tr>
									  
									    <th>Kode</th>
										<th>Judul Tabel</th>
										<th>Instansi</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach ($lihats_tahun as $businesses)
										<tr >
										  
										   <td>{{($businesses->kode) }}</a></td>
											<td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
											<td>{{($businesses->dinas) }}</a></td>
										
										</tr>
									@endforeach
								</tbody>
							    </table>                    
        
    <br>
				
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
													</div>


				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
	
	
	@endif
		
		
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">2021 © <a href="https://sultra.bps.go.id">BPS Provinsi Sulawesi Tenggara</a>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true,
				"aLengthMenu": [[15, 30, 75, -1], [15, 30, 75, "All"]],
        "iDisplayLength": 15
				
			});
			
			
		});
	</script>
    
  <script>  
  

$('input').bind('paste', function (e) {
    var $start = $(this);
    var source

    //check for access to clipboard from window or event
    if (window.clipboardData !== undefined) {
        source = window.clipboardData
    } else {
        source = e.originalEvent.clipboardData;
    }
    var data = source.getData("Text");
    if (data.length > 0) {
        if (data.indexOf("\t") > -1) {
            var columns = data.split("\n");
            $.each(columns, function () {
                var values = this.split("\t");
                $.each(values, function () {
                    $start.val(this);
                    if ($start.closest('td').next('td').find('input,text')[0] != undefined || $start.closest('td').next('td').find('text')[0] != undefined) {
                    $start = $start.closest('td').next('td').find('input,text');
                    }
                    else
                    {
                     return false;  
                    }
                });
                $start = $start.closest('td').parent().next('tr').children('td:first').find('input,text');
            });
            e.preventDefault();
        }
    }
});

</script>

