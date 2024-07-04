<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Dokter Spesialis, Dokter Umum, dan Dokter Gigi Menurut Sarana Pelayanan Kesehatan di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Sarana Pelayanan Kesehatan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Spesialis</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Umum</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Dokter Gigi</center></th>
                      
                    </tr>
                   
          
                   @foreach ($tabel_4211 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                 
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                  
                
    </table>