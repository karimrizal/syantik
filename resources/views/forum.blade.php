@extends('back-end/layouts/main')

@section('container')
                      
                
<div class="card mb-4">

<div class="card-header"></div>

    <div class="card-body">
                                
							<ul  class="nav nav-pills">
                            @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
												<li class="{{request()->is('forum') ? 'active' : null }}">
												<a class="nav-link {{request()->is('forum') ? 'active' : null }}" href="{{url('forum')}}" role="tab">Input Forum</a>
												</li>
                            @else @endif                    
												<li class="{{request()->is('daftar_forum') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('daftar_forum') ? 'active' : null }}" href="{{url('daftar_forum')}}"  role="tab">Daftar Forum</a>
												</li>
												
												<li class="{{request()->is('input_arc') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('input_arc') ? 'active' : null }}" href="{{url('input_arc')}}"  role="tab">Input Jadwal Data Prioritas</a>
												</li>
												<li class="{{request()->is('daftar_arc') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('daftar_arc') ? 'active' : null }}" href="{{url('daftar_arc')}}"  role="tab">Daftar Data Prioritas</a>
												</li>
																
							</ul>
							<hr>

											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('forum') ? 'active' : null }}" id="{{url('forum')}}" role="tabpanel">
	                                                
                                                <form action="{{ route('forum.store_forum') }}" enctype="multipart/form-data" method="POST">
                                                        @csrf
                                                        @if (session('success'))
                                                                                <div class="alert alert-success">
                                                                                    {{ session('success') }}
                                                                                </div>
                                                                                @endif
                                                                            
                                                                            
                                                        <div class="row">
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Forum Ke </label><input type="text" class="form-control" value="{{ $forum_ke + 1 }}" readonly>
                                                                    @error('topik') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                           
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Topik Pembahasan </label><input type="text" name="topik" class="form-control" value="{{ old('topik') }}" placeholder="Masukkan Topik Pembahasan">
                                                                    @error('topik') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>


                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Pimpinan Forum </label>   <input type="text" name="pimpinan_forum" class="form-control" value="{{ old('pimpinan_forum') }}" placeholder="Pimpinan Forum">
                                                                    @error('pimpinan_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Tempat</label>   <input type="text" name="tempat_forum" class="form-control" value="{{ old('tempat_forum') }}" placeholder="Tempat Forum">
                                                                    @error('tempat_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Tanggal</label>   <input type="date" name="tanggal_forum" class="form-control" value="{{ old('tanggal_forum') }}">
                                                                    @error('tanggal_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Upload Undangan</label>   <input type="file" name="undangan_forum" class="form-control" >
                                                                    @error('undangan_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Upload Notulen</label>   <input type="file" name="notulen_forum" class="form-control">
                                                                    @error('notulen_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Upload Daftar Hadir</label>   <input type="file" name="daftar_hadir" class="form-control">
                                                                    @error('daftar_hadir') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Upload Materi</label>   <input type="file" name="materi_forum" class="form-control">
                                                                    @error('materi_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                
                                                                <label>Upload Foto</label>   <input type="file" name="foto_forum" class="form-control">
                                                                    @error('foto_forum') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
            
                                                  </form>
								                	
					
											
															
													</div>
											</div>


											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('daftar_forum') ? 'active' : null }}" id="{{url('daftar_forum')}}" role="tabpanel">
	                                                
                                                      <table class="table table-bordered" id="example3">
                <thead>
                    <tr>
                        <th width="100px">Forum Ke</th>
                        <th> Topik</th>
                        <th> Tempat</th>
                        <th> Tanggal</th>
                        
                        <th> Undangan</th>
						<th> Notulen</th>
						<th> Daftar Hadir</th>
						<th> Materi</th>
						<th> Dokumentasi</th>
						@if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )<th class="text-center">Action</th> @else @endif
						

                    </tr>
            </thead>
            
                    @foreach ($forums as $post)
                    <tr>
                        <td class="text-center">{{ ++$k }}</td>
                        <td>{{ $post->topik }}</td>
                        <td>{{ $post->tempat_forum }}</td>
                        <td>{{ $post->tanggal_forum }} </td>
                        
                        
					    <td> @if(is_null($post->undangan_forum)) @else<a href="{{ url('public/documents/'. $post->undangan_forum) }}"><span  class="fa fa-download"> </span> </a> @endif &nbsp
					   @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
					   <a href="#undanganModal_{{ $post->id }}" data-bs-toggle="modal"> <span  class="fa fa-pencil"> </span></a> @else @endif </td>
                       
                       
                        <div class="modal fade" id="undanganModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Undangan </h3>  
														</div>
                            
                                <div class="modal-body">
							
									<form enctype="multipart/form-data" action="{{ route('forum.edit_undangan') }}" method="POST">
                                <input type="file" name="undangan_forum2">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>           
                 
                    
                       <td> @if(is_null($post->notulen_forum)) @else<a href="{{ url('public/documents/'. $post->notulen_forum) }}"> <span  class="fa fa-download"> </span> </a> @endif &nbsp
					   @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
					   <a href="#notulenModal_{{ $post->id }}" data-bs-toggle="modal"> <span  class="fa fa-pencil"> </span> </a> @else @endif </td>
					    
					    <div class="modal fade" id="notulenModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Notulen</h3>
														</div>
                            
                                <div class="modal-body">
							
									<form enctype="multipart/form-data" action="{{ route('forum.edit_notulen') }}" method="POST">
                                <input type="file" name="notulen_forum2">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
					    
                       <td> @if(is_null($post->daftar_hadir)) @else<a href="{{ url('public/documents/'. $post->daftar_hadir) }}"><span  class="fa fa-download"> </span></a> @endif &nbsp
					   @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
					   <a href="#daftarModal_{{ $post->id }}" data-bs-toggle="modal" ><span  class="fa fa-pencil"> </span></a> @else @endif </td>
					    
					    <div class="modal fade" id="daftarModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Daftar Hadir</h3>
														</div>
                            
                                <div class="modal-body">
							
									<form enctype="multipart/form-data" action="{{ route('forum.edit_daftarHadir') }}" method="POST">
                                <input type="file" name="daftar_forum2">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
					    
                       <td> @if(is_null($post->materi_forum)) @else<a href="{{ url('public/documents/'. $post->materi_forum) }}" ><span  class="fa fa-download"> </span></a> @endif &nbsp
					    @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
					    <a href="#materiModal_{{ $post->id }}" data-bs-toggle="modal"><span  class="fa fa-pencil"> </span></a> @else @endif </td>
					    
					    <div class="modal fade" id="materiModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Materi</h3>
														</div>
                            
                                <div class="modal-body">
							
									<form enctype="multipart/form-data" action="{{ route('forum.edit_materi') }}" method="POST">
                                <input type="file" name="materi_forum2">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
					    
					    
                       <td>@if(is_null($post->foto_forum)) @else <a href="{{ url('public/documents/'. $post->foto_forum) }}"><span  class="fa fa-download"> </span></a> @endif &nbsp
					    @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
					    <a href="#fotoModal_{{ $post->id }}" data-bs-toggle="modal"><span  class="fa fa-pencil"> </span></a> @else @endif </td>
						
						    
						  <div class="modal fade" id="fotoModal_{{ $post->id }}" >
                        <div class="modal-dialog" role="document">
                           
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Foto</h3>
														</div>
                            
                                <div class="modal-body">
							
									<form enctype="multipart/form-data" action="{{ route('forum.edit_foto') }}" method="POST">
                                <input type="file" name="foto_forum2">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- customer_id field -->
                                <input type="hidden" name="id" value="{{$post->id}}">
							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <input type="submit" class="btn btn-primary" style="border-radius: 5px;"></button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div> 
                    
						 @if( (Auth::user()->role == 'Admin BPS')  || (Auth::user()->role == 'Sekretariat Forum') )
						 <td>
					   <form action="{{ route('forum.destroy_forum', $post->id) }}" method="POST">

                            <a href="" class="btn btn-primary btn-sm" id="editCompany4" data-bs-toggle="modal" data-bs-target='#practice_modal4' data-id="{{ $post->id }}">Edit</a>	
						
                            
							@csrf

                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                              @else @endif
                            
                        </td>
                    </tr>
                    @endforeach
    </table>
    
    <div class="modal fade" id="practice_modal4" >
                        <div class="modal-dialog modal-xl" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Forum</h3>
														</div>
                                <input type="hidden" id="color_id4" name="color_id4" value="">
                                <div class="modal-body">
							
									
							
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Topik:</label>
                                    <input type="text" name="topik" id="topik" value="" class="form-control">
                                	</div>
                                	
                                	<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Pimpinan Forum:</label>
                                    <input type="text" name="pimpinan_forum" id="pimpinan_forum" value="" class="form-control">
                                	</div>
                                	
                                	<div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Tempat Forum:</label>
                                    <input type="text" name="tempat_forum" id="tempat_forum" value="" class="form-control">
                                	</div>
						

                                    <div class="form-group">
										<label for="tagpdf" class="col-form-label">Tanggal Forum:</label>
										<input type="date" name="tanggal_forum" id="tanggal_forum" value="" class="form-control">
									</div>
									

							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <button type="submit" value="Submit4" id="submit4"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
															
													</div>
											</div>



											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('input_arc') ? 'active' : null }}" id="{{url('input_arc')}}" role="tabpanel">
	                                                
                                                      <form action="{{ route('forum2.store_arc') }}" enctype="multipart/form-data" method="POST">
                                                            @csrf
                                                            @if (session('success'))
                                                                                    <div class="alert alert-success">
                                                                                        {{ session('success') }}
                                                                                    </div>
                                                                                    @endif
                                                                                
                                                                                
                                                            <div class="row">
                                                                
                                                                @if( (Auth::user()->role == 'Admin BPS') || (Auth::user()->role == 'Sekretariat Forum') )
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                <select class="form-control" name="organisasi_opd" id="ddlModels"> 
                                                                <option value>Pilih Instansi</option>  
                                                                @foreach ($opds as $item)
                                                                        <option value ="{{$item -> nama_opd}}">{{$item -> nama_opd}}</option>
                                                                @endforeach
                                                                </select>
                                                                <br>
                                                                </div>
                                                                </div>
                                                                @else
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                    <label>Nama Dinas </label><input type="text" name="organisasi" class="form-control" value="{{Auth::user()->organisasi}}"  readonly>
                                                                    <br>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                                
                                                                
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                    
                                                                    <label>Nama Data </label><input type="text" name="nama_data" class="form-control" value="{{ old('nama_data') }}" placeholder="Masukkan Nama Data">
                                                                        @error('nama_data') <span class="text-danger error">{{ $message }}</span>@enderror <br>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                    
                                                                    <label>Wilayah</label><input type="text" name="wilayah" class="form-control" value="{{ old('wilayah') }}" placeholder="Masukkan Wilayah">
                                                                        @error('wilayah') <span class="text-danger error">{{ $message }}</span>@enderror <br>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                    
                                                                
                                                                <div class="form-group">
                                                                    <label>Pilih Tahun</label>
                                                                <select class="form-control" name="tahun" id="ddlModels"> 
                                                                <option value>Pilih Tahun</option>  
                                                                
                                                                        <option value ="2018">2018</option>
                                                                        <option value ="2019">2019</option>
                                                                        <option value ="2020">2020</option>
                                                                        <option value ="2021">2021</option>
                                                                        
                                                            
                                                                </select>
                                                                <br>
                                                                </div>
                                                                </div>
                                                                        @error('tahun') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                    
                                                                </div>


                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="form-group">
                                                                    
                                                                    <label>Tanggal Rilis </label>   <input type="date" name="tanggal_rilis" class="form-control" value="{{ old('tanggal_rilis') }}" placeholder="Pimpinan Forum">
                                                                        @error('tanggal_rilis') <span class="text-danger error">{{ $message }}</span>@enderror <br>
                                                                    </div>
                                                                </div>
                                                        
                                                                
                                                        
                                                                
                                                                
                                                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                                                    <button type="submit" class="btn btn-primary">Simpan</button> <hr> <br>
                                                                </div>
                                                            </div>
                                                        
                                                        </form>


                                                        @if( (Auth::user()->role == 'Admin BPS') || (Auth::user()->role == 'Sekretariat Forum') )       
                                                            <table class="table table-bordered" id="datatablesSimple">
                                                            <thead>
                                                                <tr>
                                                                    <th> Dinas</th>
                                                                    <th> Nama Data</th>
                                                                    <th> Tanggal Rilis</th>
                                                                    <th width="280px"class="text-center">Action</th>
                                                                    
                                                
                                                                </tr>
                                                            </thead>
                                                                
                                                                @foreach ($arcs as $post)
                                                                <tr>
                                                                    <td>{{ $post->organisasi }}</td>
                                                                <td>{{ $post->nama_data }} di {{ $post->wilayah }} Tahun {{ $post->tahun }} </td>
                                                                    <td>{{ $post->tanggal_rilis }}</td>
                                                                    <td class="text-center">
                                                                    <form action="{{ route('arc.destroy_arc', $post->id) }}" method="POST">
                                                                        <a href="" class="btn btn-primary btn-sm" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Edit</a>	
                                                                        
                                                                        @csrf

                                                                        @method('DELETE')
                                                                        
                                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                        </form>
                                                                        
                                                                        
                                                                    </td>
                                                                
                                                                    
                                                                </tr>
                                                                @endforeach
                                                        </table>
                                                        
                                                        @else
                                                        <table class="table table-bordered" id="datatablesSimple">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th> Nama Data</th>
                                                                    <th> Tanggal Rilis</th>
                                                                    <th width="280px"class="text-center">Action</th>
                                                                    
                                                
                                                                </tr>
                                                            </thead>
                                                                
                                                                @foreach ($arc_edit as $post)
                                                                <tr>
                                                                    
                                                                    <td>{{ $post->nama_data }}</td>
                                                                    <td>{{ $post->tanggal_rilis }}</td>
                                                                    <td class="text-center">
                                                                    <form action="{{ route('arc.destroy_arc', $post->id) }}" method="POST">
                                                                        <a href="" class="btn btn-primary btn-sm" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Edit</a>	
                                                                        
                                                                        @csrf

                                                                        @method('DELETE')
                                                                        
                                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                        </form>
                                                                        
                                                                        
                                                                    </td>
                                                                
                                                                    
                                                                </tr>
                                                                @endforeach
                                                        </table>
                                                        @endif

                                                        <div class="modal fade" id="practice_modal3" >
                        <div class="modal-dialog modal-xl" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Data Prioritas</h3>
														</div>
                                <input type="hidden" id="color_id3" name="color_id3" value="">
                                <div class="modal-body">
							
									
							
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Data:</label>
                                    <input type="text" name="nama_data" id="nama_data" value="" class="form-control">
                                
                                	</div>
						

                                    <div class="form-group">
										<label for="tagpdf" class="col-form-label">Tanggal Rilis</label>
										<input type="date" name="tanggal_rilis" id="tanggal_rilis" value="" class="form-control">
									</div>
									
                        									
                        								
                                    <div class="form-group">
                                       
                                      <label>Wilayah</label><input type="text" name="wilayah" id="wilayah" class="form-control" value="">
                                 
                                    </div>
                              
                                
                                
                              
                                    <div class="form-group">
                                       
                                    
                                <div class="form-group">
                                <select class="form-control" name="tahun" id="tahun" value=""> 
                                <option value>Pilih Tahun</option>  
                                
                                        <option value ="2018">2018</option>
                                        <option value ="2019">2019</option>
                                        <option value ="2020">2020</option>
                                        <option value ="2021">2021</option>
                                        
                              
                                </select>
                                </div>
                                 </div>
                                
                               

							
									<!-- AKHIR BLOK I -->

								
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                              
                                     <button type="submit" value="Submit3" id="submit3"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>
                    



	                                             
															
													</div>
											</div>

											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('daftar_arc') ? 'active' : null }}" id="{{url('daftar_arc')}}" role="tabpanel">
	                                                
                                                      <table class="table table-bordered" id="example4">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2"> Organisasi</th>
                                                                    <th rowspan="2"> Data</th>
                                                                    <th colspan="12"><center>Bulan</center></th>
                                                                </tr>
                                                        
                                                                
                                                                <tr>
                                                                    
                                                                    <td>1</td>
                                                                    <td>2</td>
                                                                <td>3</td>
                                                                    <td>4</td>
                                                                    <td>5</td>
                                                                    <td>6</td>
                                                                <td>7</td>
                                                                    <td>8</td>
                                                                    <td>9</td>
                                                                    <td>10</td>
                                                                <td>11</td>
                                                                    <td>12</td>
                                                                </tr>
                                                                
                                                            </thead>  
                                                        
                                                            
                                                                <tr>
                                                                
                                                                @foreach ($arcs as $post)
                                                                <td>{{ $post->organisasi }}</td>
                                                                    <td>{{ $post->nama_data }} di {{ $post->wilayah }} Tahun {{ $post->tahun }} </td>
                                                                
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '01') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '02') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '03') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '04') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '05') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '06') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '07') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '08') <td> <a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '09') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '10') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '11') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                @if( substr($post->tanggal_rilis ,5,-3) == '12') <td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $post->judul) }}"> {{ substr($post->tanggal_rilis ,-2) }}</a></td>@else <td></td>@endif
                                                                </tr>
                                                            
                                                                @endforeach
                                                </table>
															
													</div>
											</div>



						




    </div>
