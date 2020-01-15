<html>
     <head>
         <title>latihan update</title>
     </head>
     <body>
        <?php
            include("koneksi.php");
            $sql = "SELECT * FROM temankelas ";
            $sql.= "WHERE id_teman =".$_GET['id'];
            $hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
            $data = mysqli_fetch_assoc($hasil);
        ?>
        <h1>Latihan Update</h1>
         <form action="update_proses.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id_teman'];
?>" /><br> 
            <input type="text" name="nama" value="<?php echo $data['nama'];
?>" placeholder="isikan nama"><br>
            <input type="text" name="alamat" value="<?php echo $data['alamatkost'];
?>" placeholder="isikan alamat kost"><br>
            <input type="text" name="asal" value="<?php echo $data['asal'];
?>" placeholder="isikan daerah asal"><br>
            <input type="text" name="nomorhp" value="<?php echo $data['nomorhp'];
?>" placeholder="isikan nomor HP"><br>
            <input type="submit" name="kirim" value="kirim">    
         </form>
     </body>
 </html>