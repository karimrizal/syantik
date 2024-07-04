<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Perbandingan antara belanja langsung dengan belanja tidak langsung, 2017-2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Belanja Langsung 
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Belanja Tidak Langsung 
(juta rupiah)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total APBD
(juta rupiah)</center></th>
<th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perbandingan antara belanja langsung dengan belanja tidak langsung</center></th>
                
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7440 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7440a }} </td>
                    <td> {{ $member->t7440b }} </td>
                    <td> {{ $member->t7440c }} </td>
                    <td> {{ $member->t7440d }} </td>
          
        
                    </tr>
                    @endforeach
                    
                   
                   
                
    </table>