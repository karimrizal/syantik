<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
       @foreach($kab as $a)
         @if( (Auth::user()->idkab == '7400') )
Indeks Kualitas Lingkungan Hidup Provinsi Sulawesi Tenggara, Tahun {{$year}}
@else
Jumlah Kantor Pos Pembantu Menurut Kecamatan di {{ $a->kab }}, {{$year}}
@endif
@endforeach	
</th>
<br>
    </tr>
           
   <tr>
                        
                  
                        <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>INDEKS KUALITAS LINGKUNGAN HIDUP</center></th>
                         <th bgcolor="#5cb85c" style="vertical-align: middle;" > <center>Capaian Indeks Kualitas LH Sultra</center></th>
                     
                        </tr>
             
          
                   @foreach ($tabel_7419 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                    <td> {{ $member->t7419a }} </td>
        
     
            
              
               
              
                      
                      
                       
                      
                    </tr>
                    @endforeach
                    
                  
                     
                   
                
    </table>