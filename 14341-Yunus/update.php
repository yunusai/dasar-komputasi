<?php
include "koneksi.php";
$sql = mysqli_query($conn, "Select * from tamu_web where id='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="asset/logo-udinus.png">
    <link rel="stylesheet" href="style/style.css">
    <title>Update Data Tamu</title>
</head>

<body>
    <div class="container card mb-3 mt-1 bg-info text-light">
        <div class="card-header fw-bold">Ubah data kunjunganmu dengan mengisi form dibawah ini</div>
        <div class="card-body">
            <form action="" method="POST">
                <div class=" mb-3">
                    <label for="nama_tamu" class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
                </div>
                <div class="mb-3">
                    <label for="kelamin" class="form-label">Kelamin:</label>
                    <input type="text" class="form-control" id="kelamin" name="kelamin" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan:</label>
                    <input type="text" class="form-control" id="pesan" name="pesan" required>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <footer align="center">
        <p>Copyright &copy; Muhammad Yunus Saifullah</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php

if (isset($_POST['submit'])) {

    mysqli_query($conn, "update tamu_web set
    nama_tamu = '$_POST[nama_tamu]',
    kelamin = '$_POST[kelamin]',
    email = '$_POST[email]',
    pesan = '$_POST[pesan]' where id='$_GET[id]'") or die(mysqli_error($conn));

    echo "<script>document.location='daftar-tamu.php'</script>";
}

?>