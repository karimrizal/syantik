@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">

<ul  class="nav nav-pills">
												<li class="{{request()->is('bahan') ? 'active' : null }}">
												<a class="nav-link {{request()->is('bahan') ? 'active' : null }}" href="{{url('bahan')}}" role="tab">Glosarium Statistik</a>
												</li>
												<li class="{{request()->is('bahan_video') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('bahan_video') ? 'active' : null }}" href="{{url('bahan_video')}}"  role="tab">Video</a>
												</li>
												<li class="{{request()->is('bahan_slide') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('bahan_slide') ? 'active' : null }}" href="{{url('bahan_slide')}}" role="tab">Slide</a>
												</li>
												<li class="{{request()->is('bahan_pdf') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('bahan_pdf') ? 'active' : null }}" href="{{url('bahan_pdf')}}" role="tab">eBook</a>
												</li>
												<li class="{{request()->is('bahan_juknis') ? 'active' : null }}">
												    <a class="nav-link {{request()->is('bahan_juknis') ? 'active' : null }}" href="{{url('bahan_juknis')}}" role="tab">Juknis</a>
												</li>
											
										</ul>

</div>
    
                     
	
	<div class="card-body">
				
	<div class="row">
									<div id="belajar" class="panel-body">	
									
									
											<div class="tab-content clearfix">
												  	<div class="tab-pane {{request()->is('bahan') ? 'active' : null }}" id="{{url('bahan')}}" role="tabpanel">
													  <div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						<div class="panel-body">

					
						<h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Bahan Ajar</h3>
												<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahpdf" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah Istilah</button></a><hr>
												<div class="modal fade" id="tambahpdf" tabindex="-1" role="dialog" aria-labelledby="tambahpdf" aria-hidden="true">
													
												<form action="{{ route('posts.store') }}" method="POST">
    														@csrf
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah PDF</h3>
														</div>
														
															<div class="modal-body">
																<form>
																	<div class="form-group">
																 	 <label for="Judulvid" class="col-form-label">Nama Istilah:</label>
																 	 <input type="text" name="name" class="form-control" id="judulpdf">
																	</div>
																	
																	<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Penjelasan:</label>
																	 <textarea class="form-control" name="detail" id="tagpdf"></textarea>
																	</div>
															  	</form>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered" id="example">
	<thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Istilah</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->name }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy',[$post->id,$post->tabel]) }}" method="POST">
 
				<a href="" class="btn btn-primary btn-sm" id="editCompany" data-bs-toggle="modal" data-bs-target='#practice_modal' data-id="{{ $post->id }}">Edit</a>	
		
                    @csrf

                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<div class="modal fade" id="practice_modal">
                        <div class="modal-dialog modal-xl">
                           <form id="companydata">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Istilah</h3>
														</div>
                                <input type="hidden" id="color_id" name="color_id" value="">
								<div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Istilah:</label>
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                
                                </div>
								<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Penjelasan:</label>
                                    <textarea type="text" name="detail" id="detail" value="" class="form-control"></textarea>
                                </div>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit" id="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>



   
						
						</div>
					</div>
					<!-- END OVERVIEW -->
					</div>
													</div>

													<div class="tab-pane {{request()->is('bahan_video') ? 'active' : null }}" id="{{url('bahan_video')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						
						<div class="panel-body">

						<h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Video</h3>
												<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahVideo" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah Video</button></a><hr>
												<div class="modal fade" id="tambahVideo" tabindex="-1" role="dialog" aria-labelledby="tambahVideo" aria-hidden="true">
													
												<form action="{{ route('posts.store2') }}" method="POST">
    														@csrf
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah Link Video</h3>
														</div>
														
															<div class="modal-body">
																<form>
																	<div class="form-group">
																 	 <label for="JudulVideo" class="col-form-label">Nama Video:</label>
																 	 <input type="text" name="nama_video" class="form-control" id="judulvideo">
																	</div>
																	
																	<div class="form-group">
																	 <label for="linkVideo" class="col-form-label">Link:</label>
																	 <input class="form-control" name="link_video" id="linkVideo">
																	</div>
															  	</form>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered" id="example2">
	<thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Video</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($videos as $post)
        <tr>
            <td class="text-center">{{ ++$j }}</td>
            <td>{{ $post->nama_video }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy2', $post->id) }}" method="POST">
 
				<a href="" class="btn btn-primary btn-sm" id="editCompany2" data-bs-toggle="modal" data-bs-target='#practice_modal2' data-id="{{ $post->id }}">Edit</a>	
		
                    @csrf

                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<div class="modal fade" id="practice_modal2">
                        <div class="modal-dialog modal-xl">
                           <form id="companydata2">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Link Video</h3>
														</div>
                                <input type="hidden" id="color_id2" name="color_id2" value="">
								<div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Video:</label>
                                    <input type="text" name="nama_video" id="nama_video" value="" class="form-control">
                                
                                </div>
								<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Link Video:</label>
                                    <input type="text" name="link_video" id="link_video" value="" class="form-control">
                                </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit2" id="submit2"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>




						
						</div>
					</div>


					<!-- END OVERVIEW -->
													</div>
													
											</div>
											
											
											<div class="tab-pane {{request()->is('bahan_slide') ? 'active' : null }}" id="{{url('bahan_slide')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- Slide -->
					<div class="panel panel-headline">
						
						
						<div class="panel-body">

						<h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Slide</h3>
												<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSlide" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah Slide</button></a><hr>
												<div class="modal fade" id="tambahSlide" tabindex="-1" role="dialog" aria-labelledby="tambahVideo" aria-hidden="true">
													
												<form action="{{ route('posts.store4') }}" method="POST">
    														@csrf
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah Link Slide</h3>
														</div>
														
															<div class="modal-body">
																<form>
																	<div class="form-group">
																 	 <label for="JudulVideo" class="col-form-label">Nama Slide:</label>
																 	 <input type="text" name="nama_slide" class="form-control" id="judulvideo">
																	</div>
																	
																	<div class="form-group">
																	 <label for="linkVideo" class="col-form-label">Link:</label>
																	 <input class="form-control" name="link_slide" id="linkVideo">
																	</div>
															  	</form>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered" id="example5">
	<thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Slide</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($slides as $post)
        <tr>
            <td class="text-center">{{ ++$l }}</td>
            <td>{{ $post->nama_slide }}</td>
            <td class="text-center">
                <form action="{{ route('slide.destroy_slide', $post->id) }}" method="POST">
 
				<a href="" class="btn btn-primary btn-sm" id="editCompany5" data-bs-toggle="modal" data-bs-target='#practice_modal5' data-id="{{ $post->id }}">Edit</a>	
		
                    @csrf

                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<div class="modal fade" id="practice_modal5">
                        <div class="modal-dialog modal-xl">
                           <form id="companydata5">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Link Slide</h3>
														</div>
                                <input type="hidden" id="color_id5" name="color_id5" value="">
								<div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Slide:</label>
                                    <input type="text" name="nama_slide" id="nama_slide" value="" class="form-control">
                                
                                </div>
								<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Link Slide:</label>
                                    <input type="text" name="link_slide" id="link_slide" value="" class="form-control">
                                </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit5" id="submit5"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>




						
						</div>
					</div>


					<!-- END Slide -->
													</div>
													
											</div>
											
											
											<div class="tab-pane {{request()->is('bahan_juknis') ? 'active' : null }}" id="{{url('bahan_juknis')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- Slide -->
					<div class="panel panel-headline">
						
						
						<div class="panel-body">

						<h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar Juknis</h3>
												<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJuknis" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah Juknis</button></a><hr>
												<div class="modal fade" id="tambahJuknis" tabindex="-1" role="dialog" aria-labelledby="tambahVideo" aria-hidden="true">
													
												<form action="{{ route('posts.store5') }}" method="POST">
    														@csrf
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah Link Juknis</h3>
														</div>
														
															<div class="modal-body">
																<form>
																	<div class="form-group">
																 	 <label for="JudulVideo" class="col-form-label">Nama Juknis:</label>
																 	 <input type="text" name="nama_juknis" class="form-control" id="judulvideo">
																	</div>
																	
																	<div class="form-group">
																	 <label for="linkVideo" class="col-form-label">Link:</label>
																	 <input class="form-control" name="link_juknis" id="linkVideo">
																	</div>
															  	</form>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered" id="example6">
	<thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Juknis</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($juknis as $post)
        <tr>
            <td class="text-center">{{ ++$m }}</td>
            <td>{{ $post->nama_juknis }}</td>
            <td class="text-center">
                <form action="{{ route('juknis.destroy_juknis', $post->id) }}" method="POST">
 
				<a href="" class="btn btn-primary btn-sm" id="editCompany6" data-bs-toggle="modal" data-bs-target='#practice_modal6' data-id="{{ $post->id }}">Edit</a>	
		
                    @csrf

                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<div class="modal fade" id="practice_modal6">
                        <div class="modal-dialog modal-xl">
                           <form id="companydata6">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Link Juknis</h3>
														</div>
                                <input type="hidden" id="color_id6" name="color_id6" value="">
								<div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama Juknis:</label>
                                    <input type="text" name="nama_juknis" id="nama_juknis" value="" class="form-control">
                                
                                </div>
								<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Link Juknis:</label>
                                    <input type="text" name="link_juknis" id="link_juknis" value="" class="form-control">
                                </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
                              
                                     <button type="submit" value="Submit6" id="submit6"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
                                
                                 </div>
                            </div>
                           </form>
                        </div>
                    </div>




						
						</div>
					</div>


					<!-- END Slide -->
													</div>
													
											</div>
											
											



											<div class="tab-pane {{request()->is('bahan_pdf') ? 'active' : null }}" id="{{url('bahan_pdf')}}" role="tabpanel">
													<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						
						<div class="panel-body">

						
						<h3 style="font-weight: 500; font-size: 20px; color: #006fcc;">Daftar PDF</h3>
												<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPdf" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah PDF</button></a><hr>
												<div class="modal fade" id="tambahPdf" tabindex="-1" role="dialog" aria-labelledby="tambahPdf" aria-hidden="true">
													
												<form action="{{ route('posts.store3') }}" method="POST">
    														@csrf
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah PDF</h3>
														</div>
														
															<div class="modal-body">
																<form>
																	<div class="form-group">
																 	 <label for="JudulPdf" class="col-form-label">Nama PDF:</label>
																 	 <input type="text" name="nama_pdf" class="form-control" id="judulPdf">
																	</div>
																	
																	<div class="form-group">
																	 <label for="linkPdf" class="col-form-label">Link:</label>
																	 <input class="form-control" name="link_pdf" id="linkPdf">
																	</div>
															  	</form>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered" id="example3">
	<thead>
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama PDF</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
</thead>
        @foreach ($pdfs as $post)
        <tr>
            <td class="text-center">{{ ++$k }}</td>
            <td>{{ $post->nama_pdf }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy3', $post->id) }}" method="POST">
 
				<a href="" class="btn btn-primary btn-sm" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Edit</a>	
		
                    @csrf

                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
	<div class="modal fade" id="practice_modal3">
                        <div class="modal-dialog modal-xl">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Edit Link PDF</h3>
														</div>
                                <input type="hidden" id="color_id3" name="color_id3" value="">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama PDF:</label>
                                    <input type="text" name="nama_pdf" id="nama_pdf" value="" class="form-control">
                                
                                </div>
								<div class="form-group">
																	 <label for="tagpdf" class="col-form-label">Link PDF:</label>
                                    <input type="text" name="link_pdf" id="link_pdf" value="" class="form-control">
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


<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});





