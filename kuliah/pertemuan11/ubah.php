<?php 

require 'functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil dirubah');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "data gagal di tambahkan";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemrograman Web || Ubah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container col-8">
        <h1>Ubah Data Mahasiswa</h1>

        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>" required >
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs['nim']; ?>" required >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mhs['jurusan']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="ubah">Submit</button>
        </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>