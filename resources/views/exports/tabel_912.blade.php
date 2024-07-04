<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kendaraan Bermotor Menurut Kabupaten/Kota dan Jenis Kendaraan (unit) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_912 as $member)
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