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
				
						<li><a href="home" class="active"><i class="lnr lnr-chart-bars"></i> <span>Kelola Data</span></a></li>
                      <li><a href="data_dda" class=""><i class="lnr lnr-chart-bars"></i> <span>Input Data Prioritas</span></a></li>
                   	@if(Auth::user()->role == 'Admin BPS' || (Auth::user()->role == 'Admin BPS Kabupaten') )   <li><a href="rekap" class=""><i class="lnr lnr-chart-bars"></i> <span>Periksa Data DDA</span></a></li>
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
		
			
        

							<div class="row">
									<div id="belajar" class="panel-body">	
									<ul  class="nav nav-pills">
												<li class="{{request()->is('home') ? 'active' : null }}">
												<a class="nav-link {{request()->is('home') ? 'active' : null }}" href="{{url('home')}}" role="tab">Input Data Baru</a>
												</li>
												<li class="{{request()->is('update_data') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('update_data') ? 'active' : null }}" href="{{url('update_data')}}"  role="tab">Update Data</a>
												</li>
												<li class="{{request()->is('daftar_tabel') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('daftar_tabel') ? 'active' : null }}" href="{{url('daftar_tabel')}}" role="tab">Daftar Tabel</a>
												</li>
										
											
										</ul>
									
											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('update_data') ? 'active' : null }}" id="{{url('update_data')}}" role="tabpanel">
													  <div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Update Data</h3>
					
						</div>
						<div class="panel-body">

					@if (session('success4'))
                            <div class="alert alert-success">
                                {{ session('success4') }}
                            </div>
                            @endif
                        <form >
                <select  type="hidden" name="tabel">
				
                <option value>Pilih Tabel</option>
                            
				@foreach($tables2 as $table)
                        <option value="{{ $table->nama }}">{{ $table->nama }}</option>
                    @endforeach
                      
                            </select>

							
                         <input type="submit" value="Pilih">
                          </form >
               <br>
                           <br>
							@foreach($tes as $a)						
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">{{$a->tabel_id}} di {{$a->wilayah}}, {{$a->tahun}}</h3>
<hr><a href="{{ url('/export_tiga/' . $a->tabel_id) }}"><button type="button" class="btn btn-primary btn-md">Unduh Tabel</button></a>						
@endforeach


					    <table class="table table-bordered">
					
 			
    <thead>
         @foreach($tes as $a)
        <th ></th>
         @endforeach
       @foreach ($koloms_id2 as $kolom)
            <th colspan ={{$span}}><center>{{ $kolom }} </center></th>
        @endforeach
		    </thead>
	<thead>
	  @foreach($tes as $a)
        <th>Wilayah</th>
        @endforeach
          @foreach ($koloms as $kolom)
            <th>{{ substr($kolom,0,strrpos($kolom,'_')) }}</th>
        @endforeach
    </thead>
    @foreach ($report as $kolom_id => $values)
        <tr>
            <td>{{ $report[$kolom_id][$kolom]['desas'] ?? '0' }}</td>
            @foreach ($koloms as $kolom)
                <td>{{ str_replace('.',',', number_format(floatval($report[$kolom_id][$kolom]['count']),2, '.',' ')) ?? '0' }}</td>
            @endforeach
            
        </tr>

	
    @endforeach
</table>
@foreach($tes as $a)
<p style="font-size: 14px;color: #8D99A8;">Sumber: <a >{{$a->sumber}}</a></p>

@endforeach
<br>



