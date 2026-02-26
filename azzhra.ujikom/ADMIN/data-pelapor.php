<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("Location: ../login.php");
    exit;
}

$koneksi = mysqli_connect("localhost","root","","ujikom-12rpl2-zibriliant");

/* SIMPAN UPDATE */
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $status = $_POST['status'];

    mysqli_query($koneksi,"
        UPDATE input_aspirasi 
        SET status='$status'
        WHERE id_pelaporan='$id'
    ");

    echo "<script>alert('Status berhasil disimpan!'); window.location='data-aspirasi.php';</script>";
}

/* AMBIL DATA */
$data = mysqli_query($koneksi,"
    SELECT ia.*, k.ket_kategori 
    FROM input_aspirasi ia
    LEFT JOIN kategori k ON ia.id_kategori = k.id_kategori
    ORDER BY ia.tanggal DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Aspirasi Admin</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: Arial, sans-serif;
}

body{
  display:flex;
  background:#f4f6f9;
}

/* ===== SIDEBAR ===== */
.sidebar{
  width:240px;
  height:100vh;
  background:#2c3e50;
  color:white;
  position:fixed;
  padding-top:20px;
}

.sidebar h2{
  text-align:center;
  margin-bottom:40px;
}

.sidebar a{
  display:block;
  padding:15px 25px;
  color:white;
  text-decoration:none;
  transition:0.2s;
}

.sidebar a:hover{
  background:#34495e;
}

/* ===== MAIN ===== */
.main{
  margin-left:240px;
  width:100%;
}

/* ===== NAVBAR ===== */
.navbar{
  height:60px;
  background:white;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:0 30px;
  box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

/* ===== CONTENT ===== */
.content{
  padding:40px;
}

h1{
  margin-bottom:25px;
}

/* ===== TABLE ===== */
.table-container{
  background:white;
  padding:25px;
  border-radius:12px;
  box-shadow:0 5px 15px rgba(0,0,0,0.08);
  overflow-x:auto;
}

table{
  width:100%;
  border-collapse:collapse;
}

th{
  background:#2c3e50;
  color:white;
  padding:12px;
  font-size:14px;
}

td{
  padding:10px;
  text-align:center;
  border-bottom:1px solid #ddd;
  font-size:14px;
}

tr:hover{
  background:#f2f2f2;
}

/* ===== SELECT STATUS ===== */
.status-select{
  padding:6px 10px;
  border-radius:6px;
  border:1px solid #ccc;
  font-size:13px;
  cursor:pointer;
}

/* ===== BUTTON ===== */
.btn-detail{
  padding:6px 12px;
  border-radius:6px;
  text-decoration:none;
  font-size:13px;
  background:#2980b9;
  color:white;
  transition:0.2s;
}

.btn-detail:hover{
  background:#1f6691;
}

.btn-save{
  padding:6px 12px;
  border:none;
  border-radius:6px;
  font-size:13px;
  background:#27ae60;
  color:white;
  cursor:pointer;
  transition:0.2s;
}

.btn-save:hover{
  background:#1e8449;
}
</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>ADMIN PANEL</h2>
  <a href="data-aspirasi.php">Aspirasi</a>
  <a href="data-siswa.php">Data Siswa</a>
  <a href="kategori.php">Kategori</a>
  <a href="logout.php">Logout</a>
</div>

<!-- MAIN -->
<div class="main">

  <div class="navbar">
    <strong>Data Aspirasi (Admin)</strong>
    <div>Halo, <?= $_SESSION['username']; ?></div>
  </div>

  <div class="content">
    <h1>Kelola Status Aspirasi</h1>

    <div class="table-container">
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
          <th>Aksi</th>
        </tr>

        <?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
        <tr>
        <form method="POST">
          <td><?= $no++ ?></td>
          <td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
          <td><?= $row['nis'] ?></td>
          <td><?= $row['ket_kategori'] ?></td>
          <td><?= $row['lokasi'] ?></td>
          <td><?= $row['keterangan'] ?></td>

          <td>
            <select name="status" class="status-select">
              <option value="proses" <?= $row['status']=='proses'?'selected':'' ?>>Proses</option>
              <option value="selesai" <?= $row['status']=='selesai'?'selected':'' ?>>Selesai</option>
            </select>
          </td>

          <td>
            <a href="detail-aspirasi.php?id=<?= $row['id_pelaporan'] ?>" class="btn-detail">
              Detail
            </a>
          </td>

          <td>
            <input type="hidden" name="id" value="<?= $row['id_pelaporan'] ?>">
            <button type="submit" name="simpan" class="btn-save">
              Simpan
            </button>
          </td>
        </form>
        </tr>
        <?php } ?>

      </table>
    </div>

  </div>

</div>

</body>
</html>