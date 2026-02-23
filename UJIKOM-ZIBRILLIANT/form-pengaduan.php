<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style.css">
    
     <style>
        
     </style>

</head>

<body>
    <h1>FORM PENGADUAN SARANA MUTU</h1>

    <form action="proses-pengaduan.php" method="POST">

        <label for="">NIS</label><br>
        <input type="text" name="nis" /><br><br>

        <label for="">Lokasi</label><br>
        <input type="text" name="lokasi"/><br><br>

        <label for="">Keterangan</label><br>
        <input type="text" name="keterangan"/><br><br>

         <label>Kategori</label>
            <select name="id_kategori" required>
            <option value="1">Fasilitas LIngkungan</option>
            <option value="2">Lingkungan</option>
            <option value="3">Sanitasi</option>
            </select>

        <button type="submit" >Kirim Pengaduan</button>

    </form>
</body>
</html>