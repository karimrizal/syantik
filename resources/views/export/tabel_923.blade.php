<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Kapasitas Optical Distribution Point (OOP) dan Sambungan Telepon/Internet Menurut Unit Pengelola Teknik (UPT) di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                      <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kantor</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kapasitas OOP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sambungan Telepon/Internet</center></th>
                      
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_923 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                     <td> {{ $member->t923a }} </td>
                        <td> {{ $member->t923b }} </td>
                      
                      
                       
                      
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