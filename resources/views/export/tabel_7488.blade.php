<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah dan Rasio Posyandu Per 1.000 Balita Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
      <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Balita</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Posyandu</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Rasio Posyandu Per 1000 Balita</center></th>
     

                    
                  
       
                      
                    </tr>
          
                   @foreach ($tabel_7488 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7488a }} </td>
                    <td> {{ $member->t7488b }} </td>
                    <td> {{ $member->t7488c }} </td>
       
                    </tr>
                    @endforeach
                    
                  
    </table>