<?php

//   for($no_angkot = 1; $no_angkot <= 10; $no_angkot++){
//     if ($no_angkot < 7) {
//     if($no_angkot == 5) {
//         echo "Angkot No. $no_angkot Sedang Lembur!<br>";
//     }
//         echo "Angkot No. $no_angkot beroperasi dengan baik!<br>";
//     }
//     else if ($no_angkot == 8 || $no_angkot == 10 ) {
//         echo "Angkot No. $no_angkot Sedang Lembur!<br>";
//     }
//     else {
//     echo "Angkot No. $no_angkot sedang tidak beroperasi!<br>";
//     }
//   }

for($no_angkot = 1; $no_angkot <= 10; $no_angkot++){
    if ($no_angkot < 7 && $no_angkot !=5 ) {
        echo "Angkot No. $no_angkot beroperasi dengan baik!<br>";
    }
    else if ($no_angkot == 8 || $no_angkot == 10 || $no_angkot == 5 ) {
        echo "Angkot No. $no_angkot Sedang Lembur!<br>";
    }
    else {
    echo "Angkot No. $no_angkot sedang tidak beroperasi!<br>";
    }
}