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
        <form action="output.php" method="POST">
            <h1 class="text-center my-3">Form Laporan Inventaris</h1>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label fw-bold">Nama Produk</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Produk" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label fw-bold">Jumlah Produk</label>
                <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Produk" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label fw-bold">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label fw-bold">Status Ketersediaan</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Tersedia" required>
                    <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Kosong" required>
                    <label class="form-check-label" for="inlineRadio2">Kosong</label>
                </div>
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