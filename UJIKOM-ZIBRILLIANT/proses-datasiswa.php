<?php


$nis       = $_POST['nis'];
$username   = $_POST['username'];
$kelas    = $_POST['kelas'];
$password = $_POST['password'];


echo "NIS = $nis";
echo "<br>";
echo "USERNAME = $username";
echo "<br>";
echo "KELAS = $kelas";
echo "<br>";
echo "PASSWORD = $password";

$koneksi = mysqli_connect("localhost", "root", "", "ujikom-12rpl2-zibriliant");

$password_hash = password_hash ('123', PASSWORD_DEFAULT );

mysqli_query( $koneksi, "INSERT INTO `user` (`id`, `username`, `password`, `role`, `nis`, `kelas`) VALUES ('$username', '$password_hash', 'siswa', '$nis', '$kelas')");