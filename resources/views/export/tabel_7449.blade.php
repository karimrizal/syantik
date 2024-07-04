<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Ketersediaan Pangan Utama di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Komoditas Pangan Utama </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Ketersediaan (Ton) </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kebutuhan (Ton) </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Surplus/Defisit </center></th>
                     
                        </tr>
          
                   @foreach ($tabel_7449 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7449a }} </td>
                    <td> {{ $member->t7449b }} </td>
                    <td> {{ $member->t7449c }} </td>
             
          
        
                    </tr>
                    @endforeach
                    
                 
                     
                   
                
    </table>