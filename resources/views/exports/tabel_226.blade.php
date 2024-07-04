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