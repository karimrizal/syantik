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
	<link rel="stylesheet" href="{{asset('public/admin/assets/css old/main.css')}}">
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
				
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
		
			
        

					
									
										
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					
						<div class="panel-body">

					@if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
         
               <br>
               <p class="page-title text-left"><a href="data_dda"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
                           <br>
              
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Rumah Sakit Umum, Rumah Sakit Khusus, Rumah Sakit/Rumah Bersalin, Puskesmas, Klinik/Balai Kesehatan, Posyandu, dan Polindes di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>

<div class="row">
    <div class="col-md-6">
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> <center> Provinsi</center></h3>
<table class="table table-bordered" id="example">
                <thead>
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Khusus</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Bersalin</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Puskesmas</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Klinik/Balai</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Posyandu</center></th>
                     <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Polindes</center></th>
                      
                    </tr>
                    
                   
            </thead>
                    @foreach ($tabel_426 as $i => $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
                         
                             
                            
                            @if(is_numeric($member->t426a))
                            <td>
                                {{number_format(($member->t426a),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426a}}
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t426b))
                            <td>
                                {{number_format(($member->t426b),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                            {{$member->t426b}}
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t426c))
                            <td>
                            {{number_format(($member->t426c),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426c}}
                            </td>
                            @endif    
                            
                            @if(is_numeric($member->t426d))
                            <td>
                                {{number_format(($member->t426d),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426d}}
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t426e))
                            <td>
                            {{number_format(($member->t426e),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426e}}
                            </td>
                            @endif 
                            
                             @if(is_numeric($member->t426f))
                            <td>
                                {{number_format(($member->t426f),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426f}}
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t426g))
                            <td>
                                {{number_format(($member->t426g),0, '.','')}}
                            </td>
                           
                           @else
                              <td>
                                {{$member->t426g}}
                            </td>
                            @endif
                    
                      
                       
                      
                    </tr>
                    @endforeach
                    
    </table>
    
     </div>
    
    <div class="col-md-6">
        <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> <center> Rekap Kabupaten/Kota</center></h3>
        
        
        	<table class="table table-bordered" id="example4">
                <thead>
               
               
                    <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Khusus</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Bersalin</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Puskesmas</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Klinik/Balai</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Posyandu</center></th>
                     <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Polindes</center></th>
                      
                    </tr>
                    
                   
                   
            </thead>
               
               @foreach ($perbandingan as $member)
                    <tr>
                      
                      <th>{{ $member->idkab }}</th>
                        
                     
                            
                          @if($member->t426a == $member->t426a_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426a_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426a_k),0, '.',' ')}} </center> </td>  @endif
        
        @if($member->t426b == $member->t426b_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426b_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426b_k),0, '.',' ')}} </center> </td>  @endif
        
        @if($member->t426c == $member->t426c_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426c_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426c_k),0, '.',' ')}} </center> </td>  @endif
        
        
        @if($member->t426d == $member->t426d_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426d_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426d_k),0, '.',' ')}} </center> </td>  @endif
        
        
        @if($member->t426e == $member->t426e_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426e_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426e_k),0, '.',' ')}} </center> </td>  @endif
        
        
        @if($member->t426f == $member->t426f_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426f_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426f_k),0, '.',' ')}} </center> </td>  @endif
        
        
        @if($member->t426g == $member->t426g_k)
    <td bgcolor="#73D06F"><center> {{number_format(($member->t426g_k),0, '.',' ')}} </center></td>
        @else <td bgcolor="#F15461"><center> {{number_format(($member->t426g_k),0, '.',' ')}} </center> </td>  @endif
        
        
               
                    
                       
                      
                    </tr>
                    @endforeach
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Dinas Kesehatan</a></p>

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
    
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
 
$('.show_confirm').click(function(event) {
    event.preventDefault();
          Swal.fire({
                title: 'Apakah Anda Yakin Ingin Menyimpan Data?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Simpan!',
                width: '450px' 
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#simpan').submit();
                }
            })
      });
  
</script>
    
    <script src="{{asset('public/assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var catatan = document.getElementById("catatan");
   CKEDITOR.replace('catatan');
   CKEDITOR.config.allowedContent = true;
  CKEDITOR.config.autoParagraph = false;
  
</script>  
  <script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
		    
			});
			
				$('#example4').DataTable({
			"scrollX": true,
				"ordering": false,
				 "paging": false,
				  "searching": false,
				  "info": false
			
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
        if (data.indexOf("\n") > -1) {
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

