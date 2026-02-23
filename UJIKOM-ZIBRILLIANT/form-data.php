<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM DATA SISWA</h1>

     <form action="proses.datasiswa.php" method="POST">
        <label for="">USERNAME</label><br>
        <input type="text" name="username" /><br><br>

        <label for="">PASSWORD</label><br>
        <input type="text" name="password"/><br><br>

        <label for="">KELAS</label><br>
        <input type="text" name="kelas"/><br><br>

        <!-- <label for="">kategori</label><br>
        <input type="text" name="kategori"/><br><br> -->

        <button type="submit" >Simpan</button>

    </form>
</body>
</html>