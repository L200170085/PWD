<?php
    include_once ("connection.php");

    if (isset($_POST['update'])) {
        # code...
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];


        $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', kelas = '$kelas', alamat = '$alamat' WHERE nim = '$nim'";
        $result = mysqli_query($connections, $query);

        if ($result) {
            # code...
            echo "
                <script>
                    alert ('Updated');
                    document.location.href='index.php';
                </script>
            ";
        } else {
            # code...
            echo "
                <script>
                    alert ('Failed');
                    document.location.href='index.php';
                </script>
            ";
        }
        
    }
?>