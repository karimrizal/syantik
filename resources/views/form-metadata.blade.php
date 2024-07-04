<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Syantik | Sistem Informasi Layanan Statistik</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="{{asset('public/admin/assets/css/styles.css')}}">
  
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('public/admin/assets/img/favicon.png')}}">>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
			aa  <img src="{{asset('public/admin/assets/img/logo-dark.svg')}}" alt="Syantik Logo" class="img-fluid" width="150" height="150"> &nsbp
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
               
            <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"> <span>Hi, {{ Auth::user()->name }} </span><i class="icon-submenu lnr lnr-chevron-down"></i> </a>
							<ul class="dropdown-menu">
						
								<li> &nbsp <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
							</ul>
						</li>
            
              
            </ul>
        </nav>
        <div id="layoutSidenav">

        @include('back-end/layouts/sidebar')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <div class="card mb-4">
<div class="card-header">    </div>     
      <div class="card-body">
        <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
               <form class="was-validated" method="post" action="{{ route('metadata.simpan') }}" enctype="multipart/form-data">
                @csrf
                            @if (session('success2'))
                            <div class="alert alert-success">
                                {{ session('success2') }}
                            </div>
                            @endif
                <div class="col pt-4">
                    <h3>Form Metadata Kegiatan</h3> <button type="submit" class="btn btn-primary">Kirim</button>
                    
                    <hr />
                      
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-awal-tab" data-bs-toggle="pill" data-bs-target="#pills-awal" type="button" role="tab" aria-controls="pills-awal" aria-selected="true">Halaman Awal</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok1-tab" data-bs-toggle="pill" data-bs-target="#pills-blok1" type="button" role="tab" aria-controls="pills-blok1" aria-selected="false">Blok I</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok2-tab" data-bs-toggle="pill" data-bs-target="#pills-blok2" type="button" role="tab" aria-controls="pills-blok2" aria-selected="false">Blok II</button>
                      </li>
                      
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok3-tab" data-bs-toggle="pill" data-bs-target="#pills-blok3" type="button" role="tab" aria-controls="pills-blok3" aria-selected="false">Blok III</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok4-tab" data-bs-toggle="pill" data-bs-target="#pills-blok4" type="button" role="tab" aria-controls="pills-blok4" aria-selected="false">Blok IV</button>
                      </li>
                      <li id="Survei" style="display: none;" class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok5-tab" data-bs-toggle="pill" data-bs-target="#pills-blok5" type="button" role="tab" aria-controls="pills-blok5" aria-selected="false">Blok V</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok6-tab" data-bs-toggle="pill" data-bs-target="#pills-blok6" type="button" role="tab" aria-controls="pills-blok6" aria-selected="false">Blok VI</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok7-tab" data-bs-toggle="pill" data-bs-target="#pills-blok7" type="button" role="tab" aria-controls="pills-blok7" aria-selected="false">Blok VII</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blok8-tab" data-bs-toggle="pill" data-bs-target="#pills-blok8" type="button" role="tab" aria-controls="pills-blok8" aria-selected="false">Blok VIII</button>
                      </li>
                   
                 </ul>
                 
              
                            
               <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade" id="pills-blok3" role="tabpanel" aria-labelledby="pills-home-tab">
                    <center>   <strong>III. PERENCANAAN DAN PERSIAPAN</strong> </center> 
    
                     <hr />
                     <input type="hidden" id="opd" name="opd" value="{{Auth::user()->organisasi}}"> <br>
                                    <div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>3.1 Latar Belakang Kegiatan: </strong>
            					            <textarea class="form-control" style="height:100px" name="b3r1" placeholder="Tuliskan Secara Jelas Latar Belakang Kegiatan" required>{{ old('b3r1') }}</textarea>
                                            <div class="invalid-feedback">Latar Belakang Kegiatan Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> <br>	    
                                   
                                 <div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>3.2 Tujuan Kegiatan: </strong>
            					            <textarea class="form-control" style="height:100px" name="b3r2" placeholder="Tuliskan Secara Jelas Tujuan Kegiatan" required>{{ old('b3r2') }}</textarea>
            					           <div class="invalid-feedback">Tujuan Kegiatan Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> <br>   
            					
            					<div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>3.3 Rencana Jadwal Kegiatan: </strong>
            					           <table class="table table-striped" width="100%"> 
            					           <tr>
            					               <th colspan="2"> </th>
            					               <th>Tanggal Mulai</th>
            					               <th>Tanggal Selesai</th>
            					           </tr>
            					           <tr>
            					               <td colspan="4"> <strong> A. Perencanaan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>1. Perencanaan Kegiatan</td>
            					               <td> <input type="date" id="b3r3a1k1" name="b3r3a1k1" class="form-control" value="{{ old('b3r3a1k1') }}" placeholder="Isikan Tanggal Mulai Perencanaan" required>
            					               <div class="invalid-feedback">Tanggal Mulai Perencanaan Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3a1k2" name="b3r3a1k2" class="form-control" value="{{ old('b3r3a1k2') }}" placeholder="Isikan Tanggal Selesai Perencanaan" required>
            					               <div class="invalid-feedback">Tanggal Selesai Perencanaan Harus Diisi.</div></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>2. Desain</td>
            					               <td> <input type="date" id="b3r3a2k1" name="b3r3a2k1" class="form-control" value="{{ old('b3r3a2k1') }}" placeholder="Isikan Tanggal Mulai Desain" required>
            					               <div class="invalid-feedback">Tanggal Mulai Desain Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3a2k2" name="b3r3a2k2" class="form-control" value="{{ old('b3r3a2k2') }}" placeholder="Isikan Tanggal Selesai Desain" required>
            					               <div class="invalid-feedback">Tanggal Selesai Desain Harus Diisi.</div></td>
            					           </tr>
            					           
            					           <tr>
            					               <td colspan="4"> <strong> B. Pengumpulan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>3. Pengumpulan Data</td>
            					               <td> <input type="date" id="b3r3b1k1" name="b3r3b1k1" class="form-control" value="{{ old('b3r3b1k1') }}" placeholder="Isikan Tanggal Mulai Pengumpulan Data" required>
            					               <div class="invalid-feedback">Tanggal Mulai Pengumpulan Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3b1k2" name="b3r3b1k2" class="form-control" value="{{ old('b3r3b1k2') }}" placeholder="Isikan Tanggal Selesai Pengumpulan Data" required>
            					               <div class="invalid-feedback">Tanggal Selesai Pengumpulan Harus Diisi.</div></td>
            					           </tr>
            					           
            					           <tr>
            					               <td colspan="4"> <strong> C. Pemeriksaan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>4. Pengolahan Data</td>
            					               <td> <input type="date" id="b3r3c1k1" name="b3r3c1k1" class="form-control" value="{{ old('b3r3c1k1') }}" placeholder="Isikan Tanggal Mulai Pengolahan Data" required>
            					               <div class="invalid-feedback">Tanggal Mulai Pengolahan Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3c1k2" name="b3r3c1k2" class="form-control" value="{{ old('b3r3c1k2') }}" placeholder="Isikan Tanggal Selesai Pengolahan Data" required>
            					               <div class="invalid-feedback">Tanggal Selesai Pengolahan Harus Diisi.</div></td>
            					           </tr>
            					           
            					           
            					            <tr>
            					               <td colspan="4"> <strong> D. Penyebarluasan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>5. Analisis</td>
            					               <td> <input type="date" id="b3r3d1k1" name="b3r3d1k1" class="form-control" value="{{ old('b3r3d1k1') }}" placeholder="Isikan Tanggal Mulai Analisis" required>
            					               <div class="invalid-feedback">Tanggal Mulai Analisis Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3d1k2" name="b3r3d1k2" class="form-control" value="{{ old('b3r3d1k2') }}" placeholder="Isikan Tanggal Selesai Analisis" required>
            					               <div class="invalid-feedback">Tanggal Selesai Analisis Harus Diisi.</div></td>
            					           </tr>
            					           
            					            <tr>
            					               <td></td>
            					               <td>6. Diseminasi Hasil</td>
            					               <td> <input type="date" id="b3r3d2k1" name="b3r3d2k1" class="form-control" value="{{ old('b3r3d2k1') }}" placeholder="Isikan Tanggal Mulai Diseminasi" required>
            					               <div class="invalid-feedback">Tanggal Mulai Diseminasi Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3d2k2" name="b3r3d2k2" class="form-control" value="{{ old('b3r3d2k2') }}" placeholder="Isikan Tanggal Selesai Diseminasi" required>
            					               <div class="invalid-feedback">Tanggal Selesai Diseminasi Harus Diisi.</div></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>7. Evaluasi</td>
            					               <td> <input type="date" id="b3r3d3k1" name="b3r3d3k1" class="form-control" value="{{ old('b3r3d3k1') }}" placeholder="Isikan Tanggal Mulai Evaluasi" required>
            					               <div class="invalid-feedback">Tanggal Mulai Evaluasi Harus Diisi.</div></td>
            					               <td> <input type="date" id="b3r3d3k2" name="b3r3d3k2" class="form-control" value="{{ old('b3r3d3k2') }}" placeholder="Isikan Tanggal Selesai Evaluasi" required>
            					               <div class="invalid-feedback">Tanggal Selesai Evaluasi Harus Diisi.</div></td>
            					           </tr>
            					           
            					           
            					           </table>
            							   </div>
            							   
            						</div>
            						
            						<br>  <br>
            						
            						
            					
            					            <strong>3.4 Variabel Karateristik Yang Dikumpulkan: </strong>
            					            <table class="table table-bordered" id="dynamicAddRemove2">
                                          <tr>
            					               <th>No </th>
            					               <th>Nama Variabel (Karateristik)</th>
            					               <th>Konsep</th>
            					               <th>Definisi</th>
            					               <th>Referensi Waktu (Periode Enumerasi)</th>
            					               <th>Aksi</th>
            					           </tr>


                    
                            <tr>
                                
                            <td>1</td>    
                            <td>
                               <textarea class="form-control" style="height:80px" name="b3r34k1[0]" placeholder="Tuliskan Nama Variabel" required></textarea>
                               <div class="invalid-feedback">Nama Variabel Harus Diisi.</div>
                            </td>
        
        
        
                            <td> <textarea class="form-control" style="height:80px" name="b3r34k2[0]" placeholder="Tuliskan Konsep Variabel" required></textarea>
                            <div class="invalid-feedback">Konsep Variabel Harus Diisi.</div></td>
                    					               <td> <textarea class="form-control" style="height:80px" name="b3r34k3[0]" placeholder="Tuliskan Definisi" required></textarea>
                    					               <div class="invalid-feedback">Definisi Variabel Harus Diisi.</div></td>
                    					               <td> <textarea class="form-control" style="height:80px" name="b3r34k4[0]" placeholder="Tuliskan Referensi Waktu" required></textarea>
                    					               <div class="invalid-feedback">Referensi Waktu Harus Diisi.</div></td>
                    					               <td> <button type="button" name="add" id="dynamic-ar2" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button></td>
                        </tr>
            </table>
            
            
           
            					
            						
            				
                
                </div>
                  <!-- AKHIR BLOK III -->
                  
                <div class="tab-pane fade show active" id="pills-awal" role="tabpanel" aria-labelledby="pills-awal-tab"> 
                <center>   <strong>HALAMAN AWAL</strong> </center> 
    
                     <hr />
                <div class="row">
                                        <div class="col-md-10">
            					            <strong>Judul Kegiatan: </strong>
            					            <input type="text" id="b0r1" name="b0r1" class="form-control" value="{{ old('b0r1') }}" placeholder="Isikan judul kegiatan statistik yang dilakukan" required>
            					            <div class="invalid-feedback">Judul Kegiatan Harus Diisi.</div>
            							   </div>
            							   
            							    <div class="col-md-2">
            							   <strong>Tahun:</strong>
            					            <input type="text" id="b0r2" name="b0r2" class="form-control" value="{{ old('b0r2') }}" placeholder="Isikan tahun kegiatan" pattern= "[0-9]{4}" required>
            					            <div style="font-size: 9px;" class="invalid-feedback">Tahun Kegiatan Harus Berupa 4 Digit Angka.</div>
            							   </div>
            						</div>
            						<br> 
                <div class="row">
                                        <div class="col-md-12">
            					            <strong>Cara Pengumpulan Data:</strong> <br>
            					            <select class="form-control" name="b0r3" id="b0r3" value="{{ old('b0r3') }}" required>
            					                <option disabled selected value> -- Pilih -- </option>
            					                <option value="Pencacahan Lengkap">Pencacahan Lengkap</option>
            					                <option value="Survei">Survei</option>
            					                <option value="Kompilasi Produk Administrasi">Kompilasi Produk Administrasi</option>
            					                <option value="Cara Lain Sesuai Dengan Perkembangan TI">Cara Lain Sesuai Dengan Perkembangan TI</option>
            					           </select>
            					           <div class="invalid-feedback">Cara Pengumpulan Data Harus Diisi.</div>
            							   </div>
            							   
            						
            							   
            							   
            						</div>
            						
            								<br>
            								
            								
            								<div class="row">
                               
            							   
            							    <div class="col-md-12">
            					            <strong>Sektor Kegiatan:</strong> <br>
            					            <select class="form-control" name="b0r4" value="{{ old('b0r4') }}" required>
            					                <option disabled selected value> -- Pilih -- </option>
            					                <option value="Pertanian dan Perikanan">Pertanian dan Perikanan</option>
            					                <option value="Demografi dan Kependudukan">Demografi dan Kependudukan</option>
            					                <option value="Pembangunan">Pembangunan</option>
            					                <option value="Proyeksi Ekonomi">Proyeksi Ekonomi</option>
            					                <option value="Pendidikan dan Pelatihan">Pendidikan dan Pelatihan</option>
            					                <option value="Lingkungan">Lingkungan</option>
            					                <option value="Keuangan">Keuangan</option>
            					                <option value="Globalisasi">Globalisasi</option>
            					                <option value="Kesehatan">Kesehatan</option>
            					                <option value="Industri dan Jasa">Industri dan Jasa</option>
            					                <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
            					                <option value="Perdagangan Internasional dan Neraca Perdagangan">Perdagangan Internasional dan Neraca Perdagangan</option>
            					                <option value="Ketenagakerjaan">Ketenagakerjaan</option>
            					                <option value="Neraca Nasional">Neraca Nasional</option>
            					                <option value="Indikator Ekonomi Bulanan">Indikator Ekonomi Bulanan</option>
            					                <option value="Produktivitas">Produktivitas</option>
            					                <option value="Harga dan Paritas Daya Beli">Harga dan Paritas Daya Beli</option>
            					                <option value="Sektor Publik Perpajakan dan Regulasi Pasar">Sektor Publik Perpajakan dan Regulasi Pasar</option>
            					                <option value="Perwilayahan dan Perkotaan">Perwilayahan dan Perkotaan</option>
            					                <option value="Ilmu Pengetahuan dan Hak Paten">Ilmu Pengetahuan dan Hak Paten</option>
            					                <option value="Perlindungan Sosial dan Kesejahteraan">Perlindungan Sosial dan Kesejahteraan</option>
            					                <option value="Transportasi">Transportasi</option>
            					           </select>
            					           <div class="invalid-feedback">Sektor Kegiatan Harus Diisi.</div>
            							   </div>
            							   
            							   
            						</div>
            						
            								<br>
                
               
                
                </div>
        <!-- AKHIR HALAMAN AWAL -->
        
        
        
         <div class="tab-pane fade" id="pills-blok1" role="tabpanel" aria-labelledby="pills-blok1-tab"> 
            <center>   <strong>I. PENYELENGGARA</strong> </center> 
    
                     <hr />    
                        <div class="row">
                                        <div class="col-md-12">
            					            <strong>1.1 Instansi Penyelenggara: </strong>
            					            <input type="text" id="b1r1" name="b1r1" class="form-control" value="{{ old('b1r1') }}" placeholder="Nama Instansi Penyelenggara" required>
            					            <div class="invalid-feedback">Nama Instansi Harus Diisi.</div>
            							   </div>
            						</div>
            						
            						<br> 
            						
            						  <div class="row">
                                        <div class="col-md-12">
            					            <strong>1.2 Alamat Instansi Penyelenggara: </strong>
            					            <input type="text" id="b1r2" name="b1r2" class="form-control" value="{{ old('b1r2') }}" placeholder="Alamat Instansi Penyelenggara" required>
            					            <div class="invalid-feedback">Alamat Instansi Harus Diisi.</div>
            							   </div>
            							   
            							 
            						</div>
            						<br> 
                                    
                                    <div class="row">
                                        <div class="col-md-4">
            					            <strong>Telepon: </strong>
            					            <input type="text" id="b1r3" name="b1r3" class="form-control" value="{{ old('b1r3') }}" placeholder="Telepon Instansi Penyelenggara" required>
            					            <div class="invalid-feedback">Telepon Instansi Harus Diisi.</div>
            							   </div>
            							   
            							    <div class="col-md-4">
            							   <strong>Faksmile:</strong>
            					            <input type="text" id="b1r4" name="b1r4" class="form-control" value="{{ old('b1r4') }}" placeholder="Faksmile Instansi Penyelenggara" required>
            					            <div class="invalid-feedback">Faksmile Instansi Harus Diisi.</div>
            							   </div>
            							   
            							   <div class="col-md-4">
            							   <strong>Email:</strong>
            					            <input type="email" id="b1r5" name="b1r5" class="form-control" value="{{ old('b1r5') }}" placeholder="Email Instansi Penyelenggara" required>
            					            <div class="invalid-feedback">Email Instansi Harus Diisi dan Format Email Harus Sesuai.</div>
            							   </div>
            						</div>
            					
                
               
                
                </div>
        <!-- AKHIR BLOK 1 -->
        
        
        <div class="tab-pane fade" id="pills-blok2" role="tabpanel" aria-labelledby="pills-blok2-tab"> 
            <center>   <strong>II. PENANGGUNG JAWAB</strong> </center> 
    
                     <hr />    
                    <div class="row">
                                        <div class="col-md-12">
            					            <strong>2.1 Unit Eselon Penanggung Jawab: </strong>
            					            
            							   </div>
            						</div>
            					
            						<div class="row">
            						    
                                        <div class="col-md-6">
            					            <strong>Eselon 1: </strong>
            					            <input type="text" id="b2r1" name="b2r1" class="form-control" value="{{ old('b2r1') }}" placeholder="Tuliskan Nama Penanggung Jawab Setingkat Eselon 1" required>
            					            <div class="invalid-feedback">Nama Penanggung Jawab Eselon 1 Harus Diisi.</div>
            							   </div>
            							   <div class="col-md-6">
            					            <strong>Eselon 2: </strong>
            					            <input type="text" id="b2r2" name="b2r2" class="form-control" value="{{ old('b2r2') }}" placeholder="Tuliskan Nama Penanggung Jawab Setingkat Eselon 2" required>
            					            <div class="invalid-feedback">Nama Penanggung Jawab Eselon 2 Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> 
            						
            						
						  <div class="row">
                                        <div class="col-md-12">
            					            <strong>2.2 Penanggung Jawab Teknis (Setingkat Eselon 3): </strong>
            					            
            							   </div>
            						</div>
            						
            						
            				<div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>Nama: </strong>
            					            <input type="text" id="b2r3" name="b2r3" class="form-control" value="{{ old('b2r3') }}" placeholder="Tuliskan Nama Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Nama Penanggung Jawab Teknis Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> 	
            					<div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>Jabatan: </strong>
            					            <input type="text" id="b2r4" name="b2r4" class="form-control" value="{{ old('b2r4') }}" placeholder="Tuliskan Jabatan Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Jabatan Penanggung Jawab Teknis Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> 
            						
            				<div class="row">
            						    
                                        <div class="col-md-12">
            					            <strong>Alamat: </strong>
            					            <input type="text" id="b2r5" name="b2r5" class="form-control" value="{{ old('b2r5') }}" placeholder="Tuliskan Alamat Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Alamat Penanggung Jawab Teknis Harus Diisi.</div>
            							   </div>
            							   
            						</div>
            						
            						<br> 					
            				 <div class="row">
                                        <div class="col-md-4">
            					            <strong>Telepon: </strong>
            					            <input type="text" id="b2r6" name="b2r6" class="form-control" value="{{ old('b2r6') }}" placeholder="Telepon Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Telepon Penanggung Jawab Teknis Harus Diisi.</div>
            							   </div>
            							   
            							    <div class="col-md-4">
            							   <strong>Faksmile:</strong>
            					            <input type="text" id="b2r7" name="b2r7" class="form-control" value="{{ old('b2r7') }}" placeholder="Faksmile Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Faksmile Penanggung Jawab Teknis Harus Diisi.</div>
            							   </div>
            							   
            							   <div class="col-md-4">
            							   <strong>Email:</strong>
            					            <input type="email" id="b2r8" name="b2r8" class="form-control" value="{{ old('b2r8') }}" placeholder="Email Penanggung Jawab Teknis" required>
            					            <div class="invalid-feedback">Email Penanggung Jawab Teknis Harus Diisi dan Format Email Harus Sesuai.</div>
            							   </div>
            						</div>
            					
            					
                
               
                
                </div>
        <!-- AKHIR BLOK 2 -->
        
        
        <div class="tab-pane fade" id="pills-blok4" role="tabpanel" aria-labelledby="pills-blok4-tab"> 
            <center>   <strong>IV. DESAIN KEGIATAN</strong> </center> 
    
                     <hr />    
                  <div class="row">
                                        <div class="col-md-12">
                                            <strong>4.1 Kegiatan Ini Dilakukan: </strong> <br>
                                            
                                             
            					        
                					            <input type="radio" class="form-check-input" id="sekali" name="b4r1" value="Hanya Sekali" required>
                                                <label class="form-check-label" for="sekali">Hanya Sekali</label> &nbsp &nbsp 
                                               
                                              
                					           
                                                <input type="radio" class="form-check-input" id="berulang" name="b4r1" value="Berulang" required>
                                                <label class="form-check-label" for="berulang">Berulang</label>
                                            
            					               <div class="invalid-feedback">Frekuensi Kegiatan Harus Diisi.</div>
            					               
                                            </table>
            							   </div>
            						</div>
            						<br> 
            						

            			
            						
            					 <div class="row">
            						     
                                        <div id="Berulang" style="display: none;" class="col-md-12 desc">
                                            <strong>4.2 Frekuensi Penyelenggaraan: </strong> <br>
            					          
            					                <input type="radio"  class="form-check-input" id="harian" name="b4r2" value="Harian" >
                                            <label class="form-check-label" for="harian">Harian</label> &nbsp &nbsp 
                                            <input type="radio"  class="form-check-input" id="mingguan" name="b4r2" value="Mingguan" >
                                            <label class="form-check-label" for="mingguan">Mingguan</label> &nbsp &nbsp
                                           
                                            <input type="radio"  class="form-check-input" id="bulanan" name="b4r2" value="Bulanan" >
                                            <label class="form-check-label" for="bulanan">Bulanan</label> &nbsp &nbsp
                                           
                                            <input type="radio"  class="form-check-input" id="triwulanan" name="b4r2" value="Triwulanan" >
                                            <label class="form-check-label" for="triwulanan">Triwulanan</label> &nbsp &nbsp
                                            
                                            <input type="radio"  class="form-check-input" id="empatbulanan" name="b4r2" value="Empat Bulanan" >
                                            <label class="form-check-label" for="empatbulanan">Empat Bulanan</label> &nbsp &nbsp
                                           
                                            <input type="radio"  class="form-check-input" id="semesteran" name="b4r2" value="Semesteran" >
                                            <label class="form-check-label" for="semesteran">Semesteran</label> &nbsp &nbsp
                                            
                                            <input type="radio"  class="form-check-input" id="tahunan" name="b4r2" value="Tahunan" >
                                            <label class="form-check-label" for="tahunan">Tahunan</label> &nbsp &nbsp
                                           
                                            <input type="radio"  class="form-check-input" id="lebihduatahun" name="b4r2" value="Lebih Dari Dua Tahunan" >
                                            <label class="form-check-label" for="lebihduatahun">Lebih Dari Dua Tahunan</label> &nbsp &nbsp
                                           <div class="invalid-feedback">Frekuensi Penyelenggaraan Harus Diisi.</div>
                                            <br>
            							   </div>
            							   
            							
            							   
            						</div>
            				
            					
            						
            						<div class="row">
                                        <div class="col-md-12">
                                            <strong>4.3 Tipe Pengumpulan Data: </strong> <br>
            					                <input type="radio" class="form-check-input" id="panel" name="b4r3" value="Longitudinal Panel" required>
                                                <label class="form-check-label" for="panel">Longitudinal Panel</label> &nbsp &nbsp 
                                                <input type="radio" class="form-check-input" id="cross" name="b4r3" value="Longitudinal Cross Sectional" required>
                                                <label class="form-check-label" for="cross">Longitudinal Cross Sectional</label> &nbsp &nbsp
                                                
                                                <input type="radio" class="form-check-input" id="cross-sectional" name="b4r3" value="Cross Sectional" required>
                                                <label class="form-check-label" for="cross-sectional">Cross Sectional</label>
                                                <div class="invalid-feedback">Tipe Pengumpulan Data Harus Diisi.</div>
                                                
            							   </div>
            						</div>
            						<br> 
            				
            				        <div class="row">
                                        <div class="col-md-12">
                                            <strong>4.4 Cakupan Wilayah Pengumpulan Data: </strong> <br>
            					                <input type="radio" class="form-check-input" id="seluruh-indo" name="b4r4" value="Seluruh" required>
                                                <label class="form-check-label" for="seluruh-indo">Seluruh Wilayah Indonesia</label> &nbsp &nbsp </td>
                					           
                                                <input type="radio" class="form-check-input" id="sebagian-indo" name="b4r4" value="Sebagian" required>
                                                <label class="form-check-label" for="sebagian-indo">Sebagian Wilayah Indonesia</label>
                                                <div class="invalid-feedback">Cakupan Wilayah Pengumpulan Data Harus Diisi.</div>
                                               
            							   </div>
            						</div>
            						<br>
            						
            						 <div class="row">
            						     
                                        <div id="Sebagian" style="display: none;" class="col-md-12 desc2">
                                            <strong>4.5 Wilayah Kegiatan: </strong> <br>
            					                 <select class="form-control select22" style="width:100%" name="b4r5[]" id="b4r5" value="{{ old('b0r5') }}" multiple >
            					              
            					                <option value="Buton" selected>Buton</option>
            					                <option value="Muna" selected>Muna</option>
            					                <option value="Konawe" selected>Konawe</option>
            					                <option value="Kolaka" selected>Kolaka</option>
            					                <option value="Konawe Selatan" selected>Konawe Selatan</option>
            					                <option value="Bombana" selected>Bombana</option>
            					                <option value="Wakatobi" selected>Wakatobi</option>
            					                <option value="Kolaka Utara" selected>Kolaka Utara</option>
            					                <option value="Buton Utara" selected>Buton Utara</option>
            					                <option value="Konawe Utara" selected>Konawe Utara</option>
            					                <option value="Kolaka Timur" selected>Kolaka Timur</option>
            					                <option value="Konawe Kepulauan" selected>Konawe Kepulauan</option>
            					                <option value="Muna Barat" selected>Muna Barat</option>
            					                <option value="Buton Tengah" selected>Buton Tengah</option>
            					                <option value="Buton Selatan" selected>Buton Selatan</option>
            					                <option value="Kota Kendari" selected>Kota Kendari</option>
            					                <option value="Kota Baubau" selected>Kota Baubau</option>
            					   
            					           </select>
                                            <br>
                                            <br>
            							   </div>
            						   
            						</div>
            						 
            						
            							 <div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>4.6 Metode Pengumpulan Data: </strong> <br>
            					                <label><input type="checkbox" name="b4r6[]" value="Wawancara"> Wawancara</label><br>
            					                
                                                <label><input type="checkbox" name="b4r6[]" value="Mengisi Kuesioner Sendiri"> Mengisi Kuesioner Sendiri</label><br>
                                                <label><input type="checkbox" name="b4r6[]" value="Pengamatan"> Pengamatan</label><br>
                                                <label><input type="checkbox" name="b4r6[]" value="Pengumpulan Data Sekunder"> Pengumpulan Data Sekunder</label><br>
                                                <label><input  type="checkbox" id="check" onclick="myFunction()"> Lainnya</label><br>
                                                
                                                <input type = "text" name="b4r6[]" id="lainnya" style="display: none;" class="form-control" placeholder ="Tuliskan Metode Pengumpulan Data Lainnya">
                                                 <div class="invalid-feedback">Metode Pengumpulan Data Harus Diisi.</div>
                                                
                                            <br>
            							   </div>
            						   
            						</div>
            						
            						
            							 <div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>4.7 Sarana Pengumpulan Data: </strong> <br>
            					                <label><input  type="checkbox" name="b4r7[]" value="Paper-assisted Personal Interviewing (PAPI)"> Paper-assisted Personal Interviewing (PAPI)</label><br>
                                                <label><input type="checkbox" name="b4r7[]" value="Computer-assisted Personal Interviewing (CAPI)"> Computer-assisted Personal Interviewing (CAPI)</label><br>
                                                <label><input type="checkbox" name="b4r7[]" value="Computer-assisted Telephones Interviewing (CATI)"> Computer-assisted Telephones Interviewing (CATI)</label><br>
                                                <label><input type="checkbox" name="b4r7[]" value="Computer Aided Web Interviewing (CAWI)"> Computer Aided Web Interviewing (CAWI)</label><br>
                                                <label><input type="checkbox" name="b4r7[]" value="Mail"> Mail</label><br>
                                                <label><input type="checkbox" id="check-sarana" onclick="cekSarana()"> Lainnya</label><br>
                                               
                                                <input type = "text" name="b4r7[]" id="lainnya-sarana" style="display: none;" class="form-control" placeholder ="Tuliskan Sarana Pengumpulan Data Lainnya">
                                                
                                            <br>
            							   </div>
            						   
            						</div>
            						
            						<div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>4.8 Unit Pengumpulan Data: </strong> <br>
            					                <label><input  type="checkbox" name="b4r8[]" value="Individu">Individu</label><br>
                                                <label><input type="checkbox" name="b4r8[]" value="Rumah Tangga">Rumah Tangga</label><br>
                                                <label><input type="checkbox" name="b4r8[]" value="Usaha/Perusahaan">Usaha/Perusahaan</label><br>
                                                <label><input type="checkbox" id="check-unit" onclick="cekUnit()"> Lainnya</label><br>
                                               
                                                <input type = "text" name="b4r8[]" id="lainnya-unit" style="display: none;" class="form-control" placeholder ="Tuliskan Unit Pengumpulan Data Lainnya">
                                                
                                            <br>
            							   </div>
            							   </div>
            
                </div>
        <!-- AKHIR BLOK 4 -->
        
        
        <div class="tab-pane fade" id="pills-blok5" role="tabpanel" aria-labelledby="pills-blok5-tab"> 
            <center>   <strong>V. DESAIN SAMPEL</strong> </center>
            <center>   Diisi Jika Cara Pengumpulan Data adalah Survei </center> 
    
                     <hr />    
               
            		<div class="row">
                                        <div class="col-md-12">
                                            <strong>5.1 Jenis Rancangan Sampel: </strong> <br>
            					            <input type="radio" class="form-check-input" id="single-stage" name="b5r1" value="Single Stage Atau Phase" >
                                                <label class="form-check-label" for="single-stage">Single Stage Atau Phase</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="multi-stage" name="b5r1" value="Multi Stage Atau Phase" >
                                                <label class="form-check-label" for="multi-stage">Multi Stage Atau Phase</label>
                                                <div class="invalid-feedback">Jenis Rancangan Sampel Harus Diisi.</div>
                                                
            							   </div>
            						</div>
            						<br> 
            						
            						<div class="row">
                                        <div class="col-md-12">
                                            <strong>5.2 Metode Pemilihan Sampel Tahap Terakhir: </strong> <br>
            					             <input type="radio" class="form-check-input" id="probabilitas" name="b5r2" value="Probabilitas" >
                                                <label class="form-check-label" for="probabilitas">Sampel Probabilitas</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="nonprobabilitas" name="b5r2" value="NonProbabilitas" >
                                                <label class="form-check-label" for="nonprobabilitas">Sampel Nonprobabilitas</label>
                                                <div class="invalid-feedback">Metode Pemilihan Sampel Harus Diisi.</div>
            							   </div>
            						</div>
            						<br> 
            						
            						 <div class="row">
            						     
                                        <div id="NonProbabilitas" style="display: none;" class="col-md-12 desc3">
                                            <strong>5.3 Metode Yang Digunakan: </strong><br>
            					                <input type="radio" class="form-check-input" id="quota" name="b5r3" value="Quota Sampling" >
                                                <label class="form-check-label" for="quota">Quota Sampling</label><br>
                                                <input type="radio" class="form-check-input" id="accidental" name="b5r3" value="Accidental Sampling" >
                                                <label class="form-check-label" for="accidental">Accidental Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="purposive" name="b5r3" value="Purposive Sampling" >
                                                <label class="form-check-label" for="purposive">Purposive Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="snowball" name="b5r3" value="Snowball Sampling" >
                                                <label class="form-check-label" for="snowball">Snowball Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="saturation" name="b5r3" value="Saturation Sampling" >
                                                <label class="form-check-label" for="saturation">Saturation Sampling</label> <br>
                                                <div class="invalid-feedback">Metode yang Digunakan Harus Diisi.</div>
                                            <br>
            							   </div>
            						</div>
            						
            						<div class="row">
            						     
                                        <div id="Probabilitas" style="display: none;" class="col-md-12 desc3">
                                            <strong>5.3 Metode Yang Digunakan: </strong><br>
            					                <input type="radio" class="form-check-input" id="simple" name="b5r3" value="Simple Random Sampling" >
                                                <label class="form-check-label" for="simple">Simple Random Sampling</label><br>
                                                <input type="radio" class="form-check-input" id="systematic" name="b5r3" value="Systematic Random Sampling" >
                                                <label class="form-check-label" for="systematic">Systematic Random Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="stratified" name="b5r3" value="Stratified Random Sampling" >
                                                <label class="form-check-label" for="stratified">Stratified Random Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="cluster" name="b5r3" value="Cluster Sampling" >
                                                <label class="form-check-label" for="cluster">Cluster Sampling</label> <br>
                                                <input type="radio" class="form-check-input" id="probability" name="b5r3" value="Probabilty Proportional to Size Sampling" >
                                                <label class="form-check-label" for="probability">Probabilty Proportional to Size Sampling</label> <br>
                                                <div class="invalid-feedback">Metode yang Digunakan Harus Diisi.</div>
                                            <br>
                                            
                                             <strong>5.4 Kerangka Sampel Terakhir: </strong> <br>
            					            <input type="radio" class="form-check-input" id="list" name="b5r4" value="List Frame" >
                                                <label class="form-check-label" for="list">List Frame</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="area" name="b5r4" value="Area Frame" >
                                                <label class="form-check-label" for="area">Area Frame</label>
                                                <div class="invalid-feedback">Kerangka Sampel Harus Diisi.</div>
                                               
                                            <br>
                                            
                                            <strong>5.5 Fraksi Sampel Keseluruhan: </strong>
                                            <textarea class="form-control" style="height:100px" name="b5r5" id="b5r5" placeholder="Tuliskan Fraksi Sampel Keseluruhan" >{{ old('b5r5') }}</textarea>
                                            <div class="invalid-feedback">Fraksi Sampel Harus Diisi.</div>
                                            <br>
                                            
                                            <strong>5.6 Nilai Perkiraan Sampling Error Variabel Utama: </strong>
                                            <input type="text" id="b5r6" name="b5r6" class="form-control"  value="{{ old('b5r6') }}" placeholder="Tuliskan Nilai Perkiraan Sampling Error" >
                                            <div class="invalid-feedback">Nilai Sampling Error Variabel Utama Harus Diisi.</div>
                                            <br>
                                            
                                            
            							   </div>
            						</div>
                                     
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>5.7 Unit Sampel: </strong>
            					            <input type="text" id="b5r7" name="b5r7" class="form-control" value="{{ old('b5r7') }}" placeholder="Tuliskan Unit Sampel" >
            					            <div class="invalid-feedback">Unit Sampel Harus Diisi.</div>
            							   </div>
            						</div>
            						<br>
            						<div class="row">
                                        <div class="col-md-12">
                                            <strong>5.8 Unit Observasi: </strong>
            					            <input type="text" id="b5r8" name="b5r8" class="form-control" value="{{ old('b5r8') }}" placeholder="Tuliskan Unit Observasi" >
            					            <div class="invalid-feedback">Unit Observasi Harus Diisi.</div>
            							   </div>
            						</div>
            						<br>  			
                
               
                
                </div>
        <!-- AKHIR BLOK 5 -->
                  
        <div class="tab-pane fade" id="pills-blok6" role="tabpanel" aria-labelledby="pills-blok6-tab"> 
            <center>   <strong>VI. PENGUMPULAN DATA</strong> </center> 
    
                     <hr />    
                        <div class="row">
                                        <div class="col-md-12">
                                            <strong>6.1 Apakah Melakukan Uji Coba (Pilot Survey)? </strong> <br>
            					            <input type="radio" class="form-check-input" id="ya" name="b6r1" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="tidak" name="b6r1" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                               <div class="invalid-feedback">Uji Coba Harus Diisi.</div>
            							   </div>
            						</div>
            						<br>     
                                 
            					<div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>6.2 Metode Pemeriksaan Kualitas Pengumpulan Data: </strong> <br>
            					                <label><input  type="checkbox" name="b6r2[]" value="Kunjungan Kembali">Kunjungan Kembali</label><br>
                                                <label><input type="checkbox" name="b6r2[]" value="Supervisi">Supervisi</label><br>
                                                <label><input type="checkbox" name="b6r2[]" value="Task Force">Task Force</label><br>
                                                <label><input type="checkbox" id="check-kualitas" onclick="cekKualitas()"> Lainnya</label><br>
                                               
                                                <input type = "text" name="b6r2[]" id="lainnya-kualitas" style="display: none;" class="form-control" placeholder ="Tuliskan Metode Pemeriksaan Kualitas Pengumpulan Data Lainnya">
                                                
                                            <br>
            							   </div>
            						   
            						</div>
            						
            					<div class="row">
                                        <div class="col-md-12">
                                            <strong>6.3 Apakah Melakukan Penyesuaian Nonrespon? </strong> <br>
            					            <input type="radio" class="form-check-input" id="ya" name="b6r3" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="tidak" name="b6r3" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                <div class="invalid-feedback">Penyesuaian Nonrespon Harus Diisi.</div>
            							   </div>
            						</div>
            						<br>     	
            				
            					<div class="row">
                                        <div class="col-md-12">
                                            <strong>6.4 Petugas Pengumpulan Data: </strong><br>
            					          
                					            <input type="radio" class="form-check-input" id="staf" name="b6r4" value="Staf Instansi Penyelenggara" required>
                                                <label class="form-check-label" for="staf">Staf Instansi Penyelenggara</label>
            					               <br>
            					                
                                                <input type="radio" class="form-check-input" id="mitra" name="b6r4" value="Mitra Atau Tenaga Kontrak" required>
                                                <label class="form-check-label" for="mitra">Mitra Atau Tenaga Kontrak</label>
                                              
            					               <br>
            					              
                                                <input type="radio" class="form-check-input" id="staf-mitra" name="b6r4" value="Staf Instansi Penyelenggara Dan Mitra Atau Tenaga Kontrak" required>
                                                <label class="form-check-label" for="staf-mitra">Staf Instansi Penyelenggara Dan Mitra Atau Tenaga Kontrak</label>
                                                <div class="invalid-feedback">Petugas Pengumpulan Data Harus Diisi.</div>
                                              
            					         
            							   </div>
            						</div>
            						<br>     	
            					
            						<div class="row">
                                        <div class="col-md-12">
                                            <strong>6.5 Persyaratan Pendidikan Terendah Petugas Pengumpulan Data: </strong><br>
            					          
                					            <input type="radio" class="form-check-input" id="smp" name="b6r5" value="Kurang Dari Atau Sama Dengan SMP" required>
                                                <label class="form-check-label" for="smp">Kurang Dari Atau Sama Dengan SMP</label>
            					               <br>
            					                
                                                <input type="radio" class="form-check-input" id="sma" name="b6r5" value="SMA atau SMK" required>
                                                <label class="form-check-label" for="sma">SMA atau SMK</label>
                                              
            					               <br>
            					              
                                                <input type="radio" class="form-check-input" id="diploma" name="b6r5" value="Diploma I Atau II Atau III" required>
                                                <label class="form-check-label" for="diploma">Diploma I Atau II Atau III</label>
                                                <br>
            					              
                                                <input type="radio" class="form-check-input" id="sarjana" name="b6r5" value="Diploma IV Atau S1 Atau S2 Atau S3" required>
                                                <label class="form-check-label" for="sarjana">Diploma IV Atau S1 Atau S2 Atau S3</label>
                                                
                                                <div class="invalid-feedback">Pendidikan Petugas Harus Diisi.</div>
                                              
            					               
                                          
            							   </div>
            						</div>
            						<br>
            					
            					<div class="row">
                                        <div class="col-md-12">
                                            <strong>6.6 Jumlah Petugas: </strong><br>
            					          
                					       <input style="width:17%" type="text" name="b6r6a" value="Supervisor/Penyelia/Pengawas" disabled> <input style="width:5%" type="text" name="b6r6a" value="0" required> Orang <br> 
                					            <input style="width:17%" type="text" name="b6r6b" value="Pengumpul Data/Enumerator" disabled> <input style="width:5%" type="text" name="b6r6b" value="0" required> Orang <br>
                					            
                					            <div class="invalid-feedback">Jumlah Petugas Harus Diisi.</div>
                                           
            							   </div>
            						</div>
            						<br>
            					
            					<div class="row">
                                        <div class="col-md-12">
                                            <strong>6.7 Apakah Melakukan Pelatihan Petugas? </strong> <br>
            					             <input type="radio" class="form-check-input" id="ya" name="b6r7" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp <br>
                                                <input type="radio" class="form-check-input" id="tidak" name="b6r7" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                               <div class="invalid-feedback">Pelatihan Petugas Harus Diisi.</div>
            							   </div>
            						</div>
            					
                
               
                
                </div>
        <!-- AKHIR BLOK 6 -->
        
        <div class="tab-pane fade" id="pills-blok7" role="tabpanel" aria-labelledby="pills-blok7-tab"> 
            <center>   <strong>VII. PENGOLAHAN DAN ANALISIS</strong> </center> 
    
                     <hr />    
                 
            		    <div class="row">
                                        <div class="col-md-12">
                                            <strong>7.1 Tahapan Pengolahan Data: </strong>
            					            <table >
            					               <tr>
            					                <td>Penyuntingan (Editing) &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="ya" name="b7r1a" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b7r1a" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
            					                <tr>
            					                <td>Penyandian (Coding) &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="ya" name="b7r1b" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b7r1b" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
            					               <tr>
            					                <td>Data Entry &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="ya" name="b7r1c" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b7r1c" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
            					               <tr>
            					                <td>Penyahihan (Validasi) &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="ya" name="b7r1d" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b7r1d" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					              
            					                   
            					              
            					               
                                            </table>
                                            
                                            
            							   </div>
            						</div>
            						<br>
            						
            						
            						<div class="row">
                                        <div class="col-md-12">
                                            <strong>7.2 Metode Analisis: </strong>
            					            <table >
            					               <tr>
            					                
                					            <td> <input type="radio" class="form-check-input" id="deskriptif" name="b7r2" value="Deskriptif" required>
                                                <label class="form-check-label" for="deskriptif">Deskriptif</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="inferensia" name="b7r2" value="Inferensia" required>
                                                <label class="form-check-label" for="inferensia">Inferensia</label> &nbsp &nbsp
                                                </td>
                                                <td> 
                                                <input type="radio" class="form-check-input" id="deskriptif-inferensia" name="b7r2" value="Deskriptif dan Inferensia" required>
                                                <label class="form-check-label" for="deskriptif-inferensia">Deskriptif dan Inferensia</label> &nbsp &nbsp
                                                </td>
            					               </tr>
            					               
            					              
            					               
                                            </table>
                                            
                                            
            							   </div>
            						</div>
            						<br>
            						
            						
            							<div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>7.3 Unit Analisis: </strong> <br>
            					                <label><input  type="checkbox" name="b7r3[]" value="Individu">Individu</label><br>
                                                <label><input type="checkbox" name="b7r3[]" value="Rumah Tangga">Rumah Tangga</label><br>
                                                <label><input type="checkbox" name="b7r3[]" value="Usaha/Perusahaan">Usaha/Perusahaan</label><br>
                                                <label><input type="checkbox" id="check-analisis" onclick="cekAnalisis()"> Lainnya</label><br>
                                               
                                                <input type = "text" name="b7r3[]" id="lainnya-analisis" style="display: none;" class="form-control" placeholder ="Tuliskan Unit Analisis Lainnya">
                                                
                                            <br>
            							   </div>
            						   
            						</div>
            						
            						<div class="row">
            						     
                                        <div class="col-md-12">
                                            <strong>7.4 Tingkat Penyajian Hasil Analisis: </strong> <br>
            					                <label><input  type="checkbox" name="b7r4[]" value="Nasional">Nasional</label><br>
                                                <label><input type="checkbox" name="b7r4[]" value="Provinsi">Provinsi</label><br>
                                                <label><input type="checkbox" name="b7r4[]" value="Kabupaten/Kota">Kabupaten/Kota</label><br>
                                                <label><input type="checkbox" id="check-penyajian" onclick="cekPenyajian()"> Lainnya</label><br>
                                               
                                                <input type = "text" name="b7r4[]" id="lainnya-penyajian" style="display: none;" class="form-control" placeholder ="Tuliskan Tingkat Penyajian Hasil Analisis Lainnya">
                                                
                                            <br>
            							   </div>
            						   
            						</div>			
                
               
                
                </div>
        <!-- AKHIR BLOK 7 -->
        
        
        <div class="tab-pane fade" id="pills-blok8" role="tabpanel" aria-labelledby="pills-blok8-tab"> 
            <center>   <strong>VIII. DISEMINASI HASIL</strong> </center> 
    
                     <hr />    
                 
            		  		<div class="row">
                                        <div class="col-md-12">
                                            <strong>8.1 Produk Kegiatan yang Tersedia untuk Umum: </strong>
            					            <table >
            					               <tr>
            					                <td>Tercetak (Hardcopy) &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="aya" name="b8r1a" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b8r1a" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
            					                <tr>
            					                <td>Digital (Softcopy) &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="bya" name="b8r1b" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b8r1b" value="Tidak" required> 
                                                <label class="form-check-label" class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
            					               <tr>
            					                <td>Data Mikro &nbsp &nbsp</td> <td>:  &nbsp</td>
                					            <td> <input type="radio" class="form-check-input" id="cya" name="b8r1c" value="Ya" required>
                                                <label class="form-check-label" for="ya">Ya</label> &nbsp &nbsp </td>
                					            <td> 
                                                <input type="radio" class="form-check-input" id="tidak" name="b8r1c" value="Tidak" required>
                                                <label class="form-check-label" for="tidak">Tidak</label>
                                                </td>
            					               </tr>
            					               
                                            </table>
                                            
                                            
            							   </div>
            						</div>
            						<br>
            						
            						 
            						<div class="row">
                                        <div name="YaYaYa" style="display: none;" class="col-md-12">
                                            <strong>8.2 Rencana Rilis Produk Kegiatan: </strong>
            					            <table class="table table-striped">
            					            <tr>
            					                <th></th> <th>Tanggal Rilis</th>
            					            </tr>    
                                            <tr> 
            					            <td>Tercetak (Hardcopy)</td> <td> <div name="b8r2a" style="display: none;"> <input type="date" id="b8r2a" name="b8r2a" value="{{ old('b8r2a') }}" class="form-control" >
            					            <div class="invalid-feedback">Tanggal Tercetak (Hardcopy) Harus Diisi.</div></div> </td>
            					            
            					            </tr> 
            					            <tr>
            					            <td>Digital (Softcopy)</td> <td> <div name="b8r2b" style="display: none;"> <input type="date" id="b8r2b" name="b8r2b" value="{{ old('b8r2b') }}" class="form-control" >
            					            <div class="invalid-feedback">Tanggal Digital (Softcopy) Harus Diisi.</div></div> </td>    
            					            </tr>
            					            <tr>
            					             <td>Data Mikro</td> <td> <div name="b8r2c" style="display: none;"> <input type="date" id="b8r2c" name="b8r2c" value="{{ old('b8r2c') }}" class="form-control" >
            					             <div class="invalid-feedback">Tanggal Data Mikro Harus Diisi.</div></div> </td>   
            					            </tr>
                                            </table>
                                            <br>
            							   </div>
            						</div>
                
                        </div>
            						</div>   
                
                </div>
        <!-- AKHIR BLOK 8 -->
                  
        </div>
        <!-- AKHIR TAB -->
         </form>           
        
    </div>        
            </main>
        
        </div>
    </div>
