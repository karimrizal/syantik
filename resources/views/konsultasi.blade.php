@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">
                                
										<ul  class="nav nav-pills">
												<li class="{{request()->is('konsultasi') ? 'active' : null }}">
												<a class="nav-link {{request()->is('konsultasi') ? 'active' : null }}" href="{{url('konsultasi')}}" role="tab">Konsultasi</a>
												</li>
												<li class="{{request()->is('konsultasi_pembinaan') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('konsultasi_pembinaan') ? 'active' : null }}" href="{{url('konsultasi_pembinaan')}}"  role="tab">Pembinaan</a>
												</li>
												<li class="{{request()->is('konsultasi_faq') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('konsultasi_faq') ? 'active' : null }}" href="{{url('konsultasi_faq')}}" role="tab">FAQ</a>
												</li>
											
										</ul>
                            <br>

										<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('konsultasi') ? 'active' : null }}" id="{{url('konsultasi')}}" role="tabpanel">
													  <div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					
						<div class="panel-body">

                                    <form action="{{ route('post.store') }}" method="POST">
                                        @csrf
                                        @if (session('success'))
                                                                <div class="alert alert-success">
                                                                    {{ session('success') }}
                                                                </div>
                                                                @endif
                                                            
                                                            
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                
                                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap Anda">
                                                    @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    <br>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                
                                                    <input type="text" name="instansi" class="form-control" value="{{ old('instansi') }}" placeholder="Asal Instansi">
                                                    @error('instansi') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    <br>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                
                                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Alamat Email">
                                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                
                                                    <textarea class="form-control" style="height:150px" name="pertanyaan" placeholder="Masukkan Pertanyaan Anda">{{ old('pertanyaan') }}</textarea>
                                                    @error('pertanyaan') <span class="text-danger error">{{ $message }}</span>@enderror
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <br><br>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </div>
                
                                    </form>
                                    
                                    </div>
					</div>               
                                    <!-- END OVERVIEW -->
					    </div>
					</div>



<!-- AKHIR KONSULTASI -->


