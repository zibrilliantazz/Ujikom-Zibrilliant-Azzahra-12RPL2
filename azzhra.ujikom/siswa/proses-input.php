<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom-12rpl2-zibriliant");

$nis = $_POST['nis'];
$kategori = $_POST['id_kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];

mysqli_query($koneksi, "INSERT INTO `input_aspirasi`
-- `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`, `tanggal`)
VALUES (NULL, '$nis', '$kategori', '$lokasi', '$keterangan', 'menunggu', NULL, '$tanggal')");

echo 'berhasil';

?>
