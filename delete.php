<html>
     <head>
         <title>Menghapus...</title>
     </head>
     <body>
        <h1>Mohon Tunggu.</h1>
     </body>
 </html>
<?php
    include("koneksi.php");
    $sql = "DELETE FROM temankelas WHERE id_teman =".$_GET['id'];
    mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
    echo "<script type='text/javascript'>alert('Data berhasil dihapus.');
window.location='index.php?page=showalldata';
</script>";
?>