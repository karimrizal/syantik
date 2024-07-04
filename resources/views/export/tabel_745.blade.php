<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Rasio panjang jalan dengan jumlah penduduk di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
            <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Panjang Jalan (Km)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penduduk (Jiwa)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio (Km/Jiwa)</center></th>
                    
                  
       
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_745 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t745a }} </td>
                    <td> {{ $member->t745b }} </td>
                    <td> {{ $member->t745c }} </td>
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     
                   
                
    </table>