<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Angka Kematian Bayi (AKB) per 1000 Kelahiran Hidup Menurut Kabupaten Kota di Sulawesi Tenggara, 2019 - 2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
       <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "3" > <center>Angka Kematian Bayi (AKB) per 1000 Kelahiran Hidup</center></th>
      
                       
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>2019</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>2020</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>2021</center></th>
     

                    
                  
       
                      
                    </tr>
          
                   @foreach ($tabel_7483 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7483a }} </td>
                    <td> {{ $member->t7483b }} </td>
                    <td> {{ $member->t7483c }} </td>
       
                    </tr>
                    @endforeach
                    
                  
    </table>