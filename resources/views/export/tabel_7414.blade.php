<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
JUMLAH PENGUNJUNG PERPUSTAKAAN PER BULAN MENURUT PROFESI DAN JENIS KELAMIN, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Bulan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Pelajar/Mahasiswa</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Pegawai</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Dosen</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "2" > <center>Umum</center></th>
                       
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>P</center></th>

                    
                  
       
                      
                    </tr>
                  
    
                    
             
          
                   @foreach ($tabel_7414 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7414a }} </td>
                    <td> {{ $member->t7414b }} </td>
                    <td> {{ $member->t7414c }} </td>
                    <td> {{ $member->t7414d }} </td>
                    <td> {{ $member->t7414e }} </td>
                    <td> {{ $member->t7414f }} </td>
                    <td> {{ $member->t7414g }} </td>
                    <td> {{ $member->t7414h }} </td>
        
            
              
               
              
                      
                      
                       
                      
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
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>