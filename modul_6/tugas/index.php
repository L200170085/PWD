<?php require "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>
<body>
<h3>Masukkan Data Buku</h3>
    <table border="0">
        <form action="proses_tambah.php" method="POST">
            <tr>
                <td><label for="kode_buku">Kode Buku</label></td>
                <td>:</td>
                <td><input type="text" name="kode_buku" id="kode_buku"></td>
            </tr>
            <tr>
                <td><label for="nama_buku">Nama Buku</label></td>
                <td>:</td>
                <td><input type="text" name="nama_buku" id="nama_buku"></td>
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
                <td><button type="submit" name="submit">Save</button></td>
            </tr>
        </form>
    </table>
    <hr>
    <h3>Data Barang</h3>
    <table border="1">
        <tr>
            <td>Kode Buku</td>
            <td>Nama Buku</td>
            <td>Keterangan Jenis</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php
            $query = "SELECT buku.kode_buku, buku.nama_buku, jenis_buku.nama_jenis FROM buku, jenis_buku WHERE buku.kode_jenis = jenis_buku.kode_jenis";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr>";
                    echo "<td>$row[kode_buku]</td>";
                    echo "<td>$row[nama_buku]</td>";
                    echo "<td>$row[nama_jenis]</td>";
                    echo "<td><a href='update.php?kode_buku=$row[kode_buku]'>Update</a></td>";
                    echo "<td><a href='delete.php?kode_buku=$row[kode_buku]'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>