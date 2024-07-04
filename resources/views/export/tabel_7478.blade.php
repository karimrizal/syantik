<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Lembaga Layanan Perempuan yang Mendapat Pelatihan Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara Tahun , {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
   
<tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Lembaga Layanan Perempuan yang Mendapat Pelatihan</center></th>

                    
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7478 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7478a }} </td>
       
                    </tr>
                    @endforeach
                    
                  
    </table>