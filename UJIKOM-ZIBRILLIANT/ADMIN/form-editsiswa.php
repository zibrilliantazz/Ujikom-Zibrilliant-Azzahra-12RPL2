<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Siswa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #e9f1f4;
            margin: 0;
            padding: 0;
        }

        .container{
            width: 400px;
            background: white;
            margin: 70px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label{
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #444;
        }

        input, select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
        }

        input:focus, select:focus{
            border-color: #007BFF;
        }

        .btn{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover{
            background: #0056b3;
        }

        .btn-batal{
            display: block;
            text-align: center;
            margin-top: 12px;
            text-decoration: none;
            color: #333;
        }

        .btn-batal:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Edit Data Siswa</h2>

        <form action="#" method="post">
            
            <label>Nama Siswa</label>
            <input type="text" name="nama" placeholder="Masukkan nama siswa" value="Zara" required>

            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Contoh: XI RPL 1" value="XI RPL 1" required>

            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Contoh: RPL" value="RPL" required>

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" value="zara123" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password baru" value="12345" required>

            <button type="submit" class="btn">Update Data</button>

            <a href="data-siswa.html" class="btn-batal">Batal</a>

        </form>
    </div>

</body>
</html>
