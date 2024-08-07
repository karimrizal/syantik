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
                      
                       <li><a href="data_dda" class="active"><i class="lnr lnr-chart-bars"></i> <span>Input Data Prioritas</span></a></li>
                       
                        
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
                           <hr><a href="{{ url('/export_67') }}"><button type="button" class="btn btn-primary btn-md">Unduh Template</button></a>	
                           <a href="{{ url('/ekspor_67') }}"><button type="button" class="btn btn-primary" style="float: right;background-color:#006fcc;">Ekspor Excel</button></a>
<br>
<br>    
					@foreach($kab as $a)				
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Jumlah Pelanggan, Listrik Terjual, dan Nilai Penjualan Listrik PT. PLN (Persero) Menurut Kategori Pelanggan di {{ $a->kab }}, {{$year}}</h3>
@endforeach				
<br>


<div class="row">
    <div class="col-md-6">
        
<table class="table table-bordered" id="example3">
                <thead>
                    <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>{{$year}}</center></th> </tr>
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kategori Pelanggan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah Pelanggan</center></th>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tenaga Listrik yang Terjual <br> (kWh)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai Penjualan <br> (000 Rp)</center></th>
                  
                   
       
                      
                    </tr>
          
                    
                   
            </thead>
            
                     @foreach ($tabel_67 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         <form id="simpan" action="{{ route('dda.store67') }}" method="POST">
                             @csrf
                             
                            
                              <input type="hidden" style="padding-right: 8px;padding-left: 8px;" name="members[{{ $i }}][id]" id="id" value="{{$member->id}}">
                         
                           <input type="hidden" id="updated_at" name="members[{{ $i }}][updated_at]" class="form-control"  value={{ \Carbon\Carbon::now() }} >  
                          
                               @if(is_numeric($member->t67a))
                            <td>
                                <input type="text" id="t67a" name="members[{{ $i }}][t67a]" class="form-control" value="{{number_format(($member->t67a),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t67a" name="members[{{ $i }}][t67a]" class="form-control" value="{{$member->t67a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t67b))
                            <td>
                                <input type="text" id="t67b" name="members[{{ $i }}][t67b]" class="form-control" value="{{number_format(($member->t67b),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t67b" name="members[{{ $i }}][t67b]" class="form-control" value="{{$member->t67b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t67c))
                            <td>
                                <input type="text" id="t67c" name="members[{{ $i }}][t67c]" class="form-control" value="{{number_format(($member->t67c),0, '.','')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" id="t67c" name="members[{{ $i }}][t67c]" class="form-control" value="{{$member->t67c}}">
                            </td>
                            @endif    
             
                 
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lk as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
              
                         
            
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                    
    </table>
    
    
     </div>
    
    <div class="col-md-6">
        
        
        
        	<table class="table table-bordered" id="example3">
                <thead>
               
               
                  
  <tr> <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>2020</center></th> </tr>
                   <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kategori Pelanggan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah Pelanggan</center></th>
                       
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tenaga Listrik yang Terjual <br> (kWh)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai Penjualan <br> (000 Rp)</center></th>
                
                   
       
                      
                    </tr>
          
                    
                   
                   
            </thead>
               
               @foreach ($tes as $member)
                    <tr>
                      
                      <th>{{ $member->kec }}</th>
                        
                     
                            
                     
                          
                            @if(is_numeric($member->t67a))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t67a),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t67a}}">
                            </td>
                            @endif    
                            
                             @if(is_numeric($member->t67b))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t67b),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t67b}}">
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t67c))
                            <td>
                                <input type="text" readonly="true" class="form-control" value="{{number_format(($member->t67c),0, '.',' ')}}">
                            </td>
                           
                           @else
                              <td>
                                <input type="text" readonly="true" class="form-control" value="{{$member->t67c}}">
                            </td>
                            @endif    
                      
                    </tr>
                    @endforeach
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                        
                         
                            
                         @foreach ($sum_lalu as $a)
                              <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input  type ="text" class="form-control" readonly="ture"  value= "{{ number_format(($a->sum_a),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_b),0, '.',' ')}}">
                            </th>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;">
                            <input type ="text" class="form-control" readonly="ture"  value= "{{number_format(($a->sum_c),0, '.',' ')}}">
                            </th>
            
                      
                            @endforeach
                      
                       
                      
                    </tr>
                     
         
    </table>
        
        
        </div>
        
        </div>
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Perusahaan Listrik Negara</a></p>

     <br>
     <div class="form-group">
         @foreach($catatan as $a)
            <label for ="catatan"><b> Catatan</b> </label>
             	 		
          <textarea name="catatan" id="catatan" >
              {!! $a->catatan !!}
                 @endforeach
            </textarea>
            </div>
                    <button type="submit" class="btn btn-primary show_confirm">Kirim</button>
						</form>




						
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
    <script src="{{asset('public/assets/ckeditor/ckeditor.js')}}"></script>
    
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
    
<script>
   var catatan = document.getElementById("catatan");
   CKEDITOR.replace('catatan');
   CKEDITOR.config.allowedContent = true;
  CKEDITOR.config.autoParagraph = false;
  
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

