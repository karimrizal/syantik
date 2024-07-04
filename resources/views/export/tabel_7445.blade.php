<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Tindak Lanjut Temuan APIP di Provinsi Sulawesi Tenggara, 2018 - 2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Temuan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tindaklanjut</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Tindaklanjut</center></th>

                  
       
                      
                    </tr>
          
                   @foreach ($tabel_7445 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7445a }} </td>
                    <td> {{ $member->t7445b }} </td>
                    <td> {{ $member->t7445c }} </td>
          
        
                    </tr>
                    @endforeach
                    
                
                   
                
    </table>