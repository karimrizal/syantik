<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Cakupan Pertolongan Persalinan oleh Tenaga Kesehatan yang Memiliki Kompetensi Kebidanan Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Sasaran Ibu Bersalin (Jiwa)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Ibu Bersalin yang Ditolong oleh Tenaga Kesehatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Cakupan Pertolongan Persalinan oleh Tenaga Kesehatan yang Memiliki Kompetensi Kebidanan</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7494 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7494a }} </td>
                    <td> {{ $member->t7494b }} </td>
                    <td> {{ $member->t7494c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>