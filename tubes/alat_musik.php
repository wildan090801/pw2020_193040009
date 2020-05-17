<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan querry
$alat_musik = query("SELECT * FROM alat_musik");

$alat_musik = query("SELECT * FROM alat_musik ORDER BY Cara_bermain ASC");
if (isset($_POST['cari'])) {
  $alat_musik = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/alat_musik.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/alat_musik.css">

  <link rel="icon" type="image/png" href="assets/img/tittle.jpg">
  <title>NadLiw Music</title>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="assets/img/tittle.jpg" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="">NadLiw ID</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">
        <a class="nav-item active nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
        <form action="" method="POST" class="cari form-inline my-2 my-lg-0 mr-auto">
          <input class="form-control mr-sm-2" type="text" name="keyword" size="30" autofocus placeholder="Search" aria-label="Search" autocomplete="off" class="cari">
          <button type="submit" name="cari" class="btn btn-outline-primary my-2 my-sm-0">Search</button>
        </form>
      </div>

      <div class="navbar-nav ml-auto">
        <a class="nav-link" href="php/registrasi.php"><button type="button" class="btn btn-secondary btn-sm">SIGN UP</button><span class="sr-only">(current)</span></a>
        <a class="nav-link" href="php/login.php"><button type="button" class="btn btn-info btn-sm">SIGN IN</button><span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav><br><br><br><br>
  <div id="home"></div>
  <h3 align="center" class="font">Daftar Alat Musik</h3><br>
  <div class="container">
    <div class="row justify-content-center">
      <?php if (empty($alat_musik)) : ?>
        <div class="card">
          <div class="bg-light">
            <div class="container pb-5 pt-5 mb-5 mt-5 bg-light">
              <div class="card  pb-4 pt-4 mb-5 mt-5">
                <h2 align="center" style="color: blue"> <i><b>Hasil tidak ditemukan</b></i></h2>
              </div>
            </div>
          </div>
        <?php else : ?>
          <?php foreach ($alat_musik as $am) : ?>
            <div class="mr-2 mb-2">
              <div class="card-deck" style="width: 20rem; height: 24rem;">
                <div class="card bg-light">
                  <div class="card-header justify-content-center">
                    <img class="justify-content-center" width="250px" height="250px" src="assets/img/<?= $am['Gambar']; ?>" alt="">
                  </div>
                  <div class="card-body">
                    <a href="php/detail.php?id=<?= $am['id'] ?>" class="btn btn-primary btn-block text-light text-center mr-auto ">
                      <?= $am['Alat_musik']; ?>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>

  </div>

  <footer class="pt-3 pb-2">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
          <p>&copy; 2020 Copyright<a href=""> Muhammad Wildhan</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>