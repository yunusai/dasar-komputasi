<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="asset/logo-udinus.png">
    <title>Daftar Tamu</title>
</head>

<body>
    <?php
    require_once("koneksi.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM tamu_web WHERE id = $id");
    }
    ?>
    <header>
        <h1 align="center">Website Blog Saya</h1>
    </header>

    <hr />
    <nav class="topnav">
        <table align="center">
            <tr>
                <td>
                    <a href="index.html">Beranda</a>
                </td>
                <td>
                    <a href="profil.html">Profil</a>
                </td>
                <td>
                    <a href="artikel.html">Artikel</a>
                </td>
                <td>
                    <a href="registrasi-tamu.php">Registrasi Tamu</a>
                </td>
                <td>
                    <a href="daftar-tamu.php">Daftar Tamu</a>
                </td>
                <td>
                    <a href="bendera.html">Bendera Negara</a>
                </td>
            </tr>
        </table>
    </nav>
    <hr />

    <div class="container">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $queryShow = "SELECT * FROM tamu_web ORDER BY id ASC"; // menampilkan data
                $show = mysqli_query($conn, $queryShow);

                if (mysqli_num_rows($show) > 0) {
                    $number = 1;
                    while ($data = mysqli_fetch_assoc($show)) {

                ?>
                        <tr>
                            <td class="number"><?= $number; ?></td>
                            <td><?= $data["nama_tamu"]; ?></td>
                            <td><?= $data["kelamin"]; ?></td>
                            <td><?= $data["email"]; ?></td>
                            <td><?= $data["pesan"]; ?></td>
                            <td class="action">
                                <a href="update.php?id=<?php echo $data["id"] ?>" class="btn btn-primary">Edit</a>
                                <a href="daftar-tamu.php?id=<?php echo $data["id"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                        $number++;
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6">No Data Found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <footer align="center">
        <p>Copyright &copy; Muhammad Yunus Saifullah</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>