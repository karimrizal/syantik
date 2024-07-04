@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

	@if ($message = Session::get('errors'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
    @endif

						<hr><a href="#"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahVideo" style="font-size: 16px;"><i class="fa fa-plus-circle"></i> Tambah User</button></a><hr>
												<div class="modal fade" id="tambahVideo" tabindex="-1" role="dialog" aria-labelledby="tambahVideo" aria-hidden="true">
													
												<form action="{{ route('userOPD.register2') }}" method="post">
    														@csrf

												
												<div class="modal-dialog modal-xl" role="document">
													  <div class="modal-content">
														<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Tambah User</h3>
														</div>
														
															<div class="modal-body">
															<div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    	@if((Auth::user()->role == 'Admin BPS Kabupaten') )
                    	<div class="form-group">
                        <label for=""><strong>Role</strong></label>
                        <select name="role" class="form-control" >
						<option value>Pilih Role</option>

			
						<option value ="Admin OPD">Admin OPD</option>
					
                        <option value ="Operator OPD">Operator OPD</option>
                    

						</select>
                    </div>
                    @else
                    @endif
                    
                    @if((Auth::user()->role == 'Admin BPS Kabupaten') )
                    <div class="form-group">
                        <label for=""><strong>Organisasi</strong></label>
                        <input type="text" name="organisasi" class="form-control" placeholder="Organisasi">
                    </div>
                    @else
                    @endif
				
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                    </div>
															</div>
														<div class="modal-footer">
														  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Kembali</button>
														  <button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
														</div>
														
													  </div>
													</div>
												</div>
												</form>

						<table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th> Nama</th>
                        <th> Username</th>
						<th> Organisasi</th>
                        <th> Role</th>
                        
					
                        <th width="280px"class="text-center">Action</th>
                    </tr>
            </thead>
                    @foreach ($users as $post)
                    <tr>
                        <td class="text-center">{{ ++$k }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->email }}</td>
						<td>{{ $post->organisasi }}</td>
                        <td>{{ $post->role }}</td>
						
                        
                        <td class="text-center">
						<form action="{{ route('userOPD.destroy8', $post->id) }}" method="POST">
                            <a href="" class="btn btn-primary btn-sm" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Edit</a>	
							
							@csrf

@method('DELETE')
@if(($post->role == 'Admin OPD') ) @else
<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button> @endif
</form>
                              
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
							
									
							
                                    <div class="form-group">
                                        <label for="Judulvid" class="col-form-label">Nama:</label>
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                
                                	</div>
									<div class="form-group">
                        <label for=""><strong>Role</strong></label>
                        <select name="role" id="role" class="form-control" value="" >
						<option value>Pilih Role</option>

		
						<option value ="Admin OPD">Admin OPD</option>
                        <option value ="Operator OPD">Operator OPD</option>

						</select>
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
    var name = $("#name").val();
	var role = $("#role").val();


    $.ajax({
      url: 'color8/' + id,
      type: "POST",
      data: {
        id: id,
        name: name,
		role: role,
     

	
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
$.get('color8/' + id + '/edit8', function (data) {
	 $('#userCrudModal3').html("Edit PDF");
	 $('#submit3').val("Edit PDF");
	 $('#practice_modal3').modal('show');
	 $('#color_id3').val(data.data.id);
	 $('#name').val(data.data.name);
	 $('#role').val(data.data.role);
    


 })
});

}); 


</script>
