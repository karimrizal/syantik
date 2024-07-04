@extends('front-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header">    </div>
    
                     
	
	<div class="card-body">
						
	<p class="page-title text-left"><a href="{{ url()->previous() }}"><i class="lnr lnr-arrow-left-circle"></i> Kembali</a></p>
  
					@foreach($kab as $a)
					
<h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Perbandingan antara belanja langsung dengan belanja tidak langsung, 2017-2021</h3>

@endforeach				
<br>

<table class="table table-bordered" id="table_id">
                <thead>
                         <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Belanja Langsung 
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Belanja Tidak Langsung 
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total APBD
(juta rupiah)</center></th>
<th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perbandingan antara belanja langsung dengan belanja tidak langsung</center></th>
                
                  
       
                      
                    </tr>
                    
                    
                   
            </thead>
            
                    @foreach ($tabel_7440 as $i => $member)
                    <tr>
                     
                        <th>{{ $member->kec }}</th>
                        
                         
                               @if(is_numeric($member->t7440a))
                            <td>
                                <center> {{number_format(($member->t7440a),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t7440a}} </center>
                            </td>
                            @endif   
                            
                             @if(is_numeric($member->t7440b))
                            <td>
                                <center> {{number_format(($member->t7440b),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t7440b}} </center>
                            </td>
                            @endif
                            
                             @if(is_numeric($member->t7440c))
                            <td>
                                <center> {{number_format(($member->t7440c),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t7440c}} </center>
                            </td>
                            @endif
                            
                            @if(is_numeric($member->t7440d))
                            <td>
                                <center> {{number_format(($member->t7440d),0, '.',' ')}} </center>
                            </td>
                           
                           @else
                              <td>
                               <center> {{$member->t7440d}} </center>
                            </td>
                            @endif     
                            
                
                       
                    
                       
                      
                    </tr>
                    @endforeach
                    
    </table>
    
    
    
    <br>
    
<p style="font-size: 14px;color: #8D99A8;">Sumber: Badan Pengelolaan Keuangan & Aset Daerah Provinsi Sulawesi Tenggara</a></p>

     <br>
     
     <!-- Metadata -->
     <hr><div class="demo-button">
												<p style="font-size: 14px;color: #8D99A8;">Lihat Metadata:</a></p>
												<p>
													<a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataKegiatan" role="button" aria-expanded="false" aria-controls="MetadataKegiatan">
													  Metadata Kegiatan
													</a>
												</p>
												 
												  <div class="collapse" id="MetadataKegiatan">
													<div class="col-md-0">
													<div class="card card-body">
                                        <ul class="notification-item">
													@foreach ($metadatas as $kolom)
										<li><a  href="{{ url('kegiatan/' . $kolom->b0r1) }}"> {{ $kolom->b0r1 }}
										</a></li> @endforeach  
										</ul>

													</div>
													</div>
												  </div><hr>

                                            <p>
                                                <a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataIndikator" role="button" aria-expanded="false" aria-controls="MetadataIndikator">
														Metadata Indikator
												</a>
                                            </p>
												  <div class="collapse" id="MetadataIndikator">
													<div class="col-md-0">
													<div class="card card-body">

													<ul class="notification-item">
													@foreach ($metadatas_ind as $kolom)
										<li><a  href="{{ url('indikator/' . $kolom->ind_nama) }}"> {{ $kolom->ind_nama }}
										</a></li> @endforeach  
										</ul>
												
													</div>
													</div>
												  </div><hr>
												  
										<p>
										    <a class="btn btn-default" data-bs-toggle="collapse" href="#MetadataVariabel" role="button" aria-expanded="false" aria-controls="MetadataVariabel">
														Metadata Variabel
											</a>
										</p>
												  <div class="collapse" id="MetadataVariabel">
													<div class="col-md-0">
													<div class="card card-body">

													<ul class="notification-item">
													@foreach ($metadatas_var as $kolom)
										<li><a  href="{{ url('variabel/' . $kolom->var_nama) }}"> {{ $kolom->var_nama }}
										</a></li> @endforeach  
										</ul>
											    
													</div>
												  </div>
												  </div>
												  
</div>
   
<!-- Akhir Metadata -->




						
	</div>
</div>
					<!-- END OVERVIEW -->
		


    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js">
    </script>
    
    
     <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                

            });
        });

</script>
    
