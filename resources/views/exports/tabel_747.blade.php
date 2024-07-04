<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Penyediaan Rumah Layak Huni bagi Korban Relokasi Pembangunan Pemerintah Provinsi Sulawesi Tenggara, 2020-2022
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
           <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "7" > <center>Kriteria Perumahan Bagi Korban Relokasi</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Bangunan gedung (unit)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jalan lingkungan (meter)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Penyediaan air minum (unit)</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Drainase lingkungan (meter)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pengelolaan air limbah (unit)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pengelolaan persampahan (unit)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Proteksi kebakaran (unit)</center></th>
                    
                  
       
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_747 as $member)
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