<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Luasan (Ha) Kawasan Permukiman Kumuh > 10-15 Ha Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Luas (Ha) kawasan Pemukiman Kumuh >10-15 Ha </center></th>
                      
                  
                        </tr>
             
          
                   @foreach ($tabel_7425 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7425a }} </td>
            
                  
                    </tr>
                    @endforeach
                    
                 
                     
                   
                
    </table>