<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
         @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') ) 
Produksi Ternak Menurut Kabupaten/Kota dan Jenis Ternak (kg) di {{ $a->kab }}, {{$year}}
@else
Produksi Ternak Menurut Kecamatan dan Jenis Ternak (kg) di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sapi Perah</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Sapi Potong</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kerbau</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kuda</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Kambing</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Domba</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Babi</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_553 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t553a }} </td>
                        <td> {{ $member->t553b }} </td>
                        <td> {{ $member->t553c }} </td>
                        <td> {{ $member->t553d }} </td>
                        <td> {{ $member->t553e }} </td>
                        <td> {{ $member->t553f }} </td>
                        <td> {{ $member->t553g }} </td>
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
                  
                       @endforeach
                    </tr>
                   
                
    </table>