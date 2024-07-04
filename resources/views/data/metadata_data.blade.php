@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
			
							<form action="{{ route('postsssss.inputMetadata') }}" method="post">
													@csrf
													<select class="cari form-control" name="tabel_id">
										
										<option value>Pilih Tabel</option>
													
										@foreach($tables as $table)
												<option value="{{ $table->judul }}" >{{ $table->nama }}</option>
											@endforeach
											
													</select> <br>
										<select class="cari form-control" name="kegiatan_id">
										
										<option value>Pilih Kegiatan</option>
													
										@foreach($meta_keg as $table)
												<option value="{{ $table->id }}">{{ $table->b0r1 }}</option>
											@endforeach
											
													</select> <br>

													<select class="cari form-control" name="meta__indikator_id">
										
										<option value>Pilih Indikator</option>
													
										@foreach($meta_ind as $table)
												<option value="{{ $table->id }}">{{ $table->ind_b1k2 }}</option>
											@endforeach
											
													</select> <br>

													<select class="cari form-control" name="meta__variabel_id">
										
										<option value>Pilih Variabel</option>
													
										@foreach($meta_var as $table)
												<option value="{{ $table->id }}">{{ $table->var_b1k2 }}</option>
											@endforeach
											
													</select> <br>

													
													<button type="submit"  class="btn btn-primary" style="border-radius: 5px;">Simpan</button>
               
                            </form>
	








		</div>
	</div>	


	<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
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
</table>






		</div>
	</div>	



    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
