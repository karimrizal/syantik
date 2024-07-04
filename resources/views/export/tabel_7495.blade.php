<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Cakupan Penemuan dan Penanganan  Penderita Penyakit TBC BTA Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penderita Baru TBC BTA (+) yang ditemukan dan diobati</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Perkiraan Penderita Baru TBC BTA (+)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Cakupan Penemuan dan Penanganan  Penderita Penyakit TBC BTA</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7495 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7495a }} </td>
                    <td> {{ $member->t7495b }} </td>
                    <td> {{ $member->t7495c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>