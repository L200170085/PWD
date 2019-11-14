<?php 

require "koneksi.php"; 

$kode_buku = $_GET['kode_buku'];

$query = "SELECT * FROM buku WHERE kode_buku = '$kode_buku'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
</head>
<body>
    <h3>Update Data Buku</h3>
    <table border="0">
        <form action="proses_update.php" method="POST">
            <tr>
                <td><label for="kode_buku">Kode Buku</label></td>
                <td>:</td>
                <td><input type="text" name="kode_buku" id="kode_buku" value="<?= $row['kode_buku']; ?>" ></td>
            </tr>
            <tr>
                <td><label for="nama_buku">Nama Buku</label></td>
                <td>:</td>
                <td><input type="text" name="nama_buku" id="nama_buku" value="<?= $row['nama_buku']; ?>"></td>
            </tr>
            <tr>
                <td><label for="kode_jenis">Keterangan Jenis</label></td>
                <td>:</td>
                <td>
                    <select name="kode_jenis">
                        <?php
                            $query = "SELECT * FROM jenis_buku";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<option value='$row[kode_jenis]'>$row[nama_jenis]</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="update">Save</button></td>
            </tr>
        </form>
    </table>
</body>
</html>