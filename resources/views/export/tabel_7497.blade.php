<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Proporsi Jumlah Kasus Tuberkulosis yang Terdeteksi dalam Program DOTS (%) Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Pasien Tuberkulosis BTA yang mendapatkan pengobatan melalui DOTS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Perkiraan Pasien Baru TB Paru BTA </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Proporsi Jumlah Kasus Tuberkulosis yang Terdeteksi dalam Program DOTS (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7497 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7497a }} </td>
                    <td> {{ $member->t7497b }} </td>
                    <td> {{ $member->t7497c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>