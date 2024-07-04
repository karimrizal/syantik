<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Proporsi  Kasus Tuberkulosis yang Diobati dan Sembuh dalam Program DOTS (%) Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Pasien Tuberkulosis Paru BTA yang Sembuh dalam Program DOTS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Pasien Tuberkulosis Paru BTA yang Diobati dalam Program DOTS </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Proporsi  Kasus Tuberkulosis yang Diobati dan Sembuh dalam Program DOTS (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7498 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7498a }} </td>
                    <td> {{ $member->t7498b }} </td>
                    <td> {{ $member->t7498c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>