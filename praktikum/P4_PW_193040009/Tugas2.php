<?php 
$alatmusik = [
    [
        "foto" => "Optimized-gitar.jpg",
        "alat musik" => "Gitar",
        "merk" => "Yamaha",
        "cara bermain" => "Dipetik",
        "harga" => "Rp.850.000"
    ],
    [
        "foto" => "Optimized-bass.jpg",
        "alat musik" => "Bass",
        "merk" => "Ibanez",
        "cara bermain" => "Dipetik",
        "harga" => "Rp.3.450.000"
    ],
    [
        "foto" => "Optimized-drum.jpg",
        "alat musik" => "Drum",
        "merk" => "Yamaha",
        "cara bermain" => "Dipukul",
        "harga" => "Rp. 11.350.000"
    ],
    [
        "foto" => "Optimized-biola-min.jpg",
        "alat musik" => "Biola",
        "merk" => "Yamaha",
        "cara bermain" => "Digesek",
        "harga" => "Rp.9.000.000"
    ],
    [
        "foto" => "Optimized-piano.jpg",
        "alat musik" => "Piano",
        "merk" => "Yamaha",
        "cara bermain" => "Menekan tuts",
        "harga" => "Rp.9.900.000"
    
    ],
    [
        "foto" => "Optimized-saxophone.jpg",
        "alat musik" => "Saxophone",
        "merk" => "Yamaha",
        "cara bermain" => "Ditiup",
        "harga" => "Rp.13.800.000"
    ],
    [
        "foto" => "Optimized-harmonika.jpg",
        "alat musik" => "Harmonika",
        "merk" => "Suzuki Folkmaster",
        "cara bermain" => "Ditiup",
        "harga" => "Rp.150.000"
    ],
    [
        "foto" => "Optimized-terompet.jpg",
        "alat musik" => "Terompet",
        "merk" => "Yamaha",
        "cara bermain" => "Ditiup",
        "harga" => "Rp.7.850.000"
    ],
    [
        "foto" => "Optimized-keyboard.jpg",
        "alat musik" => "Keyboard",
        "merk" => "Yamaha",
        "cara bermain" => "Menekan tuts",
        "harga" => "Rp.8.400.000"
    ],
    [
        "foto" => "Optimized-pianika.jpg",
        "alat musik" => "Pianika",
        "merk" => "Yamaha",
        "cara bermain" => "ditiup dan menekan tuts",
        "harga" => "Rp.330.000"
    ],
    
];
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
                <th>Gambar</th>
                <th>Alat Musik</th>
                <th>Merk</th>
                <th>Cara Bermain</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($alatmusik as $m) { ?>
            <tr>
                <td><img src="img/<?= $m['foto']; ?>"></td>
                <td><?= $m["alat musik"]; ?></td>
                <td><?= $m["merk"]; ?></td>
                <td><?= $m["cara bermain"]; ?></td>
                <td><?= $m["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
        <br><a href="index.php">Menu</a>
    </body>
</html>
