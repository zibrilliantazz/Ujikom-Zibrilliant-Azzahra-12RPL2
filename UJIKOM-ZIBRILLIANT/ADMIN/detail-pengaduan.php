<?php
include 'konneksi.php' ;

//  cek id dari URL
if (!isset($_GET['id'])) {
    echo "ID pengaduan tidak ditemukan!" ;
    exit;
}

$id = $_GET['id'];

// ================ UPDATE DATA =============
if (isset(($_POST['simpan']))) {
    $status = $_POST['status'];
    $feedback = $_POST['feedback'];

    mysqli_query($koneksi, "UPDATE tbpengaduan
                                          SET status= '$status', feedback= '$feedback'
                                          WHERE idpengaduan='$id'");
}