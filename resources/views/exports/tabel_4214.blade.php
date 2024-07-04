<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
         @foreach($kab as $a)
         @if (Auth::user()->idkab == '7400')	
Jumlah Klinik Keluarga Berencana (KKB) dan Pos Pelayanan Keluarga Berencana Desa (PPKBD) Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@else
Jumlah Klinik Keluarga Berencana (KKB) dan Pos Pelayanan Keluarga Berencana Desa (PPKBD) Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
               @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>KKB</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>PPKBD</center></th>
                      
                    </tr>
                   
          
                   @foreach ($tabel_4214 as $member)
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