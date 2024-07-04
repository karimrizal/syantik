<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Kejadian Bencana Alam Menurut Kabupaten/ Kota di Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                            
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Gempa Bumi</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tsunami</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Banjir</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tanah Longsor</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kekeringan</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kebakaran</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Puting Beliung</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Gelombang Pasang</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total</center></th>

                    </tr>
             
          
                   @foreach ($tabel_7423 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7423a }} </td>
                    <td> {{ $member->t7423b }} </td>
                    <td> {{ $member->t7423c }} </td>
                    <td> {{ $member->t7423d }} </td>
                    <td> {{ $member->t7423e }} </td>
                    <td> {{ $member->t7423f }} </td>
                    <td> {{ $member->t7423g }} </td>
                    <td> {{ $member->t7423h }} </td>
                    <td> {{ $member->t7423i }} </td>
               
     
            
              
               
              
                      
                      
                       
                      
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
                   <td> {{ $member->sum_f }} </td>
                   <td> {{ $member->sum_g }} </td>
                   <td> {{ $member->sum_h }} </td>
                   <td> {{ $member->sum_i }} </td>
        
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>