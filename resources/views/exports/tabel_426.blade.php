<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Rumah Sakit Umum, Rumah Sakit Khusus, Rumah Sakit/Rumah Bersalin, Puskesmas, Klinik/Balai Kesehatan, Posyandu, dan Polindes di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                  <tr>
                        
                         @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Khusus</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Rumah Sakit Bersalin</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Puskesmas Rawat Inap</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Puskesmas Non Rawat Inap</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Klinik/Balai</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Posyandu</center></th>
                     <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Polindes</center></th>
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_426 as $member)
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