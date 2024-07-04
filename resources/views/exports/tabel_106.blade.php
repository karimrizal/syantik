<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Perkembangan Giro, Deposito, dan Tabungan Keadaan 31 Desember di {{ $a->kab }}, 2018-2021
@endforeach	
</th>
<br>
    </tr>
           
             <tr>
                       
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Giro</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tabungan</center></th>
                        <th colspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Deposito</center></th>
                    
                    </tr>
                     <tr>
                     
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Rekening</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai (Juta Rp)</center></th>
                    
                    </tr>
    
                    
             
          
                   @foreach ($tabel_106 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <th >{{ $member->t106a }}</th>
                        <th >{{ $member->t106b }}</th>
                        <th >{{ $member->t106c }}</th>
                        <th >{{ $member->t106d }}</th>
                        <th >{{ $member->t106e }}</th>
                        <th >{{ $member->t106f }}</th>
                    
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     
                   
                
    </table>