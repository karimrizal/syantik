<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
JUMLAH ANGGOTA PERPUSTAKAAN PER BULAN MENURUT PROFESI DAN JENIS KELAMIN di Provinsi Sulawesi Tenggara, {{$year}}
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
             
          
                   @foreach ($tabel_7467 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7467a }} </td>
                    <td> {{ $member->t7467b }} </td>
                    <td> {{ $member->t7467c }} </td>
                    <td> {{ $member->t7467d }} </td>
                    <td> {{ $member->t7467e }} </td>
                    <td> {{ $member->t7467f }} </td>
                    <td> {{ $member->t7467g }} </td>
                    <td> {{ $member->t7467h }} </td>
       
          
        
                    </tr>
                    @endforeach
                    
                  
                
    </table>