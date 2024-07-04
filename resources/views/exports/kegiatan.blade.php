<table>
    @foreach ($data as $result)
    <tr>
        <th>Judul Kegiatan</th>
        <td>{{ $result->b0r1 }}</td>
    </tr>
    <tr>
        <th>Tahun Kegiatan</th>
        <td>{{ $result->b0r2 }}</td>
    </tr>
    <tr>
        <th>Kode Kegiatan</th>
        <td>{{ $result->b0r3 }}</td>
    </tr>
    <tr>
        <th>Cara Pengumpulan Data</th>
        <td>{{ $result->b0r4 }}</td>
    </tr>
    <tr>
        <th>Sektor Kegiatan</th>
        <td>{{ $result->b0r5 }}</td>
    </tr>
    <tr>
        <th>Apakah Mendapatkan Rekomendasi dari BPS</th>
        <td>{{ $result->b0r6 }}</td>
    </tr>
    <tr>
        <th>Instansi Penyelenggara</th>
        <td>{{ $result->b1r1 }}</td>
    </tr>
    <tr>
        <th>Telepon</th>
        <td>{{ $result->b1r2a }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $result->b1r2b }}</td>
    </tr>
    <tr>
        <th>Faksimile</th>
        <td>{{ $result->b1r2c }}</td>
    </tr>
    <tr>
        <th>Penanggung Jawab Eselon 1</th>
        <td>{{ $result->b2r1a }}</td>
    </tr>
    <tr>
        <th>Penanggung Jawab Eselon 2</th>
        <td>{{ $result->b2r1b }}</td>
    </tr>
    <tr>
        <th>Penanggung Jawab Eselon 3</th>
        <td>{{ $result->b2r2a }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $result->b2r2b }}</td>
    </tr>
    <tr>
        <th>Telepon</th>
        <td>{{ $result->b2r2c }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $result->b2r2d }}</td>
    </tr>
    <tr>
        <th>Faksimile</th>
        <td>{{ $result->b2r2e }}</td>
    </tr>
    <tr>
        <th>Latar Belakang Kegiatan</th>
        <td>{{ $result->b3r1 }}</td>
    </tr>
    <tr>
        <th>Tujuan Kegiatan</th>
        <td>{{ $result->b3r2 }}</td>
    </tr>
    <tr>
        <th>Perencanaan Kegiatan (tanggal awal)</th>
        <td>{{ $result->b3r3a_awal }}</td>
    </tr>
    <tr>
        <th>Perencanaan Kegiatan (tanggal awal)</th>
        <td>{{ $result->b3r3a_akhir }}</td>
    </tr>
    <tr>
        <th>Desain (tanggal awal)</th>
        <td>{{ $result->b3r3b_awal }}</td>
    </tr>
    <tr>
        <th>Desain (tanggal akhir)</th>
        <td>{{ $result->b3r3b_akhir }}</td>
    </tr>
    <tr>
        <th>Pengumpulan Data (tanggal awal)</th>
        <td>{{ $result->b3r3c_awal }}</td>
    </tr>
    <tr>
        <th>Pengumpulan Data (tanggal akhir)</th>
        <td>{{ $result->b3r3c_akhir }}</td>
    </tr>
    <tr>
        <th>Pengolahan Data (tanggal awal)</th>
        <td>{{ $result->b3r3d_awal }}</td>
    </tr>
    <tr>
        <th>Pengolahan Data (tanggal akhir)</th>
        <td>{{ $result->b3r3d_akhir }}</td>
    </tr>
    <tr>
        <th>Analisis (tanggal awal)</th>
        <td>{{ $result->b3r3e_awal }}</td>
    </tr>
    <tr>
        <th>Analisis (tanggal akhir)</th>
        <td>{{ $result->b3r3e_akhir }}</td>
    </tr>
    <tr>
        <th>Diseminasi Hasil (tanggal awal)</th>
        <td>{{ $result->b3r3f_awal }}</td>
    </tr>
    <tr>
        <th>Diseminasi Hasil (tanggal akhir)</th>
        <td>{{ $result->b3r3f_akhir }}</td>
    </tr>
    <tr>
        <th>Evaluasi (tanggal awal)</th>
        <td>{{ $result->b3r3g_awal }}</td>
    </tr>
    <tr>
        <th>Evaluasi (tanggal akhir)</th>
        <td>{{ $result->b3r3g_akhir }}</td>
    </tr>
    <tr>
        <th>Kegiatan Ini Dilakukan</th>
        <td>{{ $result->b4r1 }}</td>
    </tr>
    <tr>
        <th>Jika "berulang", Frekuensi Penyelenggaraan</th>
        <td>{{ $result->b4r2 }}</td>
    </tr>
    <tr>
        <th>Tipe Pengumpulan Data</th>
        <td>{{ $result->b4r3 }}</td>
    </tr>
    <tr>
        <th>Cakupan Wilayah Pengumpulan Data</th>
        <td>{{ $result->b4r4 }}</td>
    </tr>
    <tr>
        <th>Jika "sebagian wilayah Indonesia", Wilayah Kegiatan</th>
        <td>{{ $result->b4r5 }}</td>
    </tr>
    <tr>
        <th>Metode Pengumpulan Data</th>
        <td>{{ $result->b4r6 }}</td>
    </tr>
    <tr>
        <th>Sarana Pengumpulan Data</th>
        <td>{{ $result->b4r7 }}</td>
    </tr>
    <tr>
        <th>Unit Pengumpulan Data</th>
        <td>{{ $result->b4r8 }}</td>
    </tr>
    <tr>
        <th>Jenis Rancangan Sampel</th>
        <td>{{ $result->b5r1 }}</td>
    </tr>
    <tr>
        <th>Metode Pemilihan Sampel Tahap Terakhir</th>
        <td>{{ $result->b5r2 }}</td>
    </tr>
    <tr>
        <th>Jika "Sampel Probabilitas", Metode yang Digunakan</th>
        <td>{{ $result->b5r3a }}</td>
    </tr>
    <tr>
        <th>Jika "Sampel Nonprobabilitas", Metode yang Digunakan</th>
        <td>{{ $result->b5r3b }}</td>
    </tr>
    <tr>
        <th>Kerangka Sampel Tahap Terakhir</th>
        <td>{{ $result->b5r4 }}</td>
    </tr>
    <tr>
        <th>Fraksi Sampel Keseluruhan</th>
        <td>{{ $result->b5r5 }}</td>
    </tr>
    <tr>
        <th>Nilai Perkiraan Sampling Error Variabel Utama</th>
        <td>{{ $result->b5r6 }}</td>
    </tr>
    <tr>
        <th>Unit Sampel</th>
        <td>{{ $result->b5r7 }}</td>
    </tr>
    <tr>
        <th>Unit Observasi</th>
        <td>{{ $result->b5r8 }}</td>
    </tr>
    <tr>
        <th>Apakah Melakukan Uji Coba (Pilot Survey)</th>
        <td>{{ $result->b6r1 }}</td>
    </tr>
    <tr>
        <th>Metode Pemeriksaan Kualitas Pengumpulan Data</th>
        <td>{{ $result->b6r2 }}</td>
    </tr>
    <tr>
        <th>Apakah melakukan Penyesuaian Nonrespon</th>
        <td>{{ $result->b6r3 }}</td>
    </tr>
    <tr>
        <th>Petugas Pengumpulan Data</th>
        <td>{{ $result->b6r4 }}</td>
    </tr>
    <tr>
        <th>Persyaratan Pendidikan Terendah Petugas Pengumpulan Data</th>
        <td>{{ $result->b6r5 }}</td>
    </tr>
    <tr>
        <th>Jumlah Supervisor/Penyelia/Pengawas (orang)</th>
        <td>{{ $result->b6r6a }}</td>
    </tr>
    <tr>
        <th>Jumlah Pengumpul Data/Enumerator (orang)</th>
        <td>{{ $result->b6r6b }}</td>
    </tr>
    <tr>
        <th>Apakah Melakukan Pelatihan Petugas</th>
        <td>{{ $result->b6r7 }}</td>
    </tr>
    <tr>
        <th>Penyuntingan (Editing)</th>
        <td>{{ $result->b7r1a }}</td>
    </tr>
    <tr>
        <th>Penyandian (Coding)</th>
        <td>{{ $result->b7r1b }}</td>
    </tr>
    <tr>
        <th>Data Entry</th>
        <td>{{ $result->b7r1c }}</td>
    </tr>
    <tr>
        <th>Penyahihan (Validasi)</th>
        <td>{{ $result->b7r1d }}</td>
    </tr>
    <tr>
        <th>Metode Analisis</th>
        <td>{{ $result->b7r2 }}</td>
    </tr>
    <tr>
        <th>Unit Analisis</th>
        <td>{{ $result->b7r3 }}</td>
    </tr>
    <tr>
        <th>Tingkat Penyajian Hasil Analisis</th>
        <td>{{ $result->b7r4 }}</td>
    </tr>
    <tr>
        <th>Produk Kegiatan Tersedia Tercetak</th>
        <td>{{ $result->b8r1a }}</td>
    </tr>
    <tr>
        <th>Produk Kegiatan Tersedia Digital</th>
        <td>{{ $result->b8r1b }}</td>
    </tr>
    <tr>
        <th>Produk Kegiatan Tersedia Data Mikro</th>
        <td>{{ $result->b8r1c }}</td>
    </tr>
    <tr>
        <th>Rencana Rilis Produk Kegiatan Tercetak</th>
        <td>{{ $result->b8r2a }}</td>
    </tr>
    <tr>
        <th>Rencana Rilis Produk Kegiatan Digital</th>
        <td>{{ $result->b8r2b }}</td>
    </tr>
    <tr>
        <th>Rencana Rilis Produk Kegiatan Data Mikro</th>
        <td>{{ $result->b8r2c }}</td>
    </tr>
    @endforeach
</table>