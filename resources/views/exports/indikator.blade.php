<table>
    @foreach ($data as $result)
    <tr>
        <th>Konsep Indikator</th>
        <td>{{ $result->ind_b1k3 }}</td>
    </tr>
    <tr>
        <th>Definisi Indikator</th>
        <td>{{ $result->ind_b1k4 }}</td>
    </tr>
    <tr>
        <th>Interpretasi</th>
        <td>{{ $result->ind_b1k5 }}</td>
    </tr>
    <tr>
        <th>Metode/Rumus Penghitungan</th>
        <td>{{ $result->ind_b1k6 }}</td>
    </tr>
    <tr>
        <th>Ukuran</th>
        <td>{{ $result->ind_b1k7 }}</td>
    </tr>
    <tr>
        <th>Satuan</th>
        <td>{{ $result->ind_b1k8 }}</td>
    </tr>
    <tr>
        <th>Klasifikasi Penyajian</th>
        <td>{{ $result->ind_b1k9 }}</td>
    </tr>
    <tr>
        <th>Apakah Merupakan Indikator Komposit</th>
        <td>{{ $result->ind_b1k10 }}</td>
    </tr>
    <tr>
        <th>Jika Merupakan Indikator Komposit, Publikasi Ketersediaan</th>
        <td>{{ $result->ind_b1k11 }}</td>
    </tr>
    <tr>
        <th>Jika Merupakan Indikator Komposit, Nama Indikator Pembangun</th>
        <td>{{ $result->ind_b1k12 }}</td>
    </tr>
    <tr>
        <th>Jika Bukan Merupakan Indikator Komposit, Kegiatan Penghasil</th>
        <td>{{ $result->ind_b1k13 }}</td>
    </tr>
    <tr>
        <th>Jika Bukan Merupakan Indikator Komposit, Kode Kegiatan</th>
        <td>{{ $result->ind_b1k14 }}</td>
    </tr>
    <tr>
        <th>Jika Bukan Merupakan Indikator Komposit, Nama Variabel Pembangun</th>
        <td>{{ $result->ind_b1k15 }}</td>
    </tr>
    <tr>
        <th>Level Estimasi</th>
        <td>{{ $result->ind_b1k16 }}</td>
    </tr>
    <tr>
        <th>Apakah Dapat Diakses Umum</th>
        <td>{{ $result->ind_b1k17 }}</td>
    </tr>
    @endforeach
</table>