<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Angka Kematian Neonatal, Bayi, dan Balita per 1000 Kelahiran Hidup Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "3" > <center>Angka Kematian Balita per 1000 Kelahiran Hidup</center></th>
      
                       
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Neonatal (bayi 0-29 hari)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Bayi (0-1 tahun)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Balita (0-5 tahun)</center></th>
     

                    
                  
       
                      
                    </tr>
          
                   @foreach ($tabel_7486 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7486a }} </td>
                    <td> {{ $member->t7486b }} </td>
                    <td> {{ $member->t7486c }} </td>
       
                    </tr>
                    @endforeach
                    
                  
    </table>