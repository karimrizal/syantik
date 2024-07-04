<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Panjang Jalan Menurut Kabupaten/Kota dan Kondisi Jalan (km) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sedang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rusak</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rusak Berat</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_914 as $member)
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