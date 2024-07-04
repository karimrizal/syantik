<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah dan Persentase RS Rujukan Provinsi yang Terakreditasi Menurut Kabupaten/Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah RS Rujukan Terakreditasi</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah RS Rujukan Milik Pemerintah </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase RS Rujukan Provinsi yang Terakreditasi</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_74104 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74104a }} </td>
                    <td> {{ $member->t74104b }} </td>
                    <td> {{ $member->t74104c }} </td>
               
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>