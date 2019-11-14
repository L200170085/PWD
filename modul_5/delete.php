<?php
    include_once ("connection.php");

    $nim = $_GET['nim'];

    $delete = "DELETE FROM mahasiswa WHERE nim='$nim'";
    
    $result = mysqli_query($connections, $delete);

    if ($result > 0) {
        # code...
        echo "
            <script>
                alert ('Deleted');
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
?>