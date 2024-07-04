<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if (Auth::user()->idkab == '7400')
Jumlah Tenaga Kesehatan Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@else
Jumlah Tenaga Kesehatan Menurut Kecamatan di {{ $a->kab }}, {{$year}}
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
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perawat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bidan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kefarmasian</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Masyarakat</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Kesehatan Lingkungan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tenaga Gizi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Ahli Teknologi Laboratorium</center></th>
                   
       
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_423 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t423a }} </td>
                        <td> {{ $member->t423b }} </td>
                        <td> {{ $member->t423c }} </td>
                        <td> {{ $member->t423d }} </td>
                        <td> {{ $member->t423e }} </td>
                        <td> {{ $member->t423f }} </td>
                        <td> {{ $member->t423g }} </td>
                        <td> {{ $member->t423h }} </td>
                        <td> {{ $member->t423i }} </td>
              
                      
                      
                       
                      
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
            
                       @endforeach
                 
                       
                   
                      
                    </tr>
                
    </table>