<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah kecamatan yang rentan terhadap kerawanan pangan (perioritas 1,2,3,4,5, dan 6) di Provinsi Sulawesi Tenggara menurut Kabupaten/Kota, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
 <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "6" > <center>Perioritas</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan = "2" > <center>Total</center></th>
                        </tr>
                        
                        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>1</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>2</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>3</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>4</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>5</center></th>
                  <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>6</center></th>
                    
                  
       
                      
                    </tr>
                  
    
                    
             
          
                   @foreach ($tabel_7413 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7413a }} </td>
                    <td> {{ $member->t7413b }} </td>
                    <td> {{ $member->t7413c }} </td>
                    <td> {{ $member->t7413d }} </td>
                    <td> {{ $member->t7413e }} </td>
                    <td> {{ $member->t7413f }} </td>
                    <td> {{ $member->t7413g }} </td>
        
            
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
                   <td> {{ $member->sum_e }} </td>
                   <td> {{ $member->sum_f }} </td>
                   <td> {{ $member->sum_g }} </td>
      
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>