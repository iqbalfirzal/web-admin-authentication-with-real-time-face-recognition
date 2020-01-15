<?php
include ("koneksi.php");
$sql = "INSERT INTO temankelas(nama,alamatkost,asal,nomorhp) ";
$sql.= "VALUES ('".$_POST['nama']."','".$_POST['alamat']."','".$_POST['asal']."','".$_POST['nomorhp']."')";
mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
echo "<script type='text/javascript'>alert('Data berhasil ditambahkan.');
window.location='index.php?page=showalldata';
</script>";
?>