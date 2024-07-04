<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Produk Pangan Segar Asal Tumbuhan (PSAT) yang Teregistrasi di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Komoditi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kelas Mutu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Nama Pelaku Usaha/Kelompok Tani</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Alamat</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jenis Registrasi</center></th>
                 
        
                    </tr>
             
          
                   @foreach ($tabel_7451 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7451a }} </td>
                    <td> {{ $member->t7451b }} </td>
                    <td> {{ $member->t7451c }} </td>
                    <td> {{ $member->t7451d }} </td>
          
        
                    </tr>
                    @endforeach
                    
                
                
    </table>