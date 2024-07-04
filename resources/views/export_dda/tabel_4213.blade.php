<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Ibu Hamil, Melakukan Kunjungan K1, Melakukan Kunjungan K4, Kurang Energi Kronis (KEK), dan Mendapat Tablet Zat Besi (Fe) di {{ $a->kab }}, 2018-{{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Ibu Hamil</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Melakukan Kunjungan K1</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Melakukan Kunjungan K4</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kurang Energi Kronis (KEK)</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Mendapat Tablet Zat Besi (Fe)</center></th>
                      
                    </tr>
                   
          
                   @foreach ($tabel_4213 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                               <th >{{ $member->t4213a }}</th>
                        <th >{{ $member->t4213b }}</th>
                        <th >{{ $member->t4213c }}</th>    
                        <th >{{ $member->t4213d }}</th>
                     <th >{{ $member->t4213e }}</th>
                     <td> {{ $member->t4213a }} </td>
                        <td> {{ $member->t4213b }} </td>
                        <td> {{ $member->t4213c }} </td>
                        <td> {{ $member->t4213d }} </td>
                        <td> {{ $member->t4213e }} </td>
                    </tr>
                    @endforeach
                     
                
    </table>