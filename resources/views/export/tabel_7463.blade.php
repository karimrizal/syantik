<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Indikator Kinerja Kunci Berdasarkan Permendagri 18, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Indikator Kinerja Kunci</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Satuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Nilai</center></th>
                  
                  
                    </tr>
             
          
                   @foreach ($tabel_7463 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7463a }} </td>
                    <td> {{ $member->t7463b }} </td>
        
          
        
                    </tr>
                    @endforeach
                    
                   
                   
                
    </table>