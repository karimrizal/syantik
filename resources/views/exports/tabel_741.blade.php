<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Sekolah Menengah Atas (SMA) di bawah Dinas Pendidikan dan Kebudayaan Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara, 2021/2022 dan 2022/2023
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
             <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"><center>Negeri</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"><center>Swasta</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2"><center>Total</center></th>
                  
       
                      
                    </tr>
                     <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> 2021/2022 </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> 2022/2023 </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> 2021/2022 </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> 2022/2023 </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> 2021/2022 </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> 2022/2023 </th>
					
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_741 as $member)
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