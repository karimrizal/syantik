<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Destinasi Wisata Menurut Jenis Wisata dan Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jenis Wisata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Timur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Kepulauan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna Barat</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Tengah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Selatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baubau</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_85 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    
                        <td> {{ $member->t85a }} </td>
                        <td> {{ $member->t85b }} </td>
                        <td> {{ $member->t85c }} </td>
                        <td> {{ $member->t85d }} </td>
                        <td> {{ $member->t85e }} </td>
                        <td> {{ $member->t85f }} </td>
                        <td> {{ $member->t85g }} </td>
                        <td> {{ $member->t85h }} </td>
                        <td> {{ $member->t85i }} </td>
                        <td> {{ $member->t85j }} </td>
                        <td> {{ $member->t85k }} </td>
                        <td> {{ $member->t85l }} </td>
                        <td> {{ $member->t85m }} </td>
                        <td> {{ $member->t85n }} </td>
                        <td> {{ $member->t85o }} </td>
                        <td> {{ $member->t85p }} </td>
                        <td> {{ $member->t85q }} </td>
              
                      
                      
                       
                      
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
                   <td> {{ $member->sum_f }} </td>
                   <td> {{ $member->sum_g }} </td>
                   <td> {{ $member->sum_h }} </td>
                   <td> {{ $member->sum_i }} </td>
                   <td> {{ $member->sum_j }} </td>
                   <td> {{ $member->sum_k }} </td>
                   <td> {{ $member->sum_l }} </td>
                   <td> {{ $member->sum_m }} </td>
                   <td> {{ $member->sum_n }} </td>
                   <td> {{ $member->sum_o }} </td>
                   <td> {{ $member->sum_p }} </td>
                   <td> {{ $member->sum_q }} </td>
                    
       
       
                 
                       @endforeach
                 
                       
                   
                      
                    </tr>
                   
                
    </table>