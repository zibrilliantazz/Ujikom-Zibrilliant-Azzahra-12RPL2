<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom-12rpl2-zibrilliant");

mysqli_query( $koneksi, "INSERT INTO `input aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `ket`, `status`, `feedback`) VALUES (NULL, '445566', '1', 'depan tu', 'halaman rusak', 'proses', '') ");