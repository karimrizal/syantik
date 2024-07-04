<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if (Auth::user()->idkab == '7400')
Jumlah Kasus Penyakit Menurut Kabupaten/Kota dan Jenis Penyakit di {{ $a->kab }}, {{$year}}
@else
Jumlah Kasus Penyakit Menurut Kecamatan dan Jenis Penyakit di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                  <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Angka Penemuan TBC</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Angka Keberhasilan Pengobatan TBC</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah Kasus Baru AIDS</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Penemuan Kasus Baru Kusta per 100.000 Penduduk</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Angka Kesakitan Malaria per 1.000 Penduduk</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Angka Kesakitan DBD per 100.000 Penduduk</center></th>
                     
                   
       
                      
                    </tr>
    
                   
          
                   @foreach ($tabel_425 as $member)
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