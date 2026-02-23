<?php


$nis       = $_POST['nis'];
// $kategori   = $_POST['kategori'];
$lokasi    = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];


echo "NIS = $nis";
echo "<br>";
// echo "KATEGORI = $kategori";
echo "<br>";
echo "LOKASI = $lokasi";
echo "<br>";
echo "KETERANGAN = $keterangan";

$koneksi = mysqli_connect("localhost", "root", "", "ujikom-12rpl2-zibriliant");

mysqli_query( $koneksi, "INSERT INTO `input aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) VALUES (NULL, '$nis', '2', '$lokasi', '$keterangan', 'proses', '')");