<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Tindak Pidana Umum Menurut Jenis Krimintalitas di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                   <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kriminalitas</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="2"><center>{{$year}}</center></th>
                    
                    </tr>
                    
                    <tr>
                        
                      
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dilaporkan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Diselesaikan</center></th>
           
                    </tr>
    
                   
          
                   @foreach ($tabel_442 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
             
                            
                   
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     
                
    </table>