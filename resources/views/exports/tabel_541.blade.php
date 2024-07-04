<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Luas Kawasan Hutan dan Hutan Konservasi Menurut kabupaten/Kota (ha) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun SK</center></th>
                        <th colspan="7" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan Konservasi (Daratan dan Perairan)</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan (Daratan)</center></th>
                         <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    <tr>
                        
                    
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perairan</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Suaka Margasatwa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cagar Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Hutan Raya</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi Tetap </center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi yang Dapat Dikonversi</center></th>
                   
                    </tr>
                   
          
                   @foreach ($tabel_541 as $member)
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