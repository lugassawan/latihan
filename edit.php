<?php
    include("inc/koneksi.php");

    $id = $_GET['id'];

    $query = mysqli_query($conn, "select*from users where id_user='$id'");
    $row = mysqli_fetch_array($query);
    $cek = mysqli_num_rows($query);
    if($cek>0){
        session_start();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['nim'] = $row['nim'];
        header('location:update.php');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }


?>