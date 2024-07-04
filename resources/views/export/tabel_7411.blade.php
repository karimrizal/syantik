<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Persentase Tenaga Kerja yang mendapatkan pelatihan berbasis kompetensi di Provinsi Sulawesi Tenggara Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Kabupaten/Kota</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Pendaftar Pelatihan Berbasis Kompetensi (orang)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Tenaga Kerja yang dilatih (orang)</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Persentase tenaga kerja yang mendapatkan pelatihan berbasis kompetensi (persen)</center></th>
                    
                  
       
                      
                    </tr>
                  
    
                    
             
          
                   @foreach ($tabel_7411 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7411a }} </td>
                    <td> {{ $member->t7411b }} </td>
                    <td> {{ $member->t7411c }} </td>
        
            
              
               
              
                      
                      
                       
                      
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