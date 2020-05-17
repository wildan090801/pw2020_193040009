<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--My CSS -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" type="image/png" href="assets/img/tittle.jpg">
  <title>NadLiw Music</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="assets/img/tittle.jpg" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" href="#">NadLiw ID</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">
        <a class="nav-item active nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item active nav-link" href="#alatmusik">Alat Musik <span class="sr-only">(current)</span></a>
        <a class="nav-item active nav-link" href="#cek">Cek Alat Musik <span class="sr-only">(current)</span></a>
      </div>


      <div class="navbar-nav ml-auto">
        <a class="nav-link" href="php/registrasi.php"><button type="button" class="btn btn-secondary btn-sm">SIGN UP</button><span class="sr-only">(current)</span></a>
        <a class="nav-link" href="php/login.php"><button type="button" class="btn btn-info btn-sm">SIGN IN</button><span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav><br>

  <!--Jumbotron-->
  <div class="jumbotron jumbotron-fluid" id="home">
    <div class="container">
      <h1 class="display-4">NadLiw Music</h1>
      <p class="lead">Website mengenai seputar beragam informasi Alat musik dari seluruh dunia.</p>
    </div>
    <div id="alatmusik">
    </div>
  </div>

  <div class="alatmusik">
    <p> Alat Musik </p>
  </div>
  <div class="keterangan">
    <p>Pilih Alat musik yang di inginkan untuk melihat detail informasi seputar alat musik tersebut</p>
  </div><br><br>

  <!--Isi-->
  <div class="container scrollspy">
    <div class="row justify-content-center pt-4 ">
      <div class="bungkus mr-5">
        <div class="card-deck mb-5" style="width: 20rem;">
          <div class="card bg-light">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img1.png" alt="Gitar">
            </div>
            <div class="card-body">
              <a href="" class="btn btn-primary btn-block text-light text-center mr-auto ">
                Gitar
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bungkus mr-5">
        <div class="card-deck mb-5" style="width: 20rem;">
          <div class="card bg-light">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img2.png" alt="Bass">
            </div>
            <div class="card-body">
              <a href="" class="btn btn-primary btn-block text-light text-center mr-auto ">
                Bass
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bungkus mr-5">
        <div class="card-deck mb-5" style="width: 20rem;">
          <div class="card bg-light">
            <div class="card-header justify-content-center">
              <img class="justify-content-center" width="250" src="assets/img/img3.png" alt="Biola">
            </div>
            <div class="card-body">
              <a href="" class="btn btn-primary btn-block text-light text-center mr-auto ">
                Biola
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>
    <div class="row justify-content-center mb-1 pb-1" id="cek">
      <a href="alat_musik.php" class="btn btn-info" style="margin-top: -20px">Cek Semua Alat Musik</a>
    </div>
  </div><br>
  <!-- footer -->
  <footer class="pt-3 pb-2">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
          <p>&copy; 2020 Copyright<a href=""> Muhammad Wildhan</a></p>
        </div>
      </div>
    </div>
  </footer>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>