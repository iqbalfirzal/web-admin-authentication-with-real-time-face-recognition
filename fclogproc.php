<?php
// error_reporting(0);
    if($_POST["idfc"])
    {
      $idFace = $_POST["idfc"];
      if ($idFace=="unknown"||$idFace=="") {
        echo 'unknown';
      }else{
        session_start();
        include("koneksi.php");
        $sql = "SELECT username FROM user ";
        $sql.= "WHERE fname='".$idFace."'";
        $hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['username'];
        echo 'home';
      }
    }else{
        echo 'ngiwiuwiuwiuwnx';
    }
  ?>