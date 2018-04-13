<?php
    include("inc/koneksi.php");

    $id = $_GET['id'];

    $query = mysqli_query($conn, "delete from users where id_user='$id'");
    if($query){
        header('location:index.php');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
?>