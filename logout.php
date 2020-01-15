<?php
echo 'Yakin ingin keluar?<br><a href="logout.php?out=true">YA</a>  |  <a href="index.php">TIDAK</a>';
if(isset($_GET['out'])){
    session_start();
    session_destroy();
    header("location:login.php");
}
?>