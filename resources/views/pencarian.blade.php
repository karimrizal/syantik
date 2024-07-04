@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">
                                
							<div class="col-md-12">
							<form>
							<input type="text" id="nama" name="nama" value="{{ old('nama') }}" size="100" style="padding-left:30px;padding-right:30px; border-radius: 25px;height: 50px;"   placeholder="Cari Data . . .">
							
							<select style="height:40px" type="hidden" name="tahun">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            </select>
							&nbsp
							
							<input style="height:40px" type="submit" value="Cari" /> 
                   		</div>	
			            	</form>

							<hr>
							
						    
							<center> <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;"> @if(is_null($q2)) Data Tahun {{$tahun}} @else Data Tahun {{$tahun2}} @endif</h3>  </center>
	<br>                   
									@forelse ($lihats as $businesses)
									
										  
										   
										<a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}, {{($businesses->tahun) }} </a> <br>
										{{($businesses->dinas) }}
										<hr>    
									
										
											@empty
						
                           Tidak ada data
                       
									@endforelse
									
								
								
								</tbody>
							    </table>                  

                            </div>
                        </div>
	@endsection                  