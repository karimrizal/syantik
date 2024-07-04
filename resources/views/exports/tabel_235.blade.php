<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Jumlah Pegawai Negeri Sipil Menurut Dinas/Instansi Pemerintahan dan Jenis Kelamin di Lingkup Pemerintahan {{ $a->kab }}, Desember {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Dinas/Instansi Pemerintahan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>{{$year}}</center></th>
                        
                       
                      
                    </tr>
                    
                    <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                  
                   
          
                   @foreach ($tabel_235 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        
                     
                            
                   
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                           <td>
                                <input type="text" >
                            </td>
                 
                       
                   
                      
                    </tr>
                    
    </table>