<?php
$koneksi=mysqli_connect("localhost","root","") or exit("Gagal Koneksi DB.");
mysqli_select_db($koneksi,"db_pwl") or exit("Gagal Memilih DB.");
?>