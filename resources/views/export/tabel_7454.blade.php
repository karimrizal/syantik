<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
HASIL PENCATATAN KEPENDUDUKAN DAN PENCATATAN PENCATATN SIPIL PROV. SULTRA, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>KABUPATEN/KOTA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PENDUDUK USIA > 17 YANG BER-KTP</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PENDUDUK USIA > 17 ATAU SUDAH MENIKAH</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH BAYI BERAKTA KELAHIRAN</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH BAYI</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH PASANGAN  NIKAH YANG BERAKTA NIKAH </center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH KESELURUHAN PASANGAN NIKAH</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>JUMLAH KTP BER-NIK YANG DITERBITKAN</center></th>
             
                        </tr>
             
          
                   @foreach ($tabel_7454 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7454a }} </td>
                    <td> {{ $member->t7454b }} </td>
                    <td> {{ $member->t7454c }} </td>
                    <td> {{ $member->t7454d }} </td>
                    <td> {{ $member->t7454e }} </td>
                    <td> {{ $member->t7454f }} </td>
                    <td> {{ $member->t7454g }} </td>
         
          
        
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