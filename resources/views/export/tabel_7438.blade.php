<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Pejabat Daerah Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Bupati
(orang)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Legislatif
(orang)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total</center></th>
                
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7438 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7438a }} </td>
                    <td> {{ $member->t7438b }} </td>
                    <td> {{ $member->t7438c }} </td>

          
        
                    </tr>
                    @endforeach
                    
                 
                   
                
    </table>