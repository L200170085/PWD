<?php

require "koneksi.php";

if (isset($_POST['update'])) {
    # code...
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $kode_jenis = $_POST['kode_jenis'];

    $query = "UPDATE buku SET kode_buku = '$kode_buku', nama_buku = '$nama_buku', kode_jenis = '$kode_jenis' WHERE kode_buku = '$kode_buku'";

    $result = mysqli_query($conn, $query);

    if ( mysqli_affected_rows($conn) > 0) {
        # code...
        echo "<script>
                alert('Berhasil diedit.');
                document.location.href = 'index.php';
              </script>";
    }
}