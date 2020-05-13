<?php

// A : Diatas 85
// B : 70 - 85
// C : 60 - 70
// D : 40 - 60
// E : Dibawah 40

$nilai = 75;
if ($nilai >= 85) {
    echo "A";
} else if($nilai >= 70){
    echo "B";
}else if($nilai >= 60) {
    echo "C";
}else if($nilai >= 40) {
    echo "D";
} else {
    echo "E";
}


