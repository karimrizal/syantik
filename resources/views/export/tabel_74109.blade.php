<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Data Lahan Kritis yang Direhabilitasi di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
         <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>LUAS LAHAN KRITIS (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>LUAS LAHAN KRITIS YANG DIREHABILITASI (Ha)</center></th>

                    </tr>
                    
             
          
                   @foreach ($tabel_74109 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74109a }} </td>
                    <td> {{ $member->t74109b }} </td>
           
           
              
              
               
              
                      
                      
                       
                      
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