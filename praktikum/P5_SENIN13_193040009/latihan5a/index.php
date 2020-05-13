<?php 
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    
    // Memilih database
    mysqli_select_db($conn, "tubes_193040009") or die("Database salah!");

    // query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM alat_musik");
    
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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $row['Gambar']; ?>"></td>
                <td><?= $row["Alat_musik"]; ?></td>
                <td><?= $row["Merk"]; ?></td>
                <td><?= $row["Cara_bermain"]; ?></td>
                <td><?= $row["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile ?>
        </table>
    </body>
</html>
