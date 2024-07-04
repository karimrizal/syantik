<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Kebutuhan Konsumsi Pangan Menurut Angka Kecukupan Gizi (AKG) di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kelompok Pangan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Wilayah Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Wilayah Desa</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Total Wilayah</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Energi (KKal/Hari)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Protein (Gram/Hari)</center></th>
        
                    </tr>
             
          
                   @foreach ($tabel_7447 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7447a }} </td>
                    <td> {{ $member->t7447b }} </td>
                    <td> {{ $member->t7447c }} </td>
                    <td> {{ $member->t7447d }} </td>
                    <td> {{ $member->t7447e }} </td>
                    <td> {{ $member->t7447f }} </td>
          
        
                    </tr>
                    @endforeach
                    
                 
                   
                
    </table>