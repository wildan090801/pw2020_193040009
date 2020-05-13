<?php
// Array Multidimensi
$angka = [1, 10, [2, 3, 4], 100];
echo $angka[2][1];
echo '<hr>';

$angka2 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
// 1 2 3
// 4 5 6
// 7 8 9
foreach( $angka2 as $baris ) {
    foreach ( $baris as $b ) {
        echo $b;
    }
    
    echo '<br>';

}