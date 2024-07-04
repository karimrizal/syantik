<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Kendaraan Bermotor Menurut Kabupaten/Kota dan Jenis Kendaraan (unit) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bus</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Mobil Penumpang</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Truk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sepeda Motor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_912 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t912a }} </td>
                        <td> {{ $member->t912b }} </td>
                        <td> {{ $member->t912c }} </td>
                        <td> {{ $member->t912d }} </td>
                        <td> {{ $member->t912e }} </td>
                      
                      
                       
                      
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
                
                  
                       @endforeach
                      
                    </tr>
                   
                
    </table>