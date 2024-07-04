<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Perempuan dan Anak Korban Kekerasan yang Mendapatkan Layanan Reintegrasi Sosial Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara , {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
      <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Perempuan dan Anak Korban Kekerasan yang Mendapatkan Layanan Reintegrasi Sosial</center></th>

                      
                    </tr>
             
          
                   @foreach ($tabel_7473 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7473a }} </td>
       
                    </tr>
                    @endforeach
                    
                  
    </table>