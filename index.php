<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
    <link rel="shortcut icon" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="card-title">FORMULIR MAHASISWA</h4>
            </div>
                <div class="card-body">
                    <form action="submit.php" method="post">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nim" class="form-label">Masukkan Nim</label>
                        <input type="text" class="form-control" id="Nim" name="Nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="Kelas" class="form-label">Pilih Kelas</label>
                        <select class="form-select" id="Kelas" name="Kelas" required>
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            <option value="Kelas A">Kelas A</option>
                            <option value="Kelas B">Kelas B</option>
                            <option value="Kelas C">Kelas C</option>
                            <option value="Kelas D">Kelas D</option>
                        </select>
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                        <br>
                        <a href="data.php" class="btn btn-primary mt-3">Cek Data</a>
                    </div>



                </form>
            </div>
        </div>
    </div>
</body>
</html>