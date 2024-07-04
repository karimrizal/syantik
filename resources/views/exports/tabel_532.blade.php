<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') ) 
Produksi Perkebunan Menurut Kabupaten/Kota dan Jenis Tanaman (ton) di {{ $a->kab }}, {{$year}}
@else
Produksi Perkebunan Menurut Kecamatan dan Jenis Tanaman (ton) di {{ $a->kab }}, {{$year}}
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
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa Sawit</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kelapa</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Karet</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kopi</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kakao</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tebu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Teh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Tembakau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Cengkeh</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Lada</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sagu</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jambu Mete</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Enau</center></th>
                  
                        
                    </tr>
                   
          
                   @foreach ($tabel_532 as $member)
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