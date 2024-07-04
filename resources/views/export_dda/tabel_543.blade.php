<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Luas Kegiatan Rehabilitasi (ha) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sumber Dana</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>{{$year}}</center></th>
                  
                        
                     
                      
                    </tr>
                    
    
                    
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Lindung</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Hutan Mangrove</center></th>
           
                    </tr>
                   
          
                   @foreach ($tabel_543 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t543a }} </td>
                        <td> {{ $member->t543b }} </td>
                        <td> {{ $member->t543c }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
           
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
             
      
                       @endforeach
                    </tr>
                   
                
    </table>