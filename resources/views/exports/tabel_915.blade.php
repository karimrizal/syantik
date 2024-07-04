<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kendaraan Bermotor yang Telah Diregistrasi berdasarkan jenis kendaraan dan kepemilikan di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jenis Kendaraan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="5"><center>Jumlah Kendaraan Bermotor yang Telah Diregistrasi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                     
       
                      
                    </tr>
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perorangan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perusahaan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Pemerintah</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>CC</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Badan</center></th>
                      
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_915 as $member)
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