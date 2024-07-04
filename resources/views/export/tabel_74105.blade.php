<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase pelayanan kesehatan bagi penduduk terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana (%) Menurut Kabupaten/Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah penduduk terdampak krisis kesehatan akibat
bencana dan/atau berpotensi bencana yang 
mendapatkan pelayanan kesehatan </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Sasaran Penduduk terdampak krisis kesehatan akibat
bencana dan/atau berpotensi bencana </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase pelayanan kesehatan bagi penduduk terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana (%)</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_74105 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74105a }} </td>
                    <td> {{ $member->t74105b }} </td>
                    <td> {{ $member->t74105c }} </td>
               
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>