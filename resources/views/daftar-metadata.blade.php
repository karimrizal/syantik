@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
  <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                
               <a href="form-metadata"><button type="button" class="btn btn-primary">Tambah MS-Kegiatan</button></a> 
               <br>
                  
                 
                     
                <table class="table table-striped">
                <thead class="thead-light">
                  <tr>
              
                    <th scope="col">Judul Kegiatan</th>
                    <th>View</th>
                    <th>Edit</th>
            
			
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($metadata_kegiatan as $post) 
                  <td> {{ $post->b0r1 }} </td>
                  <th scope="row">
                  <a href="{{ url('view-metadata/' . $post->id) }}"><i class="fa-solid fa-search"></i></a>
                    </th>
                    <th scope="row">
                  <a href="{{ url('metadata/' . $post->id) }}"><i class="fa-solid fa-pencil"></i></a>
                    </th>
         
                 

                  </tr>
                  @endforeach
                </tbody>
              </table>
          
            </main>
        
        </div>
	

	</div>
	</div>






    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
	