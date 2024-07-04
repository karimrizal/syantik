@extends('back-end/layouts/main')

@section('container')
                      
           
<div class="card mb-4">
<div class="card-header"> 
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-kegiatan-tab" data-bs-toggle="pill" data-bs-target="#pills-kegiatan" type="button" role="tab" aria-controls="pills-kegiatan" aria-selected="true">Metadata Kegiatan</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-variabel-tab" data-bs-toggle="pill" data-bs-target="#pills-variabel" type="button" role="tab" aria-controls="pills-variabel" aria-selected="false">Metadata Variabel</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-indiaktor-tab" data-bs-toggle="pill" data-bs-target="#pills-indiaktor" type="button" role="tab" aria-controls="pills-indiaktor" aria-selected="false">Metadata Indikator</button>
                      </li>
           
                 </ul>

</div>
    
                     
	
	<div class="card-body">
						
	<div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
           
                <div class="col pt-4">
                    
                    
                      
        
                 
@foreach ($metadata as $result)               
                            

               <div class="tab-content" id="pills-tabContent">   
                <div class="tab-pane fade show active" id="pills-kegiatan" role="tabpanel" aria-labelledby="pills-kegiatan-tab"> 
                <center>   <strong>Metadata Kegiatan</strong> </center> 
    
                     <hr />
                <div class="row">
                                       <div class="col-md-12">
            					            <strong>Judul Kegiatan: </strong><br>
            					       
            					           {{ $result->b0r1 }}
            					           </div>
            							   <hr /> 
            							   
            							  <div class="col-md-12">
            							   <strong>Tahun:</strong> <br>
            					           {{ $result->b0r2 }}
            							  </div>
            						<hr /> 
            						
            						</div>
                <div class="row">
                                        <div class="col-md-12">
            					            <strong>Cara Pengumpulan Data:</strong> <br>
            					           {{ $result->b0r3 }}
            							   </div>
            							   
            						 <hr /> 
            							   
            							   
            						</div>
         			
            								<div class="row">
                               
            							   
            							    <div class="col-md-12">
            					            <strong>Sektor Kegiatan:</strong> <br>
            					            {{ $result->b0r4 }}
            					            <hr /> 
            							   </div>
            							   
            							   
            						</div>
            					
            				 <table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> I. PENYELENGGARA </center></th>
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 1.1 Instansi Penyelenggara: </strong><br> {{$result->b1r1}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"><strong> 1.2 Alamat Lengkap Instansi Penyelenggara: </strong> <br> {{$result->b1r2}} </td>
            				   </tr>
            				   
            				   <tr>
            				       <td> <strong> Telepon: </strong> <br> {{$result->b1r3}} </td>
            				       <td><strong> Faksmile: </strong><br> {{$result->b1r4}} </td>
            				       <td><strong>Email: </strong> <br> {{$result->b1r5}} </td>
            				   </tr>
            				 
            				 </table>
            				 
            				 
            				 <table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> II. PENANGGUNG JAWAB </center></th>
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 2.1 Unit Eselon Penanggung Jawab: </strong> </td> 
            				   </tr>
            				   <tr>
            				       <td colspan="2"> <strong> Eselon 1: </strong> <br> {{$result->b2r1}}  </td> <td> <strong> Eselon 2: </strong> <br> {{$result->b2r2}} </td>
            				   </tr>
            				   
            				 <tr>
            				       <td colspan="3"> <strong> 2.2 Penanggung Jawab Teknis (setingkat Eselon 3): </strong> </td> 
            				   </tr>
            				    <tr>
            				       <td colspan="3"> <strong> Nama: </strong> <br> {{$result->b2r3}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> Jabatan: </strong> <br> {{$result->b2r4}} </td> 
            				   </tr>
            				   <tr>
            				       <td colspan="3"> <strong> Alamat: </strong> <br> {{$result->b2r5}} </td> 
            				   </tr>
            				   
            				    <tr>
            				       <td> <strong> Telepon: </strong> <br> {{$result->b2r6}} </td>
            				       <td><strong> Faksmile: </strong><br> {{$result->b2r7}} </td>
            				       <td><strong>Email: </strong> <br> {{$result->b2r8}} </td>
            				   </tr>
            				 
            				 </table>
            				 
            				 
            				 <table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> III. PERENCANAAN DAN PERSIAPAN </center></th>
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 3.1 Latar Belakang Kegiatan: </strong> <br> {{$result->b3r1}} </td> 
            				   </tr>
            				  
            				   
            				 <tr>
            				       <td colspan="3"> <strong> 3.2 Tujuan Kegiatan: </strong> <br> {{$result->b3r2}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 3.3 Rencana Jadwal Kegiatan: </strong>  </td> 
            				   </tr>
            				   <tr>
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
            					               <td> {{$result->b3r3a1k1}}</td>
            					               <td> {{$result->b3r3a1k2}}</td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>2. Desain</td>
            					               <td> {{$result->b3r3a2k1}}</td>
            					               <td> {{$result->b3r3a2k2}}</td>
            					           </tr>
            					           
            					           <tr>
            					               <td colspan="4"> <strong> B. Pengumpulan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>3. Pengumpulan Data</td>
            					               <td> {{$result->b3r3b1k1}}</td>
            					               <td> {{$result->b3r3b1k2}}</td>
            					           </tr>
            					           
            					           <tr>
            					               <td colspan="4"> <strong> C. Pemeriksaan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>4. Pengolahan Data</td>
            					               <td> {{$result->b3r3c1k1}}</td>
            					               <td> {{$result->b3r3c1k2}}</td>
            					           </tr>
            					           
            					           
            					            <tr>
            					               <td colspan="4"> <strong> D. Penyebarluasan </strong></td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>5. Analisis</td>
            					               <td> {{$result->b3r3d1k1}}</td>
            					               <td> {{$result->b3r3d1k2}}</td>
            					           </tr>
            					           
            					            <tr>
            					               <td></td>
            					               <td>6. Diseminasi Hasil</td>
            					               <td> {{$result->b3r3d2k1}}</td>
            					               <td> {{$result->b3r3d2k2}}</td>
            					           </tr>
            					           
            					           <tr>
            					               <td></td>
            					               <td>7. Evaluasi</td>
            					               <td> {{$result->b3r3d3k1}}</td>
            					               <td> {{$result->b3r3d3k2}}</td>
            					           </tr>
            					           
            					           
            					           </table>
            				       
            				   </tr>
            				   
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 3.4 Variabel (Karakteristik) Yang Dikumpulkan: </strong>  </td> 
            				   </tr>
            				   <tr>
            				       <table class="table table-striped" width="100%"> 
            					            <tr>
            					               <th>No </th>
            					               <th>Nama Variabel (Karateristik)</th>
            					               <th>Konsep</th>
            					               <th>Definisi</th>
            					               <th>Referensi Waktu (Periode Enumerasi)</th>
            					              
            					           </tr>


                    
                            <tr>
                                
                            <td>1</td>    
                            <td>
                                {{$result->b3r34k1[0]}}
                        
                            </td>
        
        
        
                            <td> {{$result->b3r34k2[0]}}</td>
                    					               <td> {{$result->b3r34k3[0]}}</td>
                    					               <td> {{$result->b3r34k4[0]}}</td>
                    					          
                    					               
                        </tr>
            					           
            					           
            					           </table>
            				       
            				   </tr>
            				 
            				 </table>
            						
                <table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> IV. DESAIN KEGIATAN </center></th>
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 4.1 Kegiatan Ini Dilakukan: </strong> <br> {{$result->b4r1}} </td> 
            				   </tr>
            		
            				   
            				 <tr>
            				       <td colspan="3"> <strong> 4.2 Frekuensi Penyelenggaraan: </strong> <br> {{$result->b4r2}} </td> 
            				   </tr>
            				    <tr>
            				       <td colspan="3"> <strong> 4.3 Tipe Pengumpulan Data: </strong> <br> {{$result->b4r3}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 4.4 Cakupan Wilayah Pengumpulan Data: </strong> <br> {{$result->b4r4}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 4.5 Wilayah Kegiatan: </strong> <br> {{$result->b4r5}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 4.6 Metode Pengumpulan Data: </strong> <br> {{$result->b4r6}} </td> 
            				   </tr>
            				   <tr>
            				       <td colspan="3"> <strong> 4.7 Sarana Pengumpulan Data: </strong> <br> {{$result->b4r7}} </td> 
            				   </tr>
            				   <tr>
            				       <td colspan="3"> <strong> 4.8 Unit Pengumpulan Data: </strong> <br> {{$result->b4r8}} </td> 
            				   </tr>
            		
            				 
            				 </table>
            				 
            				 
            		
            		<table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> VI. PENGUMPULAN DATA </center></th>
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 6.1 Apakah Melakukan Uji Coba (Pilot Survey)? </strong> <br> {{$result->b6r1}} </td> 
            				   </tr>
            		
            				   
            				 <tr>
            				       <td colspan="3"> <strong> 6.2 Metode Pemeriksaan Kualitas Pengumpulan Data: </strong> <br> {{$result->b6r2}} </td> 
            				   </tr>
            				    <tr>
            				       <td colspan="3"> <strong> 6.3 Apakah Melakukan Penyesuaian Nonrespon? </strong> <br> {{$result->b6r3}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 6.4 Petugas Pengumpulan Data: </strong> <br> {{$result->b6r4}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 6.5 Persyaratan Pendidikan Terendah Petugas Pengumpulan Data: </strong> <br> {{$result->b6r5}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 6.6 Jumlah Petugas: </strong> </td> 
            				   </tr>
            				   <tr>
            				       <td>Supervisor/penyelia/pengawas</td> <td>:</td> <td> {{$result->b6r6a}} </td>
            				   </tr>
            				   <tr>
            				       <td>Pengumpul data/enumerator</td> <td>:</td> <td> {{$result->b6r6b}} </td>
            				   </tr>
            				   <tr>
            				       <td colspan="3"> <strong> 6.7 Apakah Melakukan Pelatihan Petugas? </strong> <br> {{$result->b6r7}} </td> 
            				   </tr>
            		
            		
            				 </table>	
            				 
            				 
            				 	<table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> VII. PENGOLAHAN DAN ANALISIS </center></th>
            				   </tr>
            				   
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 7.1 Tahapan Pengolahan Data: </strong> </td> 
            				   </tr>
            				   <tr>
            				       <td>Penyuntingan (Editing)</td> <td>:</td> <td> {{$result->b7r1a}} </td>
            				   </tr>
            				   <tr>
            				       <td>Penyandian (Coding)</td> <td>:</td> <td> {{$result->b7r1b}} </td>
            				   </tr>
            				    <tr>
            				       <td>Data Entry</td> <td>:</td> <td> {{$result->b7r1c}} </td>
            				   </tr>
            				    <tr>
            				       <td>Penyahihan (Validasi)</td> <td>:</td> <td> {{$result->b7r1d}} </td>
            				   </tr>
            				   
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 7.2 Metode Analisis </strong> <br> {{$result->b7r2}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 7.3 Unit Analisis </strong> <br> {{$result->b7r3}} </td> 
            				   </tr>
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 7.5 Tingkat Penyajian Hasil Analisis </strong> <br> {{$result->b7r4}} </td> 
            				   </tr>
            			 
            				 </table>
            				 
            				 <table class="table table-striped" width="100%">
            				   <tr>
            				       <th colspan="3"><center> VIII. DISEMINASI HASIL </center></th>
            				   </tr>
            				   
            				   
            				   <tr>
            				       <td colspan="3"> <strong> 8.1 Produk Kegiatan yang Tersedia untuk Umum: </strong> </td> 
            				   </tr>
            				   <tr>
            				       <td>Tercetak (Hardcopy)</td> <td>:</td> <td> {{$result->b8r1a}} </td>
            				   </tr>
            				   <tr>
            				       <td>Digital (Softcopy)</td> <td>:</td> <td> {{$result->b8r1b}} </td>
            				   </tr>
            				    <tr>
            				       <td>Data Mikro</td> <td>:</td> <td> {{$result->b8r1c}} </td>
            				   </tr>
            			
            				   <tr>
            				       <table class="table table-striped">
            					            <tr>
            					                <th></th> <th>Tanggal Rilis</th>
            					            </tr>    
                                            <tr> 
            					            <td>Tercetak (Hardcopy)</td> <td> {{$result->b8r2a}} </td>
            					            
            					            </tr> 
            					            <tr>
            					            <td>Digital (Softcopy)</td> <td> {{$result->b8r2b}} </td>    
            					            </tr>
            					            <tr>
            					             <td>Data Mikro</td> <td> {{$result->b8r2c}} </td>   
            					            </tr>
                                            </table>
            				   </tr>
            				   
            				  
            		 
            				 </table>	
                
                
                </div>
        <!-- AKHIR HALAMAN AWAL -->
          
        
        
         <div class="tab-pane fade" id="pills-variabel" role="tabpanel" aria-labelledby="pills-variabel-tab"> 
     <!-- Button trigger modal -->     
            <center>   <strong>Metadata Variabel</strong> </center> 
    


<a href="{{ url('view-variabel/' . $result->id.'/variabel') }}"><button type="button" class="btn btn-primary">Tambah MS-Variabel</button></a> 
                     <hr />    
             <table class="table table-striped" id="dynamicAddRemove2">
                             <tr>
            					 
            					 <th>Nama Variabel</th>
            					 <th>Alias</th>
            					 <th>Produsen Data</th>
            					 <th>Aksi</th>
            				
            				</tr>
                        @foreach($metadata_variabel as $hasil)
                            <tr>
                             
                            <td>
                               {{$hasil->v1}}
                            </td>
                            <td>
                               {{$hasil->v2}}
                            </td>
                             <td>
                               {{$hasil->opd}}
                            </td>
                            <td> <a href="{{ url('edit-variabel/' . $hasil->id) }}"><i class="fa-solid fa-pencil"></i></a></td>
                    	@endforeach				             
                        </tr>
        </table>   
                </div>
        <!-- AKHIR BLOK 1 -->
        
        
        <div class="tab-pane fade" id="pills-indiaktor" role="tabpanel" aria-labelledby="pills-indiaktor-tab"> 
             <!-- Button trigger modal -->     
            <center>   <strong>Metadata Indikator</strong> </center> 

       <a href="{{ url('view-indikator/' . $result->id.'/indikator') }}"><button type="button" class="btn btn-primary">Tambah MS-Indikator</button></a> 
                     <hr />    
            
           <table class="table table-striped" id="dynamicAddRemove2">
                             <tr>
            					 
            					 <th>Nama Indikator</th>
            					 <th>Alias</th>
            					 <th>Produsen Data</th>
            					 <th>Aksi</th>
            				
            				</tr>
                        @foreach($metadata_indikator as $hasil)
                            <tr>
                             
                            <td>
                               {{$hasil->i1}}
                            </td>
                            <td>
                               {{$hasil->i2}}
                            </td>
                             <td>
                               {{$hasil->opd}}
                            </td>
                             <td> <a href="{{ url('edit-indikator/' . $hasil->id) }}"><i class="fa-solid fa-pencil"></i></a></td>
                    	@endforeach				             
                        </tr>
        </table>   



       
        
     
                </div>
        <!-- AKHIR BLOK 2 -->
        
        

        
        
  
                  

        

        
        

                  
        </div>
        <!-- AKHIR TAB -->
    @endforeach             
       
    </div>        
            </main>
        
        </div>
	

	</div>
	</div>






    

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
	