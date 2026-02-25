<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Input Aspirasi</title>

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

.card{
  width:750px;
  background:#e6e6e6;
  border:4px solid #222;
  border-radius:30px;
  padding:40px 60px;
}

h2{
  text-align:center;
  margin-top:0;
  margin-bottom:30px;
  letter-spacing:2px;
}

.form-row{
  display:flex;
  align-items:center;
  margin:18px 0;
}

label{
  width:180px;
  font-size:20px;
}

.titik{
  margin:0 15px;
  font-size:20px;
}

input, select{
  flex:1;
  padding:10px;
  border-radius:10px;
  border:3px solid #222;
  font-size:16px;
}

.btn-area{
  text-align:center;
  margin-top:40px;
}

.btn{
  padding:12px 40px;
  font-size:20px;
  border-radius:15px;
  border:3px solid #222;
  cursor:pointer;
  font-weight:bold;
  margin:0 20px;
  transition:0.15s;
}

.simpan{ background:#a8e6b0; }
.batal{ background:#ff5c5c; }

.btn:hover{
  transform:scale(1.05);
}
</style>
</head>
<body>

<div class="card">

<h2>INPUT ASPIRASI</h2>

<form method="POST" action="proses-input.php">

<div class="form-row">
<label>Id Pelaporan</label>
<div class="titik">:</div>
<input type="text" name="id_pelaporan" required>
</div>

<div class="form-row">
<label>Tanggal</label>
<div class="titik">:</div>
<input type="date" name="tanggal" value="<?= date('Y-m-d'); ?>" required>
</div>

<div class="form-row">
<label>NIS</label>
<div class="titik">:</div>
<input type="text" name="nis" required>
</div>

<div class="form-row">
<label>Kategori</label>
<div class="titik">:</div>
<select name="id_kategori" required>
  <option value="">Pilih kategori</option>
  <option value="1">Fasilitas</option>
  <option value="2">Kebersihan</option>
  <option value="3">Keamanan</option>
</select>
</div>

<div class="form-row">
<label>Lokasi</label>
<div class="titik">:</div>
<input type="text" name="lokasi" required>
</div>

<div class="form-row">
<label>Keterangan</label>
<div class="titik">:</div>
<input type="text" name="keterangan" required>
</div>

<div class="btn-area">
<button type="submit" class="btn simpan">SIMPAN</button>
<button type="reset" class="btn batal">BATAL</button>
</div>

</form>
</div>

</body>
</html>
