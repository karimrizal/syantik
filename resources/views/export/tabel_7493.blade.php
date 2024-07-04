<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Cakupan Komplikasi Kebinanan  Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Ibu dengan Komplikasi Kebidanan (Jiwa)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penanganan Komplikasi Kebidanan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Cakupan Komplikasi Kebidanan yang Ditangani (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7493 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7493a }} </td>
                    <td> {{ $member->t7493b }} </td>
                    <td> {{ $member->t7493c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>