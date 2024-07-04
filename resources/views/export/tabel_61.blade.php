<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Daya Terpasang, Produksi, dan Distribusi Listrik PT. PLN (Persero) Menurut Unit Layanan Pelanggan (ULP) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>ULP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daya Terpasang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Produksi Listrik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Listrik Terjual</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Dipakai Sendiri</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Susust/Hilang</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_61 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t61a }} </td>
                        <td> {{ $member->t61b }} </td>
                        <td> {{ $member->t61c }} </td>
                        <td> {{ $member->t61d }} </td>
                        <td> {{ $member->t61e }} </td>

                   
                             
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                        @foreach ($sum_lk as $member)
                   
                        <td> {{ $member->sum_a }} </td>
                        <td> {{ $member->sum_b }} </td>
                        <td> {{ $member->sum_c }} </td>
                        <td> {{ $member->sum_d }} </td>
                        <td> {{ $member->sum_e }} </td>
                         
            
            
                      
                            @endforeach
                 
                       
                   
                      
                    </tr>
                   
                
    </table>