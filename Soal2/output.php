<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3">Hasil Perhitungan Persegi Panjang</h1>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Panjang
            </div>
            <div class="col">
                : <?php echo $_POST['panjang'] . " " . $_POST['satuan']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Lebar
            </div>
            <div class="col">
                : <?php echo $_POST['lebar'] . " " . $_POST['satuan']; ?>
            </div>
        </div>

        <?php
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
        $diagonal = sqrt(pow($panjang, 2) + pow($lebar, 2));
        ?>

        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Luas
            </div>
            <div class="col">
                : <?php echo ($luas) . " " . $_POST['satuan'] . "²"; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Keliling
            </div>
            <div class="col">
                : <?php echo ($keliling) . " " . $_POST['satuan']; ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 fw-bold">
                Panjang Diagonal
            </div>
            <div class="col">
                : <?php echo ($diagonal) . " " . $_POST['satuan']; ?>
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