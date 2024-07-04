<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Posisi Pinjaman (Rupiah dan Valuta Asing) yang Diberikan Bank Umum dan BPR Menurut Jenis Penggunaan di {{ $a->kab }} (Juta Rp), 2018-2021
@endforeach	
</th>
<br>
    </tr>
           
              <tr>
                       
                        <th rowspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Modal Kerja</center></th>
                        <th colspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Investasi</center></th>
                        <th colspan="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Konsumsi</center></th>
                        
                    
                    </tr>
                    
                    
             
          
                   @foreach ($tabel_107 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                
                        <th >{{ $member->t107b }}</th>
                        <th >{{ $member->t107f }}</th>
                        <th >{{ $member->t107d }}</th>
                        
                        
                    
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     
                   
                
    </table>