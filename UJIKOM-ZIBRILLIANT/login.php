<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{
    background:#e9e9e9;
    font-family:Arial, Helvetica, sans-serif;
}

.box{
    width:420px;
    margin:120px auto;
    background:#dcdcdc;
    padding:40px;
    border-radius:20px;
    border:3px solid #444;
}

h2{
    margin-top:0;
}

label{
    font-size:13px;
    letter-spacing:1px;
}

input[type=text],input[type=password]{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:8px;
    border:2px solid #444;
}

.btn{
    background:#39b54a;
    border:none;
    padding:12px;
    width:150px;
    border-radius:10px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#2e8f3a;
    color:white;
}

.lupa{
    float:right;
    font-size:13px;
    color:#1e73be;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="box">
<h2>LOGIN</h2>

<form method="POST" action="proses-login.php">

<label>USERNAME</label>
<input type="text" name="username" required>

<a href="lupa_password.php" class="lupa">lupa kata sandi anda?</a>

<label>PASSWORD</label>
<input type="password" name="password" required>

<br>
<button type="submit" class="btn">LOGIN</button>

</form>
</div>

</body>
</html>