<?php

require_once "koneksi.php";

$kode_buku = $_GET['kode_buku'];

$query = "DELETE FROM buku WHERE kode_buku = '$kode_buku'";

$result = mysqli_query($conn, $query);

if ( mysqli_affected_rows($conn) > 0) {
    # code...
    echo "<script>
            alert('Berhasil dihapus.');
            document.location.href = 'index.php';
          </script>";
}