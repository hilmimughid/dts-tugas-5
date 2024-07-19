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
        <h1 class="text-center my-3">Hasil Cek Status Kelulusan Mahasiswa</h1>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Nama
            </div>
            <div class="col">
                : <?php echo $_POST['nama']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                NIM
            </div>
            <div class="col">
                : <?php echo $_POST['nim']; ?>
            </div>
        </div>

        <?php
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $proyek = $_POST['proyek'];
        $nilai_akhir = ($q1 * 0.1) + ($q2 * 0.1) + ($uts * 0.1) + ($uas * 0.2) + ($proyek * 0.5);
        ?>

        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Nilai Akhir
            </div>
            <div class="col">
                : <?php echo ($nilai_akhir); ?>
            </div>
        </div>
        <div class="row mb-3">
            <?php
            if ($nilai_akhir > 60) {
                echo '<div class="alert alert-success" role="alert">Selamat Anda Lulus!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Mohon Maaf Anda Tidak Lulus!</div>';
            }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>