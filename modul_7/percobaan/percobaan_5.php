<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Percobaan 5</title>
</head>
<body>
    <h2><marquee behavior="" direction="">Free Registration</marquee></h2>
    <form action="proses.php" method="post">
        <table width="68%" align="center" cellpadding="0">
            <tr>
                <td class="td" width="15%"><label for="nama">Nama</label></td>
                <td width="2%">:</td>
                <td width="83%"><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td class="td"><label for="tgl_lahir">Tanggal Lahir</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="tangal" id="tgl_lahir" size="4" maxlength="2">/
                    <input type="text" name="bulan" id="tgl_lahir" size="4" maxlength="2">/
                    <input type="text" name="tahun" id="tgl_lahir" size="8" maxlength="4">
                </td>
            </tr>
            <tr>
                <td class="td"><label for="alamat">Alamat</label></td>
                <td>&nbsp;</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td class="td"><label for="kota">Kota</label></td>
                <td>:</td>
                <td><input type="text" name="kota" id="kota"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <button type="submit" name="submit">Kirim</button>
                    <button type="reset" name="reset">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>