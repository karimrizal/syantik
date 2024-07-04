<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase SILPA terhadap APBD, 2017-2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>SILPA
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total APBD
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase SILPA terhadap APBD 
(%)</center></th>

                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7441 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7441a }} </td>
                    <td> {{ $member->t7441b }} </td>
                    <td> {{ $member->t7441c }} </td>
                  
          
        
                    </tr>
                    @endforeach
                    
                   
                   
                
    </table>