<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="output.php" method="POST">
            <h1 class="text-center my-3">Form Cek Status Kelulusan Mahasiswa</h1>
            <div class="mb-3">
                <label class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mahasiswa" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM Mahasiswa" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nilai Quiz 1</label>
                <input type="number" class="form-control" name="q1" placeholder="Masukkan Nilai Quiz 1" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nilai Quiz 2</label>
                <input type="number" class="form-control" name="q2" placeholder="Masukkan Nilai Quiz 2" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nilai UTS</label>
                <input type="number" class="form-control" name="uts" placeholder="Masukkan Nilai UTS" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nilai UAS</label>
                <input type="number" class="form-control" name="uas" placeholder="Masukkan Nilai UAS" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Nilai Proyek</label>
                <input type="number" class="form-control" name="proyek" placeholder="Masukkan Nilai Proyek" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>