<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Kursi yang Diduduki Perempuan di DPR Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara , {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Kursi yang Diduduki Perempuan di DPR</center></th>

                    
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7469 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7469a }} </td>
           
        
                    </tr>
                    @endforeach
                    
                
                
    </table>