<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Cakupan Pelayanan Kesehatan Dasar Masyarakat Miskin (%) Menurut Kabupaten/Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Kunjungan Pasien Miskin di Sarana Kesehatan Strata 1</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penduduk Miskin </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Cakupan Pelayanan Kesehatan Dasar Masyarakat Miskin (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_74102 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74102a }} </td>
                    <td> {{ $member->t74102b }} </td>
                    <td> {{ $member->t74102c }} </td>
               
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>