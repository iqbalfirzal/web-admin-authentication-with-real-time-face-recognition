<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
 header('location:index.php');
}
?>
<html>
<head>
<title>Login Web Dashboard</title>
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
	<div id="login_a"></div>
    <div id="login_b">
    	<div id="login_ba">Form Login</div>
        <div id="login_bb">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input class="form" type="text" name="txtUsername" value="" placeholder="username" /><br> 
            <input class="form" type="password" name="txtPassword" value="" placeholder="password"><br>
            <input class="submit" type="submit" name="login" value="Login"><br>
            <input class="submit" style="width: 33%" onclick="window.location.href = 'facelogin.php';" value="Face Login">
</form>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['login'])) {
        session_start();
        include("koneksi.php");
        $sql = "SELECT username FROM user ";
        $sql.= "WHERE username='".$_POST['txtUsername']."' ";
        $sql.= "AND password='".$_POST['txtPassword']."' ";
        $hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
        if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['username'];
        header("Location:index.php");
        exit();
        } else { ?>
        <h2 align="center">Sorry..</h2>
        <p align="center">
        Username atau password salah.
        Silahkan ulangi.
        </p>
        <?php
        }
    }else{
        echo "<p align='center'>Selamat datang, Anda diharuskan login terlebih dahulu sebelum mengubah data yang sudah tersimpan.</p>";
    }
    ?>
</body>
</html>