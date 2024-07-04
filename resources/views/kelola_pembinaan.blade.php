@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">  <strong> Daftar Permintaan Pembinaan </strong>   </div>
    
                     
	
	<div class="card-body">
						
			
	<table class="table table-bordered" id="example3">
                        <thead>
                            <tr>
                                <th>Nama Pemohon</th>
                                <th>Asal Instansi</th>
                                <th>Jabatan Pemohon</th>
                                <th>Email Pemohon</th>
                                <th>No HP Pemohon</th>
                                <th>Jenis Permintaan Pembinaan</th>
                                <th> Verifikasi</th>
                                <th> Status Penyelesaian</th>
                                
                            </tr>
                            </thead>
                            @foreach($pembinaans as $post)
                            <tr>
                                <td>{{ $post->nama_pembinaan }}</td>
                                <td>{{ $post->instansi_pembinaan }}</td>
                                <td>{{ $post->jabatan }}</td>
                                <td>{{ $post->email_pembinaan }}</td>
                                <td>{{ $post->nomor_hp }}</td>
                                <td>
                                    @foreach($post->pembinaan as $value)
                                        <li>{{$value}}</li> 
                                    @endforeach
                                </td>

                                <td> <a href="" class="btn btn-primary btn-sm" id="editCompany3" data-bs-toggle="modal" data-bs-target='#practice_modal3' data-id="{{ $post->id }}">Verifikasi</a>	</td>
                                @if( ($post->status) == 0)
                        <td><span style="color:red"> Belum </span></td>
                        @else  <td><span style="color:green"> Sudah </span></td>
                      @endif
                            </tr>
                            @endforeach
                        </table>


                        <div class="modal fade" id="practice_modal3" >
                        <div class="modal-dialog modal-xl" role="document">
                           <form id="companydata3">
                                <div class="modal-content">
								<div class="modal-header"  style="background-color: #006fcc; color:#FFF;">
														  <h3 class="modal-title" id="tambahlabel">Status Penyelesaian</h3>
														</div>
                                <input type="hidden" id="color_id3" name="color_id3" value="">
                                <div class="modal-body">
							
							
							
													<div class="form-group">
                        <label for=""><strong>Status Penyelesaian</strong></label>
                        <select name="status" class="form-control" id="status" >
				

						<option value ="0">Belum</option>
						<option value ="1">Sudah</option>
					

						</select>
                    </div>
                                                        
                                                        <div class="form-group">
                                                         <textarea class="form-control" style="height:150px" name="komentar" id="komentar" placeholder="Masukkan Komentar"></textarea>
							                        	</div>
								</div>
								
                                 <div class="modal-footer">
                                     <a class="btn btn-secondary" data-bs-dismiss="modal"> Kembali</a>
                                      <button type="submit" value="Submit3" id="submit3"  class="btn btn-primary" style="color: #FFF; background-color: #5cb85c; border-color: #5cb85c; border-radius: 5px; padding: 7px 24px;">Simpan</button>
                              
                                   
                                
                                 </div>
								 
                            </div>
                           </form>
                        </div>
                    </div>



		</div>
	</div>	





    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
