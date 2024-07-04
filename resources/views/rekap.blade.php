@extends('back-end/layouts/main')

@section('container')
                      
                
                        <div class="card mb-4">
                            <div class="card-header">
                                
                               
                            </div>
                            <div class="card-body">


                        <br>
                         <form >
                <select  type="hidden" name="tahun">
				
                <option value>Pilih Tahun</option>
                            
		
                        <option value="2020">2020</option>
                         <option value="2021">2021</option>
                      
                            </select>
                
							
                         <input type="submit" value="Pilih">
                          </form >
                          <br>  
            @if($year == '2020')
          <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Perbandingan dengan Kabupaten/Kota Tahun 2020</h3> <br>     </center>
          @elseif($year == '2021') <center>  <h3 class="panel-title" style="font-weight: 500; font-size: 20px; color: #006fcc;">Data Perbandingan dengan Kabupaten/Kota Tahun 2021</h3> <br>     </center>
          @else @endif

         
    	<table class="table table-bordered" id="example"  style="width: 100%;">
								<thead>
									<tr>
									  
									    <th>Kode</th>
										<th>Judul Tabel</th>
										<th>Instansi</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($master_banding as $businesses)
										<tr >
										  
										   <td>{{($businesses->kode) }}</a></td>
											<td><a href="{{ url('https://webapps.bps.go.id/sultra/syantik/'. $businesses->judul) }}">{{($businesses->nama) }}</a></td>
											<td>{{($businesses->dinas) }}</a></td>
											<td>
								
					@if($year == 2020)
								
								@if($businesses->kode == '3.2.17')
								            @foreach($status_3217_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach			    
								 @elseif($businesses->kode == '4.2.14')
											 @foreach($status_4214_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
							
								@elseif($businesses->kode == '4.2.15')
								            @foreach($status_4215_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.3')
								            @foreach($status_423_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.5')
								            @foreach($status_425_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.6')
								            @foreach($status_426_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.7')
								            @foreach($status_427_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.5.5')
								            @foreach($status_455_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.6.6')
								            @foreach($status_466_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.3.1')
								            @foreach($status_531_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.3.2')
								            @foreach($status_532_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.1')
								            @foreach($status_551_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.2')
								            @foreach($status_552_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.3')
								            @foreach($status_553_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.4')
								            @foreach($status_554_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
											 
								@elseif($businesses->kode == '5.5.5')
								            @foreach($status_555_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '6.3')
								            @foreach($status_63_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.1')
								            @foreach($status_911_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.3')
								            @foreach($status_913_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.4')
								            @foreach($status_914_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach	
											 
								@elseif($businesses->kode == '9.2.1')
								            @foreach($status_921_2020 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach			 
											 
								
							@else	@endif
   

							
					@elseif($year == 2021)
					
					@if($businesses->kode == '3.2.17')
								            @foreach($status_3217_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach			    
								 @elseif($businesses->kode == '4.2.14')
											 @foreach($status_4214_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
							
								@elseif($businesses->kode == '4.2.15')
								            @foreach($status_4215_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.3')
								            @foreach($status_423_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.5')
								            @foreach($status_425_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.6')
								            @foreach($status_426_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.2.7')
								            @foreach($status_427_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.5.5')
								            @foreach($status_455_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '4.6.6')
								            @foreach($status_466_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.3.1')
								            @foreach($status_531_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.3.2')
								            @foreach($status_532_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.1')
								            @foreach($status_551_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.2')
								            @foreach($status_552_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.3')
								            @foreach($status_553_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '5.5.4')
								            @foreach($status_554_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
											 
								@elseif($businesses->kode == '5.5.5')
								            @foreach($status_555_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '6.3')
								            @foreach($status_63_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.1')
								            @foreach($status_911_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.3')
								            @foreach($status_913_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach
											 
								@elseif($businesses->kode == '9.1.4')
								            @foreach($status_914_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach	
											 
								@elseif($businesses->kode == '9.2.1')
								            @foreach($status_921_2021 as $b)
											    @if( $b->jumlah_baris == '17' ) Sama	@else Beda @endif
											 
											 @endforeach			 
											 
								
							@else	@endif
					
					
					
					
					@else
					
					
					@endif		
										
											 </td>
										</tr>
									@endforeach
								</tbody>
							    </table>                    

    <br>
    
    
   





						
				
                            </div>
                        </div>
	@endsection                  
	<script src="{{asset('public/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/admin/assets/scripts/klorofil-common.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				
				"aLengthMenu": [[15, 30, 75, -1], [15, 30, 75, "All"]],
        "iDisplayLength": 15
				
			});
			
			
		});
	</script>
    
  <script>  
  

$('input').bind('paste', function (e) {
    var $start = $(this);
    var source

    //check for access to clipboard from window or event
    if (window.clipboardData !== undefined) {
        source = window.clipboardData
    } else {
        source = e.originalEvent.clipboardData;
    }
    var data = source.getData("Text");
    if (data.length > 0) {
        if (data.indexOf("\t") > -1) {
            var columns = data.split("\n");
            $.each(columns, function () {
                var values = this.split("\t");
                $.each(values, function () {
                    $start.val(this);
                    if ($start.closest('td').next('td').find('input,text')[0] != undefined || $start.closest('td').next('td').find('text')[0] != undefined) {
                    $start = $start.closest('td').next('td').find('input,text');
                    }
                    else
                    {
                     return false;  
                    }
                });
                $start = $start.closest('td').parent().next('tr').children('td:first').find('input,text');
            });
            e.preventDefault();
        }
    }
});

</script>

