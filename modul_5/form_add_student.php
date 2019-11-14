<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <div class="container">
        <h3 class="display-4">Form Mahasiswa</h3>
        <form action="process_add_student.php" method="POST">
            <div class="form-group col-md-6">
                <label for="inputNIM">NIM</label>
                <input type="text" class="form-control" name="nim" id="inputNIM" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" name="nama" id="inputNama" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputKelas">Kelas</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="kelas" id="kelasA" value="A" class="custom-control-input" checked>
                    <label class="custom-control-label" for="kelasA">A</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="kelas" id="kelasB" value="B" class="custom-control-input">
                    <label class="custom-control-label" for="kelasB">B</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="kelas" id="kelasC" value="C" class="custom-control-input">
                    <label class="custom-control-label" for="kelasC">C</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="inputAlamat" required>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" name="submit">
            <a href="index.php" class="btn btn-light">Cancel</a>
        </form>    
    </div>
</body>
</html>