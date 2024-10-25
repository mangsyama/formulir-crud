<?php
    include('koneksi.php');

    $Nama = $_POST['Nama'];
    $Nim = $_POST['Nim'];
    $Kelas = $_POST['Kelas'];

    $submit = mysqli_query($koneksi,"INSERT INTO mahasiswa (nama, nim, kelas) VALUES ('$Nama','$Nim','$Kelas') ");

    
    if($koneksi == TRUE){
        echo "Berhasil Tersimpan ke Database";
        header("location: index.php");
    } else {
        echo "Gagal Tersimpan";
    }
?>