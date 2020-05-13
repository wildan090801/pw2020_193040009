<?php
    // contoh operasi sederhana
    echo (1 + 2) * 3 - 4;
    echo '<hr>';

    // VARIABEL
    // tempat penyimpanan nilai
$nama_depan = 'muhammad';
echo $nama_depan;
echo '<br>';
$nama_depan = 'wildhan';
echo $nama_depan;
echo '<hr>';

$x = 10;
$y = 20;
$z = $x * $y;
echo $z;
echo '<hr>';

// OPERATOR
// Operator Assignment (penugasan)
// =, +=, -= , *=, /=, .= 
$a = 1;
$b = 2;
$a = $b;
echo $a;

$a = 5;
$a *= 10;
echo $a;
echo '<hr>';

// Operator Aritmatika
// +, -, *, /, %
echo 10%3;
echo '<hr>';

// Operator concat (Penggabungan String)
// .
$nama_depan = 'Muhammad';
$nama_belakang = 'Wildhan';
echo $nama_depan . ' ' . $nama_belakang;
echo '<hr>';

$nama = 'muhammad';
$nama .= '';
$nama .= 'wildhan';
echo $nama;
echo '<hr>';

// Standar Output
// '', ""
echo "Assalamu'alaikum";
echo "<hr>";
$salam = "Assalamu'alaikum";
echo 'A : "' .$salam . '"';
echo '<hr>';
echo 'A : "Assalamu\'alaikum"';