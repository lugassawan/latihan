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
        <h1>Edit Data</h1>
        <form action="updated.php" method="POST">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="$_SESSION['nama']">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" value="$_SESSION['nim']">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="$_SESSION['id_user']">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
            </div>
        </form>
        <hr>
        <hr>
    </body>
</html>