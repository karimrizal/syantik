@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                            <h3 class="panel-title">
                                @foreach ($data->slice(0, 1) as $result)
                               <center>  Metadata Kegiatan Statistik </center>
                               <a href="{{ url('/export_kegiatan/' . $result->id) }}" class="btn btn-sm">Download</a>
                                @endforeach
                            </h3>
                               
                            </div>
                            <div class="card-body">
                                
							@foreach ($data->slice(0, 1) as $result)
                            
                    <table class="table table-striped">
                        
                        
                         @if(is_null($result->b0r1))
                         @else
                        <tr>
                            <th style="font-weight:700; ">
                            
                           Nama Kegiatan 
                            </th>
                            <th>{{ $result->b0r1 }} </th>
                            
                        </tr>
                        @endif
                         @if(is_null($result->b0r2))
                         @else
                        <tr>
                            <th style="font-weight:700; ">
                            
                           Tahun Kegiatan 
                            </th>
                            <th>{{ $result->b0r2 }} </th>
                            
                        </tr>
                        @endif
                        
                        @if(is_null($result->b1r1))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Instansi Penyelenggara
                            </th>
                            <th>{{ $result->b1r1 }} </th>
                           
                        </tr>
                         @endif
                        @if(is_null($result->b3r2))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Tujuan Kegiatan
                            </th>
                            <th>{{ $result->b3r2 }} </th>
                            
                        </tr>
                        @endif
                        
                        @if(is_null($result->b0r4))
                        @else
                        <tr>
                            <th style="font-weight:700; "> 
                            
                           Cara Pengumpulan Data 
                            </th>
                            <th>{{ $result->b0r4 }} </th>
                            
                        </tr>
                        @endif
                        
                        
                        
                        @if(is_null($result->b4r1))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Frekuensi Kegiatan
                            </th>
                            <th>
                                @if($result->b4r1 == 'Berulang')
                                Dilakukan {{ $result->b4r1 }} ({{ $result->b4r2 }})
                                @else
                                Dilakukan {{ $result->b4r1 }}
                                @endif
                                
                            </th>
                            
                        </tr>
                        @endif
                        
             
                        
                        @if(is_null($result->b4r4))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Cakupan Wilayah Pengumpulan Data
                            </th>
                            <th>{{ $result->b4r4 }} </th>
                            
                        </tr>
                        @endif
                        
                        
                        @if(is_null($result->b4r5))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Jika "sebagian wilayah Indonesia", Wilayah Kegiatan
                            </th>
                            <th>{{ $result->b4r5 }} </th>
                            
                        </tr>
                        @endif
                        
                        @if(is_null($result->b4r6))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Metode Pengumpulan Data
                            </th>
                            <th>{{ $result->b4r6 }} </th>
                            
                        </tr>
                        @endif
                        
                        
                        @if(is_null($result->b4r8))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Unit Pengumpulan Data
                            </th>
                            <th>{{ $result->b4r8 }} </th>
                            
                        </tr>
                        @endif
                        
                        
                        @if(is_null($result->b7r3))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Unit Analisis
                            </th>
                            <th>{{ $result->b7r3 }} </th>
                            
                        </tr>
                        @endif
                        
                        
                         @if(is_null($result->b7r4))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Tingkat Penyajian Hasil Analisis
                            </th>
                            <th>{{ $result->b7r4 }} </th>
                            
                        </tr>
                        @endif
                      
                        
                        @if(is_null($result->b8r1a) && is_null($result->b8r1b) && is_null($result->b8r1c))
                            @else
                        <tr>
                            <th style="font-weight:700; "> 
                           Kegiatan Tersedia Dalam Bentuk
                            </th>
                            <th>
                               
                                    @if($result->b8r1a == 'Ya')
                                    - Tercetak 
                                    @else @endif
                                    <br>
                                    @if($result->b8r1b == 'Ya')
                                    - Digital 
                                    @else @endif
                                    <br>
                                    @if($result->b8r1c == 'Ya')
                                    - Data Mikro
                                    @else @endif
                                    
                             
                                
                                
                            </th>
                            
                        </tr>
                        @endif
                        
                        
                        
                        
                    </table>
          	
			
                            @endforeach
                            
                            <h4 style="font-weight:700; ">Kegiatan ini menghasilkan indikator:</h4>
                            @foreach ($data2 as $kolom)
                            
										<li><a  href="{{ url('indikator/' . $kolom->ind_b1k2) }}"> {{ $kolom->ind_b1k2 }}
										</a></li> @endforeach  


                            </div>
                        </div>
	@endsection                  