<br>
@foreach($tes as $a)
<form action="{{ url('/non_arc') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if (session('success4'))
                            <div class="alert alert-success">
                                {{ session('success4') }}
                            </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-success">
                                    {{ session('error') }}
                                </div>
                            @endif
							

                            <div class="form-group">
                                
                                <input type="file" class="form-control" name="file9">
                                @error('file9') <span class="text-danger error">{{ $message }}</span>@enderror
                                <p class="text-danger">{{ $errors->first('file') }}</p>
                            </div>
							
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-md">Upload</button>
                            </div>
                        </form>
  @endforeach
						
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
													</div>

													<div class="tab-pane {{request()->is('home') ? 'active' : null }}" id="{{url('home')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Input Data</h3>
					
						</div>
						<div class="panel-body">
	<h3 class="panel-title"> Silahkan pilih template sebelum upload data</h3> <br>
							<p>
													<a class="btn btn-default"  href="{{ url('public/admin/assets/sample/Tabel 1 Arah.xlsx') }}" role="button" aria-expanded="false">
													  Template Tabel 1 Arah
													</a> &nbsp &nbsp &nbsp &nbsp
													<a class="btn btn-default"  href="{{ url('public/admin/assets/sample/Tabel 2 Arah.xlsx') }}" role="button" aria-expanded="false" >
													Template Tabel 2 Arah
													</a> &nbsp &nbsp &nbsp &nbsp
													<a class="btn btn-default"  href="{{ url('public/admin/assets/sample/Tabel 3 Arah.xlsx') }}" role="button" aria-expanded="false" >
													Template Tabel 3 Arah
													</a>
												  </p><br> <br>
												  	<p>
												  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#1arah" aria-expanded="false" aria-controls="1arah">
                	    	Penjelasan Template Tabel
                		</button> 
												  
								
                		<div class="collapse" id="1arah">
			<div class="card card-body">
			Tabel satu arah adalah tabel yang hanya terdiri dari satu karakteristik atau kategori. <br> Contoh:<br> Tabel Jumlah penjualan menurut jenis barang.
			<table class="table table-bordered">
			    <tr>
			        <th>Nama Barang</th>
			        <th>Jumlah (buah)</th>
			        
			    </tr>
			    
			     <tr>
			        <td>Meja</td>
			        <td>26</td>
			    </tr>
			    <tr>
			        <td>Kursi</td>
			        <td>21</td>
			    </tr>
			    
			</table>
			<br>
			
			Template Tabel 2 Arah Yaitu tabel yang terdiri dari dua karakteristik atau dua kategori. <br> Contoh:<br> Tabel Jumlah Penduduk Menurut Wilayah dan Jenis Kelamin
			
			<table class="table table-bordered">
			    <tr>
			        <th rowspan ="2"><center> Kabupaten/Kota</center></th>
			        <th colspan= "2"> <center> Jumlah Penduduk (jiwa)</center></th>
			        
			    </tr>
			    
			     <tr>
			        
			        <td>Laki-Laki</td>
			        <td>Perempuan</td>
			    </tr>
			    <tr>
			        <td>Buton </td>
			        <td>1 098</td>
			        <td>1 176</td>
			    </tr>
			    <tr>
			        <td>Muna </td>
			        <td>2 198</td>
			        <td>2 076</td>
			    </tr>
			    
			</table>
			<br>
			
				Tabel tiga arah menunjukan tiga karakteristik atau kategori data. <br> Contoh:<br> Tabel Jumlah Penduduk Menurut Wilayah, Jenis Kelamin, dan Tingkat Pendidikan
			   
			   <table class="table table-bordered">
			    <tr>
			        <th rowspan ="2"><center> Kabupaten/Kota</center></th>
			        <th colspan= "2"> <center> Laki-Laki (jiwa)</center></th>
			        <th colspan= "2"> <center> Perempuan (jiwa)</center></th>
			        
			    </tr>
			    
			     <tr>
			        
			        <td> < SMA </td>
			        <td>SMA</td>
			        <td> < SMA </td>
			        <td>SMA</td>
			    </tr>
			    <tr>
			        <td>Buton </td>
			        <td>1 098</td>
			        <td>1 176</td>
			        <td>987</td>
			        <td>345</td>
			    </tr>
			    <tr>
			        <td>Muna </td>
			        <td>2 198</td>
			        <td>2 076</td>
			        <td>198</td>
			        <td>876</td>
			    </tr>
			    
			</table>
			
			
			
			
			</div>
		</div>
											
												
           
												  </p>
							<br>
							<br>
							
						<h3 class="panel-title"> Silahkan pilih Jenis Data sebelum upload</h3> <br>
									<form style=" border:1px solid;  padding: 10px;" >
			<select  type="hidden" name="jenisData" class="form-control">
	
			<option value>Pilih Jenis Data</option>
			<option value="ARC">Data Prioritas</option>
			<option value="Non ARC">Data Non Prioritas</option>
			</select><br>
			 <input type="submit" value="Pilih" class="btn btn-primary" >
			  </form >
							<br>
							
							@if($jenis_data == 'Non ARC')
							<h3 class="panel-title" color="blue"> Data Non Prioritas</h3> <br>
							<h3 class="panel-title"> Silahkan pilih file excel yang akan diupload</h3> <br>
							<form action="{{ url('/non_arc') }}" method="post" enctype="multipart/form-data">
								@csrf
	
								@if (session('success4'))
								<div class="alert alert-success">
									{{ session('success4') }}
								</div>
								@endif
	
								@if (session('error'))
									<div class="alert alert-success">
										{{ session('error') }}
									</div>
								@endif
								
										
	
								<div class="form-group">
									
									<input type="file" class="form-control" name="file9">
									@error('file9') <span class="text-danger error">{{ $message }}</span>@enderror
									<p class="text-danger">{{ $errors->first('file') }}</p>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md">Upload</button>
								</div>
							</form>
							@elseif($jenis_data == 'ARC')
							<h3 class="panel-title">Data Prioritas</h3> <br>
							<h3 class="panel-title"> Silahkan pilih file excel yang akan diupload</h3> <br>
							<form action="{{ url('/arc') }}" method="post" enctype="multipart/form-data">
								@csrf
	
								@if (session('success4'))
								<div class="alert alert-success">
									{{ session('success4') }}
								</div>
								@endif
	
								@if (session('error'))
									<div class="alert alert-success">
										{{ session('error') }}
									</div>
								@endif
								
									<select class="form-control" name="nama_data" id="ddlModels"> 
									<option value>Pilih Tabel Prioritas</option>  
									@foreach ($arcs as $item)
													<option value ="{{$item -> nama_data}}">{{$item -> nama_data}}</option>
															@endforeach
								
								</select>
								 @error('nama_data') <span class="text-danger error">{{ $message }}</span>@enderror			    
	    
								<div class="form-group">
									
									<input type="file" class="form-control" name="file9">
									@error('file9') <span class="text-danger error">{{ $message }}</span>@enderror
									<p class="text-danger">{{ $errors->first('file') }}</p>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-md">Upload</button>
								</div>
							</form>
							@else
							@endif
                        
                        
                        
                        
						
						</div>
					</div>
											</div>
													
											</div>
											
											
											
											<div class="tab-pane {{request()->is('daftar_tabel') ? 'active' : null }}" id="{{url('daftar_tabel')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Daftar Tabel</h3>
					
						</div>
						<div class="panel-body">

					             	<table class="table table-bordered" id="example">
	<thead>
        <tr>
            
            <th>Nama Tabel</th>
            <th>Diupload Oleh</th>
            <th>Diupload Pada</th>
            <th><center>Verifikasi Tahap 1<br>OPD</center></th>
            
                
              
                  <th><center>Verifikasi Tahap 2<br>Walidata</center></th>
               
                 <th><center>Verifikasi Tahap 3<br>BPS</center></th>
                  <th>Status Tampil Web</th>
        
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($hapus as $post)
        <tr>
           
            <td>{{ $post->tabel }}</td>
            <td>{{ $post->petugas_upload }}</td>
            <td>{{ substr($post->created_at ,0,-8) }}</td>
            
            
            @if( ($post->status_opd) == 'Tidak Tampil')
                        <td><center> <i class="fa fa-close" style="color:red"></i></center></td>
                        @elseif( ($post->status_opd) == 'Tampil')  <td><center> <i class="fa fa-check" style="color:green"></i></center></td>
                        @else<td>Belum Diverifikasi</td>
                      @endif
                      
                      @if( ($post->status) == 'Tidak Tampil')
                        <td><center> <i class="fa fa-close" style="color:red"></i></center></td>
                        @elseif( ($post->status) == 'Tampil')  <td><center> <i class="fa fa-check" style="color:green"></i></center></td>
                        @else<td>Belum Diverifikasi</td>
                      @endif
                      
                      @if( ($post->status_bps) == 'Tidak Tampil')
                        <td><center> <i class="fa fa-close" style="color:red"></i></center></td>
                        @elseif( ($post->status_bps) == 'Tampil')  <td><center> <i class="fa fa-check" style="color:green"></i></center></td>
                        @else<td>Belum Diverifikasi</td>
                      @endif
            
                     @if( ($post->status_bps) == 'Tidak Tampil')
                        <td><center> <i class="fa fa-close" style="color:red"></i></center></td>
                        @elseif( ($post->status_bps) == 'Tampil')  <td><center> <i class="fa fa-check" style="color:green"></i></center></td>
                        @else<td>Belum Diverifikasi</td>
                      @endif
                      
                      
                  
                      
            <td class="text-center" style="width: fit-content;">
                  <form action = "{{ route('postsss.show3',$post->tabel) }}" method="GET">
                     <button type ="hidden" class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" name="tabel" value="{{ $post->tabel }}">Lihat</button>	
                     </form>
               
                <form action="{{ route('postss.destroy',[$post->id, $post->tabel]) }}" method="POST">

									
		
                    @csrf

                    @method('DELETE')
                    @if( ($post->status_bps) == 'Tampil')
                    @else
                    <button type="submit" class="btn btn-danger" style="color: #FFF; background-color: #d9534f; border-color: #d9534f; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button> @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
						
						
						
						</div>
    </div>
													</div>
													
											</div>
											
											
											
												<div class="tab-pane {{request()->is('input_metadata') ? 'active' : null }}" id="{{url('input_metadata')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Input Metadata</h3>
					
						</div>
						<div class="panel-body">

					<form action="{{ route('postsssss.inputMetadata') }}" method="post">
							@csrf
							<select class="cari form-control" name="tabel_id">
				
                <option value>Pilih Tabel</option>
                            
				@foreach($tables as $table)
                        <option value="{{ $table->judul }}" >{{ $table->nama }}</option>
                    @endforeach
                      
                            </select>
                <select class="cari form-control" name="kegiatan_id">
				
                <option value>Pilih Kegiatan</option>
                            
				@foreach($meta_keg as $table)
                        <option value="{{ $table->id }}">{{ $table->b0r1 }}</option>
                    @endforeach
                      
                            </select>

							<select class="cari form-control" name="meta__indikator_id">
				
                <option value>Pilih Indikator</option>
                            
				@foreach($meta_ind as $table)
                        <option value="{{ $table->id }}">{{ $table->ind_b1k2 }}</option>
                    @endforeach
                      
                            </select>

							<select class="cari form-control" name="meta__variabel_id">
				
                <option value>Pilih Variabel</option>
                            
				@foreach($meta_var as $table)
                        <option value="{{ $table->id }}">{{ $table->var_b1k2 }}</option>
                    @endforeach
                      
                            </select>

							
							<button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
               
                            </form>
						
						
						</div>
					</div>
					<!-- END OVERVIEW -->
						<div class="panel panel-headline">
						    <div class="panel-heading">
							<h3 class="panel-title">Daftar Tabel</h3>
					
						
						<table class="table table-bordered" id="example3">
