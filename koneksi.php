<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "kampus";

    $koneksi = mysqli_connect($server,$user,$password,$database);

    // if($koneksi == TRUE){
    //     echo "Berhasil Terhubung ke Database";
    // } else {
    //     echo "Gagal Terhubung";
    // }
?>