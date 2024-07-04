<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Sekolah Menengah Atas (SMA) di bawah Dinas Pendidikan dan Kebudayaan Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara, 2021/2022 dan 2022/2023
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
             <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  ><center>{{$year}}</center></th>
        
                  
       
                      
                    </tr>
    
                    
             
          
                   @foreach ($tabel_742 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t742a }} </td>
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                     <tr>
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;">Jumlah</th>
                        @foreach ($sum_lk as $member)
                   
                   <td> {{ $member->sum_a }} </td>
             
           
                
                  
                       @endforeach
                    </tr>
                   
                
    </table>