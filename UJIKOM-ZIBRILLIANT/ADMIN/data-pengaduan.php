<?php
session_start();
include 'koneksi.php';


$iduser = $_SESSION;

$koneksi = mysqli_connect("localhost", "root", "", "ujikom-12rpl2-zibriliant");


$sql = "select * from `input aspirasi`";

$query = mysqli_query($koneksi, $sql);


// perulangan
while($data = mysqli_fetch_array($query)){ ?>
    <p>Lokasi <?php echo $data['lokasi']; ?> </p>
    <p>Keterangan <?php echo $data['keterangan']; ?> </p>
    <p>Status : <?php echo $data['lokasi']; ?> </p>
    <hr/>
<?php } ?>