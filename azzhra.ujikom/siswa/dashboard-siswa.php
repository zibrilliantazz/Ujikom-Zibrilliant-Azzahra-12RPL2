<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa'){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Siswa</title>

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

.dashboard{
  width:800px;
  height:420px;
  background:#e6e6e6;
  border:4px solid #222;
  border-radius:30px;
  position:relative;
  padding-top:70px;
}

.dashboard::before{
  content:"";
  position:absolute;
  top:55px;
  left:0;
  width:100%;
  height:4px;
  background:#222;
}

.logout{
  position:absolute;
  top:15px;
  right:20px;
  background:#e74c3c;
  border:3px solid #222;
  padding:5px 20px;
  border-radius:10px;
  font-weight:bold;
  cursor:pointer;
  text-decoration:none;
  color:#111;
}

.menu{
  display:flex;
  justify-content:center;
  gap:80px;
  margin-top:40px;
}

.btn{
  padding:15px 35px;
  border-radius:15px;
  border:3px solid #222;
  font-size:18px;
  font-weight:bold;
  cursor:pointer;
  text-decoration:none;
  color:#111;
  transition:0.15s;
}


.hijau{ background:#a8e6b0; }
.kuning{ background:#f6e39c; }

.merah{
  background:#ff5c5c;
  display:block;
  width:max-content;
  margin:60px auto 0 auto;
}
</style>
</head>
<body>

<div class="dashboard">

<a href="logout.php" class="logout">LOGOUT</a>

<div class="menu">
<a href="input-aspirasi.php" class="btn hijau">INPUT ASPIRASI</a>
<a href="data-aspirasi.php" class="btn kuning">DATA ASPIRASI</a>
</div>

<a href="ganti-password.php" class="btn merah">GANTI PASSWORD</a>

</div>

</body>
</html>
