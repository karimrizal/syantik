<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Tindak Pidana Khusus dan Penyelesaian Menurut Kesatuan/Subdit di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Satuan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Tindak Pidana</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Penyelesaian</center></th>
       
                      
                    </tr>
                    <tr>
                        
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>{{$year}}</center></th>
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_444 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t444a }} </td>
                        <td> {{ $member->t444b }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
             
              
                    
       
       
                 
                       @endforeach
                       
                   
                      
                    </tr>
                
    </table>