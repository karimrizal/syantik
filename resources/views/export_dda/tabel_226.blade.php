<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Hasil Penghitungan Suara Untuk Keanggotaan DPRD Dapil {{ $a->kab }} Menurut Partai dan Kabupaten/Kota , {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                       @if (Auth::user()->idkab == '7400')
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
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
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
                    
				     @elseif (Auth::user()->idkab == '7401')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton</center></th>
                        
                        @elseif (Auth::user()->idkab == '7402')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Muna</center></th>
                        
                        @elseif (Auth::user()->idkab == '7403')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe</center></th>
                        
                        @elseif (Auth::user()->idkab == '7404')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka</center></th>
                        
                        @elseif (Auth::user()->idkab == '7405')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Selatan</center></th>
                        
                        @elseif (Auth::user()->idkab == '7406')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bombana</center></th>
                        
                        @elseif (Auth::user()->idkab == '7407')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Wakatobi</center></th>
                        
                        @elseif (Auth::user()->idkab == '7408')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kolaka Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7409')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Buton Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7410')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konawe Utara</center></th>
                        
                        @elseif (Auth::user()->idkab == '7471')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Kendari</center></th>
                        
                        @elseif (Auth::user()->idkab == '7472')
				     <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Patai Politik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kota Baubau</center></th>
				     
    			@else	@endif
                    </tr>
                  
                   
          
                   @foreach ($tabel_226 as $member)
                    <tr>
                       <td> {{ $member->kec }} </td>
                    @if (Auth::user()->idkab == '7400')
                         
                         <td> {{ $member->t226a }} </td>
                        <td> {{ $member->t226b }} </td>
                        <td> {{ $member->t226c }} </td>
                        <td> {{ $member->t226d }} </td>
                        <td> {{ $member->t226e }} </td>
                        <td> {{ $member->t226f }} </td>
                        <td> {{ $member->t226g }} </td>
                        <td> {{ $member->t226h }} </td>
                        <td> {{ $member->t226i }} </td>
                        <td> {{ $member->t226j }} </td>
                        <td> {{ $member->t226k }} </td>
                        <td> {{ $member->t226l }} </td>
                            
                        @elseif (Auth::user()->idkab == '7401')    
                        <td> {{ $member->t226a }} </td>
                        @elseif (Auth::user()->idkab == '7402')    
                        <td> {{ $member->t226b }} </td>
                        @elseif (Auth::user()->idkab == '7403')    
                        <td> {{ $member->t226c }} </td>
                        @elseif (Auth::user()->idkab == '7404')    
                        <td> {{ $member->t226d }} </td> 
                        @elseif (Auth::user()->idkab == '7405')    
                        <td> {{ $member->t226e }} </td>
                        @elseif (Auth::user()->idkab == '7406')    
                        <td> {{ $member->t226f }} </td>
                        @elseif (Auth::user()->idkab == '7407')    
                        <td> {{ $member->t226g }} </td>
                        @elseif (Auth::user()->idkab == '7408')    
                        <td> {{ $member->t226h }} </td>
                        @elseif (Auth::user()->idkab == '7409')    
                        <td> {{ $member->t226i }} </td>
                        @elseif (Auth::user()->idkab == '7410')    
                        <td> {{ $member->t226j }} </td>    
                        @elseif (Auth::user()->idkab == '7471')    
                        <td> {{ $member->t226k }} </td>    
                        @elseif (Auth::user()->idkab == '7472')    
                        <td> {{ $member->t226l }} </td>
                        @else @endif    
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                        @foreach ($sum_lk as $member)
                         
                         @if (Auth::user()->idkab == '7400')
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
                            
                        @elseif (Auth::user()->idkab == '7401')    
                        <td> {{ $member->sum_a }} </td>
                        @elseif (Auth::user()->idkab == '7402')    
                        <td> {{ $member->sum_b }} </td>
                        @elseif (Auth::user()->idkab == '7403')    
                        <td> {{ $member->sum_c }} </td>
                        @elseif (Auth::user()->idkab == '7404')    
                        <td> {{ $member->sum_d }} </td> 
                        @elseif (Auth::user()->idkab == '7405')    
                        <td> {{ $member->sum_e }} </td>
                        @elseif (Auth::user()->idkab == '7406')    
                        <td> {{ $member->sum_f }} </td>
                        @elseif (Auth::user()->idkab == '7407')    
                        <td> {{ $member->sum_g }} </td>
                        @elseif (Auth::user()->idkab == '7408')    
                        <td> {{ $member->sum_h }} </td>
                        @elseif (Auth::user()->idkab == '7409')    
                        <td> {{ $member->sum_i }} </td>
                        @elseif (Auth::user()->idkab == '7410')    
                        <td> {{ $member->sum_j }} </td>    
                        @elseif (Auth::user()->idkab == '7471')    
                        <td> {{ $member->sum_k }} </td>    
                        @elseif (Auth::user()->idkab == '7472')    
                        <td> {{ $member->sum_l }} </td>
                        @else @endif    
                            
                            @endforeach
                 
                       
                   
                      
                    </tr>
                    
    </table>