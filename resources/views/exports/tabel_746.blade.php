<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Pelatihan Tenaga Ahli Konstruksi di Sulawesi Tenggara Tahun 2017-2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
            <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pelatihan Tenaga Ahli Konstruksi (kegiatan)</center></th>
            
                  
       
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_746 as $member)
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