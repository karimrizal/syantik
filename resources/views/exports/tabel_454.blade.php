<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') ) 
Persentase Penduduk Menurut Kabupaten/Kota dan Agama yang Dianut di {{ $a->kab }}, {{$year}}
@else
Persentase Penduduk Menurut Kecamatan dan Agama yang Dianut di {{ $a->kab }}, {{$year}}
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
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Islam</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Protestan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Katolik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Hindu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Budha</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Lainnya</center></th>
                      
                    </tr>
                   
          
                   @foreach ($tabel_454 as $member)
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