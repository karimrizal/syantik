<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Jumlah Kekerasan Terhadap Anak Laki-laki dan Perempuan Menurut Kabupaten/Kota di Provinsi Sulawesi Tenggara Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
  <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" rowspan="2" > <center>Kabupaten/Kota</center></th>
                    
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" colspan = "3" ><center>Kekerasan Terhadap Anak (Jiwa)</center></th>
        
                  
       
                      
                    </tr>
                     <tr>
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> Laki-Laki </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Perempuan </th>
						<th bgcolor="#5cb85c" style="vertical-align: middle;"> Total </th>
				
					
                      
                    </tr>
                  
    
                    
             
          
                   @foreach ($tabel_7412 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7412a }} </td>
                    <td> {{ $member->t7412b }} </td>
                    <td> {{ $member->t7412c }} </td>
        
            
              
               
              
                      
                      
                       
                      
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