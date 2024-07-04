<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Anggota Dewan Rakyat Daerah Menurut Partai Politik dan Jenis Kelamain di {{ $a->kab }}, Desember {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                <tr>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Partai Politik</center></th>
                    <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                    
                  
                   
          
                   @foreach ($tabel_221 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        
                        <td> {{ $member->t221a }} </td>
                        <td> {{ $member->t221b }} </td>
                        <td> {{ $member->t221c }} </td>
                            
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_lk }} </td>
                   <td> {{ $member->sum_pr }} </td>
                   <td> {{ $member->sum_lkpr }} </td>
          
                       @endforeach
                            
                       
                   
                      
                    </tr>
                    
    </table>