<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Realisasi Investasi Penanaman Modal Asing (PMA) Berdasarkan Negara Asal, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Negara Asal</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Investasi (Triliun Rupiah)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Proyek</center></th>
                  
                  
                    </tr>
             
          
                   @foreach ($tabel_7459 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7459a }} </td>
                    <td> {{ $member->t7459b }} </td>
        
          
        
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
      
         
       
                  
        
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>