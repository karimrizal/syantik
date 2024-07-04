<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Pelanggan, Listrik Terjual, dan Nilai Penjualan Listrik PT. PLN (Persero) Menurut Kategori Pelanggan di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kategori Pelanggan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah Pelanggan</center></th>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tenaga Listrik yang Terjual</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai Penjualan</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_67 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
     
                   
                        <td> {{ $member->t67a }} </td>
                        <td> {{ $member->t67b }} </td>
                        <td> {{ $member->t67c }} </td>
              
                      
                      
                       
                      
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