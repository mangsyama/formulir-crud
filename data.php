<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Formulir Mahasiswa</title>
    <link rel="shortcut icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            /* text-align: center; Menjadikan semua teks rata tengah */
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 1.5rem;
        }
        .card-body {
            padding: 2rem;
        }
        .btn {
            border-radius: 30px;
            padding: 0.5rem 2rem;
        }
        .form-label {
            font-weight: 600;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        table {
            width: 100%;
            margin: 0 auto; /* Agar tabel rata tengah */
        }
        th, td {
            text-align: center; /* Teks di dalam tabel rata tengah */
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="card-title">DATA FORMULIR MAHASISWA</h4>
            </div>
                <div class="card-body">

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Kelas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('koneksi.php');
                            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                            $no = 0;
                            while($baris = mysqli_fetch_array($data)){
                                $no++;
                        ?>

                        <tr>
                            <td> <?php echo $no; ?> </td>
                            <td> <?php echo $baris['nama']; ?> </td>
                            <td> <?php echo $baris['nim']; ?> </td>
                            <td> <?php echo $baris['kelas']; ?> </td>
                            <td>
                                <a href="edit.php?no=<?php echo $baris['no']; ?>" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" ">EDIT</a>
                                <a href="hapus.php?no=<?php echo $baris['no']; ?>" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" ">HAPUS</a>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary mt-3">Formulir</a>
                
            </div>
        </div>
    </div>
</body>
</html>