<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Trayek yang Dilayani di Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
       <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Nama Trayek</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>{{$year}}</center></th>
                    
                    
                  
       
                      
                    </tr>
                    
             
          
                   @foreach ($tabel_74115 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74115a }} </td>
           
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
             
                     
                   
                
    </table>