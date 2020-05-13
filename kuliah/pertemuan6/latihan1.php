<?php
// array cara lama
$mhs = array('Muhammad', 'Wildhan', 'Kusuma', 'Wardana');
// array cara baru
$angka = [1, 10, -20, 3000];
$myArr = [10, 'Pemrograman Web', false];

// Mencetak Array
echo $mhs[2];
echo '<br>';
echo $myArr[1];
echo '<hr>';

//Mencetak seluruh isi Array
for ($i = 0; $i < count($mhs); $i++){
    echo $mhs[$i];
    echo '<br>';
}
echo '<br>';
// Mencetak menggunakan foreach
foreach( $mhs as $m ){
    echo $m;
    echo '<br>';
}

echo '<hr>';

// mencetak untuk debugging
// var_dump() / print_r();
var_dump($mhs);
echo '<hr>';
print_r($myArr);

