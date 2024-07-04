<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Pengamatan Unsur Iklim di Stasiun Pengamatan Badan Meteorologi Klimatologi dan Geofisika (BMKG) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Unsur Iklim</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                
           
                    </tr>
                    
                   
          
                    @foreach ($tabel_121 as $member)
                    <tr>
                        
                        <th>{{ $member->kec }}</th>
                        
          
                    
                        <td> {{ $member->t121a }} </td>
                 
                   
                               
            
                            
                      
                       
                      
                    </tr>
                    @endforeach
             
    </table>