@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">
                                
								<select class="form-control select2"  onChange="window.location.href=this.value">
								<option></option>
											@foreach ($opd as $businesses)													
											<option value="{{ url('https://webapps.bps.go.id/sultra/syantik/data_opd/' . $businesses->nama_opd) }}" >{{($businesses->nama_opd) }}</option>
											@endforeach
								</select>
							<br>
							<br>
							<form >
								<select  type="hidden" name="tahun">
										<option value>Pilih Tahun</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
								</select>
								<select  type="hidden" name="idkab">		
										<option value>Pilih Kab/Kota</option>		
										<option value="7400">Sulawesi Tenggara</option>
										<option value="7401">Buton</option>
										<option value="7404">Kolaka</option>
										<option value="7408">Kolaka Utara</option>
										<option value="7414">Buton Tengah</option>
										<option value="7415">Buton Selatan</option>
                          		 </select>  
							
                         		<input type="submit" value="Pilih">
                          	</form >
                          <br>  
                        @if(empty($year))
           				<center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Statistik Sektoral Provinsi Sulawesi Tenggara untuk Perencanaan dan Pembangunan Tahun 2021</h3> <br>     </center>
                        @else
                        <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Statistik Sektoral Provinsi Sulawesi Tenggara untuk Perencanaan dan Pembangunan Tahun {{$year}}</h3> <br>     </center>
                        @endif
     					@foreach ($lihats->slice(0, 1) as $businesses)
         				<center>   <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">{{($businesses->dinas) }} </h3> </center>
          				@endforeach  
         
    				<table class="table table-bordered" id="example"  style="width: 100%;">
								<thead>
									<tr>
									    <th>Kode</th>
										<th>Judul Tabel</th>
										<th>Instansi</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($lihats as $businesses)
										<tr >
										    <td>{{($businesses->kode) }}</a></td>
											<td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
											<td>{{($businesses->dinas) }}</a></td>
										</tr>
									@endforeach
								</tbody>
					</table>     

                            </div>
                        </div>
	@endsection   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>	
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
  $(".select2").select2({
    placeholder: "-- Pilih OPD --",

});
});
</script>	