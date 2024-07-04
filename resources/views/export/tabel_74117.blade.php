<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Nilai SAKIP OPD di Provinsi Sulawesi Tenggara, 2018 - 2021
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
      <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Tahun</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Nilai SAKIP</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>A</center></th>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>AA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>B</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>BB</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>C</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>CC</center></th>
                    
                  
       
                      
                    </tr>
                    
             
          
                   @foreach ($tabel_74117 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74117a }} </td>
                     <td> {{ $member->t74117b }} </td>
                      <td> {{ $member->t74117c }} </td>
                       <td> {{ $member->t74117d }} </td>
                     <td> {{ $member->t74117e }} </td>
                      <td> {{ $member->t74117f }} </td>
           
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
             
                     
                   
                
    </table>