<?php
    include("inc/koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $query = mysqli_query($conn, "update users set id_user='$id', nama='$nama', nim='$nm' WHERE id_user='$id'");
    if($query){
        header('location:index.php');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


?>