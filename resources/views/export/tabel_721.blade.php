<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Perusahaan, Tenaga Kerja, Investasi, dan Nilai Produksi Pada Industri Mikro dan Kecil Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perusahaan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tenaga Kerja</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Investasi <br>(Ribu Rupiah)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai Produksi <br>(Ribu Rupiah)</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_721 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t721a }} </td>
                        <td> {{ $member->t721b }} </td>
                        <td> {{ $member->t721c }} </td>
                        <td> {{ $member->t721d }} </td>
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