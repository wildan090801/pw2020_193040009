<?php
  $jawabanIsset = "Isset adalah = digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false <br><br>";
  $jawabanEmpty = "Empty adalah = digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";
  $GLOBALS['isset'] = $jawabanIsset;
  $GLOBALS['empty'] = $jawabanEmpty;

  function soal($style){
    echo '<div style="'. $style .'">';
    echo $GLOBALS['isset'];
    echo $GLOBALS['empty'];
    echo '</div>';
  }
  $style = "font-family:Arial;
            border: solid black 1px;
            padding: 15px;  
            margin-bottom: 15px;
          ";
  soal($style);

  $nadliw = "Wildhan";

  echo '<div style="'. $style .'"> Contoh pengunaan dengan variable yang sama : <br><br>';
  echo 'isset() = ';
  var_dump( isset($nadliw) );
  echo '<br>empty() = ';
  var_dump( empty($nadliw) );
  echo '</div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040009</title>
</head>
<body>
<br><br><a href="index.php">Menu</a>
  
</body>
</html>
