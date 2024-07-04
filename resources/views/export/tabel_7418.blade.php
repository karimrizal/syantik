<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Lembaga/ Rumah Ibadah yang Mengajukan Permohonan Dana Hibah menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "4" > <center>Jenis Lembaga/ Rumah Ibadah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Total</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Masjid</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Gereja</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pura</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Organisasi dll</center></th>
       
                    
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7418 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7418a }} </td>
                    <td> {{ $member->t7418b }} </td>
                    <td> {{ $member->t7418c }} </td>
                    <td> {{ $member->t7418d }} </td>
                    <td> {{ $member->t7418e }} </td>
     
            
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
                   <td> {{ $member->sum_e }} </td>
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>