<?php
// include 'functions.php';
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['hapus'])) {
    $id = $_POST['hapus'];
    $result = hapus($id);
    if ($result === -1) {
        echo "<script>
                alert('Gagal menghapus data Mahasiswa');
                document.location.href = 'index.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('data Mahasiswa berhasil dihapus');
                document.location.href = 'index.php';
              </script>";
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemrograman Web || Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php $count = 1; ?> -->
                <?php $i = 1;
                foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['email']; ?></td>
                        <td><?= $mhs['jurusan']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $mhs['id']; ?>" class="badge text-bg-warning text-decoration-none">Edit</a>
                            <form action="" method="post" style="display:inline;" onsubmit="return confirmDelete()">
                                <button type="submit" class="badge text-bg-danger text-decoration-none border-0" name="hapus" value="<?= $mhs['id']; ?>">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>