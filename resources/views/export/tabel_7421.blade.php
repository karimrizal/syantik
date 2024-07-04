<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Luas Rehabilitasi Hutan Di Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Dinas Kehutanan Sultra (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Pihak Ke 3 (Swasta) (Ha)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"  > <center>Kementrian Kehutanan (BPDASHL Sampara) (Ha)</center></th>
                        </tr>
             
          
                   @foreach ($tabel_7421 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7421a }} </td>
                    <td> {{ $member->t7421b }} </td>
                    <td> {{ $member->t7421c }} </td>
               
     
            
              
               
              
                      
                      
                       
                      
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