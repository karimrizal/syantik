<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Banyaknya Kegiatan DPRD di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                <tr>
                       
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kegiatan</center></th>
                    <th bgcolor="#5cb85c" style="vertical-align: middle;"> {{$year}}</th>
                      
                    </tr>
                    
                  
                   
          
                   @foreach ($tabel_224 as $member)
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