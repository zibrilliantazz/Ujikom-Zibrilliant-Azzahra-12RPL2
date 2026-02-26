<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin'){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>

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
  background:#ecb2d6;
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
  background:#e13887;
}

/* ===== MAIN ===== */
.main{
  margin-left:240px;
  width:100%;
}

/* ===== NAVBAR ===== */
.navbar{
  height:60px;
  background:rgb(255, 255, 255);
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:0 30px;
  box-shadow:0 2px 5px rgba(0,0,0,0.1);
}

.content{
  padding:40px;
}

/* ===== CARD DASHBOARD ===== */
.card-container{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
  gap:25px;
  margin-top:30px;
}

.card{
  display:block;
  padding:35px;
  border-radius:12px;
  background:white;
  text-align:center;
  font-size:20px;
  font-weight:bold;
  text-decoration:none;
  transition:0.3s;
  box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

/* WARNA BERBEDA */
.aspirasi{
  color:#dc75a5;
}

.siswa{
  color:#79b1d8;
}

.kategori{
  color:#d99271;
}

/* HOVER EFFECT */
.card:hover{
  transform:translateY(-8px);
  background:#f10587;
  color:white;
}

</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
  <h2>ADMIN PANEL</h2>
  <a href="data-pelapor.php">Aspirasi</a>
  <a href="data-siswa.php">Data Siswa</a>
  <a href="kategori.php">Kategori</a>
  <a href="logout.php">Logout</a>
</div>

<!-- MAIN -->
<div class="main">
  
  <div class="navbar">
    <div><strong>Dashboard Admin</strong></div>
    <div>Halo, <?php echo $_SESSION['username']; ?></div>
  </div>

  <div class="content">
    <h1>Selamat Datang Admin 👋</h1>

    <div class="card-container">
      <a href="data-pelapor.php" class="card aspirasi">
        Kelola Aspirasi
      </a>

      <a href="data-siswa.php" class="card siswa">
        Kelola Data Siswa
      </a>

      <a href="kategori.php" class="card kategori">
        Kelola Kategori
      </a>
    </div>

  </div>

</div>

</body>
</html>
