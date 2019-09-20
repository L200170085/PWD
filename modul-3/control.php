<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control</title>
</head>
<body>
    <h1>Grade</h1>
    <form action="control.php" method="POST">
        <p>Masukkan Nilai Angka (0 - 100) : <input type="text" name="nilai" id="nilai" size="3"></p>
        <input type="submit" value="Proces" name="submit">

        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $nilai = $_POST['nilai'];
            $submit = $_POST['submit'];

            if ($submit) {
                # jika tombol submit di klik
                if ($nilai == "") {
                    # variable nilai nya kosong
                    $huruf = "Nilai kosong/belum diisi!";
                } elseif ($nilai <= 20) {
                    # jika nilai lebih kecil atau sama dengan 20 maka mendapat grade E
                    $huruf = "E";
                } elseif ($nilai <= 40){
                    # jika nilai lebih kecil atau sama dengan 40 maka mendapat grade D
                    $huruf = "D";
                } elseif ($nilai <= 60) {
                    # jika nilai lebih kecil atau sama dengan 60 maka mendapat grade C
                    $huruf = "C";
                } elseif ($nilai <= 80) {
                    # jika nilai lebih kecil atau sama dengan 80 maka mendapat grade B
                    $huruf = "B";
                } elseif ($nilai <=  100) {
                    # ika nilai lebih kecil atau sama dengan 100 maka mendapat grade A
                    $huruf = "A";
                } else{
                    # jika nilai yang diinput kan selain angka yang sudah ditetapkan
                    $huruf = "Nilai yang anda masukkan tidak normal.";
                } 
                echo ("Nilai angka adalah $nilai<br>");
                echo ("Maka nilai huruf adalah $huruf");
            }
        ?>
    </form>
</body>
</html>