<html>
    <head><title>Tampilkan Data</title></head>
    <body>
        <p>[ <a href="index.php?page=insert">Tambah Data</a> ] </p>
        <table width="650px" border="1">
            <tr style="background:#ccc">
            <th width="20%">ID</th>
            <th width="20%">Nama</th>
            <th width="20%">Alamat Kost</th>
            <th width="20%">Asal</th>
            <th width="20%">Nomor HP</th>
            <th>Aksi</th>
            </tr>
            <?php
            include ("koneksi.php");
            $sql = "SELECT id_teman,nama,alamatkost,asal,nomorhp FROM temankelas";
            $hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
            while($data=mysqli_fetch_array($hasil)){
                ?>
                <tr>
                <td align="center"><?php echo $data['id_teman']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamatkost']; ?></td>
                <td><?php echo $data['asal']; ?></td>
                <td><?php echo $data['nomorhp']; ?></td>
                <td>
                <a href="index.php?page=showdata&id=<?php echo $data['id_teman']; ?>">Detail</a>
                <a href="index.php?page=update&id=<?php echo $data['id_teman']; ?>">Ubah</a>
                <a href="index.php?page=delete&id=<?php echo $data['id_teman']; ?>">Hapus</a>
                </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>