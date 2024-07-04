<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Produk Hukum Daerah yang di Hasilkan Biro Hukum Sekretariat Daerah menurut Jenis Hukum Daerah yang di Hasilkan di Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jenis Produk Hukum Daerah yang dihasilkan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Target
 (Dokumen)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Realisasi
 (Dokumen)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Capaian
 (Persen)</center></th>
                
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7439 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7439a }} </td>
                    <td> {{ $member->t7439b }} </td>
                    <td> {{ $member->t7439c }} </td>

          
        
                    </tr>
                    @endforeach
                    
                 
                   
                
    </table>