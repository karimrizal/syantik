<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah dan Rasio Daya Tampung Rumah Sakit Menurut Kabupaten/Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Daya Tampung Rumah Sakit Rujukan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penduduk </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Daya Tampung Rumah Sakit</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_74103 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74103a }} </td>
                    <td> {{ $member->t74103b }} </td>
                    <td> {{ $member->t74103c }} </td>
               
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>