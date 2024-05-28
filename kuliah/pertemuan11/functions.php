<?php 
function koneksi() {
     // Koneksi Ke Database
    $db =  mysqli_connect('localhost', 'root', '', 'pw2024_233040058') or die('Koneksi ke DB Gagal!');
    return $db;
}

function query($sql) {
    $conn = koneksi();
    // Lakukan Query ke tabel mahasiswa
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    // Menyiapkan data mahasiswa (fetch)

    // jika hasilnya hanya satu data
    if(mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}

function tambah($data) {

    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama','$nim', '$email', '$jurusan')";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id) {

    $conn = koneksi();
    
    $query_delete_mhs = "DELETE FROM mahasiswa WHERE id = $id";
    $result_delete_mhs = mysqli_query($conn, $query_delete_mhs);

    if ($result_delete_mhs) {
        return mysqli_affected_rows($conn);
    } else {
        echo "Error: " . mysqli_error($conn);
        return -1;
    }

    mysqli_close($conn);
}

function ubah($data) {

    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', email = '$email', jurusan = '$jurusan' WHERE id = $id";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
?>