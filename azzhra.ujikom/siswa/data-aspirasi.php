<?php
$koneksi = mysqli_connect("localhost","root","","ujikom-12rpl2-zibriliant");
$data = mysqli_query($koneksi,"SELECT * FROM input_aspirasi ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Laporan Pengaduan</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#ffffff;
  font-family:"Comic Sans MS", Arial, sans-serif;
}

.container{
  width:900px;
  background:#d8ccc4;
  border:4px solid #222;
  border-radius:30px;
  padding:25px 35px 35px;
}

/* header */
.header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:25px;
}

.title{
  font-size:28px;
  letter-spacing:2px;
}

.search{
  border:3px solid #222;
  border-radius:10px;
  padding:6px 12px;
  font-size:16px;
}

/* tabel */
.table-box{
  background:#eee;
  border:3px solid #222;
  border-radius:20px;
  padding:15px;
}

table{
  width:100%;
  border-collapse:collapse;
  text-align:center;
}

th,td{
  border:2px solid #222;
  padding:10px;
}

th{
  background:#e6e6e6;
}

/* status */
.status{
  background:#ffe082;
  padding:3px 10px;
  border-radius:10px;
  border:2px solid #222;
  display:inline-block;
  font-size:14px;
}

/* tombol detail */
.detail-btn{
  border:2px solid #222;
  padding:5px 15px;
  border-radius:8px;
  background:#fff;
  cursor:pointer;
  text-decoration:none;
  color:black;
}

.detail-btn:hover{
  background:#ddd;
}
</style>
</head>
<body>

<div class="container">

<div class="header">
<input type="text" class="search" placeholder="Cari">
<div class="title">LAPORAN PENGADUAN</div>
</div>

<div class="table-box">
<table>
<tr>
<th>No</th>
<th>Tanggal</th>
<th>NIS</th>
<th>Kategori</th>
<th>Lokasi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Detail</th>
</tr>
<?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
<td><?= $row['nis'] ?></td>
<td><?= $row['id_kategori'] ?></td>
<td><?= $row['lokasi'] ?></td>
<td><?= $row['keterangan'] ?></td>
<td><span class="status">Diproses</span></td>
<td>
<a href="detail.php?id=<?= $row['id_pelaporan'] ?>" class="detail-btn">Detail</a>
</td>
</tr>
<?php } ?>

</table>
</div>

</div>

</body>
</html>