<thead>
							<tr>
							<th> Tabel </th>
							<th> Kegiatan </th>
							<th> Indikator </th>
							<th> Variabel </th>
							<th class="text-center">Action</th>
							</tr>
</thead>
							@foreach($metadata as $table)
							
							<tr>
							<td>{{$table->tabel}}  </td>
							<td>{{$table->nama}}  </td>
							<td>{{$table->ind_nama}}  </td>
							<td>{{$table->var_nama}}  </td>
							<td class="text-center">
								
						<form action="{{ route('postsssss.destroy9', $table->id) }}" method="POST">
            
							@csrf

@method('DELETE')

   <button type="submit" class="btn btn-danger" style="color: #FFF; background-color: #d9534f; border-color: #d9534f; border-radius: 5px; padding-left: 6px; padding-right: 6px; padding-top: 2px; padding-bottom: 2px;" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
</form>
                              
                         
                        </td>
							</tr>

							@endforeach
</table></div>
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
	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>

$(document).ready(function() {
    $('.cari').select2();
});

  </script>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('#example3').DataTable({
				
			});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#color_id").val();
    var name = $("#name").val();
	var detail = $("#detail").val();
    $.ajax({
      url: 'color/' + id,
      type: "POST",
      data: {
        id: id,
        name: name,
		detail: detail,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata').trigger("reset");
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#editCompany', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('color/' + id + '/edit', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#practice_modal').modal('show');
         $('#color_id').val(data.data.id);
         $('#name').val(data.data.name);
		 $('#detail').val(data.data.detail);
     })
});

}); 
</script>
</body>

</html>
