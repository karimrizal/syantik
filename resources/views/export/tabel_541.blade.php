<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Luas Kawasan Hutan dan Hutan Konservasi Menurut kabupaten/Kota (ha) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun SK</center></th>
                        <th colspan="7" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan Konservasi (Daratan dan Perairan)</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kawasan Hutan (Daratan)</center></th>
                         <th rowspan="3" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    <tr>
                        
                    
                        <th colspan="5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perairan</center></th>
                        <th colspan="4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Daratan</center></th>
                        
                        
                     
                      
                    </tr>
                    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Suaka Margasatwa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cagar Alam</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Hutan Raya</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Nasional Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Taman Wisata Laut</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi Tetap </center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Produksi yang Dapat Dikonversi</center></th>
                   
                    </tr>
                   
          
                   @foreach ($tabel_541 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t541a }} </td>
                        <td> {{ $member->t541b }} </td>
                        <td> {{ $member->t541c }} </td>
                        <td> {{ $member->t541d }} </td>
                        <td> {{ $member->t541e }} </td>
                        <td> {{ $member->t541f }} </td>
                        <td> {{ $member->t541g }} </td>
                        <td> {{ $member->t541h }} </td>
                        <td> {{ $member->t541i }} </td>
                        <td> {{ $member->t541j }} </td>
                        <td> {{ $member->t541k }} </td>
                        <td> {{ $member->t541l }} </td>
                        <td> {{ $member->t541m }} </td>
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
                   <td> {{ $member->sum_a + $member->sum_b + $member->sum_c + $member->sum_d + $member->sum_e + $member->sum_f + $member->sum_g + $member->sum_h + $member->sum_i + $member->sum_j + $member->sum_k + $member->sum_l }} </td>
      
                       @endforeach
                    </tr>
                
    </table>