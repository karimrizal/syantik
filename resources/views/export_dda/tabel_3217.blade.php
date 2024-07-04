<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if (Auth::user()->idkab == '7400')	
Pencari Kerja Terdaftar, Lowongan Kerja Terpenuhi, dan Penempatan/Pemenuhan Tenaga Kerja Menurut Kabupaten/Kota dan Jenis Kelamin di {{ $a->kab }}, {{$year}}
@else
Pencari Kerja Terdaftar, Lowongan Kerja Terpenuhi, dan Penempatan/Pemenuhan Tenaga Kerja Menurut Kecamatan dan Jenis Kelamin di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        @endif
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Pencari Kerja Terdaftar</center></th>
                       <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Lowongan Kerja Terpenuhi</center></th>
                      <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="3"><center>Penempatan/Pemenuhan Tenaga Kerja</center></th>
                    </tr>
                    
                    <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan</th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Jumlah</th>
                      
                    </tr>
                  
                   
          
                   @foreach ($tabel_3217 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <td> {{ $member->t3217a_lk }} </td>
                        <td> {{ $member->t3217a_pr }} </td>
                        <td> {{ $member->t3217a }} </td>
                        <td> {{ $member->t3217b_lk }} </td>
                        <td> {{ $member->t3217b_pr }} </td>
                        <td> {{ $member->t3217b }} </td>
                        <td> {{ $member->t3217c_lk }} </td>
                        <td> {{ $member->t3217c_pr }} </td>
                        <td> {{ $member->t3217c }} </td>
                        
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_lka }} </td>
                   <td> {{ $member->sum_pra }} </td>
                   <td> {{ $member->sum_lkpra }} </td>
                   <td> {{ $member->sum_lkb }} </td>
                   <td> {{ $member->sum_prb }} </td>
                   <td> {{ $member->sum_lkprb }} </td>
                   <td> {{ $member->sum_lkc }} </td>
                   <td> {{ $member->sum_prc }} </td>
                   <td> {{ $member->sum_lkprc }} </td>
    
                       @endforeach
                    </tr>
                    
    </table>