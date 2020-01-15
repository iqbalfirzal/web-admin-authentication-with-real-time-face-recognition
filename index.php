<?php
// error_reporting(0);
    if (isset($_GET['page'])) {
        $stat = $_GET['page'];
        if ($stat=="unknown") {
            echo "<script type='text/javascript'>alert('Gagal login.');
            window.location='login.php';
            </script>";
        }else{
            cekLogin();
        }
    }else{
        cekLogin();
    }
    function cekLogin(){
        session_start();
        if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
         echo "<script type='text/javascript'>alert('Gagal login.');
         window.location='login.php';
         </script>";
        }
    }
?>
<html>
<head>
<title>Web Dashboard</title>
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="satu">
    <div id="satu_con">
        <div id="satu_a">
            <span class="satu_aa">Selamat Datang Administrator</span>
            <span class="satu_ab">Creative & Innovative</span>
        </div>
        <div id="satu_b">
            <ul>
                <li><a href="index.php?page=home" class="pilih">Home</a></li>
                <li><a href="index.php?page=showalldata">Entri Data</a>
                <li><a href="index.php?page=logout">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_a">
            <div id="dua_aa">
                <span id="dua_aab"></span>
                <!--<span id="dua_aaa">
                	<input type="button" value="Tambah Data" class="tambah">
                </span>
                -->
            </div>
            <div id="dua_ac">
            <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page']=="") {
                        include ("home.php");
                    }elseif($_GET['page']=="home"){
                        include ("home.php");
                    }else {
                        include ($_GET['page'].".php");
                    }
                }else{
                    include ("home.php");
                }
            ?>
            </div>
            <div id="dua_ab">
                <!--
                Script
                -->
            </div>
        </div>
    </div>
</div>
</body>
</html>