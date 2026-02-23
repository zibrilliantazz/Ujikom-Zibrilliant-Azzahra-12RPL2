<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    session_start();
    include 'koneksi.php';

    // ambil nis dari session login
    $nis_login = $_SESSION['nis'];

    // query untuk mengambil fata milik siswa ini saja
    $query = mysqli_query($koneksi, "SELECT * FROM `input aspirasi`
        JOIN kategori ON `input aspirasi`.id_kategori = `kategori`.id_kategori
        WHERE nis = $nis_login");
    ?>

    <h2>Histori Pengaduan Saya</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Respon Admin</th>
        </tr>
        <?php while($data = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?=$data['ket_kategori'];?></td>
            <td><?=$data['lokasi'];?></td>
            <td><?=$data['keterangan'];?></td>

            <td>
                <strong><?= strtoupper($data['status']); ?></strong>
            </td>
            <td>
                <?=$data['feedback'] ? $data['feedback'] : 'belum ada respon';?>
            </td>

        </tr>        
        <?php } ?>
    </table>
</body>
</html>