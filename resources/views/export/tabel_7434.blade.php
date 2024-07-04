<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Desa yang Teraliri Listrik Menurut Jenis Sumber Listrik dan Kabupaten/Kota di Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                            
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="3" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="4" > <center>Desa/Kelurahan Teraliri Listrik</center></th>
                    </tr>
                  
                  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>PLN</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>Non PLN</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;"rowspan="2" > <center>Jumlah</center></th>
                      
                  </tr>
                  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>LTSHE</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Lainnya</center></th>
               
                      
                  </tr>
             
          
                   @foreach ($tabel_7434 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7434a }} </td>
                    <td> {{ $member->t7434b }} </td>
                    <td> {{ $member->t7434c }} </td>
                    <td> {{ $member->t7434d }} </td>
          
        
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
         
       
                  
        
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>