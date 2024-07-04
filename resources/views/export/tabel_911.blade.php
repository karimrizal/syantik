<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Panjang Jalan Menurut Kabupaten/Kota dan Tingkat Kewenangan Pemerintahan (km) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Negara</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Provinsi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_911 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t911a }} </td>
                        <td> {{ $member->t911b }} </td>
                        <td> {{ $member->t911c }} </td>
                        <td> {{ $member->t911d }} </td>
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_a + $member->sum_b + $member->sum_c }} </td>
                
                  
                       @endforeach
                    </tr>
                   
                
    </table>