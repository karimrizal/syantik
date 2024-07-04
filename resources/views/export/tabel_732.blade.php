<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Volume dan Nilai Perdagangan Antar Pulau Hasil Peternakan Menurut Jenis Komoditas di {{ $a->kab }}, {{$year}}
@endforeach	
</th>
<br>
    </tr>
           
               <tr>
                        
                       <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jenis Komoditas</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Satuan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Volume</center></th>
                        
                        <th bgcolor="#5cb85c"> <center>Nilai <br>(000 Rp)</center></th>

                    </tr>
                    
    
                    
             
          
                   @foreach ($tabel_732 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                         <th >{{ $member->satuan }}</th>
                         <td> {{ $member->t732a }} </td>
                        <td> {{ $member->t732b }} </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     
                   
                
    </table>