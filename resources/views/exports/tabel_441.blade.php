<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kejahatan yang Dilaporkan, Risiko Penduduk Terjadi Tindak Pidana per 100.000 Penduduk, Persentase Penyelesaian Tindak Pidana, dan Selang Waktu Terjadinya Tindak Pidana Menurut Kepolisian Resort di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                  <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Kejahatan yang Dilaporkan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Risiko Penduduk Terjadi Tindak Pidana per 100.000 Penduduk</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Persentase Penyelesaian Tindak Pidana</center></th>
                <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Selang Waktu Terjadinya Tindak Pidana</center></th>
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_441 as $member)
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