<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $alat_musik = query("SELECT * FROM alat_musik")
?>

<html>
    <head>
        <title>193040009</title>
    </head>
    <style>
        body {
            background-color: lightblue;
        }
        table{
            background-color: blue;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: blue;
        }
    </style>
    <body>
        <h3>Alat Musik</h3>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Alat Musik</th>
                <th>Merk</th>
                <th>Cara Bermain</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($alat_musik as $m) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $m['Gambar']; ?>"></td>
                <td><?= $m["Alat_musik"]; ?></td>
                <td><?= $m["Merk"]; ?></td>
                <td><?= $m["Cara_bermain"]; ?></td>
                <td><?= $m["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </table>
    </body>
</html>
