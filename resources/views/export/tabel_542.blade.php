<table style="table-layout: fixed; width: 100%">
    <tr>
        <th style="font-weight: 100; color: #006fcc; word-wrap: break-word" >
            
        
        @foreach($kab as $a)				
Produksi Kayu Hutan Menurut Jenis Produksi (m3) di {{ $a->kab }}, 2018 - 2021
@endforeach	
</th>
<br>
    </tr>
           
                <tr>
                        
                        <th rowspan ="2" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Tahun</center></th>
                        <th colspan = "4" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Bulat</center></th>
                        <th colspan = "5" bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Olahan</center></th>
           
                
                      
                    </tr>
                    
                    <tr>
                        
                        
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HA</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>IUPHHK-HT</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Perum Perhutani</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Jumlah</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Gergajian</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Kayu Lapis</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Bubur Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Serpih Kayu</center></th>
                        <th bgcolor="#5cb85c" style="vertical-align: middle;"> <center>Veneer</center></th>
                
                      
                    </tr>
                   
          
                   @foreach ($tabel_542 as $member)
                    <tr>
                       
                        <th >{{ $member->kec }}</th>
                        <th >{{ $member->t542a }}</th>
                        <th >{{ $member->t542b }}</th>
                        <th >{{ $member->t542c }}</th>
                        <th >{{ $member->t542d }}</th>
                        <th >{{ $member->t542e }}</th>
                        <th >{{ $member->t542f }}</th>
                        <th >{{ $member->t542g }}</th>
                        <th >{{ $member->t542h }}</th>
                        <th >{{ $member->t542i }}</th>
             
                      
                       
                      
                    </tr>
                    @endforeach
                   
                
    </table>