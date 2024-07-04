<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Penderita dan Prevalensi HIV/AIDS (%) Menurut Kelompok Umur dan Jenis Kelamin di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>

                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3" > <center>Jumlah Penderita HIV/AIDS</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3" > <center>Prevalensi HIV/AIDS (%) dari Total Penduduk</center></th>
                    </tr>
                    <tr>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki + Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perempuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-Laki + Perempuan</center></th>
              
         
                    </tr>
          
                   @foreach ($tabel_74101 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74101a }} </td>
                    <td> {{ $member->t74101b }} </td>
                    <td> {{ $member->t74101c }} </td>
                    <td> {{ $member->t74101d }} </td>
                    <td> {{ $member->t74101e }} </td>
                    <td> {{ $member->t74101f }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>