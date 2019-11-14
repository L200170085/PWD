<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <h3>Masukkan Data Barang</h3>
    <table border="0">
        <form action="proses_tambah.php" method="POST">
            <tr>
                <td><label for="kode_barang">Kode Barang</label></td>
                <td>:</td>
                <td><input type="text" name="kode_barang" id="kode_barang"></td>
            </tr>
            <tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td>:</td>
                <td><input type="text" name="nama_barang" id="nama_barang"></td>
            </tr>
            <tr>
                <td><label for="gudang">Gudang</label></td>
                <td>:</td>
                <td><select name="kode_gudang">
                        <?php
                            $query = "SELECT * FROM gudang";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<option value='$row[kode_gudang]'>$row[nama_gudang]</option>";
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
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Lokasi Gudang</td>
        </tr>
        <?php
            $query = "SELECT barang.kode_barang, barang.nama_barang, gudang.lokasi FROM barang, gudang WHERE barang.kode_gudang = gudang.kode_gudang";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr>";
                    echo "<td>$row[kode_barang]</td>";
                    echo "<td>$row[nama_barang]</td>";
                    echo "<td>$row[lokasi]</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>