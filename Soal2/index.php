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
        <form action="output.php" method="POST">
            <h1 class="text-center my-3">Kalkulator Persegi Panjang</h1>
            <div class="mb-3">
                <label class="form-label fw-bold">Satuan Panjang</label>
                <select class="form-select" name="satuan" required>
                    <option value="km">km</option>
                    <option value="hm">hm</option>
                    <option value="dam">dam</option>
                    <option value="m">m</option>
                    <option value="dm">dm</option>
                    <option value="cm">cm</option>
                    <option value="mm">mm</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Panjang</label>
                <input type="number" class="form-control" name="panjang" placeholder="Masukkan Panjang" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Lebar</label>
                <input type="number" class="form-control" name="lebar" placeholder="Masukkan Jumlah Lebar" required>
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