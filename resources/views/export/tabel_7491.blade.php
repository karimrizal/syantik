<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah dan Rasio Dokter Per 1000 Penduduk Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Dokter Umum</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Dokter Spesialis</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Dokter Per 1000 Penduduk</center></th>
         
                    </tr>
          
                   @foreach ($tabel_7491 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7491a }} </td>
                    <td> {{ $member->t7491b }} </td>
                    <td> {{ $member->t7491c }} </td>
                    <td> {{ $member->t7491d }} </td>
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>