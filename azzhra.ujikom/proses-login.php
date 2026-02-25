<?php
session_start();

$koneksi = mysqli_connect("localhost","root","","ujikom-12rpl2-zibriliant");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);

    if($data){
        if($password == $data["password"]){

            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role'];

            if(trim($data['role']) == 'admin'){
                header("Location: ADMIN/admin.php");
                exit();
            } 
            elseif(trim($data['role']) == 'siswa'){
                header("Location: siswa/dashboard-siswa.php");
                exit();
            }

        } else {
            echo "<script>alert('Password salah!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
    }
}
?>
