<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Desa Menurut Status Desa Berdasarkan Indeks Desa Membangun (IDM) Kabupaten Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                            <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Desa
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Sangat Tertinggal
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Tertinggal
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Berkembang
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Maju
(Desa)</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Status Desa Mandiri
(Desa)</center></th>
<th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Total</center></th>
                    
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7436 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7436a }} </td>
                    <td> {{ $member->t7436b }} </td>
                    <td> {{ $member->t7436c }} </td>
                    <td> {{ $member->t7436d }} </td>
                    <td> {{ $member->t7436e }} </td>
                    <td> {{ $member->t7436f }} </td>
                    <td> {{ $member->t7436g }} </td>
          
        
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