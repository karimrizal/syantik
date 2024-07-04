<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Bayi lahir dan Bayi yang memiliki akta kelahiran Provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
    <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan="2" > <center>Bayi Lahir</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2" > <center>Jumlah bayi lahir (L+P)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan ="2" > <center>Jumlah bayi lahir yang memiliki Akta kelahiran</center></th>
                
             
                        </tr>
                        
                        <tr>
                           <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Laki-laki (L)</center></th> 
                           <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Perempuan (P)</center></th> 
                            
                        </tr>
             
          
                   @foreach ($tabel_7455 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7455a }} </td>
                    <td> {{ $member->t7455b }} </td>
                    <td> {{ $member->t7455c }} </td>
                    <td> {{ $member->t7455d }} </td>
            
          
        
                    </tr>
                    @endforeach
                    
                    <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
                   <td> {{ $member->sum_b }} </td>
                   <td> {{ $member->sum_c }} </td>
                   <td> {{ $member->sum_d }} </td>
             
         
       
                  
        
          
             
                   
           
                
                  
                       @endforeach
                    </tr>
                     
                   
                
    </table>