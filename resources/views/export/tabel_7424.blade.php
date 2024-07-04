<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
DATA TARGET & REALISASI PAJAK  DAERAH PROVINSI SULAWESI TENGGARA, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
     <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>JENIS PAJAK DAERAH</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>TARGET 2021
(Rp.)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>REALISASI 2021 
(Rp.)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>PERSENTASE REALISASI TERHADAP TARGET (%)</center></th>
                       
                        </tr>
             
          
                   @foreach ($tabel_7424 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7424a }} </td>
                    <td> {{ $member->t7424b }} </td>
                    <td> {{ $member->t7424c }} </td>
               
     
            
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                  
                   
                
    </table>