$('body').on('click', '#submit5', function (event) {
    event.preventDefault()
    var id = $("#color_id5").val();
    var nama_slide = $("#nama_slide").val();
	var link_slide = $("#link_slide").val();
    $.ajax({
      url: 'slide/' + id,
      type: "POST",
      data: {
        id: id,
        nama_slide: nama_slide,
		link_slide: link_slide,
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
    $.get('slide/' + id + '/edit_slide', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit5').val("Edit category");
         $('#practice_modal5').modal('show');
         $('#color_id5').val(data.data.id);
         $('#nama_slide').val(data.data.nama_slide);
		 $('#link_slide').val(data.data.link_slide);
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




$('body').on('click', '#submit6', function (event) {
    event.preventDefault()
    var id = $("#color_id6").val();
    var nama_juknis = $("#nama_juknis").val();
	var link_juknis = $("#link_juknis").val();
    $.ajax({
      url: 'juknis/' + id,
      type: "POST",
      data: {
        id: id,
        nama_juknis: nama_juknis,
		link_juknis: link_juknis,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata6').trigger("reset");
          $('#practice_modal6').modal('hide');
          window.location.reload(true);
      }
  });
});





$('body').on('click', '#editCompany6', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('juknis/' + id + '/edit_juknis', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit6').val("Edit category");
         $('#practice_modal6').modal('show');
         $('#color_id6').val(data.data.id);
         $('#nama_juknis').val(data.data.nama_juknis);
		 $('#link_juknis').val(data.data.link_juknis);
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
		





$('body').on('click', '#submit2', function (event) {
    event.preventDefault()
    var id = $("#color_id2").val();
    var nama_video = $("#nama_video").val();
	var link_video = $("#link_video").val();
    $.ajax({
      url: 'color2/' + id,
      type: "POST",
      data: {
        id: id,
        nama_video: nama_video,
		link_video: link_video,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata2').trigger("reset");
          $('#practice_modal2').modal('hide');
          window.location.reload(true);
      }
  });
});




$('body').on('click', '#editCompany2', function (event) {

event.preventDefault();
var id = $(this).data('id');
console.log(id)
$.get('color2/' + id + '/edit2', function (data) {
	 $('#userCrudModal2').html("Edit Video");
	 $('#submit2').val("Edit Video");
	 $('#practice_modal2').modal('show');
	 $('#color_id2').val(data.data.id);
	 $('#nama_video').val(data.data.nama_video);
	 $('#link_video').val(data.data.link_video);
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
		





$('body').on('click', '#submit3', function (event) {
    event.preventDefault()
    var id = $("#color_id3").val();
    var nama_pdf = $("#nama_pdf").val();
	var link_pdf = $("#link_pdf").val();
    $.ajax({
      url: 'color3/' + id,
      type: "POST",
      data: {
        id: id,
        nama_pdf: nama_pdf,
		link_pdf: link_pdf,
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
$.get('color3/' + id + '/edit3', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit3').val("Edit PDF");
	 $('#practice_modal3').modal('show');
	 $('#color_id3').val(data.data.id);
	 $('#nama_pdf').val(data.data.nama_pdf);
	 $('#link_pdf').val(data.data.link_pdf);
 })
});

}); 


</script>
