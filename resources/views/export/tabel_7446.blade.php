<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Pertumbuhan Nilai Ekspor Non Migas Provinsi Sulawesi Tenggara, 2018 -  2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center> Nilai Ekspor Non Migas
(Milyar US$)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pertumbuhan Nilai Ekspor Non Migas
(persen)</center></th>
                 
                  
       
                      
                    </tr>
          
                   @foreach ($tabel_7446 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7446a }} </td>
                    <td> {{ $member->t7446b }} </td>
             
          
        
                    </tr>
                    @endforeach
                    
                
                   
                
    </table>