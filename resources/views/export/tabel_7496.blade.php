<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Tingkat Kematian Tuberkulosis (per 100.000 penduduk) Menurut Kabupaten Kota di Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                  
      
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Penduduk</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Pasien TB yang Meninggal</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tingkat Kematian Tuberkulosis per 100.000 penduduk</center></th>
                   
         
                    </tr>
          
                   @foreach ($tabel_7496 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7496a }} </td>
                    <td> {{ $member->t7496b }} </td>
                    <td> {{ $member->t7496c }} </td>
           
                   
       
                    </tr>
                    @endforeach
                    
                  
    </table>