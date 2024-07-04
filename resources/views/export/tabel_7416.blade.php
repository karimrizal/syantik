<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Terminal Tipe B dan Status Penggunaannya, 2021-2022
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Terminal Tipe B (unit)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>Status Penggunaan</center></th>
                        
                        </tr>
                        
                        <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Berfungsi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Belum Berfungsi</center></th>
                  
                        
                        </tr>
             
          
                   @foreach ($tabel_7416 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7416a }} </td>
                    <td> {{ $member->t7416b }} </td>
                    <td> {{ $member->t7416b }} </td>
     
            
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>