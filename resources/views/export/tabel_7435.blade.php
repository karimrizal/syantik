<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
JUMLAH KUNJUNGAN RAWAT INAP PASIEN GIZI BURUK di RUMAH SAKIT BAHTERAMAS PROV. SULTRA Tahun 2016-2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>JENIS KELAMIN</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Total</center></th>
                    
                  
       
                      
                    </tr>
                    <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>L</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>P</center></th>
                  
                    
                  
       
                      
                    </tr>
             
          
                   @foreach ($tabel_7435 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7435a }} </td>
                    <td> {{ $member->t7435b }} </td>
                    <td> {{ $member->t7435c }} </td>
          
          
        
                    </tr>
                    @endforeach
                    
                 
                   
                
    </table>