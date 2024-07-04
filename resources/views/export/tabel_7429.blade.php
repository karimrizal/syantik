<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Penyelenggaraan penanggulangan bencana pada situasi tidak terjadi bencana Menurut Kabupaten/ Kota di Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                            
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Peringatan penanggulangan bencana</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pengurangan resiko bencana</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pencegahan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pendidikan dan pelatihan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Mitigasi bencana</center></th>


                    </tr>
             
          
                   @foreach ($tabel_7429 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7429a }} </td>
                    <td> {{ $member->t7429b }} </td>
                    <td> {{ $member->t7429c }} </td>
                    <td> {{ $member->t7429d }} </td>
                    <td> {{ $member->t7429e }} </td>
    
               
     
            
              
               
              
                      
                      
                       
                      
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