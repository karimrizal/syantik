<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') )
Luas Areal Tanaman Perkebunan Menurut Kabupaten/Kota dan Jenis Tanaman (ha) di {{ $a->kab }}, {{$year}}
@else
Luas Areal Tanaman Perkebunan Menurut Kecamatan dan Jenis Tanaman (ha) di {{ $a->kab }}, {{$year}}
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
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa Sawit</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Karet</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kopi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kakao</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tebu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Teh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tembakau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cengkeh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Lada</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sagu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jambu Mete</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Enau</center></th>
                  
                        
                    </tr>
                   
          
                   @foreach ($tabel_531 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t531a }} </td>
                        <td> {{ $member->t531b }} </td>
                        <td> {{ $member->t531c }} </td>
                        <td> {{ $member->t531d }} </td>
                        <td> {{ $member->t531e }} </td>
                        <td> {{ $member->t531f }} </td>
                        <td> {{ $member->t531g }} </td>
                        <td> {{ $member->t531h }} </td>
                        <td> {{ $member->t531i }} </td>
                        <td> {{ $member->t531j }} </td>
                        <td> {{ $member->t531k }} </td>
                        <td> {{ $member->t531l }} </td>
                        <td> {{ $member->t531m }} </td>
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
                   <td> {{ $member->sum_e }} </td>
                   <td> {{ $member->sum_f }} </td>
                   <td> {{ $member->sum_g }} </td>
                   <td> {{ $member->sum_h }} </td>
                   <td> {{ $member->sum_i }} </td>
                   <td> {{ $member->sum_j }} </td>
                   <td> {{ $member->sum_k }} </td>
                   <td> {{ $member->sum_l }} </td>
                   <td> {{ $member->sum_m }} </td>
      
                       @endforeach
                    </tr>
                
    </table>