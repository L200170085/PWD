<?php

require "koneksi.php";

if (isset($_POST['submit'])) {
    # code...
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $kode_jenis = $_POST['kode_jenis'];

    $query = "INSERT INTO buku VALUES ('$kode_buku', '$nama_buku', '$kode_jenis')";

    $result = mysqli_query($conn, $query);

    if ( mysqli_affected_rows($conn) > 0) {
        # code...
        echo "<script>
                alert('Berhasil dimasukkan.');
                document.location.href = 'index.php';
              </script>";
    }
}