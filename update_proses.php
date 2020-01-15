<?php
include ("koneksi.php");
$sql = "UPDATE temankelas SET ";
$sql.= "nama='".$_POST['nama']."',alamatkost='".$_POST['alamat']."',asal='".$_POST['asal']."',nomorhp='".$_POST['nomorhp']."' ";
$sql.= "WHERE id_teman = ".$_POST['id'];
mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
echo "<script type='text/javascript'>alert('Data berhasil disimpan.');
window.location='index.php?page=showalldata';
</script>";
?>