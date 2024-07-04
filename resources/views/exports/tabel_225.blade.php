<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
@if (Auth::user()->idkab == '7400')	        
Jumlah Pemilih dan Penggunaan Hak Pilih dalam Pemilihan Anggota Legislatif Menurut Kabupaten/Kota dan Jenis Kelamin di {{ $a->kab }}, {{$year}}
@else
Jumlah Pemilih dan Penggunaan Hak Pilih dalam Pemilihan Anggota Legislatif Menurut Kecamatan dan Jenis Kelamin di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Jumlah Pemilih</center></th>
    				    <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Penggunaan Hak Pilih</center></th>
				    
				    @else 
				     <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Jumlah Pemilih</center></th>
    				    <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"> <center>Penggunaan Hak Pilih</center></th>
    				@endif
                    </tr>
                    
                    <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                          <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                 
                    </tr>
                  
                   
          
                   @foreach ($tabel_225 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        
                     
                            
                   
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                           <td>
                                <input type="text" >
                            </td>
                 
                       
                   
                      
                    </tr>
                    
    </table>