<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3">Hasil Laporan Inventaris</h1>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Nama Produk
            </div>
            <div class="col">
                : <?php echo $_POST['nama']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Jumlah Produk
            </div>
            <div class="col">
                : <?php echo $_POST['jumlah']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Harga
            </div>
            <div class="col">
                : <?php echo $_POST['harga']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Status Ketersediaan
            </div>
            <div class="col">
                : <?php echo $_POST['status']; ?>
            </div>
        </div>

        <?php
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $totalNilaiInventaris = $jumlah * $harga;
        ?>

        <div class="row">
            <div class="col-2 fw-bold">
                Total Nilai Inventaris
            </div>
            <div class="col">
                : <?php echo ("Rp" . $totalNilaiInventaris); ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>