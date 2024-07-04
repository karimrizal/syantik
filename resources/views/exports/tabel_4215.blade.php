<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if (Auth::user()->idkab == '7400')
Jumlah Pasangan Usia Subur dan Peserta KB Aktif Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@else
Jumlah Pasangan Usia Subur dan Peserta KB Aktif Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                  <tr>
                         @if( (Auth::user()->idkab == '7400') )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah PUS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="8"> <center>Peserta KB Aktif</center></th>
                   
       
                      
                    </tr>
                    
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">IUD</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">MOW</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">MOP</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Kondom</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Implan</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Suntikan</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Pil</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                    </tr>
                   
          
                   @foreach ($tabel_4215 as $member)
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