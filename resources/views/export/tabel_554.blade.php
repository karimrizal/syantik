<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') ) 
Produksi Unggas Menurut Kabupaten/Kota dan Jenis Unggas (kg) di {{ $a->kab }}, {{$year}}
@else
Produksi Unggas Menurut Kecamatan dan Jenis Unggas (kg) di {{ $a->kab }}, {{$year}}
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
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ayam Kampung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ayam Petelur</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ayam Pedaging</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Itik/Itik Manila</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_554 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t554a }} </td>
                        <td> {{ $member->t554b }} </td>
                        <td> {{ $member->t554c }} </td>
                        <td> {{ $member->t554d }} </td>
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
                  
                  
                       @endforeach
                    </tr>
                   
                
    </table>