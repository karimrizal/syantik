<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Lahan Kritis Yang Direhabilitasi Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Luas Rehabilitasi (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>luas Lahan Kritis (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase</center></th>

                    </tr>
                  
                    
             
          
                   @foreach ($tabel_74112 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74112a }} </td>
                    <td> {{ $member->t74112b }} </td>
                    <td> {{ $member->t74112c }} </td>
           
           
              
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
           
        
      
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>