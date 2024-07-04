<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Hari Hujan Menurut Bulan dan Stasiun di {{ $a->kab }} (hari), {{$year}}
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
                    
                  
                   
          
                   @foreach ($tabel_126 as $member)
                    <tr>
                        <th>{{ $member->kec }}</th>
                        
                        @if( (Auth::user()->idkab == '7400')  )      
                   <td> {{ $member->t126a }} </td>
                        <td> {{ $member->t126b }} </td>
                        <td> {{ $member->t126c }} </td>
                        <td> {{ $member->t126d }} </td>
                            
                 
                   @elseif( (Auth::user()->idkab == '7471')  )
                   <td> {{ $member->t126a }} </td>
                 @elseif( (Auth::user()->idkab == '7472')  )
                 <td> {{ $member->t126b }} </td>
                    @elseif( (Auth::user()->idkab == '7405')  )
                
                    <td> {{ $member->t126c }} </td>          
                             @elseif( (Auth::user()->idkab == '7404')  )
                
                             <td> {{ $member->t126d }} </td>             @else @endif
                      
                    </tr>
                    @endforeach
             
    </table>