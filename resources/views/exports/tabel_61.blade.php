<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Daya Terpasang, Produksi, dan Distribusi Listrik PT. PLN (Persero) Menurut Unit Layanan Pelanggan (ULP) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>ULP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daya Terpasang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Produksi Listrik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Listrik Terjual</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Dipakai Sendiri</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Susust/Hilang</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_61 as $member)
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