<div class="tab-pane {{request()->is('konsultasi_pembinaan') ? 'active' : null }}" id="{{url('konsultasi_pembinaan')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
						<center>	<h3 class="panel-title">Permintaan Asistensi/Pembinaan</h3> </center>
					
						</div>
						<div class="panel-body">

						<form method="post" action="{{ route('pembinaans.store2') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                                        @if (session('success2'))
                                    <div class="alert alert-success">
                                        {{ session('success2') }}
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        
                                        <input type="text" name="nama_pembinaan" class="form-control" value="{{ old('nama_pembinaan') }}" placeholder="Masukkan Nama Lengkap Anda"/>
                                        @error('nama_pembinaan') <span class="text-danger error">{{ $message }}</span>@enderror
                                    <br>
                                    </div> 
                                    <div class="form-group">

                                    
                                    <select class="form-control" name="instansi_pembinaan" id="ddlModels"> 
                                        <option value>Pilih Instansi</option>  
                                        @foreach ($opds as $item)
                                                        <option value ="{{$item -> nama_opd}}">{{$item -> nama_opd}}</option>
                                                                @endforeach
                                        <option value="others">Lainnya</option>
                                    </select>

                                    <input class="form-control" type="text" name="instansi_pembinaan" id="instansi_pembinaan" disabled="disabled" placeholder="Jika lainnya, tuliskan"/>
                                    @error('instansi') <span class="text-danger error">{{ $message }}</span>@enderror
                                    <br>    
                                    </div>

                                    <div class="form-group">
                                        
                                        <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan Anda"/>
                                        @error('jabatan') <span class="text-danger error">{{ $message }}</span>@enderror
                                        <br>
                                    </div>
                                    
                                    <div class="form-group">
                                    
                                        <input type="text" name="email_pembinaan" class="form-control" value="{{ old('email_pembinaan') }}" placeholder="Masukkan Alamat Email Anda"/>
                                        @error('email_pembinaan') <span class="text-danger error">{{ $message }}</span>@enderror
                                        <br>
                                    </div> 
                                    <div class="form-group">
                        
                                        <input type="text" name="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}" placeholder="Masukkan Nomor Handphone Anda"/>
                                        @error('nomor_hp') <span class="text-danger error">{{ $message }}</span>@enderror
                                        <br>
                                    </div> 
                                    <label><strong>Jenis Pembinaan :</strong></label><br>
                                    <div class="form-group" style=" border:1px solid;  padding: 10px;">
                                        
                                        <label><input  type="checkbox" name="pembinaan[]" value="Bagaimana mendapat rekomendasi dari BPS?"> Bagaimana mendapat rekomendasi dari BPS?</label><br>
                                        <label><input type="checkbox" name="pembinaan[]" value="Bagaimana Menuangkan Metadata Statistik?"> Bagaimana Menuangkan Metadata Statistik?</label><br>
                                        <label><input type="checkbox" name="pembinaan[]" value="Bagaimana Pengajuan Standar Data?"> Bagaimana Pengajuan Standar Data?</label><br>
                                        
                                        <label  >
                                        Bagaimana Menyelenggarakan Kegiatan Statistik?
                                        </label><br>

                                        
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Specify Need."> Perencanaan / Specify Need</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Design."> Desain / Design</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Build."> Perancangan / Build</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Collect."> Pengumpulan / Collect</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Process."> Proses / Process</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Analyze."> Analisis / Analyze</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Disseminate."> Diseminasi / Disseminate</label><br>
                                    &nbsp &nbsp	<label><input type="checkbox" name="pembinaan[]" value="Evaluate."> Evaluasi / Evaluate</label>
                                        <br>
                                        
                                        <label> Jenis Pembinaan Lainnya, Tuliskan</label> <input class="form-control" type="text" name="pembinaan[]" class="form-control" placeholder="Jika lainnya, tuliskan"/>
                                        @error('pembinaan') <span class="text-danger error">{{ $message }}</span>@enderror
                                        <br>
                                    </div>  
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <br>    
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                        </form>

					

						
						</div>
					</div>
					<!-- END OVERVIEW -->

                    </div>
													
                </div>
        <!-- AKHIR PEMBINAAN -->


        <div class="tab-pane {{request()->is('konsultasi_faq') ? 'active' : null }}" id="{{url('konsultasi_faq')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					
						<div class="panel-body">
                        
                        <p>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#statistikDasar" aria-expanded="false" aria-controls="statistikDasar">
                                                    Apa yang dimaksud dengan statistik dasar?
                                                </button>
                                                </p>
                                <div class="collapse" id="statistikDasar">
                                    <div class="card card-body">
                                    Statistik Dasar adalah statistik yang pemanfaatannya ditujukan untuk keperluan yang bersifat luas, baik pemerintah maupun masyarakat, yang memiliki ciri-ciri lintas sektoral, berskala nasional maupun regional, makro, dan yang penyelenggaraannya menjadi tanggung jawab BPS.
                                    </div>
                                </div>
                                
                        <br>
                                <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#penyelenggara_statistikDasar" aria-expanded="false" aria-controls="penyelenggara_statistikDasar">
                                                    Siapa Penyelenggara statistik dasar?
                                                </button>
                                </p>
                                <div class="collapse" id="penyelenggara_statistikDasar">
                                    <div class="card card-body">
                                    Penyelenggara Statistik Dasar adalah BPS.
                                    </div>
                                </div>
                                
                                
                        <br>
                                <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#pelaksana_survei" aria-expanded="false" aria-controls="pelaksana_survei">
                                                    Apakah hanya BPS yang bisa melaksanakan Survei?
                                                </button>
                                </p>
                                <div class="collapse" id="pelaksana_survei">
                                    <div class="card card-body">
                                    Tidak, siapapun dapat melaksanakan survei untuk berbagai kepentingan. instansi pemerintah, organisasi swasta dan individu dapat melaksanakan survei. 

                                    </div>
                                </div>
                                
                        <br>
                                <p>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                    Apa saja yang termasuk dalam kegiatan statistik?
                                                </button>
                                </p>
                                <div class="collapse" id="faq1">
                                    <div class="card card-body">
                                    Metadata kegiatan statistik dalam SIRuSa dikelompokkan menjadi tiga jenis, yaitu Statistik Dasar, Sektoral, dan Khusus.
                                    <ul>
                                        <li>Statistik Dasar adalah statistik yang pemanfaatannya ditujukan untuk keperluan yang bersifat luas, baik pemerintah maupun masyarakat, yang memiliki ciri-ciri lintas sektoral, berskala nasional maupun regional, makro, dan yang penyelenggaraannya menjadi tanggung jawab BPS.</li>
                                        <li>Statistik Sektoral adalah statistik yang pemanfaatannya ditujukan untuk memenuhi kebutuhan instansi pemerintah tertentu dalam rangka penyelenggaraan tugas-tugas pemerintah dan tugas pembangunan yag merupakan tugas pokok instansi pemerintah yang bersangkutan. Meskipun program pelaksanaannya menjadi tanggung jawab instansi pemerintah terkait, dalam praktek pelaksanaan dapat bekerja sama dengan BPS.</li>
                                        <li>Statistik Khusus adalah statistik yang pemanfaatannya ditujukan untuk memenuhi kebutuhan intern dari suatu instansi/perusahaan swasta dalam rangka penyelenggaraan riset atau penelitian. Meskipun pelaksanaannya menjadi tanggung jawab instansi/perusahaan terkait, dalm praktek pelaksanaan dapat bekerja sama dengan BPS.</li>
                                    </ul>
                                    </div>
                                </div>
                                        
                        <br>	
                            <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Mengapa Sensus Ekonomi harus dilakukan?
                                                </button>
                            </p>
                                <div class="collapse" id="faq2">
                                    <div class="card card-body">
                                    Setiap keputusan harus diambil berdasarkan informasi yang valid dan akurat. Sensus Ekonomi dilaksanakan untuk mendapatkan informasi potret utuh perekonomian bangsa, sebagai landasan penyusunan kebijakan dan perencanaan pembangunan nasional maupun regional.
                                    <br>
                                    Pendataan seluruh sektor usaha secara menyeluruh (selain sektor pertanian) akan mampu menghasilkan gambaran lengkap tentang level dan struktur ekonomi non-pertanian, berikut informasi dasar dan karakteristiknya. Selain itu juga akan diketahui daya saing bisnis di Indonesia, serta penyediaan kebutuhan informasi usaha.
                                    </div>
                                </div>
                                              
                        <br>	
                                <p> 
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Apa itu metadata statistik?
                                                </button>
                                </p>
                                <div class="collapse" id="faq3">
                                    <div class="card card-body">
                                    metadata sering diartikan sebagai informasi mengenai data atau data tentang data. Metadata juga dapat diartikan sebagai informasi terstruktur yang menggambarkan, menjelaskan, menunjukkan tempat, atau lainnya yang membuat proses pengambilan, penggunaan, dan pengelolaan sumber informasi menjadi lebih mudah
                        

                                    </div>
                                </div>
                               
                        <br>
                        <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Bagaimana untuk mengetahui kegiatan Sensus Ekonomi 2016 secara detail?
                                                </button>
                        </p>
                                <div class="collapse" id="faq4">
                                    <div class="card card-body">
                                    Informasi mengenai kegiatan Sensus Ekonomi 2016 (SE2016) dapat dilihat pada website SE2016 yang dapat diakses pada https://se2016.bps.go.id


                                    </div>
                                </div>
                              
                        <br>
                        <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                                    Mengapa tahun dasar PDB perlu diubah?
                                                </button>
                        </p>
                                <div class="collapse" id="faq5">
                                    <div class="card card-body">
                                Selama sepuluh tahun terakhir, banyak perubahan yang terjadi pada tatanan global dan lokal yang sangat berpengaruh pada perekonomian nasional. Krisis finansial global atau penerapan perdagangan bebas merupakan contoh perubahan yang perlu diadaptasi dalam mekanisme pencatatan statistik nasional. 
                        <br>
                        Salah satu bentuk adaptasinya adalah mengubah tahun dasar PDB Indonesia dari tahun 2000 ke 2010 dan mengadopsi rekomendasi PBB yang tertuang dalam SNA melalui penyusunan Supply and Use Tables (SUT) 2010 sebagai dasar penghitungan PDB menurut tiga (3) pendekatan yaitu pendekatan produksi, pengeluaran dan pendapatan. 
                        <br>
                        Perubahan Tahun Dasar juga menunjukkan penghitungan yang lebih akurat terkait level dan struktur ekonomi dengan memasukkan kegiatan ekonomi baru yang belum dicatat dalam penghitungan sebelumnya. 
                        <br>
                        Sepanjang November dan Desember 2014 ini, BPS sedang melakukan sosialisasi mengenai perubahan tahun dasar PDB berbasis SNA 2008, yang semula menggunakan tahun 2000 menjadi 2010. Rangkaian kegiatan tersebut diawali dengan internalisasi kepada para pejabat structural dan fungsional di BPS pusat dan provinsi, dilanjutkan sosialisasi kepada para stakeholder, praktisi dan akademisi, kementerian/lembaga, dan tentunya para awak media. Hal tersebut dilakukan agar para pengguna data tersampaikan dengan baik mengenai perubahan tahun dasar PDB.


                                    </div>
                                </div>
                               
                        <br>
						
						</div>
					</div>
					<!-- END OVERVIEW -->
													</div>
													
											</div>
<!-- AKHIR FAQ -->


    </div>
</div>
	@endsection                 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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