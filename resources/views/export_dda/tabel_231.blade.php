<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Pegawai Negeri Sipil Menurut Daerah Pemerintahan dan Jenis Kelamin di {{ Auth::user()->idkab }}, Desember {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Wilayah</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>{{$year}}</center></th>
                        
                       
                      
                    </tr>
                    
                    <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                  
                   
          
                   @foreach ($tabel_231 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t231_lk }} </td>
                        <td> {{ $member->t231_pr }} </td>
                        <td> {{ $member->t231c }} </td>
              
                      
                      
                       
                      
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