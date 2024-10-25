<?php
    include('koneksi.php');
    $no = $_GET['no'];

    $hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE no='$no' ");

    if($hapus == TRUE){
        echo "Berhasil Terhapus Dari Database";
        header("location: data.php");
    } else {
        echo "Gagal Terhapus";
    }
?>