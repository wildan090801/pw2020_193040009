<?php
function hitungDeterminan($p1, $p2, $p3, $p4) {
    
    // baris code perhitung determinan
    $determinan = (($p1 * $p4) - ($p2 * $p3));

    // menampilkan matriks
    echo "<table style='border-left: solid black 2px; border-right: solid black 2px;' cellspacing='5' cellpadding='5'>
            <tr>
                <td> $p1 </td>
                <td> $p2 </td>
            </tr>
            <tr>
                <td> $p3 </td>
                <td> $p4 </td>
            </tr>
        </table>";
    echo "<h3>Determinan dari matriks tersebut adalah $determinan </h3>"; // menampilkan teks dibawah matriks

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040009</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4) ?> <!-- Memanggil function hitungDeterminan -->
    <br><br><a href="index.php">Menu</a>
</body>
</html>