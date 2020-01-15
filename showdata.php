<?php
include ("koneksi.php");
$sql = "SELECT * FROM temankelas WHERE id_teman =".$_GET['id'];
$hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysqli_fetch_assoc($hasil);
echo "<pre>";
print_r($data);
echo "</pre>";
?>