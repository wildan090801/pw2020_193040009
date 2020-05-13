<?php
$clubbola = [
    [
        "Nama" => "Cristiano Ronaldo",
        "Club" => "Juventus",
        "Main" => 100,
        "Goal" => 76,
        "Asist" => 30
    ],
    [
        "Nama" => "Lionel Messi",
        "Club" => "Barcelona",
        "Main" => 120,
        "Goal" => 80,
        "Asist" => 12
    ],
    [
        
        "Nama" => "Luca Modric",
        "Club" => "Real Madrid",
        "Main" => 87,
        "Goal" => 12,
        "Asist" => 48
    ],
    [
        
        "Nama" => "Mohammad Salah",
        "Club" => "Liverpool",
        "Main" => 90,
        "Goal" => 103,
        "Asist" => 8
    ],
    [
        
        "Nama" => "Neymar jr",
        "Club" => "Paris saint Germain",
        "Main" => 109,
        "Goal" => 56,
        "Asist" => 15
    ],
    [
        
        "Nama" => "Sadio Mane",
        "Club" => "Liverpool",
        "Main" => 63,
        "Goal" => 30,
        "Asist" => 70
    ],
    [
        
        "Nama" => "Zlatan Ibrahimovic",
        "Club" => "Ac Milan",
        "Main" => 100,
        "Goal" => 10,
        "Asist" => 12
    ],
];
?>

<html>
    <head>
        <title>193040009</title>
    </head>
    <body>
        <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Main</th>
            <th>Goal</th>
            <th>Asist</ht>
        </tr>
        <?php $i = 1; ?>
    <?php foreach ($clubbola as $p) :?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $p['Nama']; ?></td>
            <td><?php echo $p['Club']; ?></td>
            <td><?php echo $p['Main']; ?></td>
            <td><?php echo $p['Goal']; ?></td>
            <td><?php echo $p['Asist']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    <tr>
                <td><b>#</b></td>
                <td colspan="2" align="center"><b>Jumlah</b></td>
                <?php 
                $sum = 0;
                foreach ($clubbola as $p) {
                    $sum += $p["Main"];}
                ?>
                <td><?= $sum;?></td>
                <?php 
                $sum2 = 0;
                foreach ($clubbola as $p) {
                    $sum2 += $p["Goal"]; }
                ?>
                <td><?= $sum2 ?></td>
                <?php 
                $sum2 = 0;
                foreach ($clubbola as $p) {
                    $sum2 += $p["Asist"]; }
                ?>
                <td><?= $sum2 ?></td>
            </tr>

    </table>
    <br><a href="index.php">Menu</a>
    </body>
</html>