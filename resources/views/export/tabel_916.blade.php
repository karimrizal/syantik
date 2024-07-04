<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kendaraan Bermotor Menurut Satwil/Samsat dan Jenis Kendaraan di {{ $a->kab }}, Desember {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>SATWIL / SAMSAT</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="5"><center>Jumlah Kendaraan Bermotor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                     
       
                      
                    </tr>
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Penumpang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Bis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mobil Barang</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sepeda Motor</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kendaraan Khusus</center></th>
                      
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_916 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t916a }} </td>
                        <td> {{ $member->t916b }} </td>
                        <td> {{ $member->t916c }} </td>
                        <td> {{ $member->t916d }} </td>
                        <td> {{ $member->t916e }} </td>
                        <td> {{ $member->t916f }} </td>
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
                   <td> {{ $member->sum_a + $member->sum_b + $member->sum_c + $member->sum_d + $member->sum_e }} </td>
               
                  
                       @endforeach
                    </tr>
                   
                
    </table>