<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Rata-rata Kelembaban Udara Menurut Bulan dan Stasiun di {{ $a->kab }} (Persen), {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2"> <center>Bulan</center></th>
                        @if( (Auth::user()->idkab == '7400')  )
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
                       
                       @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Maritim Kendari</center></th>
                        
                       @elseif( (Auth::user()->idkab == '7472')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Betoambari Bau-Bau</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7405')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Klimatologi Konawe Selatan</center></th>
                        
                        @elseif(  (Auth::user()->idkab == '7404')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="3"><center>Stasiun Meteorologi Sangia Ni Bandera Kolaka</center></th>
           @else @endif
                    </tr>
                    
                    <tr>
                        @if( (Auth::user()->idkab == '7400')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                         @elseif( (Auth::user()->idkab == '7471')  )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          @elseif( (Auth::user()->idkab == '7472')  )
                          <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '7405')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                        @elseif( (Auth::user()->idkab == '74704')  )
                           <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Minimum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rata-rata</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Maksimum</center></th>
                          
                          @else @endif
           
                    </tr>

                   
          
                   @foreach ($tabel_123 as $member)
                    <tr>
                        <th>{{ $member->kec }}</th>
                        
                        @if( (Auth::user()->idkab == '7400')  )      
                        <td> {{ $member->t123a }} </td>
                        <td> {{ $member->t123b }} </td>
                        <td> {{ $member->t123c }} </td>
                        <td> {{ $member->t123d }} </td>
                        <td> {{ $member->t123e }} </td>
                        <td> {{ $member->t123f }} </td>
                        <td> {{ $member->t123g }} </td>
                        <td> {{ $member->t123h }} </td>
                        <td> {{ $member->t123i }} </td>
                        <td> {{ $member->t123j }} </td>
                        <td> {{ $member->t123k }} </td>
                        <td> {{ $member->t123l }} </td>
                            
                 
                   @elseif( (Auth::user()->idkab == '7471')  )
                   <td> {{ $member->t123a }} </td>
                        <td> {{ $member->t123b }} </td>
                        <td> {{ $member->t123c }} </td>
                 @elseif( (Auth::user()->idkab == '7472')  )
                 <td> {{ $member->t123d }} </td>
                        <td> {{ $member->t123e }} </td>
                        <td> {{ $member->t123f }} </td>
                 @elseif( (Auth::user()->idkab == '7405')  )
                
                 <td> {{ $member->t123g }} </td>
                        <td> {{ $member->t123h }} </td>
                        <td> {{ $member->t123i }} </td>          
                             @elseif( (Auth::user()->idkab == '7404')  )
                
                             <td> {{ $member->t123j }} </td>
                        <td> {{ $member->t123k }} </td>
                        <td> {{ $member->t123l }} </td>
                       @else @endif
                      
                    </tr>
                    @endforeach
             
    </table>