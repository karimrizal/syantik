<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Panjang Jalan Menurut Kabupaten/Kota dan Kondisi Jalan (km) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Baik</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sedang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rusak</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rusak Berat</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_914 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t914a }} </td>
                        <td> {{ $member->t914b }} </td>
                        <td> {{ $member->t914c }} </td>
                        <td> {{ $member->t914d }} </td>
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