<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Pencari Kerja Terdaftar Menurut Pendidikan Tertinggi yang Ditamatkan dan Jenis Kelamin di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Pendidikan Tertinggi yang Ditamatkan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Laki-Laki</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Perempuan</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"><center>Jumlah</center></th>
                      
                    </tr>
                   
          
                   @foreach ($tabel_3218 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t3218_lk }} </td>
                        <td> {{ $member->t3218_pr }} </td>
                        <td> {{ $member->t3218c }} </td>
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_lk }} </td>
                   <td> {{ $member->sum_pr }} </td>
                   <td> {{ $member->sum_lkpr }} </td>
        
                       @endforeach
                    </tr>
                    <tr>
                        <th>Keterangan:</th>
                    </tr>
                    <tr>
                        <td>0. Tidak/belum pernah sekolah</td>
      
                        
                    </tr>
                    <tr>
                          <td>1. Tidak/belum tamat SD</td>
     
                    </tr>
                    <tr>
                           <td>2. Sekolah Dasar</td>
      
                    </tr>
                    <tr>
                          <td>3. Sekolah Menengah Pertama</td>
       
                    </tr>
                    <tr>
                         <td>4. Sekolah Menengah Atas (Umum)</td>
       
                    </tr>
                    
                    <tr>
                         <td>5. Sekolah Menengah Atas (Kejuruan)</td>
      
                    </tr>
                    <tr>
                          <td>6. Diploma I/II/III/Akademi</td>
   
                    </tr>
                    <tr>
                             <td>7. Universitas</td>
                    </tr>
    </table>