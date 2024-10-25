<?php
    include('koneksi.php');

    $no = $_POST['no'];
    $Nama = $_POST['Nama'];
    $Nim = $_POST['Nim'];
    $Kelas = $_POST['Kelas'];
    
    $update = mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$Nama', nim='$Nim', kelas='$Kelas' WHERE no='$no' ");    

    
    if($update == TRUE){
        echo "Berhasil Terupdate ke Database";
        header("location: data.php");
    } else {
        echo "Gagal Terupdate";
    }
?>