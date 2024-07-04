<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Sampel Pangan Segar Asal Tumbuhan (PSAT) yang diuji di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Lokasi Pasar</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Komoditi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Asal Komoditi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Hasil Pengujian Positif/Negatif</center></th>
                 
        
                    </tr>
          
                   @foreach ($tabel_7450 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7450a }} </td>
                    <td> {{ $member->t7450b }} </td>
                    <td> {{ $member->t7450c }} </td>
                    <td> {{ $member->t7450d }} </td>
             
          
        
                    </tr>
                    @endforeach
                    
                 
                     
                   
                
    </table>