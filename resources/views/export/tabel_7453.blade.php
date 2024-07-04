<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah dan Presentase Kepemilikan Akte Kelahiran Berdasarkan Umur Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "3" > <center>Kelompok Umur</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" colspan = "3" > <center>Jumlah Penduduk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Kepemilikan Akte Kelahiran</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "3" > <center>% Kepemilikan Akta Lahir</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"colspan = "3" > <center>Ada</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"colspan = "3" > <center>Belum Ada</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L + P</center></th>
                        </tr>
             
          
                   @foreach ($tabel_7453 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7453a }} </td>
                    <td> {{ $member->t7453b }} </td>
                    <td> {{ $member->t7453c }} </td>
                    <td> {{ $member->t7453d }} </td>
                    <td> {{ $member->t7453e }} </td>
                    <td> {{ $member->t7453f }} </td>
                    <td> {{ $member->t7453g }} </td>
                    <td> {{ $member->t7453h }} </td>
                    <td> {{ $member->t7453i }} </td>
                    <td> {{ $member->t7453j }} </td>
          
        
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
         
       
                  
        
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>