<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Banyaknya Keputusan DPRD di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                <tr>
                       
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Keputusan</center></th>
                    <th bgcolor="#5cb85c" style="vertical-align: middle;"> {{$year}}</th>
                      
                    </tr>
                    
                  
                   
          
                   @foreach ($tabel_223 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t223a }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_lk }} </td>
         
          
                       @endforeach
                 
                       
                   
                      
                    </tr>
                    
    </table>