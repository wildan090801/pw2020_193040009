<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan querry
$alat_musik = query("SELECT * FROM alat_musik")
?>
<?php if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $alat_musik = query(
        "SELECT * FROM alat_musik WHERE
          Alat_musik LIKE '%$keyword%' "
    );
} else {
    $alat_musik = query("SELECT * FROM alat_musik");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            min-height: 500px;
            font-family: arial;
            background-image: url(assets/img/image.jpg);
        }

        .container {
            width: 40%;
            margin: 100px auto 150px;
            text-align: center;
        }

        h1 {
            color: yellow;
            margin: 2 auto;
        }

        .container p a {
            background-color: lightblue;
            color: red;
            font-size: 25px;
            text-decoration: none;
            padding: auto;
        }

        .container p a:hover {
            color: yellow;
            font-size: 26px;
            background-color: blue;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="keyword" size="25" autofocus placeholder="Masukan keyword yang anda cari" autocomplete="off">
        <button type="submit" name="cari">Cari!</button><br><br>
    </form>
    <a href="php/login.php">
        <button type="">Masuk ke halaman Admin</button>
    </a>
    <div class="container">
        <h1>Alat Musik</h1>
        <?php if (empty($alat_musik)) : ?>
            <h1>Data tidak ditemukan</h1>
        <?php else : ?>
            <?php foreach ($alat_musik as $am) : ?>
                <p>
                    <a href="php/detail.php?id=<?= $am['id'] ?>">
                        <?= $am['Alat_musik'] ?>
                    </a>
                </p>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>

</html>