@extends('front-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">
                                
							<form>
								<br> <br> <br> 
									<a href="/syantik/" style="font-size: 28px;"><img width="400" height="500" src="{{asset('public/admin/assets/img/logo-dark.svg')}}" style="display: block;margin-left: auto; 
        							margin-right: auto;" alt="Syantik Logo" class="img-fluid"><span ><center> Sistem Informasi Layanan Statistik </center></span></a>
                                <hr>

								<center> 	 
        						<div class="row">
									<div class="col-md-12">
										<form>
											<input type="text" id="nama" name="nama" value="{{ old('nama') }}" size="100" style="padding-left:30px;padding-right:30px; border-radius: 25px;height: 50px;"   placeholder="Cari Data . . .">
											
											<select style="height:40px" type="hidden" name="tahun">
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											</select>
											&nbsp
										
											<input style="height:40px" type="submit" value="Cari" /> 
										</form>	
									</div>			
			        			</div>    	
        						</center>

								<center> <input type="submit" value="Cari" style="display: none;"/> </center>
                   			
				
							</form>

                            </div>
                        </div>
	@endsection                  