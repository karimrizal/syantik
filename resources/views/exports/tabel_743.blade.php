<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Kunjungan Pasien Rawat Jalan dan Rawat Inap Menurut Kabupaten/Kota di Rumah Sakit Jiwa Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
            <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" ><center>Jumlah Kunjungan</center></th>
        
                    </tr>
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rawat Jalan</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" ><center>Rawat Inap</center></th>
        
                    </tr>
    
                    
             
          
                   @foreach ($tabel_743 as $member)
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