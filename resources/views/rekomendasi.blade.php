@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header"> Input Rekomendasi    </div>
    
                     
	
	<div class="card-body">
						
						<form action="{{ url('/e') }}" method="post" enctype="multipart/form-data">
												@csrf

												@if (session('success'))
													<div class="alert alert-success col-sm">
														{{ session('success') }}
													</div>
												@elseif (session('error'))
													<div class="alert alert-danger">
														{{ session('error') }}
													</div>
												@endif
												
												
												<div class="form-group">
							<label for ="agenda"><b> Nama Kegiatan Statistik</b> </label>
							
								<input type="text" name="nama_kegiatan" class="form-control" value="{{ old('nama_kegiatan') }}" placeholder="Nama Kegiatan Statistik">
						
								@error('nama_kegiatan') <span class="text-danger error">{{ $message }}</span>@enderror <br>
							</div>
							<div class="form-group">
							<label for ="agenda"><b> Tahun</b> </label>
							
								<input type="text" name="tahun" class="form-control" value="{{ old('tahun') }}" placeholder="Tahun">
						
								@error('tahun') <span class="text-danger error">{{ $message }}</span>@enderror <br>
							</div>
							<div class="form-group">
							<label for ="agenda"><b> Instansi Penyelenggara</b> </label>
							
								<input type="text" name="dinas" class="form-control" value="{{ old('tahun') }}" placeholder="Instansi Penyelenggara">
						
								@error('dinas') <span class="text-danger error">{{ $message }}</span>@enderror <br>
							</div>
							
												<div class="form-group">
												<b>	Pilih form FS3 </b>
													<input type="file" name="file" id="file" class="form-control">
												</div>
												@error('file') <span class="text-danger error">{{ $message }}</span>@enderror <br>
												<div class="form-group">
												<b>	Pilih Surat Pengantar </b>
													<input type="file" name="file_pengantar" id="file_pengantar" class="form-control">
												</div>
												@error('file_pengantar') <span class="text-danger error">{{ $message }}</span>@enderror <br>
												<div class="form-group">
												<b>	Pilih Instrumen </b>
													<input type="file" name="file_instrumen" id="file_instrumen" class="form-control">
												</div>
												@error('file_instrumen') <span class="text-danger error">{{ $message }}</span>@enderror <br>
												
												<div class="form-group">
												<b>	Pilih Surat Rekomendasi </b>
													<input type="file" name="file_rekomendasi" id="file_rekomendasi" class="form-control">
												</div>
												@error('file_rekomendasi') <span class="text-danger error">{{ $message }}</span>@enderror <br>
												
												<button type="submit" class="btn btn-primary">Simpan</button>
							
						</form>
	

	</div>
	</div>



	<div class="card mb-4">

	<div class="card-header"> 
		Daftar Rekomendasi
	</div>

		<div class="card-body">
						<table class="table table-bordered">
								<thead>
									<tr>
										<th width="20px" class="text-center">No</th>
										
										<th> Judul Kegiatan</th>
										<th> Tahun</th>
										<th> Dinas</th>
										<th>Surat Pengantar</th>
										<th>Form FS3/FPKPA</th>
										<th>File Pendukung</th>
										<th>Surat Rekomendasi</th>
								
								
										<th class="text-center">Action</th>
									</tr>
							</thead>
									@foreach ($rekomendasis as $post)
									<tr>
										<td class="text-center">{{ ++$k }}</td>
										
										<td>{{ $post->nama_kegiatan }}</td>
										<td>{{ $post->tahun }}</td>
										<td>{{ $post->dinas }}</td>
										
										
									
									<td><a href="{{ url('public/documents/'. $post->surat_pengantar) }}" ><span class="fa fa-download"> </span> </a>&nbsp
										<a href="#pengantarModal_{{ $post->id }}" data-bs-toggle="modal"><span class="fa fa-pencil"> </span> </a> </td>
									
										
										<div class="modal fade" id="pengantarModal_{{ $post->id }}" >
										<div class="modal-dialog" role="document">
										
												<div class="modal-content">
												<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
																		<h3 class="modal-title" id="tambahlabel">Edit Surat Pengantar</h3>
																		</div>
											
												<div class="modal-body">
											
													<form enctype="multipart/form-data" action="{{ route('rekomendasis.upload_suratPengantar') }}" method="POST">
												<input type="file" name="surat_pengantar">
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
									
									<td><a href="{{ url('public/documents/'. $post->formulir) }}" > <span class="fa fa-download"> </span> </a>&nbsp
									<a href="#formulirModal_{{ $post->id }}" data-bs-toggle="modal" > <span class="fa fa-pencil"> </span> </a> </td>
										
										
										<div class="modal fade" id="formulirModal_{{ $post->id }}" >
										<div class="modal-dialog" role="document">
										
												<div class="modal-content">
												<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
																		<h3 class="modal-title" id="tambahlabel">Edit Form FS3/FPKPA</h3>
																		</div>
											
												<div class="modal-body">
											
													<form enctype="multipart/form-data" action="{{ route('formulirs.upload_formulir') }}" method="POST">
												<input type="file" name="formulir">
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
								@if(is_null($post->instrumen))
									<td> <a href="#instrumenModal_{{ $post->id }}" data-bs-toggle="modal"> <span class="fa fa-pencil"> </span>  </a> </td> </td>
									@else
										<td><a href="{{ url('public/documents/'. $post->instrumen) }}" > <span class="fa fa-download"> </span> </a>&nbsp
										<a href="#instrumenModal_{{ $post->id }}" data-bs-toggle="modal" > <span class="fa fa-pencil"> </span> </a> </td>
										@endif
										
										<div class="modal fade" id="instrumenModal_{{ $post->id }}" >
										<div class="modal-dialog" role="document">
										
												<div class="modal-content">
												<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
																		<h3 class="modal-title" id="tambahlabel">Edit Instrumen</h3>
																		</div>
											
												<div class="modal-body">
											
													<form enctype="multipart/form-data" action="{{ url('/instrumen') }}" method="POST">
												<input type="file" name="instrumen">
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
									
									<td><a href="{{ url('public/documents/'. $post->rekomendasi) }}"> <span class="fa fa-download"> </span> </a>&nbsp
									<a href="#rekomendasiModal_{{ $post->id }}" data-bs-toggle="modal" > <span class="fa fa-pencil"> </span> </a> </td>
										
										
										<div class="modal fade" id="rekomendasiModal_{{ $post->id }}" >
										<div class="modal-dialog" role="document">
										
												<div class="modal-content">
												<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
																		<h3 class="modal-title" id="tambahlabel">Edit Surat Rekomendasi</h3>
																		</div>
											
												<div class="modal-body">
											
													<form enctype="multipart/form-data" action="{{ route('rekomendasis3.upload_rekomendasi') }}" method="POST">
												<input type="file" name="rekomendasi">
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
									
										<td class="text-center">
											<form action="{{ route('posts.destroy4', $post->id) }}" method="POST">
										
										
										<a href="" class="btn btn-primary btn-sm" style="margin: 2px;" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Edit</a>	
												@csrf

												@method('DELETE')
												
												@if( ($post->status) == 1)
												@else<button type="submit" class="btn btn-danger btn-sm" style="margin: 2px;" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
												@endif
											</form>
										</td>
									</tr>
									@endforeach
					</table>

					<div class="modal fade" id="practice_modal3" >
                        <div class="modal-dialog modal-xl" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Rekomendasi</h3>
														</div>
                                <input type="hidden" id="color_id3" name="color_id3" value="">
                                <div class="modal-body">
							
									
								<!-- BLOK I -->
								
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Kegiatan Statistik:</label>
                                    <input type="text" name="nama_kegiatan" id="nama_kegiatan" value="" class="form-control">
                                
                                	</div>
									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Tahun:</label>
										<input type="text" name="tahun" id="tahun" value="" class="form-control">
									</div>

									<div class="form-group">
										<label for="tagpdf" class="col-form-label">Instansi Penyelenggara:</label>
										<input type="text" name="dinas" id="dinas" value="" class="form-control">
									</div>
								
								
								</div>
								
								 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit3" id="submit3"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
								
                           
								 
                            </div>
                           </form>
                        </div>
                    </div>





		</div>
	</div>	



    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
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
    var nama_kegiatan = $("#nama_kegiatan").val();
	var tahun = $("#tahun").val();
	var dinas = $("#dinas").val();


    $.ajax({
      url: 'color4/' + id,
      type: "POST",
      data: {
        id: id,
        nama_kegiatan: nama_kegiatan,
		tahun: tahun,
		dinas: dinas,
	
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
$.get('color4/' + id + '/edit4', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit3').val("Edit PDF");
	 $('#practice_modal3').modal('show');
	 $('#color_id3').val(data.data.id);
	 $('#nama_kegiatan').val(data.data.nama_kegiatan);
	 $('#tahun').val(data.data.tahun);
	 $('#dinas').val(data.data.dinas);
	 
 })
});

}); 


</script>
