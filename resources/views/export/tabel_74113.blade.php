<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Cakupan Pengembangan dan Pemberdayaan Kelompok Informasi Masyarakat di Tingkat Kecamatan Menurut kabupaten/kota di provinsi Sulawesi Tenggara, {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
        <tr>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah KIM</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Jumlah Kecamatan</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase Cakupan KIM (%)</center></th>

                    </tr>
                  
                    
             
          
                   @foreach ($tabel_74113 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t74113a }} </td>
                    <td> {{ $member->t74113b }} </td>
                    <td> {{ $member->t74113c }} </td>
           
           
              
              
               
              
                      
                      
                       
                      
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