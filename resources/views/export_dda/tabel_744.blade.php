<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
JUMLAH KASUS DAN JUMLAH KUNJUNGAN RAWAT JALAN PASIEN GIZI BURUK di RUMAH SAKIT BAHTERAMAS PROV. SULTRA Tahun 2016-2021
</th>
<br>
    </tr>
           
               <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>Jumlah Kasus Baru (kasus)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>JUMLAH KUNJUNGAN (kunjungan)</center></th>
                    
                  
       
                      
                    </tr>
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>P</center></th>
                  
                    
                  
       
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_744 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                     <td> {{ $member->t744a }} </td>
                     <td> {{ $member->t744b }} </td>
                     <td> {{ $member->t744c }} </td>
                   
                      
                       
                      
                    </tr>
                    @endforeach
                    
                
                
    </table>