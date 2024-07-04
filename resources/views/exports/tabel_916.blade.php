<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kendaraan Bermotor Menurut Satwil/Samsat dan Jenis Kendaraan di {{ $a->kab }}, Desember {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>SATWIL / SAMSAT</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="5"><center>Jumlah Kendaraan Bermotor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                     
       
                      
                    </tr>
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Penumpang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Barang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sepeda Motor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kendaraan Khusus</center></th>
                      
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_916 as $member)
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