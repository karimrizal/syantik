<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Curah Hujan Menurut Bulan dan Stasiun di {{ $a->kab }} (mm), {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bulan</center></th>
                        @if( (Auth::user()->idkab == '7400')  )
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
                  
                   
          
                   @foreach ($tabel_125 as $member)
                    <tr>
                        <th>{{ $member->kec }}</th>
                        
                   @if( (Auth::user()->idkab == '7400')  )      
                              <td>
                                <input type="text" >
                            </td>
                            
                 
                   @elseif( (Auth::user()->idkab == '7471')  )
                            <td>
                                <input type="text" >
                            </td>
                 @elseif( (Auth::user()->idkab == '7472')  )
                 <td>
                                <input type="text" >
                            </td>    @elseif( (Auth::user()->idkab == '7405')  )
                
            <td>
                                <input type="text" >
                            </td>                
                             @elseif( (Auth::user()->idkab == '7404')  )
                
            <td>
                                <input type="text" >
                            </td>                @else @endif
                      
                    </tr>
                    @endforeach
             
    </table>