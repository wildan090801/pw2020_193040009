<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan querry
    $alat_musik = query("SELECT * FROM alat_musik")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    <style>
        body{
            min-height: 500px;
            font-family:arial;
            background-image: url(assets/img/image.jpg);
        }
        .container{
            width : 40%;
            margin : 100px auto 150px ;
            text-align:center;
        }
        h1{
            color: yellow;
            margin: 2 auto;
        }
        .container p a{
            background-color: lightblue;
            color: red;
            font-size: 25px;
            text-decoration: none;
            padding: auto;
        } 
        .container p a:hover{
            color : yellow;
            font-size: 26px;
            background-color: blue;
        }
    </style> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
</head>
<body>
    <div class="container">
      <h1>Alat Musik</h1>
        <?php foreach($alat_musik as $am): ?>
            <p>
                <a href="php/detail.php?id=<?= $am['id']?>">
                    <?= $am['Alat_musik']?>
                </a>
            </p>

        <?php endforeach; ?>
    </div>                                       
</body>
</html>