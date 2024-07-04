<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kejahatan yang Dilaporkan, Risiko Penduduk Terjadi Tindak Pidana per 100.000 Penduduk, Persentase Penyelesaian Tindak Pidana, dan Selang Waktu Terjadinya Tindak Pidana Menurut Kepolisian Resort di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                  <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Kejahatan yang Dilaporkan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Risiko Penduduk Terjadi Tindak Pidana per 100.000 Penduduk</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Persentase Penyelesaian Tindak Pidana</center></th>
                <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Selang Waktu Terjadinya Tindak Pidana</center></th>
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_441 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t441a }} </td>
                        <td> {{ $member->t441b }} </td>
                        <td> {{ $member->t441c }} </td>
                        <td> {{ $member->t441d }} </td>
              
                      
                      
                       
                      
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