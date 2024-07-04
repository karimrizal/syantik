<table class="table table-bordered">
    
<tr>
@foreach($tes as $a)
<td> Judul Tabel</td> 
<td>{{$a->tabel_id}}</td>
@endforeach
</tr>

<tr>
@foreach($tes as $a)
<td> Wilayah</td> 
<td>{{$a->wilayah}}</td>
@endforeach
</tr>

<tr>
@foreach($tes as $a)
<td> Tahun</td> 
<td>{{$a->tahun}}</td>
@endforeach
</tr>

<tr>
@foreach($tes as $a)
<td> Sumber</td> 
<td>{{$a->sumber}}</td>
@endforeach
</tr>

<tr>
<th> </th>
<th> </th>
<th> </th>
</tr>
<tr>
        <th ></th>
        @foreach ($koloms_id2 as $kolom)
            <th colspan ={{$span}}><center>{{ $kolom }} </center></th>
        @endforeach
		    </tr>

	<tr>
        <th>Wilayah</th>
        @foreach ($koloms as $kolom)
            <th>{{ substr($kolom,0,strrpos($kolom,'_')) }}
        @endforeach
    </tr>

    @foreach ($report as $kolom_id => $values)
        <tr>
            <td>{{ $report[$kolom_id][$kolom]['desas'] ?? '0' }}</td>
            @foreach ($koloms as $kolom)
                <td>{{ $report[$kolom_id][$kolom]['count'] ?? '0' }}</td>
            @endforeach
            
        </tr>
    @endforeach
</table>