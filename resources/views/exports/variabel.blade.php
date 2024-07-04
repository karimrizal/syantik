<table>
    @foreach ($data as $result)
    <tr>
        <th>Konsep Variabel</th>
        <td>{{ $result->var_b1k4 }}</td>
    </tr>
    <tr>
        <th>Definisi Variabel</th>
        <td>{{ $result->var_b1k5 }}</td>
    </tr>
    <tr>
        <th>Referensi Pemilihan</th>
        <td>{{ $result->var_b1k6 }}</td>
    </tr>
    <tr>
        <th>Referensi Waktu</th>
        <td>{{ $result->var_b1k7 }}</td>
    </tr>
    <tr>
        <th>Tipe Data</th>
        <td>{{ $result->var_b1k8 }}</td>
    </tr>
    <tr>
        <th>Klasifikasi Isian</th>
        <td>{{ $result->var_b1k9 }}</td>
    </tr>
    <tr>
        <th>Aturan Validasi</th>
        <td>{{ $result->var_b1k10 }}</td>
    </tr>
    <tr>
        <th>Kalimat Pertanyaan</th>
        <td>{{ $result->var_b1k11 }}</td>
    </tr>
    <tr>
        <th>Dapat Diakses Umum</th>
        <td>{{ $result->var_b1k12 }}</td>
    </tr>
    @endforeach
</table>