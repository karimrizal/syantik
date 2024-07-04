<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase pelayanan kesehatan bagi orang yang terdampak dan berisiko pada situasi KLB (%) Menurut Kabupaten/Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah orang yang terdampak dan beresiko pada situasi KLB yang mendapat pelayanan Kesehatan sesuai standar </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah sasaran orang yang terdampak dan beresiko pada situasi KLB yang mendapat pelayanan Kesehatan sesuai standar </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase pelayanan kesehatan bagi orang yang terdampak dan berisiko pada situasi KLB (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_74106 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74106a }} </td>
                    <td> {{ $member->t74106b }} </td>
                    <td> {{ $member->t74106c }} </td>
               
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>