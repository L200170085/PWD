<?php

require "koneksi.php";

if (isset($_POST['submit'])) {
    # code...
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $kode_gudang = $_POST['kode_gudang'];

    $query = "INSERT INTO barang VALUES ('$kode_barang', '$nama_barang', '$kode_gudang')";

    $result = mysqli_query($conn, $query);

    if ( mysqli_affected_rows($conn) > 0) {
        # code...
        echo "<script>
                alert('Berhasil dimasukkan.');
                document.location.href = 'form.php';
              </script>";
    }
}