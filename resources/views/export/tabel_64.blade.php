<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Pelanggan Menurut Kategori Pelanggan di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kategori Pelanggan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>{{$year}}</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_64 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>  
                        <td> {{ $member->t64a }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                              
                       @endforeach
                 
                       
                   
                      
                    </tr>
                   
                
    </table>