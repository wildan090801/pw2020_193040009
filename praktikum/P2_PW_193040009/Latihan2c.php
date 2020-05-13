<?php
$a = 1;
$b = 2;
$c = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2c</title>
    <style>
    .bulat {
        width: 50px;
        height: 50px;
        border: 2px solid #000;
        text-align: center;
        line-height: 50px;
        margin: 5px;
        float: left;
        border-radius: 100px;
        background: salmon;
    }

    .clear {
        clear: both;
    }
    </style>
</head>
<body>
<div class ="bulat"><?php echo $a?></div>
<div class = "clear"></div>

<div class ="bulat"><?php echo $b?></div>
<div class ="bulat"><?php echo $b?></div>
<div class = "clear"></div>

<div class ="bulat"><?php echo $c?></div>
<div class ="bulat"><?php echo $c?></div>
<div class ="bulat"><?php echo $c?></div>
<div class = "clear"></div>

<br><a href="index.php">Menu</a>
</body>
</html>