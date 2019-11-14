<?php
    include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h2 class="display-4">Student Records</h2>
        <p class="lead">
            <a href="form_add_student.php" class="btn btn-success">Add Records</a>
        </p>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th align="center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM mahasiswa ORDER BY nim";
                    $result = mysqli_query($connections, $query);
                    $number = 0;

                    while ($data = mysqli_fetch_array($result)) {
                        # code...
                            $number++;
                            echo "<tr>";
                                echo "<td>$number</td>";
                                echo "<td>$data[nim]</td>";
                                echo "<td>$data[nama]</td>";
                                echo "<td>$data[kelas]</td>";
                                echo "<td>$data[alamat]</td>";
                                echo "<td><a href='update_form.php?nim=$data[nim]' class='btn btn-warning'>Update</a>
                                        <a href='delete.php?nim=$data[nim]' class='btn btn-danger'>Delete</td>";
                            echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>