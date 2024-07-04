<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Ketersediaan Cadangan Beras Pemerintah Provinsi Sulawesi Tenggara (Ton), 2020-2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Uraian</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun 2020 (ton)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun 2021 (ton)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah (ton)</center></th>
                      
             
                        </tr>
             
          
                   @foreach ($tabel_7456 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7456a }} </td>
                    <td> {{ $member->t7456b }} </td>
                    <td> {{ $member->t7456c }} </td>
       
          
        
                    </tr>
                    @endforeach
                    
                    
                     
                   
                
    </table>