<?php
    include_once("connection.php");

    error_reporting(E_ALL^E_NOTICE);

    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = $_POST['kelas'];
    $alamat = htmlspecialchars($_POST['alamat']);

    $submit = $_POST['submit'];

    $input = "INSERT INTO mahasiswa (nim, nama, kelas, alamat) VALUES ('$nim', '$nama', '$kelas', '$alamat')";

    if ($submit) {
        # code...
        if ($nim == "") {
            # code...
            echo "NIM tidak boleh kosong";
        } elseif ($nama == "") {
            # code...
            echo "Nama tidak boleh kosong";
        } elseif ($alamat == "") {
            # code...
            echo "Kelas tidak boleh kosong";
        } else {
            # code...
            mysqli_query ($connections, $input);
            echo "
                <script>
                    alert ('Congratulations!');
                    document.location.href='index.php';
                </script>
            ";
        }
    }
?>