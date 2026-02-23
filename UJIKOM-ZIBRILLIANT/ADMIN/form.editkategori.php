<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Kategori</title>

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
            margin: 80px auto;
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

        input, textarea{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
        }

        input:focus, textarea:focus{
            border-color: #007BFF;
        }

        textarea{
            resize: none;
            height: 90px;
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
        <h2>Form Edit Kategori</h2>

        <form action="#" method="post">

            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" placeholder="Masukkan nama kategori" value="Sarana Sekolah" required>

            <label>Deskripsi Kategori</label>
            <textarea name="deskripsi" placeholder="Masukkan deskripsi kategori" required>Berisi laporan pengaduan tentang sarana sekolah.</textarea>

            <button type="submit" class="btn">Update Kategori</button>

            <a href="data-kategori.html" class="btn-batal">Batal</a>

        </form>
    </div>

</body>
</html>