</div>
	@endsection 
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
		

$('#example4').DataTable({
				
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

 <script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
		





$('body').on('click', '#submit3', function (event) {
    event.preventDefault()
    var id = $("#color_id3").val();
    var nama_data = $("#nama_data").val();
     var wilayah = $("#wilayah").val();
     var tahun = $("#tahun").val();
	var tanggal_rilis = $("#tanggal_rilis").val();

    $.ajax({
      url: 'arc/' + id,
      type: "POST",
      data: {
        id: id,
        nama_data: nama_data,
        wilayah: wilayah,
        tahun: tahun,
		tanggal_rilis: tanggal_rilis,
        

	
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
$.get('arc/' + id + '/edit_arc', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit3').val("Edit PDF");
	 $('#practice_modal3').modal('show');
	 $('#color_id3').val(data.data.id);
	 $('#nama_data').val(data.data.nama_data);
	 $('#wilayah').val(data.data.wilayah);
	 $('#tahun').val(data.data.tahun);
	 $('#tanggal_rilis').val(data.data.tanggal_rilis);
     


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
		



$('body').on('click', '#submit4', function (event) {
    event.preventDefault()
    var id = $("#color_id4").val();
    var topik = $("#topik").val();
	var pimpinan_forum = $("#pimpinan_forum").val();
	var tempat_forum = $("#tempat_forum").val();
	var tanggal_forum = $("#tanggal_forum").val();
	
	

    $.ajax({
      url: 'forum/' + id,
      type: "POST",
      data: {
        id: id,
        topik: topik,
		pimpinan_forum: pimpinan_forum,
		tempat_forum: tempat_forum,
		tanggal_forum: tanggal_forum,
		

	
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
$.get('forum/' + id + '/edit_forum', function (data) {
	 $('#userCrudModal4').html("Edit PDF");
	 $('#submit4').val("Edit PDF");
	 $('#practice_modal4').modal('show');
	 $('#color_id4').val(data.data.id);
	 $('#topik').val(data.data.topik);
	 $('#pimpinan_forum').val(data.data.pimpinan_forum);
	 $('#tempat_forum').val(data.data.tempat_forum);
	 $('#tanggal_forum').val(data.data.tanggal_forum);
	 
     


 })
});

}); 


</script>
	