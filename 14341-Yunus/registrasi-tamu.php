<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" type="image/png" href="asset/logo-udinus.png">
  <title>Registrasi Tamu</title>
</head>

<body>
  <?php
  require_once("koneksi.php");

  if (isset($_POST["submit"])) {
    $nama_tamu = $_POST["nama_tamu"];
    $kelamin = $_POST["kelamin"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    $queryCreated = "INSERT INTO tamu_web(nama_tamu, kelamin, email, pesan) VALUES ('$nama_tamu', '$kelamin', '$email', '$pesan')";

    $created = mysqli_query($conn, $queryCreated);
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
          <a href="index.html">Beranda</a> <a href="profil.html">Profil</a>
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

  <section>
    <div class="container card mb-3 mt-1 bg-black text-light">
      <div class="card-header fw-bold">Daftarkan kunjunganmu dengan mengisi form dibawah ini</div>
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
          <button type="submit" name="submit" id="submit" class="btn btn-info">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <footer align="center" class="bg-dark">
    <p>Copyright &copy; Muhammad Yunus Saifullah</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>