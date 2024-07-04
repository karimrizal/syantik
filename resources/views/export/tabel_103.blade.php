<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Banyaknya Kantor BPR (Bank Perkreditan Rakyat) Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KC</center></th>
                   
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KK</center></th>
                      
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_103 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    
                        <td> {{ $member->t103a }} </td>
                        <td> {{ $member->t103b }} </td>
                        <td> {{ $member->t103c }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
            
                    
       
       
                 
                       @endforeach
                 
                       
                   
                      
                    </tr>
                   
                
    </table>