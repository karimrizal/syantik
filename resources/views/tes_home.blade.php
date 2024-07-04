<!doctype html>
<html lang="en">
<head>
	<title>Beranda | Syantik - Sistem Pelayanan Pembinaan Statistik Sektoral</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/vendor/linearicons/style.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/carousel.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('public/admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/admin/assets/img/favicon.png')}}">
	

	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
					    
					    <a  href="/syantik/konsultasi" title="Konsultasi" target="_blank"> <span style="font-size:20px;">Konsultasi</span></a>
				 &nbsp &nbsp &nbsp
					    <a  href="https://romantik.bps.go.id/" title="Ajukan Rekomendasi" target="_blank"> <span style="font-size:20px;">Ajukan Rekomendasi</span></a>
				 &nbsp &nbsp &nbsp
					    <a  href="/syantik/modul" title="Modul Pembelajaran" target="_blank"> <spa style="font-size:20px;"n>Modul Pembelajaran</span></a>
				 &nbsp &nbsp &nbsp
						<a  href="/syantik/login" title="Login" target="_blank"> <span style="font-size:20px;">Log In</span> <i class="fa fa-sign-in"></i></a>
				
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

						<div class="panel panel-headline">
							<div class="panel-body">
						
								
				<form> 	
	
                        <br> <br> <br> <br> <br> <br> <br> <br> 
        				<a href="/syantik/" style="font-size: 28px;"><img width="400" height="500" src="{{asset('public/admin/assets/img/logo-dark.svg')}}" style="display: block;margin-left: auto; 
        				margin-right: auto;" alt="Syantik Logo" class="img-responsive logo"><span ><center> Sistem Informasi Layanan Statistik </center></span></a>
        		
        									<hr>
        				<center> 	<select  type="hidden" name="tahun">
                          
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select> </center>
                        <hr>
        	
                
            
        						<center> 	 <input id="nama" name="nama" size="100" style="padding-left:30px;padding-right:30px; text-align: center;border-radius: 25px;height: 50px;" type="text"  placeholder="Cari Data . . ."> </center>
	           
	         
			<center> 	 <input type="submit" value="Cari" style="display: none;"/> </center>
                   			
				</form>
				<br> <br> <br> <br> <br> <br> <br> <br> 
		
						    
						    </div>
                        </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix" ></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">2021 © <a href="https://sultra.bps.go.id">BPS Provinsi Sulawesi Tenggara</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

   
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
 $(document).ready(function() {
    $("#nama").autocomplete({
    
        source: function(request, response) {
            $.ajax({
            url: "{{url('https://webapps.bps.go.id/sultra/syantik/autocomplete')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.nama;
               }); 
 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
 
</script>   
	
	
</body>

</html>
