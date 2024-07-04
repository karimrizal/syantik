<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Media Yang Terdapat Di Pemerintah Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
           <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jenis Media</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Media Lokal</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Media Nasional</center></th>

                    
                  
       
                      
                    </tr>
                    
             
          
                   @foreach ($tabel_74121 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74121a }} </td>
                    <td> {{ $member->t74121b }} </td>
            
              
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                  
                   
                
    </table>