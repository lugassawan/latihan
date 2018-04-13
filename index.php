<?php
    session_start();
    include('inc/koneksi.php');
?>
<html>
    <head>
        <title>Latihan</title>

        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>Selamat datang</h1>
        <form action="create1.php" method="GET">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
            </div>
        </form>
        <hr>
        <hr>
        <h2 style="text-align:center;">TABEL MAHASISWA</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>EDIT</th>
                    <th>HAPUS   </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $tampil = mysqli_query($conn, "select*from users");
                while($row = mysqli_fetch_array($tampil)){

                
            ?>
                <tr>
                    <td><?php echo $row['id_user']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id_user']; ?>">Edit</a></td>
                    <td><a href="hapus.php?id=<?php echo $row['id_user']; ?>">Hapus</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </body>
</html>