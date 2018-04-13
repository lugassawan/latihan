<?php
    include("inc/koneksi.php");

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $query = mysqli_query($conn, "insert into users values(NULL, '$nama', '$nim')");
    if($query){
        header('location:index.php');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


?>