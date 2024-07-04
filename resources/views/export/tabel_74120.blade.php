<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah BTS (Base Transceiver Station) Di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
           <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan ="2" > <center>Jumlah BTS</center></th>
                        </tr>
                        <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Yang Dibutuhkan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tersedia</center></th>

                    
                  
       
                      
                    </tr>
                    
             
          
                   @foreach ($tabel_74120 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74120a }} </td>
                    <td> {{ $member->t74120b }} </td>
            
              
              
               
              
                      
                      
                       
                      
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