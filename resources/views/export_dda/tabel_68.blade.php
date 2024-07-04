<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Produksi Hasil Pertambangan Nikel dan Aspal di {{ $a->kab }}, 2018 - 2021
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Produksi</center></th>
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Fero Nikel <br> Ton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Aspal <br> Ton</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_68 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <th >{{ $member->t68a }}</th>
                        <th >{{ $member->t68b }}</th>
                        <th >{{ $member->t68c }}</th>
     
                   
                          
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     
                   
                
    </table>