</div>


<!-- Javascript -->
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>
	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
        function myFunction() {
          var checkBox = document.getElementById("check");
          var text = document.getElementById("lainnya");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
         function cekSarana() {
          var checkBox = document.getElementById("check-sarana");
          var text = document.getElementById("lainnya-sarana");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekUnit() {
          var checkBox = document.getElementById("check-unit");
          var text = document.getElementById("lainnya-unit");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekKualitas() {
          var checkBox = document.getElementById("check-kualitas");
          var text = document.getElementById("lainnya-kualitas");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
         function cekAnalisis() {
          var checkBox = document.getElementById("check-analisis");
          var text = document.getElementById("lainnya-analisis");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
        
        function cekPenyajian() {
          var checkBox = document.getElementById("check-penyajian");
          var text = document.getElementById("lainnya-penyajian");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        }
</script>
	<script>

$(document).ready(function() {
  $(".select2").select2({
    placeholder: "Pilih cara pengumpulan data",

});

  $(".select21").select2({
    placeholder: "Pilih sektor kegiatan",
 
});

$(".select22").select2({
    placeholder: "Pilih Wilayah",

});





});

$(document).ready(function() {
    
    
    $("input[name$='b4r1']").click(function() {
        var test = $(this).val();
        
        if($("#berulang").is(':checked')) {
			$('#harian').attr('required', true);
			$('#mingguan').attr('required', true);
			$('#bulanan').attr('required', true);
			$('#triwulanan').attr('required', true);
			$('#empatbulanan').attr('required', true);
			$('#semesteran').attr('required', true);
			$('#tahunan').attr('required', true);
			$('#lebihduatahun').attr('required', true);
		} else {
			$('#harian').removeAttr('required');
			$('#mingguan').removeAttr('required');
			$('#bulanan').removeAttr('required');
			$('#triwulanan').removeAttr('required');
			$('#empatbulanan').removeAttr('required');
			$('#semesteran').removeAttr('required');
			$('#tahunan').removeAttr('required');
			$('#lebihduatahun').removeAttr('required');
		}
		

        $("div.desc").hide();
        $("#" + test).show();
    });
    

    
    
    $("input[name$='b4r4']").click(function() {
        var test = $(this).val();
        
   if($("#sebagian-indo").is(':checked')) {
			$('#b4r5').attr('required', true);

		} else {
			$('#b4r5').removeAttr('required');

		}

        $("div.desc2").hide();
        $("#" + test).show();
    });
    
    
    
     $("input[name$='b5r2']").click(function() {
        var test = $(this).val();
        
        if($("#probabilitas").is(':checked')) {
			$('#list').attr('required', true);
			$('#area').attr('required', true);
			$('#b5r5').attr('required', true);
			$('#b5r6').attr('required', true);

		} else {
			$('#list').removeAttr('required');
			$('#area').removeAttr('required');
			$('#b5r5').removeAttr('required');
			$('#b5r6').removeAttr('required');

		}
        
        
        $("div.desc3").hide();
        $("#" + test).show();
    });
    
   
    $('input').change(() => {
  const first = $('input[name=b8r1a]:checked').val();
  const second = $('input[name=b8r1b]:checked').val();
  const third = $('input[name=b8r1c]:checked').val();
  
     if($("#aya").is(':checked')) {
			$('#b8r2a').attr('required', true);
		} else {
			$('#b8r2a').removeAttr('required');
		}
		
		if($("#bya").is(':checked')) {
			$('#b8r2b').attr('required', true);
		} else {
			$('#b8r2b').removeAttr('required');
		}
		
		if($("#cya").is(':checked')) {
			$('#b8r2c').attr('required', true);
		} else {
			$('#b8r2c').removeAttr('required');
		}
  
  $("div[name=YaYaYa]").toggle(first === "Ya" || second === "Ya" || third === "Ya");
  $("div[name=b8r2a]").toggle(first === "Ya"); 
  $("div[name=b8r2b]").toggle(second === "Ya");
  $("div[name=b8r2c]").toggle(third === "Ya"); 

});

    

    
    
    $("#b0r3").change(function(){
     var status = this.value;
     
   if(status=="Survei"){
      $("#" + status).show(); 
      $('#single-stage').attr('required', true);
      $('#multi-stage').attr('required', true);
      $('#probabilitas').attr('required', true);
      $('#nonprobabilitas').attr('required', true);
      $('#quota').attr('required', true);
      $('#accidental').attr('required', true);
      $('#purposive').attr('required', true);
      $('#snowball').attr('required', true);
      $('#saturation').attr('required', true);
      $('#simple').attr('required', true);
      $('#systematic').attr('required', true);
      $('#stratified').attr('required', true);
      $('#cluster').attr('required', true);
      $('#probability').attr('required', true);
      $('#b5r7').attr('required', true);
      $('#b5r8').attr('required', true);
      
   }
    
    else if(status=="Pencacahan Lengkap") {
         $("#Survei").hide();
         $('#single-stage').removeAttr('required');
      $('#multi-stage').removeAttr('required');
      $('#probabilitas').removeAttr('required');
      $('#nonprobabilitas').removeAttr('required');
      $('#quota').removeAttr('required');
      $('#accidental').removeAttr('required');
      $('#purposive').removeAttr('required');
      $('#snowball').removeAttr('required');
      $('#saturation').removeAttr('required');
      $('#simple').removeAttr('required');
      $('#systematic').removeAttr('required');
      $('#stratified').removeAttr('required');
      $('#cluster').removeAttr('required');
      $('#probability').removeAttr('required');
      $('#b5r7').removeAttr('required');
      $('#b5r8').removeAttr('required');
    }
   
    else if(status=="Kompilasi Produk Administrasi"){
        
         $("#Survei").hide();
               $('#single-stage').removeAttr('required');
      $('#multi-stage').removeAttr('required');
      $('#probabilitas').removeAttr('required');
      $('#nonprobabilitas').removeAttr('required');
      $('#quota').removeAttr('required');
      $('#accidental').removeAttr('required');
      $('#purposive').removeAttr('required');
      $('#snowball').removeAttr('required');
      $('#saturation').removeAttr('required');
      $('#simple').removeAttr('required');
      $('#systematic').removeAttr('required');
      $('#stratified').removeAttr('required');
      $('#cluster').removeAttr('required');
      $('#probability').removeAttr('required');
      $('#b5r7').removeAttr('required');
      $('#b5r8').removeAttr('required');
    }
   
    else if(status=="Cara Lain Sesuai Dengan Perkembangan TI"){
        $("#Survei").hide();
              $('#single-stage').removeAttr('required');
      $('#multi-stage').removeAttr('required');
      $('#probabilitas').removeAttr('required');
      $('#nonprobabilitas').removeAttr('required');
      $('#quota').removeAttr('required');
      $('#accidental').removeAttr('required');
      $('#purposive').removeAttr('required');
      $('#snowball').removeAttr('required');
      $('#saturation').removeAttr('required');
      $('#simple').removeAttr('required');
      $('#systematic').removeAttr('required');
      $('#stratified').removeAttr('required');
      $('#cluster').removeAttr('required');
      $('#probability').removeAttr('required');
      $('#b5r7').removeAttr('required');
      $('#b5r8').removeAttr('required');
    }
    else{
        $("#Survei").hide();
              $('#single-stage').removeAttr('required');
      $('#multi-stage').removeAttr('required');
      $('#probabilitas').removeAttr('required');
      $('#nonprobabilitas').removeAttr('required');
      $('#quota').removeAttr('required');
      $('#accidental').removeAttr('required');
      $('#purposive').removeAttr('required');
      $('#snowball').removeAttr('required');
      $('#saturation').removeAttr('required');
      $('#simple').removeAttr('required');
      $('#systematic').removeAttr('required');
      $('#stratified').removeAttr('required');
      $('#cluster').removeAttr('required');
      $('#probability').removeAttr('required');
      $('#b5r7').removeAttr('required');
      $('#b5r8').removeAttr('required');
    }

  
   
  });
    
    
    
});

  </script>
  

  
	<script type="text/javascript">
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == 'others') {
                $("#instansi_pembinaan").removeAttr("disabled");
                $("#instansi_pembinaan").focus();
            } else {
                $("#instansi_pembinaan").attr("disabled", "disabled");
            }
        });
    });
</script>


    
     <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar2").click(function() {
    


            ++i;
            $("#dynamicAddRemove2").append(
               '<tr> <td> '+i+' </td> <td> <textarea class="form-control" style="height:80px" name="b3r34k1['+
                i +
                ']" placeholder="Tuliskan Nama Variabel" required></textarea> <div class="invalid-feedback">Nama Variabel Harus Diisi.</div> </td> <td> <textarea class="form-control" style="height:80px" name="b3r34k2['+
                i+
                ']" placeholder="Tuliskan Konsep Variabel" required></textarea> </td> <div class="invalid-feedback">Konsep Variabel Harus Diisi.</div>   <td> <textarea class="form-control" style="height:80px" name="b3r34k3['+
                i+
                ']" placeholder="Tuliskan Definisi" required></textarea> <div class="invalid-feedback">Definisi Variabel Harus Diisi.</div> </td> <td> <textarea class="form-control" style="height:80px" name="b3r34k4['+
                i+
                ']" placeholder="Tuliskan Referensi Waktu" required></textarea> <div class="invalid-feedback">Referensi Waktu Harus Diisi.</div> </td>    <td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="fa-solid fa-trash"></i></button></td></tr>'
            );





        });

        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>
</body>

</html>
