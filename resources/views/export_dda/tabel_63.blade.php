<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
        @if( (Auth::user()->idkab == '7400') ) 
Jumlah Pelanggan dan Air yang Disalurkan Menurut Kabupaten/Kota di {{ $a->kab }}, {{$year}}
@else
Jumlah Pelanggan dan Air yang Disalurkan Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                        @if( (Auth::user()->idkab == '7400') ) 
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Pelanggan</center></th>
                       
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Air Disalurka</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Nilai</center></th>
                        
                     
                      
                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_63 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
     
                   
                        <td> {{ $member->t63a }} </td>
                        <td> {{ $member->t63b }} </td>
                        <td> {{ $member->t63c }} </td>
                      
                      
                       
                      
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