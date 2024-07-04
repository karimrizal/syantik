<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Keluarga Menurut Kabupaten/Kota dan Klasifikasi Keluarga di {{ $a->kab }}, {{$year}}
@else
Jumlah Keluarga Menurut Kecamatan dan Klasifikasi Keluarga di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
                 <tr>
                        
                         @if( (Auth::user()->idkab == '7400') )
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kabupaten/Kota</center></th>
                        @else
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Kecamatan</center></th>
                        @endif
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Pra Sejahtera</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="4"> <center>Keluarga Sejahtera</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2"> <center>Jumlah</center></th>
                   
       
                      
                    </tr>
                    
                    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">I</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">II</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">III</th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">III+</th>
                  
                        
                    </tr>
                   
          
                   @foreach ($tabel_466 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
             
                            
                   
                              <td>
                                <input type="text" >
                            </td>
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        
                         
                            
                        
                           <td>
                                <input type="text" >
                            </td>
                 
                       
                   
                      
                    </tr>
                
    </table>